(function ($) {
	'use strict';

	var BASE = 20;
	var FALLBACK = { eurToByn: 3.65, usdToByn: 3.25 };
	var rates = { eur: null, byn: null, usd: null };

	var LABEL = { starter: 18, pro: 20, unlimited: 22 };
	var ARTIST = { epOff: 4, albumOff: 6, vinylMul: 1.5 };

	function parseOfficialRate(raw) {
		if (raw === undefined || raw === null) return NaN;
		if (typeof raw === 'number') return raw;
		if (typeof raw === 'string') {
			try {
				var parsed = JSON.parse(raw);
				if (typeof parsed === 'number' && isFinite(parsed)) return parsed;
			} catch (e) { /* ignore */ }
			return parseFloat(raw.replace(',', '.'));
		}
		return NaN;
	}

	function getRateFromResponse(data) {
		var payload = typeof data === 'string' ? JSON.parse(data) : data;
		return parseOfficialRate(payload && payload.Cur_OfficialRate);
	}

	function setPrice(id, value) {
		var num = Number(value);
		if (!isFinite(num)) return false;
		var el = document.getElementById(id);
		if (!el) {
			console.warn('[pricer] not found:', id);
			return false;
		}
		el.textContent = String(num);
		if (el.getAttribute('itemprop') === 'price') {
			el.setAttribute('content', String(num));
		}
		return true;
	}

	function setLabelPrices(cur, unit) {
		setPrice('for_labels_' + cur + '_starter', Math.ceil(unit * LABEL.starter));
		setPrice('for_labels_' + cur + '_pro', Math.ceil(unit * LABEL.pro));
		setPrice('for_labels_' + cur + '_unlimited', Math.ceil(unit * LABEL.unlimited));
	}

	function setArtistPrices(cur, base) {
		var b = Number(base);
		if (!isFinite(b)) return;

		setPrice('for_artists_' + cur + '_single', b);
		setPrice('for_artists_' + cur + '_ep', Math.ceil(b - ARTIST.epOff));
		setPrice('for_artists_' + cur + '_album', Math.ceil(b - ARTIST.albumOff));
		setPrice('for_artists_' + cur + '_vinyl', Math.ceil(b * ARTIST.vinylMul));
		setPrice('for_artists_' + cur + '_revision', Math.ceil((b - 7) / 2));
	}

	function applyEur() {
		setLabelPrices('eur', BASE);
		setArtistPrices('eur', BASE);
	}

	function applyByn() {
		if (!isFinite(rates.byn)) return;
		setLabelPrices('byn', rates.byn);
		setArtistPrices('byn', rates.byn);
	}

	function applyUsd() {
		if (!isFinite(rates.byn) || !isFinite(rates.usd)) return;
		var unit = Math.ceil(rates.byn / rates.usd);
		var ratio = rates.byn / rates.usd;
		setPrice('for_labels_usd_starter', Math.ceil(ratio * LABEL.starter));
		setPrice('for_labels_usd_pro', Math.ceil(ratio * LABEL.pro));
		setPrice('for_labels_usd_unlimited', Math.ceil(ratio * LABEL.unlimited));
		setArtistPrices('usd', unit);
	}

	function applyAll() {
		applyEur();
		applyByn();
		applyUsd();
	}

	function fetchRate(currency, ok, err) {
		$.ajax({
			method: 'GET',
			url: 'https://www.nbrb.by/api/exrates/rates/' + currency + '?parammode=2',
			dataType: 'json',
			cache: false,
			timeout: 15000,
			success: function (data) {
				var rate = getRateFromResponse(data);
				if (!isFinite(rate)) {
					err('Invalid rate: ' + currency);
					return;
				}
				ok(rate);
			},
			error: function () {
				err('Request failed: ' + currency);
			}
		});
	}

	function updateAll() {
		applyEur();
		rates.byn = Math.ceil(BASE * FALLBACK.eurToByn);
		rates.usd = FALLBACK.usdToByn;
		applyByn();
		applyUsd();

		fetchRate('eur', function (eurRate) {
			rates.eur = eurRate;
			rates.byn = Math.ceil(BASE * eurRate);
			applyByn();

			fetchRate('usd', function (usdRate) {
				rates.usd = usdRate;
				applyUsd();
				$(document).trigger('pricesUpdated');
			}, function (e) {
				console.error('[pricer]', e);
			});
		}, function (e) {
			console.error('[pricer]', e);
		});
	}

	window.SledgerPricer = { refresh: applyAll, update: updateAll };

	$(function () { updateAll(); });
	$(document).on('tabChanged', applyAll);

})(jQuery);
