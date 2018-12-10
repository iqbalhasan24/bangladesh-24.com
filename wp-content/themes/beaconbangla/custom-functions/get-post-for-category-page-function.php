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
	                            	
	                            	<div class='single-post-box'>
		                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>

		                                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
	                           	<?php
	                            	_e("</div>");
	                                }
                    		_e("</div>");

                    	_e("</div>");
                    _e("</div>");
                    endif; 
                    wp_reset_postdata();
            }
        }
/*+++++++++++++++++++++End get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/

