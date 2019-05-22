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
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content', 'category' );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;

				the_posts_pagination( array(
						'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					) );

			?>

        
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

</div>
<?php get_footer('home-page');
