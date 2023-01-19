<?php
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Sledger Mastering - Mastering service for labels and distributors</title>
	<meta name="description" content="Online mastering service for labels, distributors and artists. Flexible price systems. Discounts and free demo!">  
	<meta name="author" content="sledger">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="12600">

	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/vendor.min.css">
	<link rel="stylesheet" href="css/main.css?v=<?=time();?>">     
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- script
	================================================== -->
	<script src="js/modernizr.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

	<style> @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap'); </style>
</head>

<body>
<!-- header
	================================================== -->
	<header id="main-header">
		<div class="row">
			<div class="logo">
				<a href="/">Sledger Mastering</a>
			</div>

			<nav id="nav-wrap">         
				<a class="mobile-btn" href="#nav-wrap" title="Show navigation">
					<span class="menu-icon">Menu</span>
				</a>
				<a class="mobile-btn" href="#" title="Hide navigation">
					<span class="menu-icon">Menu</span>
				</a>            
				<ul id="nav" class="nav">
					<lic lass="current"><a class="smoothscroll" href="/">Home.</a></li>
					<li><a class="smoothscroll" href="/#services">Services.</a></li>
					<li><a class="smoothscroll" href="/#prices">Prices.</a></li>
					<li><a class="smoothscroll" href="/#examples">Samples.</a></li>
					<li><a class="smoothscroll" href="/#terms">Terms.</a></li>
					<li><a class="smoothscroll" href="/#clients">Clients.</a></li>
					<li><a class="smoothscroll" href="/#contact">Contacts.</a></li>
				</ul> <!-- end #nav -->
			</nav> <!-- end #nav-wrap -->

			<ul class="header-social">
				<li><a target="_blank" rel="nofollow" href="https://fb.com/sledgermastering"><i class="fa fa-facebook-square"></i></a></li>
            	<li><a target="_blank" rel="nofollow" href="https://www.youtube.com/@sledgermastering2015"><i class="fa fa-youtube-play"></i></a></li>
               	<li><a target="_blank" rel="nofollow" href="https://www.soundcloud.com/sledgermastering"><i class="fa fa-soundcloud"></i></a></li>
               	<li><a target="_blank" rel="nofollow" href="https://www.instagram.com/sledger.music"><i class="fa fa-instagram"></i></a></li>
			</ul>      
		</div>
	</header> <!-- end header -->

	<!-- thankspage header
	================================================== -->
	<section id="thanks_page_head" class="parallax_two">	
		<div class="row hero-content">
		</div> <!-- end row -->	
	</section> <!-- end homepage hero -->

	<!-- thanks content
	================================================== -->
		<?php
		if(isset($_GET['payment']) & (isset($_GET['getorder']))) {
			if ($_GET['payment'] == 'success') { ?>
					<section id="thanks">
						<div class="row section-head">
							<div class="twelve columns">
								<h1>Thank You<span>!</span></h1>
								<h3>Your payment was received successful<span>.</span></h3>
								<hr />
								<!-- orderMod start -->
									<?php
									if(isset($_GET['getorder'])) {
										$linkToFile = 'https://' . $_SERVER['SERVER_NAME'] . '/uploads/' . $_GET['getorder'] . '.zip';
										$urlHeaders = @get_headers($linkToFile);

										if(strpos($urlHeaders[0], '200')) { ?>
											<p>Your order is complete. Now you can 
											<a id='orderLink' href='<?=$linkToFile;?>'>download your order result here</a>.</p>
											<p>Download will start automatically in a few seconds.</p>
										<script>
										// Downloading order
											function getOrder(){
												var orderfile = $.urlParam('getorder');
												var link = $('#orderLink')[0];
												var linkEvent = null;
												if (link != null) {
													linkEvent = document.createEvent('MouseEvents');
													linkEvent.initEvent('click', true, true);
													link.dispatchEvent(linkEvent);
												}

												if (orderfile) {
													$.ajax({
														method: 'POST',
														url: '/inc/sendEmail.php',
														data: {
															'contactName': 'Sledgermastering MailBOT',
															'contactEmail': 'sledger@ya.ru',
															'contactSubject': 'Заказ ' + orderfile + '.zip скачан',
															'contactMessage': 'Заказ ' + orderfile + '.zip скачан'
														},
														dataType: 'html'
													})
												}

											}
											setTimeout(getOrder, 2500);
										</script>
										<?php } else { ?>
											<p>Your order is complete. But the archive with result not found.
												We sent email to administrator, but if you want - you can <a href="/#contacts">contact us</a>.</p>
												<script>
												// Error with the achive
													function getOrderWithError(){
														var orderfile = $.urlParam('getorder');
														var link = $('#orderLink')[0];
														var linkEvent = null;
														if (link != null) {
															linkEvent = document.createEvent('MouseEvents');
															linkEvent.initEvent('click', true, true);
															link.dispatchEvent(linkEvent);
														}
														if (orderfile) {
															$.ajax({
																method: 'POST',
																url: '/inc/sendEmail.php',
																data: {
																	'contactName': 'Sledgermastering MailBOT',
																	'contactEmail': 'sledger@ya.ru',
																	'contactSubject': 'Попытка скачивания несуществующего заказа.',
																	'contactMessage': 'Попытка скачивания несуществующего заказа. Запрошен файл: ' + orderfile + '.zip'
																},
																dataType: 'html'
															})
														}
													}
													setTimeout(getOrderWithError, 2500);
												</script>
										<?php } ?> 
									<?php } ?> 
								<!-- orderMod end -->
							</div>
						</div> <!-- end section-head -->
					</section>
				<?php } else { ?>
					<section id="thanks_with_errors">
						<div class="row section-head">
							<div class="twelve columns">
								<h1>Error<span>!</span></h1>
								<h3>Your payment is not completed<span>.</span></h3>
								<p>Try again, please.</p>
								<p>We can check if problem on our side and we are already sent email to administrator, but if you want - you can <a href="/#contacts">contact us</a>.</p>
								<script>
									// Error with the achive
									function getOrderWithPaymentError(){
										$.ajax({
												method: 'POST',
												url: '/inc/sendEmail.php',
												data: {
													'contactName': 'Sledgermastering MailBOT',
													'contactEmail': 'sledger@ya.ru',
													'contactSubject': 'Неудачная попытка оплаты',
													'contactMessage': 'Произведена неудачная попытка оплаты. Проверяйте коды ошибок последних оплат'
												},
												dataType: 'html'
										})
									}
									setTimeout(getOrderWithPaymentError, 2500);
								</script>
								<hr />
							</div>
						</div> <!-- end section-head -->
					</section>
				<?php }
			} else { ?>
				<section id="thanks">
					<div class="row section-head">
						<div class="twelve columns">
							<h1>Error<span>!</span></h1>
							<h3>Order not found<span>.</span></h3>
							<hr />
						</div>
					</div> <!-- end section-head -->
				</section>
		<?php } ?>
	<!--============================================= -->
   
   <!-- Footer
   ================================================== -->
   <footer>
      <div class="row">  

      	<div class="twelve columns content group">
      		
			<ul class="social-links">
               <li><a target="_blank" rel="nofollow" href="https://fb.com/sledgermastering"><i class="fa fa-facebook-square"></i></a></li>
               <li><a target="_blank" rel="nofollow" href="https://www.youtube.com/@sledgermastering2015"><i class="fa fa-youtube-play"></i></a></li>
               <li><a target="_blank" rel="nofollow" href="https://www.soundcloud.com/sledgermastering"><i class="fa fa-soundcloud"></i></a></li>
               <li><a target="_blank" rel="nofollow" href="https://www.instagram.com/sledger.music"><i class="fa fa-instagram"></i></a></li>
               <li><a rel="nofollow" href="skype:sled-ger?chat"><i class="fa fa-skype"></i></a></li>
               <li><a rel="nofollow" href="viber://chat/?number=+375291129746"><i class="fa fa-viber"></i></a></li>
    			<!-- <li><a rel="nofollow" target="_blank" href="https://soundbetter.com/profiles/36407-sledger-music-mastering" title="Sledger profile on SoundsBetter"><img src="img/icons/sb.png" width="32" alt="Sledger Mastering profile on SoundsBetter"></a></li-->
            </ul>

            <hr />

            <div id="go-top" class="styled_button">
               <a class="smoothscroll styled_button" title="Back to Top" href="#hero">Back to Top<i class="fa fa-angle-up"></i></a>
            </div>

            <div class="info">
               <img src="/images/paylogos.png" style="width: 600px;">
            </div>  

      	</div>           

         <?php $today = date("Y");?>

         <ul class="copyright">
         	<li>&copy; Copyright <?=$today?></li> 
            <li><a title="Sledgermastering" href="/">Sledgermastering.by</a>.</li> 
         </ul>

      </div> <!-- end row -->
   </footer> <!-- end footer -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/main_thankspage.js"></script>

</body>
</html>;

