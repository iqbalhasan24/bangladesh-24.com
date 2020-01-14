<?php get_header(); ?>
<div class="row" style="padding-top: 20px;">
    <div class="main--content col-md-8 col-sm-7">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<img src="<?php _e($thumbnail_url); ?>">				
				<h1 class="entry-title main_title"><?php the_title(); ?></h1>	
				 <?php the_content(); ?> 	

			</article> <!-- .et_pb_post -->
		<?php endwhile; ?>
    </div>
	<?php get_template_part('/includes/page-sections/page_sidebar'); ?>
</div>
<?php get_footer(); ?>




        
