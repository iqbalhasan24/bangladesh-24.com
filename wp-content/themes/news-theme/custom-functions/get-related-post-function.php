<?php

function get_related_post($post_id,$postnumber){

$args = array(
	'posts_per_page' =>$postnumber, // How many items to display
	'post__not_in'   => array($post_id), // Exclude current post
	'post_status' => 'publish', 
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

		// Check for current post category and add tax_query to the query arguments
		$cats = wp_get_post_terms( $post_id, 'category' ); 
		$cats_ids = array();  
		foreach( $cats as $wpex_related_cat ) {
			$cats_ids[] = $wpex_related_cat->term_id; 
		}
		if ( ! empty( $cats_ids ) ) {
			$args['category__in'] = $cats_ids;
		}

		// Query posts
		$wpex_query = new wp_query( $args );	


		
        if ( $wpex_query->have_posts() ) :

        	_e("<div class='row'>");

            while ( $wpex_query->have_posts() ):
                $wpex_query->the_post();
        ?>
        	<div class='' style="overflow: hidden; margin:1%; width: 23%; float: left; position: relative; background: #000; opacity: .6;" >   
        		      			
                	<a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a> 
        		  		
            	       			
        		<span style="position: absolute;bottom:55px; background: #f60000; opacity: .8; width:96%; margin-left: 2%; text-align: center; font-size: 1.2em; font-weight: 500; ">
        			
                		<a href="<?php the_permalink();?>" style="color: #fff;"><?php the_title(); ?></a>
        		</span>
        	</div>
       	<?php

           endwhile;

        	_e("</div>");

        endif;    
           wp_reset_postdata();

}

