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
									<span style="float: left; display: inline-block;">
											<h2><?php _e(get_the_title()); ?>  </h2>
									</span>
										<?php if(is_user_logged_in()): ?>
										<span style="float: right; display: inline-block; border: 1px solid #4E4E4E; border-radius: 3px; padding:2px 6px;">

											<b class="number">
												<?php 

												//		setPostViews(get_the_ID());
												//		echo getPostViews(get_the_ID());
												//$count_read = get_post_meta(the_ID(), 'meta_value_num', true); 
												$p_id= get_the_ID();
													echo post_view_counter($p_id);
												?>
											</b>
											<i class="bf-icon  fa fa-eye"></i> 
										</span>
									<?php endif; ?>
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
				<div class="row latest-news each-row">
					<span class="head-title"> সর্বশেষ সংবাদ </span>
					<?php
						//get_recent_post_function($numberposts)
						get_recent_post_function(10);
					?>					
				</div>
				<div class="row each-row">
					<div class="col">
						<?php 
							$post_advertisment = get_field('individual_post_advertisment');
							$post_advertisment_image_url = $post_advertisment['url'];
							if($post_advertisment_image_url !=""):
						?>
							<img class="img-responsive" src="<?php _e($post_advertisment_image_url); ?>" width="100%">	
						<?php endif; ?>						
					</div>
				</div>
			</div>

	</div>

	<div class="row each-row">
		<div class="col-8">
			<?php
					$post_id=get_the_ID();
					//get_related_post($post_id,$postnumber);
					get_related_post($post_id,9);
			?>
		</div>
		<div class="col-4">
		</div>	

	</div>

</div>
<?php get_footer(); ?>