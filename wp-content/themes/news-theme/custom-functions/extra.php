

	 <div class="col-12 footer-logo-area" >
	  	 <div class="row" style="background: #EFF0EC; padding: 6px;">
	  	 	
		  	 <div class="col-3 site-logo">
		        <?php
		        	$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
					        echo "<img class='mg-fluid' src='". esc_url( $logo[0] ) ."' style='max-height:80px;'>";
					} else {
					        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
		        ?>
		        	
	        </div>
	  	 	<div class="col-9 site-logo">
	  	 			<?php get_post_by_custom_post_type(); ?>
	  	 	</div>
		</div>
	</div>