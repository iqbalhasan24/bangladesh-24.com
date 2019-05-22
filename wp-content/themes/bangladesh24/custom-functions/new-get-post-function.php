<?php 
/*+++++++++++++++++++++get_top_first_slider_post++++++++++++++++++++++++++++++*/
function get_top_first_slider_post($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code){                 
                  
                    if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;  

	                                    $top_sub_headline 				= get_field('top_sub_headline');
										$bottom_sub_headline 			= get_field('bottom_sub_headline');
										$post_custom_thumb 				= get_field('post_custom_thumb');
										$individual_post_advertisement 	= get_field('individual_post_advertisement');
													                              

	                                    	$bg_post_thumbnail_url = 'background-image:url('. get_the_post_thumbnail_url().')'; 
			                   			?>	


			                   			<div class="item <?php if($i==1): echo('active'); endif; ?>" style="<?php echo $bg_post_thumbnail_url; ?>">
											<div class="featured-post">
										 		<div class="post-content">
										 			<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
										 			<h2 class="post-title title-extra-large">
										 				<a href="<?php the_permalink();?>">
										 						<?php if($top_sub_headline !="" ): ?>
																	<h2 class="post-title" style="color: #f00;">
														 				<?php   _e($top_sub_headline); ?>
														 			</h2>
																<?php endif; ?>

										 						<?php 
									                                $title=get_the_title();
									                                $title_10word=wp_trim_words($title,10);
									                                _e($title_10word);
								                                ?>

										 				</a>
										 			</h2>
										 			<span class="post-date">
										 				Published: 
									 						<?php the_time('M, j, Y'); ?>
										 			</span>
										 		</div>
										 	</div><!--/ Featured post end -->							
										</div><!-- Item 1 end -->
	                           	<?php	                           	                            	

	                           }
                    
                    endif; 
                    wp_reset_postdata();
            }

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_first_slider_post++++++++++++++++++++++++++++++*/





/*+++++++++++++++++++++get_top_second_sportligh_post++++++++++++++++++++++++++++++*/
function get_top_second_sportligh_post($cat_id, $post_no, $post_class){
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC'
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );



                   
	                            $query = new WP_Query( $args );
	                            if ( $query->have_posts() ) :

	                                while ( $query->have_posts() ) {
	                                    	$query->the_post();
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif;
	                                    	//var_dump($post_thumbnail_url);
					?>

			                   			<div class="post-overaly-style contentTop <?php echo $post_class; ?> clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" /></a>
											</div>
											<div class="post-content">
									 			<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
									 			<h2 class="post-title title-large">
									 				<a href="<?php the_permalink();?>">
								 						<?php 
							                                $title=get_the_title();
							                                $title_10word=wp_trim_words($title,10);
							                                _e($title_10word);
						                                ?>
									 				</a>
									 			</h2>
									 			<span class="post-date">

									 				Published: 
									 						<?php the_time('M, j, Y'); ?>
									 			</span>
								 			</div><!-- Post content end -->
										</div><!-- Post Overaly end -->

	                           	<?php 
	                           }
                    	endif;
                    
                    wp_reset_postdata();
          

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_second_sportligh_post++++++++++++++++++++++++++++++*/



/*+++++++++++++++++++++get_top_second_sportligh_post++++++++++++++++++++++++++++++*/
function get_latest_news_list($cat_id, $post_no){
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC'
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );



                   
	                            $query = new WP_Query( $args );
	                            if ( $query->have_posts() ) :

	                                while ( $query->have_posts() ) {
	                                    	$query->the_post();
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif;
	                                    	//var_dump($post_thumbnail_url);
					?>

			                   			
										<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" /></a>
											</div>
											<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="<?php the_permalink();?>">
									 					<?php 
							                                $title=get_the_title();
							                                $title_7word=wp_trim_words($title,7);
							                                _e($title_7word);
						                                ?>						                                	
						                            </a>
									 			</h2>
									 			<div class="post-meta">
									 				<!-- <span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 19, 2017</span> -->								 				
									 				<span style="color: #000;">Published: 
									 					<?php the_time('M, j, Y'); 
									 					//the_time('M, j, Y | g:i A'); ?>									 					
									 				</span>
									 			</div>
								 			</div>
										</div>
									</li>

	                           	<?php 
	                           }
                    	endif;
                    
                    wp_reset_postdata();
          

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_second_sportligh_post++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_for_tab_content++++++++++++++++++++++++++++++*/
function get_post_for_tab_content( $cat_id, $post_no){                 
                  
                            
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            	
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif; 
			                   			?>	

			                   		<?php if($i==1): ?>
				                   		<div class="col-lg-6 col-md-6">
							      			<div class="post-block-style clearfix">
												<div class="post-thumb">
													<a href="<?php the_permalink(); ?>">
														<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
													</a>
												</div>
												<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
												<div class="post-content">
										 			<h2 class="post-title">
										 				<a href="<?php the_permalink(); ?>">
									 						<?php 
								                                $title=get_the_title();
								                                $title_8word=wp_trim_words($title,8);
								                                _e($title_8word);
							                                ?>	
										 				</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-author"><a href="#">Published: </a></span>
										 				<span class="post-date">Feb 24, 2017</span>
										 			</div>
										 			<p>	
										 				<?php 
							                                $content=get_the_content();
							                                $content_20word=wp_trim_words($content,20);
							                                _e($content_20word);
						                                ?>
										 			</p>
									 			</div>
											</div>
							      		</div>
			                   		<?php endif; ?>
			                   		<?php if($i==2): ?>
			                   			<div class="col-lg-6 col-md-6">
						      				<div class="list-post-block">
												<ul class="list-post">
			                   		<?php endif; ?>

			                   		<?php if($i>=2): ?>
			                   					<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="<?php the_permalink(); ?>">
																<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="<?php the_permalink(); ?>">
											 						<?php 
										                                $title=get_the_title();
										                                _e($title);
									                                ?>

												 				</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">

												 					Published: 
									 						<?php the_time('M, j, Y'); ?>
												 				</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

			                   		<?php endif; ?>
			                   		<?php if($i == $post_no ): ?>
			                   					</ul>
			                   				</div>
			                   			</div>
			                   		<?php endif; ?>
	                   			
	                       <?php
	                       //	var_dump($i, $post_no);                           	                            	

	                           }
                    
                    endif; 
                    wp_reset_postdata();
           

      
   }/*end function*/
