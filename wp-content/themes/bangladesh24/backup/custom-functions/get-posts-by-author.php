<?php
function get_posts_by_author($author_id){


 		$current_user = wp_get_current_user();
					$author_posts_url=get_author_posts_url($current_user);
					_e($author_posts_url);
					$args = array(
				    'author'        =>  $current_user->ID, // I could also use $user_ID, right?
				    'orderby'       =>  'post_date',
				    'order'         =>  'ASC' 
				    );

					// get his posts 'ASC'
					$current_user_posts = get_posts( $args );

					foreach ($current_user_posts as $key => $current_user_post) {
						_e("<a href='".$author_posts_url."'><h4>". $current_user_post->post_title."<h4></a>");
					}

	


}
