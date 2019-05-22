<footer id="footer" class="footer">
		

		<div class="footer-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-info-content">
							<div class="footer-logo">
								<?php
					        	$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								if ( has_custom_logo() ) {
									?>
									<a href="<?php echo get_option('home'); ?>/">

									<?php
								        echo "<img class='mg-fluid' src='". esc_url( $logo[0] ) ."' style='max-height:92px; width:100%;'></a>";
								} 
					        ?>
							</div>
							<p>bangladesh-24.com Worldwide is a popular online newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
							<p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
							<p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p>
							<ul class="unstyled footer-social">
								<li>
									<a title="Rss" href="#">
										<span class="social-icon"><i class="fa fa-rss"></i></span>
									</a>
									<a title="Facebook" href="#">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="#">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
									<a title="Google+" href="#">
										<span class="social-icon"><i class="fa fa-google-plus"></i></span>
									</a>
									<a title="Linkdin" href="#">
										<span class="social-icon"><i class="fa fa-linkedin"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-skype"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-dribbble"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-pinterest"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>

									</li>
								
							</ul>

							<?php if ( has_nav_menu( 'footer-menu-three' ) ): ?>
			    
							    	<?php    	


	$menuParameters = array(
		'theme_location' => 'footer-menu-three', // Change based on theme
		'container' => 'false', // try: false
		// 'container_class' => 'menu',
		'echo' => '', // try: false
		'items_wrap' => '%3$s',
		'depth' => 0
	);
	echo strip_tags( wp_nav_menu( $menuParameters ), '<a>' );




							 			
									        $footer_menu_three = array(
												'theme_location' 	=> 'footer-menu-three',							
												/*'container'       	=> 'ul',*/
												'container'       => false,
												/*'menu_class'     	=> 'unstyled footer-social',*/
												'container_class'   => "", 
											    'container_id'      => "",
												'before'            => "", 
				    							'after'             => "",
				    							'link_before'       => "<span class='social-icon'>", 
											    'link_after'        => "</span>",
											     
												 'items_wrap'      => '%3$s',
												 'depth'           => 1,
												
												);
												//wp_nav_menu($footer_menu_three);																	
									?>
							   
									<?php endif; ?>


						</div><!-- Footer info content end -->
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer info end -->

	</footer><!-- Footer end -->

	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="copyright-info">
							<span>Copyright © 2018 bangladesh-24.com All Rights Reserved. Designed By Iqbal Hasan</span>
						</div>
					</div>

					<div class="col-sm-12 col-md-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Site Terms</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Cookies Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" class="back-to-top">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
   </div><!-- Copyright end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/jquery.js"></script>
	<!-- Popper Jquery -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/popper.min.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/owl.carousel.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/smoothscroll.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="/wp-content/themes/newspaper/js/custom.js"></script>
	
	<!-- Script for Modal -->
		<script>
	      $(function() {
	        $(".video").click(function () {
	          var theModal = $(this).data("target"),
	          videoSRC = $(this).attr("data-video"),
	          videoSRCauto = videoSRC + "?autoplay=1&rel=0";
	          $(theModal + ' iframe').attr('src', videoSRCauto);
	          $(theModal + ' button.close').click(function () {
	            $(theModal + ' iframe').attr('src', videoSRC);
	          });
	        });
	      });
	  </script>


	</div><!-- Body inner end -->

<?php wp_footer(); ?>
</body>
</html>