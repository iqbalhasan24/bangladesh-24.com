<?php get_header(); ?>
<div class="container-fluid" style="/*max-width:100%;*/ ">
	<div class="row each-row">
			<div class="col-8">
					<?php
							if (have_posts()) :
								while (have_posts()) : the_post();

								?>
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


	</div>

</div>
<?php get_footer(); ?>