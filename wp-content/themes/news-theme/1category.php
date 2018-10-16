<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>


<?php  


		//if(!empty($catid)){
	if( is_category()){
		$category = single_term_title("", false);
		$catid = get_cat_ID( $category );



			_e('category page');
			_e($category);
			_e($catid);











			if ( has_post_format(aside) ) {          
                    $args = array(
                        'posts_per_page'  => -1,
                        'cat'           => $catid,
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

                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }


            ?>




				<?php
				$btpgid=get_queried_object_id();
				$btmetanm=get_post_meta( $btpgid, $catid,'true' );
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array( 'posts_per_page' => 1, 'category_name' => $btmetanm,
				'paged' => $paged,'post_type' => 'post' );
				    $postslist = new WP_Query( $args );

				    if ( $postslist->have_posts() ) :
				        while ( $postslist->have_posts() ) : $postslist->the_post(); 


				             echo "<div style='border:2px groove black; margin-bottom:5px;'><h3 class='btposth'>";
				                 the_title(); 
				             echo "</h3><div class='btpostdiv'>";
				                 the_content();
				             echo "</div></div>";

				         endwhile;  

				             next_posts_link( 'Older Entries', $postslist->max_num_pages );
				             previous_posts_link( 'Next Entries &raquo;' ); 
				        wp_reset_postdata();
				    endif;
				    ?>

















            <?php












		}
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

	if(is_category()): if( have_posts() ) :

		
	 ?>

			<header class="archive-header">
				<h1 class="archive-title">

				<?php printf( __( 'Category Archives: %s', 'newstheme' ), single_cat_title( '', false ) ); ?>
					

					<?php _e(single_cat_title( '', false ));


					$category = single_term_title("", false);
					$catid = get_cat_ID( $category );
					

					?>


				</h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

				<?php
					// Start the Loop.
				while ( have_posts() ) :
					the_post();
					/*
					* Include the post format-specific template for the content. If you want to
					* use this in a child theme, then include a file called content-___.php
					* (where ___ is the post format) and that will be used instead.
					*/
					get_template_part( 'content', get_post_format() );
					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
				endif;
				
				
				?>










<?php get_footer(); ?>