/*+++++++++++++++++++++End get_post_for_tab_content++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_double_cat_post_for_single_section++++++++++++++++++++++++++++++*/
function get_double_cat_post_for_single_section( $cat_id, $post_no, $cat_po_class ){ 
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            	
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif; 
			                   			?>	

			                   		<?php if($i==1): ?>

			                   			<div class="post-overaly-style <?php echo $cat_po_class; ?> clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>">
													<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
												</a>
											</div>
											
											<div class="post-content">
									 			<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
									 			<h2 class="post-title">
									 				<a href="<?php the_permalink(); ?>">
								 						<?php 
							                                $title=get_the_title();
							                                _e($$title);
						                                ?>
									 				</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Mar 03, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Overaly Article end -->							      		
			                   		<?php endif; ?>

			                   		<?php if($i==2): ?>
			                   			<div class="list-post-block">
											<ul class="list-post">												
			                   		<?php endif; ?>
			                   		<?php if($i>=2): ?>

			                   				<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="<?php the_permalink(); ?>">
																<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
														</a>
														<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
													</div><!-- Post thumb end -->

													<div class="post-content">
											 			<h2 class="post-title title-small">
											 				<a href="<?php the_permalink(); ?>">
										 						<?php 
									                                $title=get_the_title();             
									                                _e($title);
								                                ?>
											 				</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-date">
											 					Published: 
									 						<?php the_time('M, j, Y'); ?>	
											 				</span>
											 			</div>
										 			</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 4 end -->

			                   		<?php endif; ?>
			                   		<?php if($i == $post_no ): ?>
			                   					</ul>
			                   				</div>			                   		
			                   		<?php endif; ?>	                   			
	                       <?php
	                    }
                    
                    endif; 
                    wp_reset_postdata();
      
   }/*end function*/
/*+++++++++++++++++++++End get_double_cat_post_for_single_section++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_single_cat_post_for_single_col++++++++++++++++++++++++++++++*/
function get_single_cat_post_for_single_col( $cat_id, $post_no, $cat_bg_class ){ 
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            	
	                            if ( $query->have_posts() ) :
	                ?>            	


	                        <div class="block <?php _e($cat_bg_class); ?>">
	                <?php 
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif; 
			                   			?>	

			                   		<?php if($i==1): ?>
			                   			<h3 class="block-title"><span> <a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a></span></h3>
										<div class="post-overaly-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel1.jpg" alt="" />
												</a>
											</div>
											
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="<?php the_permalink(); ?>">
								 						<?php 
							                                $title=get_the_title();
							                                _e($title); _
						                                ?>
									 				</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">
									 					Published: 
									 						<?php the_time('M, j, Y'); ?>
									 				</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Overaly Article end -->


			                   		<?php endif; ?>

			                   		<?php if($i==2): ?>
			                   			<div class="list-post-block">
											<ul class="list-post">											
			                   		<?php endif; ?>
			                   		<?php if($i>=2): ?>

			                   				<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="<?php the_permalink(); ?>">
																<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
														</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
											 			<h2 class="post-title title-small">
											 				<a href="<?php the_permalink(); ?>">
										 						<?php 
									                                $title=get_the_title();
									                                $title_6word=wp_trim_words($title,6);
									                                _e($title); _e('<br>');
								                                ?>	
								                                
											 				</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-date">
											 				Published: 
									 						<?php the_time('M, j, Y'); ?>
									 						
									 					</span>
											 			</div>
										 			</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 1 end -->
			                   		<?php endif; ?>
			                   		<?php if($i == $post_no ): ?>
			                   					</ul>
			                   				</div>			                   		
			                   		<?php endif; ?>	                   			
	                       <?php
	                    }
                    ?>
                </div>
                    <?php
                    endif; 
                    wp_reset_postdata();
      
   }/*end function*/
