<?php
require_once __DIR__ . '/pricing-data.php';

$siteUrl = pricing_site_url();
$schema = pricing_schema_graph($siteUrl);
$json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
if ($json === false) {
	return;
}
?>
<script type="application/ld+json">
<?= $json ?>

</script>
