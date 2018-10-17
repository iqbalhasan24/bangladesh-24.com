<?php

/*+++++++++++++++++++++get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/
//function get_post_by_post_formate_and_cat_with_catimg_and_title_bgc($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){
function get_post_by_post_formate_and_cat_with_catimg_and_title_bgc( $cat_id, $post_no,$div_class){

       // if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

	                    $category_link = get_category_link ( $cat_id);
	                    $category_name = get_cat_name($cat_id);
	                    $cat_image_id = get_term_meta ( $cat_id, 'category-image-id', true );
	                    $cat_img_url = wp_get_attachment_image_url($cat_image_id, 'large'); 
                    ?>
                    	<div class="<?php _e($category_link); ?>">
							<div class="first-letter-design"> 
								<a href="<?php _e($category_link); ?>"> 
									<h4 class="cat-title" > 
										<?php _e($category_name); ?> 
									</h4>
								</a>	 
							</div>
							<div class="col-12" style="background: #000; min-height: 250px;">
								<a href="<?php _e($category_link); ?>"> <img src="<?php _e($cat_img_url); ?>" width="100%"> </a>
							</div>
                    <?php

	                        $query = new WP_Query( $args );

	                        if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                            ?>	                            	
									<p>
										<img src="/wp-content/themes/news-theme/images/icons/list-box-img.png"> 
										<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
									</p>		                                
	                           	<?php
	                        }                    
                    endif; 
                    echo "</div>";
                  
                    wp_reset_postdata();
           // }
        }
/*+++++++++++++++++++++End get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/

