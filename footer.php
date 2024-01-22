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
               <img src="/images/paylogos.png" style="">
               <!--img src="/images/footer/yandex-pay-logo-footer.png" style="width: 15px;">
               <img src="/images/footer/pci-dss.svg" style="width: 36px;">
               <img src="/images/footer/mc-id.svg" style="width: 65px;">
               <img src="/images/footer/visa-secure.svg" style="width: 22px;">
               <img src="/images/footer/apple-pay.svg" style="width: 32px;">
               <img src="/images/footer/google-pay.svg" style="width: 32px;">
               <img src="/images/footer/samsung-pay.svg" style="width: 65px;">
               <img src="/images/footer/mir-grey.svg" style="width: 25px;"-->
            </div>      


      	</div>           

         <?php $today = date("Y");?>


         <ul class="copyright">
         	<li>&copy; Copyright <?=$today?></li> 
            <li><a title="Sledgermastering" href="/">Sledgermastering.pro</a>.</li>
         	
         </ul>



      </div> <!-- end row -->

   </footer> <!-- end footer -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="/js/jquery-1.11.3.min.js"></script>
   <script src="/js/jquery-migrate-1.2.1.min.js"></script>
   <script src="/js/jquery.flexslider-min.js"></script>
   <script src="/js/jquery.waypoints.min.js"></script>
   <script src="/js/jquery.validate.min.js"></script>
   <script src="/js/jquery.fittext.js"></script>
   <script src="/js/jquery.placeholder.min.js"></script>
   <script src="/js/jquery.magnific-popup.min.js"></script>  
   <script src="/js/main.js"></script>
   <script src="/js/pricer.js?v=<?=time();?>"></script>
   <script>
   /*---------------------------------------------------- */
	/* Prices tabs
	------------------------------------------------------ */ 
		function openPrice(evt, priceName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(priceName).style.display = "block";
			evt.currentTarget.className += " active";
		}
   </script>
   <script>
   /*---------------------------------------------------- */
	/* Prices Currencies tabs
	------------------------------------------------------ */ 
		function openPriceCur(evt, curDivName) {
         
			var i, tabcontent_cur, tablinks;
			tabcontent_cur = document.getElementsByClassName("tabcontent_cur");
			for (i = 0; i < tabcontent_cur.length; i++) {
				tabcontent_cur[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(curDivName).style.display = "block";
			evt.currentTarget.className += " active";
		}
   </script>
   
   <script>
      $('#for_labels > div.tab > a').click(function(){
         $("#flb").addClass('active');
      })
   </script>

   <script>
      $('#flb').click(function(){
         $("#for_labels > div.tab > a:nth-child(1)").addClass('active');
      })
   </script>

   <script>
   /*---------------------------------------------------- */
	/* Prices Artists Currencies tabs
	------------------------------------------------------ */ 
		function openPriceArtCur(evt, curDivArtistsName) {
         
			var i, tabcontent_artcur, tablinks;
			tabcontent_artcur = document.getElementsByClassName("tabcontent_artcur");
			for (i = 0; i < tabcontent_artcur.length; i++) {
				tabcontent_artcur[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(curDivArtistsName).style.display = "block";
			evt.currentTarget.className += " active";
		}
   </script>
   
   <script>
   $('#for_artists > div.tab > a').click(function(){
      $("#fab").addClass('active');
   })
   </script>

   <script>
      $("#fab").click(function(){
         $("#for_artists > div.tab > a:nth-child(1)").addClass('active');
      })
   </script>








