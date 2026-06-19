<?php require_once 'head.php'; ?>
<body>
<?php require_once 'header.php'; ?>

<section class="page-hero">
	<div class="container">
		<?php if (isset($_GET['payment']) && isset($_GET['getorder']) && $_GET['payment'] === 'success') { ?>
			<h1>Thank you!</h1>
			<h3>Your payment was received successfully.</h3>
		<?php } else { ?>
			<h1>Something went wrong</h1>
			<h3>Please check the details below.</h3>
		<?php } ?>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php
		if (isset($_GET['payment']) && isset($_GET['getorder'])) {
			if ($_GET['payment'] === 'success') {
				$linkToFile = 'https://' . $_SERVER['SERVER_NAME'] . '/uploads/' . $_GET['getorder'] . '.zip';
				$urlHeaders = @get_headers($linkToFile);

				if ($urlHeaders && strpos($urlHeaders[0], '200')) { ?>
					<p>Your order is complete. <a id="orderLink" href="<?= htmlspecialchars($linkToFile) ?>">Download your order here</a>.</p>
					<p>Download will start automatically in a few seconds.</p>
					<script>
					function getOrder() {
						var orderfile = new URLSearchParams(window.location.search).get('getorder');
						var link = document.getElementById('orderLink');
						if (link) link.click();
						if (orderfile) {
							jQuery.ajax({
								method: 'POST',
								url: '/inc/sendEmail.php',
								data: {
									contactName: 'Sledgermastering MailBOT',
									contactEmail: 'sledger@ya.ru',
									contactSubject: 'Заказ ' + orderfile + '.zip скачан',
									contactMessage: 'Заказ ' + orderfile + '.zip скачан'
								}
							});
						}
					}
					setTimeout(getOrder, 2500);
					</script>
				<?php } else { ?>
					<p>Your order is complete, but the archive was not found. We notified the administrator — please <a href="/#contact">contact us</a> if needed.</p>
					<script>
					setTimeout(function () {
						var orderfile = new URLSearchParams(window.location.search).get('getorder');
						if (orderfile) {
							jQuery.ajax({
								method: 'POST',
								url: '/inc/sendEmail.php',
								data: {
									contactName: 'Sledgermastering MailBOT',
									contactEmail: 'sledger@ya.ru',
									contactSubject: 'Попытка скачивания несуществующего заказа.',
									contactMessage: 'Запрошен файл: ' + orderfile + '.zip'
								}
							});
						}
					}, 2500);
					</script>
				<?php }
			} else { ?>
				<p>Your payment is not completed. Please try again.</p>
				<p>We notified the administrator — you can also <a href="/#contact">contact us</a>.</p>
				<script>
				setTimeout(function () {
					jQuery.ajax({
						method: 'POST',
						url: '/inc/sendEmail.php',
						data: {
							contactName: 'Sledgermastering MailBOT',
							contactEmail: 'sledger@ya.ru',
							contactSubject: 'Неудачная попытка оплаты',
							contactMessage: 'Произведена неудачная попытка оплаты.'
						}
					});
				}, 2500);
				</script>
			<?php }
		} else { ?>
			<p>Order not found.</p>
			<p><a href="/">Return to homepage</a></p>
		<?php } ?>
	</div>
</section>

<?php require_once 'footer.php'; ?>
</body>
</html>
