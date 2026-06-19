(function () {
	'use strict';

	function activateTab(buttons, activeButton) {
		for (var i = 0; i < buttons.length; i++) {
			buttons[i].classList.remove('active');
		}
		if (activeButton) {
			activeButton.classList.add('active');
		}
	}

	function activatePanel(panels, activePanelId) {
		for (var i = 0; i < panels.length; i++) {
			panels[i].classList.remove('active');
		}
		var panel = document.getElementById(activePanelId);
		if (panel) {
			panel.classList.add('active');
		}
	}

	function resetCurrencyTabs(containerId, tabType, defaultPanelId) {
		var container = document.getElementById(containerId);
		if (!container) {
			return;
		}

		var panels = container.getElementsByClassName(
			tabType === 'cur' ? 'tabcontent_cur' : 'tabcontent_artcur'
		);
		var buttons = container.querySelectorAll('.tab-btn[data-tab-type="' + tabType + '"]');
		var defaultButton = container.querySelector(
			'.tab-btn[data-tab-type="' + tabType + '"][onclick*="' + defaultPanelId + '"]'
		);

		activateTab(buttons, defaultButton);
		activatePanel(panels, defaultPanelId);
	}

	function triggerPriceRefresh() {
		if (window.SledgerPricer && typeof window.SledgerPricer.refresh === 'function') {
			window.SledgerPricer.refresh();
		} else if (window.jQuery) {
			jQuery(document).trigger('tabChanged');
		}
	}

	function openPrice(evt, priceName) {
		var tabcontent = document.getElementsByClassName('tabcontent');
		var tablinks = document.querySelectorAll(
			'#prices > .container > .pricing-tabs:first-of-type .tab-btn[data-tab-type="main"]'
		);

		for (var i = 0; i < tabcontent.length; i++) {
			tabcontent[i].classList.remove('active');
		}
		activateTab(tablinks, evt.currentTarget);
		activatePanel(tabcontent, priceName);

		if (priceName === 'for_labels') {
			resetCurrencyTabs('for_labels', 'cur', 'for_labels_eur');
		}

		if (priceName === 'for_artists') {
			resetCurrencyTabs('for_artists', 'art-cur', 'for_artists_eur');
		}

		triggerPriceRefresh();
	}

	function openPriceCur(evt, curDivName) {
		var parent = document.getElementById('for_labels');
		if (!parent) {
			return;
		}

		var tabcontent = parent.getElementsByClassName('tabcontent_cur');
		var tablinks = parent.querySelectorAll('.tab-btn[data-tab-type="cur"]');

		activateTab(tablinks, evt.currentTarget);
		activatePanel(tabcontent, curDivName);

		var flb = document.getElementById('flb');
		if (flb) {
			flb.classList.add('active');
		}

		triggerPriceRefresh();
	}

	function openPriceArtCur(evt, curDivArtistsName) {
		var parent = document.getElementById('for_artists');
		if (!parent) {
			return;
		}

		var tabcontent = parent.getElementsByClassName('tabcontent_artcur');
		var tablinks = parent.querySelectorAll('.tab-btn[data-tab-type="art-cur"]');

		activateTab(tablinks, evt.currentTarget);
		activatePanel(tabcontent, curDivArtistsName);

		var fab = document.getElementById('fab');
		if (fab) {
			fab.classList.add('active');
		}

		triggerPriceRefresh();
	}

	window.openPrice = openPrice;
	window.openPriceCur = openPriceCur;
	window.openPriceArtCur = openPriceArtCur;

})();
