<?php

// Keep in sync with js/pricer.js (BASE, LABEL, ARTIST).
define('PRICING_BASE_EUR', 20);
define('PRICING_LABEL_STARTER', 18);
define('PRICING_LABEL_PRO', 20);
define('PRICING_LABEL_UNLIMITED', 22);
define('PRICING_ARTIST_EP_OFF', 4);
define('PRICING_ARTIST_ALBUM_OFF', 6);
define('PRICING_ARTIST_VINYL_MUL', 1.5);

function pricing_site_url() {
	$host = $_SERVER['HTTP_HOST'] ?? 'sledgermastering.pro';
	$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	if (strpos($host, 'sledgermastering.pro') !== false) {
		$scheme = 'https';
	}
	return $scheme . '://' . $host;
}

function pricing_eur_amounts() {
	$base = PRICING_BASE_EUR;
	return [
		'labels' => [
			'starter' => (int) ceil($base * PRICING_LABEL_STARTER),
			'pro' => (int) ceil($base * PRICING_LABEL_PRO),
			'unlimited' => (int) ceil($base * PRICING_LABEL_UNLIMITED),
		],
		'artists' => [
			'single' => (int) $base,
			'ep' => (int) ceil($base - PRICING_ARTIST_EP_OFF),
			'album' => (int) ceil($base - PRICING_ARTIST_ALBUM_OFF),
			'vinyl' => (int) ceil($base * PRICING_ARTIST_VINYL_MUL),
			'revision' => (int) ceil(($base - 7) / 2),
		],
	];
}

function pricing_schema_offers($siteUrl, $amounts) {
	$labels = $amounts['labels'];
	$artists = $amounts['artists'];

	return [
		[
			'@type' => 'Offer',
			'name' => 'Label mastering — Starter',
			'description' => 'Up to 8 tracks per month, 2 free revisions',
			'price' => (string) $labels['starter'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $labels['starter'],
				'priceCurrency' => 'EUR',
				'billingDuration' => 'P1M',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'MONTH',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Label mastering — Pro',
			'description' => '9–20 tracks per month, 4 free revisions',
			'price' => (string) $labels['pro'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $labels['pro'],
				'priceCurrency' => 'EUR',
				'billingDuration' => 'P1M',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'MONTH',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Label mastering — Unlimited',
			'description' => 'Unlimited tracks per month, priority turnaround',
			'price' => (string) $labels['unlimited'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $labels['unlimited'],
				'priceCurrency' => 'EUR',
				'billingDuration' => 'P1M',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'MONTH',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Artist mastering — single track',
			'description' => 'Standard mastering per track, 1 free revision included',
			'price' => (string) $artists['single'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $artists['single'],
				'priceCurrency' => 'EUR',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'TRACK',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Artist mastering — EP (5–10 tracks)',
			'price' => (string) $artists['ep'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $artists['ep'],
				'priceCurrency' => 'EUR',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'TRACK',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Artist mastering — album (11+ tracks)',
			'price' => (string) $artists['album'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $artists['album'],
				'priceCurrency' => 'EUR',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'TRACK',
				],
			],
		],
		[
			'@type' => 'Offer',
			'name' => 'Artist mastering — vinyl / tape',
			'price' => (string) $artists['vinyl'],
			'priceCurrency' => 'EUR',
			'url' => $siteUrl . '/#prices',
			'priceSpecification' => [
				'@type' => 'UnitPriceSpecification',
				'price' => (string) $artists['vinyl'],
				'priceCurrency' => 'EUR',
				'referenceQuantity' => [
					'@type' => 'QuantitativeValue',
					'unitText' => 'TRACK',
				],
			],
		],
	];
}

function pricing_schema_graph($siteUrl) {
	$amounts = pricing_eur_amounts();
	$offers = pricing_schema_offers($siteUrl, $amounts);
	$low = min(array_map('intval', array_column($offers, 'price')));
	$high = max(array_map('intval', array_column($offers, 'price')));

	return [
		'@context' => 'https://schema.org',
		'@graph' => [
			[
				'@type' => 'Organization',
				'@id' => $siteUrl . '/#organization',
				'name' => 'Sledger Mastering',
				'url' => $siteUrl . '/',
				'sameAs' => [
					'https://fb.com/sledgermastering',
					'https://www.youtube.com/@sledgermastering2015',
					'https://www.soundcloud.com/sledgermastering',
					'https://www.instagram.com/sledger.music',
				],
			],
			[
				'@type' => 'Service',
				'@id' => $siteUrl . '/#mastering-service',
				'name' => 'Professional Audio Mastering',
				'serviceType' => 'Audio mastering',
				'description' => 'Online mastering and STEM-mastering for labels, distributors and artists. Flexible pricing, free demo, free revisions.',
				'provider' => ['@id' => $siteUrl . '/#organization'],
				'areaServed' => 'Worldwide',
				'url' => $siteUrl . '/#prices',
				'offers' => [
					'@type' => 'AggregateOffer',
					'priceCurrency' => 'EUR',
					'lowPrice' => (string) $low,
					'highPrice' => (string) $high,
					'offerCount' => (string) count($offers),
					'offers' => $offers,
				],
			],
		],
	];
}
