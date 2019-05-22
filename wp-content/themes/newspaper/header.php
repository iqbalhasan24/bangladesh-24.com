<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php  get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->


	<div class="wrap">
	<div class="content-area">
	<div class="">
	
		
			

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */

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


</div> 
</div> 
</div> 
	<div class="site-content-contain">
		<div id="content" class="site-content">
