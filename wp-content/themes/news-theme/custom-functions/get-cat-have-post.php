<?php


/*+++++++++++++++++++++++++++++++++++++++++++++++++*/
 // Grab all the categories from the database that have posts.

function get_category_that_have_post(){
    $categories = get_terms( 'category', 'orderby=name&order=ASC');     
        foreach ( $categories as $category ) {            
            echo '<h2 class="post-title">' . $category->name . '</h2>';
            echo '<h2 class="post-title">' .$category->term_id . '</h2>';
            echo '<div class="post-list">';

             $cat_id=$category->term_id;

            $image_id = get_term_meta ( $cat_id, 'category-image-id', true );
        
        echo wp_get_attachment_image ( $image_id, 'large' );
       
            $args = array(
                'cat'           => $category->term_id,
                'orderby'       => 'date',
                'order'       => 'DESC',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $post_id=get_the_ID();
                    _e(the_post_thumbnail_url($post_id,'post-thumbnail'));
            ?>
                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
            <?php

                } 
            }

            echo '</div>';
            wp_reset_postdata();

        } 
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/