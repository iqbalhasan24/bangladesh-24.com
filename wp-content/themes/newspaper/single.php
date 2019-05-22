<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('home-page'); ?>

<div class="container">

<div class="row">
	<div class="col-md-8">

		<?php 
				if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :

			 		$post_custom_thumb = get_field('post_custom_thumb');
			 		$post_custom_thumb = $post_custom_thumb['url'];
				

					$top_sub_headline = get_field('top_sub_headline');
					$bottom_sub_headline = get_field('bottom_sub_headline');
					if($top_sub_headline !=""):
						echo '<h4 class="entry-top-sub-title" style="color:#DA3352;">'. $top_sub_headline .'</h4>';
					endif;

					the_title( '<h1 class="entry-title">', '</h1>' );
					
					//echo "individual_post_advertisement";



				echo '<div class="single-featured-image-header">';

			 		if($post_custom_thumb !=""):
			 			echo '<img src="'.$post_custom_thumb. '" width="100%" class="img-responsive">';
			 		else:
						echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
					endif;
					if($bottom_sub_headline !=""):				
						echo '<h4 class="entry-top-sub-title" style="color:#F3B228;">'. $bottom_sub_headline .'</h4></a>';
					endif;			
				echo '</div><!-- .single-featured-image-header -->';
					
			endif;
		?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );

			endwhile; // End of the loop.
			?>

		
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

</div>
<?php get_footer('home-page');
