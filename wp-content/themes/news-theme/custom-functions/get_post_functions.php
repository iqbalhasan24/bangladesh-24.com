<?php


/*+++++++++++++++++++++get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/
function get_post_by_post_formate_and_cat_with_catimg_and_title_bgc($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);
                    $cat_image_id = get_term_meta ( $cat_id, 'category-image-id', true );
                    $cat_url = wp_get_attachment_image_url($cat_image_id, 'large');          
                   
                   	 _e("<div class='".$div_class."'>");                	 

		                   _e ("<div class='box-container'>");
		                   _e ("<div class='row cat-img-containe'>");
			                   _e("<div class='cat-img-container'>");
			                   			_e("<a href='".$category_link ."'><span> <h2 class='cat-title' style='background:".$title_bg_color_code."'>". get_cat_name($cat_id) ."</h2> </span></a>");
			                            echo "<a href='". $category_link."'> <img class='img-responsive' width='100%' src='".$cat_url."'></a>";
			                   _e("</div>");
		                   	_e("</div>");
                            

		                  _e("<div class='row post-box-container'>");

	                            $query = new WP_Query( $args );

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                            ?>
	                            	<!-- <div class='col-6'> -->
	                            	<div class='single-post-box'>
		                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>

		                                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
	                           	<?php
	                            	_e("</div>");
	                            	/*_e("</div>");*/

	                                }
                    		_e("</div>");

                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }
        }
/*+++++++++++++++++++++End get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/






















/*+++++++++++++++++++++get_post_with_left_lead_post_and_post_thumb_at_left++++++++++++++++++++++++++++++*/
function get_post_with_left_lead_post_and_post_thumb_at_left($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        
        }
/*+++++++++++++++++++++End get_post_with_left_lead_post_and_post_thumb_at_left ++++++++++++++++++++++++++++++*/



/*+++++++++++++++++++++get_post_with_top_lead_post_and_post_thumb_on_top++++++++++++++++++++++++++++++*/
function get_post_with_top_lead_post_and_post_thumb_on_top($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){


			 if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                   
                   	 _e("<div class='".$div_class."' style='background:#ffffff; border:1px solid #EFF5F9' >");
		                   _e ("<div class='box-container'>");
		                   _e ("<div class='row cat-img-containe'>");
			                   _e("<div class='cat-img-container' style='width:100%;'> ");
			                   			_e("<a href='".$category_link ."'><span> <h2 class='cat-title' style='background:".$title_bg_color_code."'>". get_cat_name($cat_id) ."</h2> </span></a>");
			                           
			                   _e("</div>");
		                   	_e("</div>");
                            

		                  _e("<div class='row post-box-container'>");

	                            $query = new WP_Query( $args );

	                            	$i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):

	                                   _e("<div class='col-12'> ");
			                   			?>
			                   				<div class='lead-post-box'>
				                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
				                                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
				                                <?php 
					                                $content=get_the_content();
					                                $content_20word=wp_trim_words($content,20);
				                                ?>	
				        
				                                <p><?php _e($content_20word); ?></p>
			                            	</div>
			                   			<?php
			                           
			                   			_e("</div>");
			                   			_e("<div class='col-12'> ");
			                   			_e("<div class='row'> ");

	                                    else:	
	                            ?>
	                            	<!-- <div class='col-6'> -->
	                            	<div class='single-post-box'>
		                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
		                                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
	                            	</div>
	                           	<?php
	                           		endif;
	                            	/*_e("</div>");*/

	                                }
                    		_e("</div>");
                    		_e("</div>");
                    		_e("</div>");

                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }

        
        }
/*+++++++++++++++++++++End get_post_with_top_lead_post_and_post_thumb_on_top ++++++++++++++++++++++++++++++*/













/*+++++++++++++++++++++get_post_with_top_lead_post_and_post_thumb_at_left++++++++++++++++++++++++++++++*/
function get_post_with_top_lead_post_and_post_thumb_at_left($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        
        }
/*+++++++++++++++++++++End get_post_with_top_lead_post_and_post_thumb_at_left ++++++++++++++++++++++++++++++*/

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function get_post_with_background_format($cat_id, $bg_color){
		?>
		


		<?php
	}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/













/*+++++++++++++++++++++get_lead_post_by_cat_with_post_img++++++++++++++++++++++++++++++*/
function get_lead_post_by_cat_with_post_img($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code){                 
                  
                    if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                   
                   	 _e("<div class='".$div_class."'>");
		                  

	                            $query = new WP_Query( $args );

	                            	$i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):

	                                   _e("<div class='col-12' style='background-image: linear-gradient(to right, #F2F2A1, #F2E39D,#F7F8D5); border:1px solid #EFF5F9;'> ");
			                   			?>
			                   				
		                   					<div class='row each-row' style="margin-top: 10px;">
		                   							<div class='col-12' style='width:100%; text-align: center;'>
		                   								<a class='cat-title'  style="background:<?php _e($title_bg_color_code); ?>" href="<?php the_permalink();?>">
						                                	<h4 style="color:#ff0000"><?php the_title(); ?></h4>
						                                </a>
		                   							</div>			                   							
		                   					</div>	
			                   				
			                   				<div class='row each-row'>
		                        				<div class='col-6'>
	                        						<a href="<?php the_permalink();?>">
					                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
					                                </a>
		                        				</div>
		                        				<div class='col-6' style="text-align: justify;">
					                              
					                                <p>
													<?php 
						                                $content=get_the_content();
						                                $content_20word=wp_trim_words($content,50);
						                                _e($content_20word);
					                                ?>	
					                                </p>
				                            	</div>
				                            </div>
			                   		
	                            	
	                           	<?php
	                           		endif;
	                            	

	                                }
                    	
                    
                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }

      
   }/*end function*/
/*+++++++++++++++++++++End get_lead_post_by_cat_with_post_img++++++++++++++++++++++++++++++*/











/*+++++++++++++++++++++get_sportlight_post_title++++++++++++++++++++++++++++++*/
function get_sportlight_post_title($cat_id, $post_no){                 
                  
                            
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );                                         
                   
                   	
		                  

	                        $query = new WP_Query( $args );
	                        if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                   ?>		
                        				<span>
                        					<a href="<?php the_permalink();?>">
			                              		<h4 style="color:#ff0000">   <img src="<?php _e(the_post_thumbnail_url('thumbnail')); ?>" height="26"> <?php the_title(); ?></h4>
			                              	</a>
			                             </span> 


	                           			<?php
	                           			$content=get_the_content();
							            $content_18word=wp_trim_words($content,18);
							            _e($content_18word);
	                                }                    	
                    			
                    
                   			 endif; 
                    wp_reset_postdata();
           

      
   }/*end function*/
/*+++++++++++++++++++++End get_sportlight_post_title++++++++++++++++++++++++++++++*/






