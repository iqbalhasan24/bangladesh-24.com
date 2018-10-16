<?php

function get_recent_post_function($numberposts){
		$recent_posts_args = array(
				'numberposts' => $numberposts,
				'offset' => 0,
				'category' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' =>'',
				'post_type' => 'post',
				//'post_status' => 'draft, publish, future, pending, private',
				'post_status' => 'publish',
				'suppress_filters' => true
			);

			$recent_posts = wp_get_recent_posts( $recent_posts_args );
			_e("<span class='query-title-box'>");
			foreach ($recent_posts as $key => $recent_post):
				$key++;
				$engNumber = array(1,2,3,4,5,6,7,8,9,0);
				$bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
				$converted_bng_num = str_replace($engNumber, $bangNumber, $key);
			?>

			<a href="<?php _e(the_permalink($recent_post['ID'])); ?>"><span class="title-text">
			<span class="<?php if($key>9): _e('double-number-point'); else: _e('single-number-point');  endif;?>"><?php _e($converted_bng_num);?></span>

			 <?php _e($recent_post['post_title']); ?></span></a>
			

			<?php  endforeach; ?>
			</span>
<?php			

}