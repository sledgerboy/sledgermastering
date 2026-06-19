<?php
require_once __DIR__ . '/pricing-data.php';

$currencies = [
	['code' => 'eur', 'sign' => '€'],
	['code' => 'usd', 'sign' => '$'],
	['code' => 'byn', 'sign' => 'Br'],
];

$eurPrices = pricing_eur_amounts();
$labelPlans = [
	'starter' => [
		'title' => 'Starter',
		'description' => 'Up to 8 tracks per month, 2 free revisions',
		'features' => ['<strong>Up to 8</strong> tracks / month', '<strong>2</strong> free revisions'],
		'small' => 'Small labels, singles &amp; mini-releases.',
	],
	'pro' => [
		'title' => 'Pro',
		'description' => '9–20 tracks per month, 4 free revisions',
		'features' => ['<strong>9–20</strong> tracks / month', '<strong>4</strong> free revisions'],
		'small' => 'Medium labels with steady output.',
		'promote' => true,
	],
	'unlimited' => [
		'title' => 'Unlimited',
		'description' => 'Unlimited tracks per month, priority turnaround',
		'features' => ['<strong>Unlimited</strong> tracks / month', '<strong>Priority</strong> turnaround'],
		'small' => 'Large labels &amp; distributors.',
	],
];

$artistPlans = [
	'single' => 'Single track',
	'ep' => 'EP · 5–10 tracks',
	'album' => 'Album · 11+ tracks',
	'vinyl' => 'Vinyl / Tape',
];
?>
<!-- Prices -->
<section class="section" id="prices" itemscope itemtype="https://schema.org/Service">
	<meta itemprop="name" content="Professional Audio Mastering">
	<meta itemprop="serviceType" content="Audio mastering">
	<link itemprop="url" href="#prices">
	<link itemprop="provider" href="<?= htmlspecialchars(pricing_site_url(), ENT_QUOTES, 'UTF-8') ?>/#organization">
	<div class="container">
		<p class="section-label">Pricing</p>
		<h2 class="section-title">Mastering prices</h2>

		<div class="pricing-tabs">
			<button type="button" id="flb" class="tab-btn active" data-tab-type="main" onclick="openPrice(event, 'for_labels')">For labels</button>
			<button type="button" id="fab" class="tab-btn" data-tab-type="main" onclick="openPrice(event, 'for_artists')">For artists</button>
		</div>

		<div id="for_labels" class="tabcontent active">
			<div class="pricing-tabs">
				<?php foreach ($currencies as $i => $c): ?>
				<button type="button" class="tab-btn<?= $i === 0 ? ' active' : '' ?>" data-tab-type="cur" onclick="openPriceCur(event, 'for_labels_<?= $c['code'] ?>')"><?= strtoupper($c['code']) ?></button>
				<?php endforeach; ?>
			</div>

			<?php foreach ($currencies as $i => $c): ?>
			<?php $isEur = $c['code'] === 'eur'; ?>
			<div id="for_labels_<?= $c['code'] ?>" class="tabcontent_cur<?= $i === 0 ? ' active' : '' ?>">
				<div class="pricing-grid pricing-grid--3">
					<?php foreach ($labelPlans as $key => $plan): ?>
					<div class="pricing-card<?= !empty($plan['promote']) ? ' promote' : '' ?>"<?= $isEur ? ' itemprop="offers" itemscope itemtype="https://schema.org/Offer"' : '' ?>>
						<?php if ($isEur): ?>
						<meta itemprop="name" content="Label mastering — <?= htmlspecialchars($plan['title'], ENT_QUOTES, 'UTF-8') ?>">
						<meta itemprop="description" content="<?= htmlspecialchars($plan['description'], ENT_QUOTES, 'UTF-8') ?>">
						<meta itemprop="priceCurrency" content="EUR">
						<link itemprop="url" href="#prices">
						<?php endif; ?>
						<?php if (!empty($plan['promote'])): ?>
						<div class="pricing-badge">Popular</div>
						<?php endif; ?>
						<h3><?= htmlspecialchars($plan['title'], ENT_QUOTES, 'UTF-8') ?></h3>
						<div class="pricing-price">
							<span id="for_labels_<?= $c['code'] ?>_<?= $key ?>"<?= $isEur ? ' itemprop="price" content="' . $eurPrices['labels'][$key] . '"' : '' ?>><?= $eurPrices['labels'][$key] ?></span>&nbsp;<span><?= $c['sign'] ?></span>
						</div>
						<small><?= $plan['small'] ?></small>
						<ul class="pricing-features">
							<?php foreach ($plan['features'] as $feature): ?>
							<li><?= $feature ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<div id="for_artists" class="tabcontent">
			<div class="pricing-tabs">
				<?php foreach ($currencies as $i => $c): ?>
				<button type="button" class="tab-btn<?= $i === 0 ? ' active' : '' ?>" data-tab-type="art-cur" onclick="openPriceArtCur(event, 'for_artists_<?= $c['code'] ?>')"><?= strtoupper($c['code']) ?></button>
				<?php endforeach; ?>
			</div>

			<?php foreach ($currencies as $i => $c): ?>
			<?php $isEur = $c['code'] === 'eur'; ?>
			<div id="for_artists_<?= $c['code'] ?>" class="tabcontent_artcur<?= $i === 0 ? ' active' : '' ?>">
				<div class="pricing-grid pricing-grid--artist">
					<div class="pricing-card artist-pricing-card">
						<h3>Standard mastering</h3>
						<p class="pricing-card-desc">Per track · 1 free revision included</p>
						<ul class="pricing-artist-simple">
							<?php foreach ($artistPlans as $key => $label): ?>
							<li<?= $isEur ? ' itemprop="offers" itemscope itemtype="https://schema.org/Offer"' : '' ?>>
								<?php if ($isEur): ?>
								<meta itemprop="name" content="Artist mastering — <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>">
								<meta itemprop="priceCurrency" content="EUR">
								<link itemprop="url" href="#prices">
								<?php endif; ?>
								<span class="pricing-artist-simple__label"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
								<span class="pricing-artist-simple__price">
									<span id="for_artists_<?= $c['code'] ?>_<?= $key ?>"<?= $isEur ? ' itemprop="price" content="' . $eurPrices['artists'][$key] . '"' : '' ?>><?= $eurPrices['artists'][$key] ?></span>&nbsp;<?= $c['sign'] ?>
								</span>
							</li>
							<?php endforeach; ?>
						</ul>
						<p class="pricing-artist-note">Extra revision: +<span id="for_artists_<?= $c['code'] ?>_revision"><?= $eurPrices['artists']['revision'] ?></span>&nbsp;<?= $c['sign'] ?> per track · rush orders on request</p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<p class="pricing-note">STEM-mastering and mixing — <a href="#contact">contact us</a> for a quote.</p>
	</div>
</section>
