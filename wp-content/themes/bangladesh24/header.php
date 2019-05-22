<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themewinter.com/html/news247-bs4/index.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] শুক্র, 07 ডিসেম্বর 2018 10:59:46 GMT -->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php if(is_front_page()|| is_home()): bloginfo('name'); else: get_the_title(); endif; ?></title>
	<!-- For Seo Content -->
	
	<?php if(is_front_page()|| is_home()): ?>
		<meta property="og:url" content="<?php _e(get_home_url()); ?>" />
		
		<meta property="og:image" content="<?php _e(get_the_post_thumbnail_url()); ?>" />
		<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="315" />
		<meta name="fb:app_id" property="fb:app_id" content="1608610629250627" />

	<?php  endif; ?>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="/wp-content/themes/bangladesh24//wp-content/themes/bangladesh24/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/wp-content/themes/bangladesh24//wp-content/themes/bangladesh24/images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="/wp-content/themes/bangladesh24/css/colorbox.css">

	<?php
		$top_sub_headline 				= get_field('top_sub_headline');
		$bottom_sub_headline 			= get_field('bottom_sub_headline');
		$post_custom_thumb 				= get_field('post_custom_thumb');
		$individual_post_advertisement 	= get_field('individual_post_advertisement');

	?>

	

<?php wp_head(); ?>
</head>	
<body>
<div class="body-inner">

	<div class="trending-bar d-md-block d-lg-block d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">Spot Light</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 1 end -->
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 2 end -->
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 3 end -->
					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div><!--/ Trending end -->

	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="ts-date">
						<i class="fa fa-calendar-check-o"></i>
						<script type="text/javascript" src="http://bangladate.appspot.com/index4.php"></script> || Today:  <?php _e(date('l'));  ?> , <?php _e(date("d-M-Y"));?>  
					</div>
					
				</div><!--/ Top bar left end -->

				<div class="col-md-4 top-social text-lg-right text-md-center">

					<?php if ( has_nav_menu( 'top-media-menu' ) ): ?>
			    
			    	<?php    			
			 			
					        $top_media_menu = array(
								'theme_location' 	=> 'top-media-menu',							
								'container'       	=> 'ul',
								'menu_class'     	=> 'unstyled',
								'container_class'   => "", 
							    'container_id'      => "",
								'before'            => "", 
    							'after'             => "",
    							'link_before'       => "<span class='social-icon'>", 
							    'link_after'        => "</span>",


								/*'menu'              => "", 
							    'menu_class'        => "",
							    'menu_id'           => "", 
							    'container'         => "", 

							    'container_class'   => "", 
							    'container_id'      => "", 
							    'fallback_cb'       => "", 
							    'before'            => "", 
							    'after'             => "", 
							    'link_before'       => "", 
							    'link_after'        => "", 
							    'echo'              => "", 
							    'depth'             => "", 
							    'walker'            => "", 
							    'theme_location'    => "", 
							    'items_wrap'        => "", 
							    'item_spacing'      => "", */
								
								);
								wp_nav_menu($top_media_menu);							
					?>
			   
					<?php endif; ?> 
				</div><!--/ Top social col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
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
				</div><!-- logo col end -->

				<div class="col-md-9 col-sm-12 header-right">
					<div class="ad-banner float-right">
						<a href="#"><img src="/wp-content/themes/bangladesh24/images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
					</div>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg col">
					<div class="site-nav-inner float-left">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->

						<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="nav-item dropdown active">
									<a href="#" class="nav-link" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="active"><a href="index-2.html">Home 1</a></li>
										<li><a href="index-3.html">Home 2</a></li>
										<li><a href="index-4.html">Home 3</a></li>
										<li><a href="index-5.html">Home 4</a></li>
										<li><a href="index-6.html">Home 5</a></li>
									</ul>
								</li>

								<li class="nav-item dropdown mega-dropdown">
									<a href="category-style1.html" class="nav-link dropdown-toggle" data-toggle="dropdown"
       								role="button" aria-haspopup="true" aria-expanded="false">Lifestyle <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-menu mega-menu-content clearfix">
										<div class="menu-tab">
											<div class="row">
												<ul class="nav nav-tabs flex-column col-2" data-toggle="tab-hover">
											  	<li class="nav-item">
											  		<a class= "nav-link animated fadeIn active " href="#tab-A" data-toggle="tab" aria-selected="true">
											  			<span class="tab-head">
															<span class="tab-text-title">Health</span>					
														</span>
											  		</a>
											  	</li>
											  	<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-B" data-toggle="tab"  aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Travel</span>					
														</span>
												  	</a>
												</li>
											 	<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-C" data-toggle="tab" aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Food</span>					
														</span>
												  	</a>
												</li>
												<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-D" data-toggle="tab" aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Architecture</span>					
														</span>
												  	</a>
												</li>
											</ul>

											<div class="tab-content col-10">
										      <div class="tab-pane fade show active" id="tab-A">
										      	<div class="row">
										      		<div class="col-md-3">
										      			
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health1.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
										      		</div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health2.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health3.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health4.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      	</div>
										      </div><!-- Tab pane 1 end -->

									        <div class="tab-pane animated fadeIn" id="tab-B">
									        	<div class="row">
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel1.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel2.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel3.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        			
									      		<div class="col-md-3">
									      			<div class="post-block-style clearfix">
														<div class="post-thumb">
															<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel4.jpg" alt="" /></a>
														</div>
														<a class="post-cat" href="#">Travel</a>
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
									      		</div>
									        		</div><!-- Row end -->
									        	</div><!-- tab B end -->
									        	  <div class="tab-pane animated fadeIn" id="tab-C">
											     <div class="row">
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food1.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											      		
											      		
											     		</div>
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food2.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food3.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     		<div class="col-md-3">
											     			
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food4.jpg" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     </div> 		
									        </div><!-- Tab pane 3 end -->

									        </div> <!-- Tab pane 2 end -->
											</div>
										</div><!-- Menu tab end -->
									</div><!-- Mega menu end -->
								</li><!-- Tab menu end -->

								<li>
									<a href="category-style2.html">Technology</a>
								</li>

								<li class="dropdown nav-item mega-dropdown">
									<a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown">Video <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-menu mega-menu-content clearfix">
										<div class="mega-menu-content-inner">
											<div class="row">
								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
															<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video4.jpg" alt="" />
															<a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
										                  <div class="video-icon">
										                  	<i class="fa fa-play"></i>
										               	</div>
										            	</a>
													   </div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 1 end -->

								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video3.jpg" alt="" />
															<a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 2 end -->

								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video2.jpg" alt="" />
															<a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">TG G6 will have dual 13-megapixel cameras...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 3 end -->
								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video1.jpg" alt="" />
															<a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 4 end -->
								      	</div><!-- Post block row end -->
										</div> 
										
									</div><!-- Mega menu content end -->
								</li><!-- Video menu end -->

								<li>
									<a href="category-style4.html">Travel</a>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="#.">Category Layouts</a>
											<ul class="dropdown-menu">
												<li><a href="category-style1.html">Category Style 1</a></li>
												<li><a href="category-style2.html">Category Style 2</a></li>
												<li><a href="category-style3.html">Category Style 3</a></li>
												<li><a href="category-style4.html">Category Style 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Post Formates</a>
											<ul class="dropdown-menu">
												<li><a href="single-post1.html">Single Post 1</a></li>
												<li><a href="single-post2.html">Single Post 2</a></li>
												<li><a href="single-post3.html">Single Post 3</a></li>
												<li><a href="single-post4.html">Single Post 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Sidebar</a>
											<ul class="dropdown-menu">
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="single-post1.html">Right Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Shortcodes</a>
											<ul class="dropdown-menu">
												<li><a href="typography.html">Typography</a></li>
												<li><a href="blockquote.html">Blockquotes</a></li>
												<li><a href="tabs.html">Tabs</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Pages</a>
											<ul class="dropdown-menu">
												<li><a href="author.html">Author</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
									</ul><!-- End dropdown -->
								</li><!-- Features menu end -->
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="nav-search">
					<span id="search"><i class="fa fa-search"></i></span>
				</div><!-- Search end -->
				
				<div class="search-block" style="display: none;">
					<input type="text" class="form-control" placeholder="Type what you want and enter">
					<span class="search-close">&times;</span>
				</div><!-- Site search end -->

			</div><!--/ Row end -->
		</div><!--/ Container end -->

	</div><!-- Menu wrapper end -->

	  <div class="trending-light d-md-block d-lg-block d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">সর্বশেষ:</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">

						<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
						<?php $posts_query = new WP_Query('posts_per_page=-1');
						        while ($posts_query->have_posts()) : $posts_query->the_post();
						  ?>
						   <a href="<?php the_permalink(); ?>" style="font-size: 1.3em; color: #000;">  <?php the_title(); ?> | </a>
						    <?php endwhile; wp_reset_query(); ?>
						    <?php //_e(the_post_thumbnail_url('thumbnail')); ?>
						</marquee>

						
					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div><!--/ Trending end -->
<!-- 	<div class="gap-40"></div> -->