<?php get_header('single-page'); ?>
<div class="container" style="/*max-width:100%;*/ ">
	<div class="row each-row">
			<div class="col-8" style="text-align: justify;">
					<?php
							if (have_posts()) :
								while (have_posts()) : the_post();
									$alternative_featured_image = get_field('alternative_featured_image');
									$alternative_featured_image_url = $alternative_featured_image['url'];

								?>
									<h2><?php _e(get_the_title()); ?></h2>
									<p> <img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></p>
									<p><?php _e(get_the_content()); ?></p>
								<?php
								endwhile;
							else :
								_e('<p> No content found. </p>');
							endif;
						?>
			</div>


			<div class="col-4">				
				<div class="latest-news">
					<span class="head-title"> সর্বশেষ সংবাদ </span>
					<?php
						//get_recent_post_function($numberposts)
						get_recent_post_function(10);
					?>					
				</div>
			</div>

	</div>

	<div class="row each-row">
			<?php
					$post_id=get_the_ID();
					//get_related_post($post_id,$postnumber);
					get_related_post($post_id,9);
			?>

	</div>

</div>
<?php get_footer(); ?>