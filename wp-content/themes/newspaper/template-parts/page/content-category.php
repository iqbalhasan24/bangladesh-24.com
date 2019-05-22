<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="box-shadow: 2px 2px 2px 2px #888888; padding: 5px; margin-bottom: 7px;">
	<header class="entry-header iq-template-parts/page/content-category">		
		<?php the_title( '<a href="'.get_permalink().'"><h1 class="entry-title">', '</h1></a>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			
			$content=get_the_content();
            $content=wp_trim_words($content,40);
            _e($content);
			_e('<br><br>');
	
			twentyseventeen_edit_link( get_the_ID() ); 
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
