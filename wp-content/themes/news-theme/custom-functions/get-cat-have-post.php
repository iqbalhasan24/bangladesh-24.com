<?php


/*++++++++++++++++++++++++get_category_that_have_post +++++++++++++++++++++++++*/
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
/*++++++++++++++++++++++++++++++++++End get_category_that_have_post++++++++++++++++++++++++++++++++++++++++*/



/*++++++++++++++++++++++++  get_single_post_each_category+++++++++++++++++++++++++*/

function get_single_post_each_category($cat_id, $post_no,$div_class){

                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name      = get_cat_name($cat_id);
                    $category_link = get_category_link ( $cat_id);
                                           

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                ?>
                                    <div class="<?php _e($div_class); ?>">
                                       <div class="row">
                                          <div class="col-12">
                                            <div style="width: 100%">
                                                <a href="<?php the_permalink();?>"> 
                                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" >
                                                </a>
                                            </div>          
                                          </div>
                                          
                                            <div class="col-12" >
                                                <div style="width: 100%; padding: 2%; text-align: left; background: #fff;">
                                                    <a href="<?php the_permalink();?>" style="font-size: 1.4em; font-weight: 600;"> 
                                                         <?php the_title(); ?> 
                                                    </a>      
                                                    <a href="<?php _e($category_link); ?>">
                                                        <span class="left-stick"></span> 
                                                        <span><?php _e($cat_name); ?></span>
                                                    </a>
                                                </div>
                                            </div>                                          
                                       </div>
                                    </div>
                                <?php
                                   }
                           
                    endif; 
                    wp_reset_postdata();
            

}
/*++++++++++++++++++++++++++++++++++End get_category_that_have_post++++++++++++++++++++++++++++++++++++++++*/





