/*+++++++++++++++++++++End get_single_cat_post_for_single_col++++++++++++++++++++++++++++++*/






/*+++++++++++++++++++++get_post_for_tab_content++++++++++++++++++++++++++++++*/
function get_more_post_by_cat( $cat_id, $post_no){                 
                  
                            
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                           
	                            	
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();	                                  
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif; 
			                   			?>


			                   			<div class="post-block-style post-float-half clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>">
														<img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" />
													</a>
											</div>											
											<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="<?php the_permalink(); ?>">
									 						<?php 
								                                $title=get_the_title();                                
								                                _e($title);
							                                ?>
										 			</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">Published:</a></span>
									 				<span class="post-date"> 
									 					<?php the_time('M, j, Y'); ?>
									 						
									 					</span>
									 			</div>
									 			<p style="text-align: justify;">
									 				<?php 
						                                $content=get_the_content();
						                                $content_24word=wp_trim_words($content,45);
						                                _e($content_24word);
					                                ?>
									 			</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style 1 end -->
										<div class="gap-30"></div>	                   			
	                       <?php
	                     
	                     }
                    
                    endif; 
                    wp_reset_postdata();
           

      
   }/*end function*/
/*+++++++++++++++++++++End get_post_for_tab_content++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_for_tab_content++++++++++++++++++++++++++++++*/
function get_populer_post_by_cat( $post_no){                 
                  
                            
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'meta_key' => 'wpb_post_views_count',                      
                        'orderby'       => 'meta_value_num',
                        'order'       => 'DESC',
                    );

                    

                    /*$category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); */
                             
                   
	                            $query = new WP_Query( $args );

	                            var_dump($query);
	                           
	                            	
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();	                                  
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif; 
			                   			?>


			                   			<div class="post-block-style post-float-half clearfix">
											<div class="post-thumb">
												<a href="<?php// the_permalink(); ?>">
														<img class="img-fluid" src="<?php //echo $post_thumbnail_url; ?>" alt="" />
													</a>
											</div>											
											<a class="post-cat" href="<?php // echo $category_link; ?>"><?php // echo $cat_name; ?></a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="<?php the_permalink(); ?>">
									 						<?php 
								                                $title=get_the_title();                                
								                                _e($title);
							                                ?>
										 			</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">Published:</a></span>
									 				<span class="post-date">Mar 29, 2017</span>
									 			</div>
									 			<p style="text-align: justify;">
									 				<?php 
						                                $content=get_the_content();
						                                $content_24word=wp_trim_words($content,45);
						                                _e($content_24word);
					                                ?>
									 			</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style 1 end -->
										<div class="gap-30"></div>	                   			
	                       <?php
	                     
	                     }
                    
                    endif; 
                    wp_reset_postdata();
           

      
   }/*end function*/
/*+++++++++++++++++++++End get_post_for_tab_content++++++++++++++++++++++++++++++*/







/*+++++++++++++++++++++get_top_second_sportligh_post++++++++++++++++++++++++++++++*/
function get_some_post_form_single_cat($cat_id, $post_no){
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC'
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );
                   
	                            $query = new WP_Query( $args );
	                            if ( $query->have_posts() ) :
	                            		$i=0;
	                                while ( $query->have_posts() ) {
	                                	
	                                    	$query->the_post();
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif;
									?>

										<?php if($i==0): ?>											
											<div class="item">
													<ul class="list-post">
										<?php endif;  ?>


										<?php if( $i !=0 && $i%2==0  ): ?>
												</ul><!-- List post 1 end -->
											</div><!-- Item 1 end -->
											<div class="item">
													<ul class="list-post">
										<?php endif;  ?>

			                   			
										<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" /></a>
											</div>
											<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="<?php the_permalink();?>">
									 					<?php 
							                                $title=get_the_title();
							                                
							                                _e($title);
						                                ?>						                                	
						                            </a>
									 			</h2>
									 			<div class="post-meta">
									 				<!-- <span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 19, 2017</span> -->								 				
									 				<span style="color: #000;">Published: 
									 					<?php the_time('M, j, Y'); 
									 					//the_time('M, j, Y | g:i A'); ?>									 					
									 				</span>
									 			</div>
								 			</div>
										</div>
									</li>

	                           	<?php 
	                           	
	                           	$i++;
	                           		if( $i == $post_no): 
	                           	?>	
										</ul><!-- List post 1 end -->
									</div><!-- Item 1 end -->										
								<?php				
										endif;  

	                           }
                    	endif;
                    wp_reset_postdata();
          

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_second_sportligh_post++++++++++++++++++++++++++++++*/






























