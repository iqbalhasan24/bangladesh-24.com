<?php

function get_most_view_post($posts_per_page){

$query = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => $posts_per_page
) );

    $wpex_query = new wp_query( $query );          
    if ( $wpex_query->have_posts() ) :
           

        $key=0;
          
            while ( $wpex_query->have_posts() ):
                $wpex_query->the_post();        
                $key++;
                $engNumber = array(1,2,3,4,5,6,7,8,9,0);
                $bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
                $converted_bng_num = str_replace($engNumber, $bangNumber, $key);
                ?>

               <a href="<?php the_permalink();?>"> 
                    <span class="title-text">  
                        <span class="<?php if($key>9): _e('double-number-point'); else: _e('single-number-point');  endif;?>"><?php _e($converted_bng_num);?></span> 
                            <?php the_title(); ?>
                    </span>
                </a>
        <?php

           endwhile;

            

        endif;    
           wp_reset_postdata();


    
}












function get_most_view_post_with_img($posts_per_page){

$query = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => $posts_per_page
) );



	$wpex_query = new wp_query( $query );	


		
        if ( $wpex_query->have_posts() ) :

        	_e("<div class='row'>");
          
            while ( $wpex_query->have_posts() ):
                $wpex_query->the_post();
        ?>
        	<div class='single-post-box col-3'>
                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>

                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
        	</div>
       	<?php

           endwhile;

        	_e("</div>");

        endif;    
           wp_reset_postdata();


	
}

