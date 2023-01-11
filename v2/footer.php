   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">  

      	<div class="twelve columns content group">
      		
				<ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>               
               <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
               <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>               
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <hr />

            <!--div class="info">

            	<div class="footer-logo"></div>

	            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
	            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
	            nibh id elit. 
	            </p>	        

	         </div-->

      	</div>           

         <?php $today = date("Y");?>


         <ul class="copyright">
         	<li>&copy; Copyright <?=$today?></li> 
            <li><a title="Sledgermastering" href="/">Sledgermastering.by</a>.</li> 
         	
         </ul>

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero">Back to Top<i class="fa fa-angle-up"></i></a>
         </div>

      </div> <!-- end row -->

   </footer> <!-- end footer -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>  
   <script src="js/main.js"></script>
   <script src="js/pricer.js"></script>
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








