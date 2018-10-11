<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>

	
<?php 
        if (is_page(19)){
            ?>
            <ul>
            <?php
                global $post;
                $args = array( 'category' => 'cover' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :  setup_postdata($post); ?>
                    <li class="testimonial"><?php the_content(); ?></li><br/>
                <?php endforeach; ?>
            </ul>
        <?php } ?>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<div>

<?php



$single_post = array(
    'post_type'=> 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 'post-format-aside' )
        ),
        'operator' => 'NOT IN'
    )
);


$asides = get_posts( $args );
if ( count($asides) ) {
    foreach ( $asides as $aside ) {
       // var_dump($aside->post_title);
    }
}








$all_posts =array(
    'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-news',
                'post-format-blog',
                'post-format-add',
                'post-format-photo_gallery',
                'post-format-video-24_tv',
            ),
           //'operator' => 'NOT EXISTS'
            'operator' => 'NOT IN'
        )
    )
);


$myposts = new WP_Query( $all_posts );
?>

<?php if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php //the_title(); ?> </a>

<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>
</div>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<!-- ++++++++++++++++++++++++++++ Get Menu by Location ++++++++++++++++++++++++++ -->

	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="container" >

<div class="col-12">
	<div class="col-4">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    
		  </ol>
		  <div class="carousel-inner">

		  <?php foreach($posts as $key => $value):
		  		endforeach;
		  ?>
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="wp-content/uploads/2018/08/Screenshot-from-2018-08-30-02-50-17.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		       <img class="d-block w-100" src="wp-content/uploads/2018/08/Screenshot-from-2018-08-30-02-50-17.png" alt="First slide">
		    </div>
		    
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="col-4"></div>
	<div class="col-4"></div>
	
</div>
</div>

	
	<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->











<?php get_footer(); ?>
