<?php get_header(); ?>



	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php
							if (have_posts()) : 
								while (have_posts()) : the_post();
									$alternative_featured_image = get_field('alternative_featured_image');
									$post_thumbnail_url = $alternative_featured_image['url'];
									if( !isset($post_thumbnail_url)):
										$post_thumbnail_url = get_the_post_thumbnail_url();
									endif;	
									$p_id= get_the_ID();

									$top_sub_headline 				= get_field('top_sub_headline');
									$bottom_sub_headline 			= get_field('bottom_sub_headline');
									$post_custom_thumb 				= get_field('post_custom_thumb');
									$individual_post_advertisement 	= get_field('individual_post_advertisement');													

					?>
					<div class="single-post">
						<div class="post-media post-featured-image">
							<?php if($top_sub_headline !="" ): ?>
								<h2 class="post-title" style="color: #f00;">
					 				<?php   _e($top_sub_headline); ?>
					 			</h2>
							<?php endif; ?>
							<img src="<?php echo $post_thumbnail_url; ?>" class="img-fluid" alt="">
						</div>
						
						<div class="post-title-area">
							
							<h2 class="post-title">
				 				<?php echo get_the_title(); ?>
				 			</h2>
				 			<?php if($bottom_sub_headline !="" ): ?>
								<span class="post-title" style="color: #BD752B; font-size: 1.3em; font-weight: 650;">
					 				<?php   _e($bottom_sub_headline); ?>
					 			</span>
							<?php endif; ?>
				 			<div class="post-meta">
								<span class="post-author">
									 <a href="#">প্রকাশিত:</a>
								</span>
								<span class="post-date"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></span>
								<span class="post-hits"><i class="fa fa-eye"></i> 21</span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span>
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="entry-content">
								<?php _e(get_the_content()); ?>

							</div><!-- Entery content end -->

					

							<div class="share-items clearfix">
	   							<ul class="post-social-icons unstyled">
	   								<li class="facebook">
	   									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">
	   									<i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
	   								</li>
	   								<li class="twitter">
	   									<a href="#">
	   									<i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
	   								</li>
	   								<li class="gplus">
	   									<a href="#">
	   									<i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
	   								</li>
	   								<li class="pinterest">
	   									<a href="#">
	   									<i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
	   								</li>
	   							</ul>
	   						</div><!-- Share items end -->
						</div><!-- post-content end -->
					</div><!-- Single post end -->

					<nav class="post-navigation clearfix">
	                  <div class="post-previous">
	                  	<?php  previous_post_link( '%link', __( '<span><i class="fa fa-angle-left"></i>Previous Post</span> <h3> %title </h3>' ) ); ?>                    
	                          
	                  </div>
	                  <div class="post-next pull-right">

	                  	<?php  next_post_link( '%link', __( '<span>Next Post <i class="fa fa-angle-right"></i></span> <h3> %title </h3>' ) ); ?>
	                     

	                  </div>       
	               </nav><!-- Post navigation end -->
				<?php 	endwhile;  ?>



			<?php endif; wp_reset_postdata(); 	?>					

					<div class="related-posts block">
						<h3 class="block-title"><span>Related Posts</span></h3>
							<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">

							<?php
							if (have_posts()) : 
								while (have_posts()) : the_post();									
									$p_id= get_the_ID();
									$category_detail=get_the_category( $p_id);
									$cat_id_array=[];
									foreach ($category_detail as $key => $value) {
										$cat_id_array[]=array_push($cat_id_array, $value->cat_ID); 
										
									}
									$cat_id_array = array_unique($cat_id_array);
									
									 $args = array(
				                        'posts_per_page'  => 15,
				                        'category__in' => $cat_id_array,
				                        'orderby'       => 'date',
				                        'order'       => 'DESC',
				                    );


									 $query = new WP_Query( $args );
									if ( $query->have_posts() ) :
									 	$i=0;
	                                	while ( $query->have_posts() ):
	                                    	$query->the_post();
	                                		if($i==0): ?>
	                                			<div class="item">
	                                		<?php 		
	                                    		endif; 
	                                    		if($i!=0 && $i%3==0 ): 
	                                		?>
		                        				</div>
		                        				<div class="item">
	                                    	<?php endif;?>

	                                    		<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" /></a>
													</div>
													
													<div class="post-content">
											 			<h2 class="post-title title-medium">
											 				<a href="<?php the_permalink(); ?>">
											 					<?php the_title(); ?>
											 				</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-author"><a href="#">Published</a></span>
											 				<span class="post-date"><?php the_time('M, j, Y'); ?></span>
											 			</div>
										 			</div>
												</div>
												<div class="gap-30"></div>


	                                <?php   
	                                    	//the_permalink();
	                                    	//echo get_the_post_thumbnail_url();
	                                    	//the_title();


	                            		$i++;
										endwhile;
										echo "</div>";
									endif;								
						endwhile;
					endif;								

					?>	
						</div><!-- Carousel end -->
					</div><!-- Related posts end -->					

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="block-title"><span>Follow Us</span></h3>
							<?php if ( has_nav_menu( 'top-media-menu' ) ): ?>
			    
					    	<?php    			
					 			
					        $top_media_menu = array(
								'theme_location' 	=> 'top-media-menu',							
								'container'       	=> 'ul',
								'menu_class'     	=> 'social-icon',
								'container_class'   => "", 
							    'container_id'      => "",
								'before'            => "", 
    							'after'             => "",
    							'link_before'       => "<span class='social-icon'>", 
							    'link_after'        => "</span>",
								);
								wp_nav_menu($top_media_menu);							
							?>
			   
							<?php endif; ?> 
								
						</div><!-- Widget Social end -->

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health4.jpg" alt="" />
									</a>
								</div>
								
								<div class="post-content">
						 			<a class="post-cat" href="#">Health</a>
						 			<h2 class="post-title title-small">
						 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
						 			</h2>
						 			<div class="post-meta">
						 				<span class="post-date">Feb 06, 2017</span>
						 			</div>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->


							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/gadget3.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Gadgets</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Mar 13, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Travel</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Hynopedia helps female travelers find health care...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Jan 11, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/robot5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Robotics</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Robots in hospitals can be quite handy to navigate around...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food1.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Food</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 27, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 4 end -->

								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->

						

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->


<?php get_footer(); ?>