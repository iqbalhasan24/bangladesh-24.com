<?php


function get_post_by_custom_post_type(){


$args = array(
    'post_type'=> 'social-media',
    
    'order'    => 'ASC'
    ); 





	$query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) {
                    $query->the_post();
            ?>	                            	
            	
            <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>

            <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
            <p><a href="<?php the_permalink();?>"><?php _e(get_the_excerpt()); ?></a></p>
            <p><a href="<?php the_permalink();?>"><?php the_field('media_url'); ?></a></p>
           	<?php
            }
            endif;

}            