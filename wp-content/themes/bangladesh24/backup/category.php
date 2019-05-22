<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>

<div class="row">
<?php  
	if( is_category()){
		$category = single_term_title("", false);
		$catid = get_cat_ID( $category );



                    $category_link = get_category_link ( $catid);
                    $cat_image_id = get_term_meta ( $catid, 'category-image-id', true );
                    $cat_url = wp_get_attachment_image_url($cat_image_id, 'large'); 

                   

            if ( has_post_format(aside) ) {          
                    $args = array(
                        'posts_per_page'  => 2,
                        'cat'           => $catid,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );


	    			$query = new WP_Query( $args );
?>


	<div class="col-8">
			<div class="row">
		

               	 
        <?php  
			 if ( $query->have_posts() ) :

                    $i=1;

            		while ( $query->have_posts() ):
                			$query->the_post();
                	$thumbnail=	get_the_post_thumbnail_url(get_the_ID(),'small');
                	//$thumbnail=	get_the_post_thumbnail_url(get_the_ID(),'medium');
                    if($i <=8):
        ?>        	
               	<div class="col-md-3">
                   	<div class="cat-box" style="display: block;overflow: hidden; padding: 10px; text-align: justify; max-height: 180px; " >

    		            <img class="img-responsive" src="<?php _e($thumbnail); ?>" width="100%">
    		            <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
    		            <p><a href="<?php the_permalink();?>"><?php the_content(); ?></a></p>
    		        </div>
                </div>
<?php 	
            endif;
            $i++;
			endwhile; 
            endif; 
                    wp_reset_postdata();
            }

}
            ?>

			</div>


                <?php 

                     $args = array(
                        'base'               => '%_%',
                        'format'             => '?paged=%#%',
                        'total'              => 1,
                        'current'            => 0,
                        'show_all'           => false,
                        'end_size'           => 1,
                        'mid_size'           => 2,
                        'prev_next'          => true,
                        'prev_text'          => __('« Previous'),
                        'next_text'          => __('Next »'),
                        'type'               => 'plain',
                        'add_args'           => false,
                        'add_fragment'       => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    );


                         echo paginate_links( $args );
                ?>

	</div>

    <div class="col-4">
        <img src="<?php _e($cat_url);?>" width="100%">
    </div>
</div>




<?php get_footer(); ?>
