<?php 
/*+++++++++++++++++++++get_lead_post_by_cat_with_post_img_and_title++++++++++++++++++++++++++++++*/
function get_lead_post_by_cat_with_post_img_and_title($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code){                 
                  
                    if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                   
                   	 _e("<div class='".$div_class."' style='background-image: linear-gradient(to right, #F2F2A1, #F2E39D,#F7F8D5); border:1px solid #EFF5F9; min-height:300px;'>");
	                            $query = new WP_Query( $args );

	                            	$i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):

			                   			?>		                   				
			                   				
			                   				<div class='row each-row' style="padding-top:20px; ">
		                        				<div class='col-6'>
	                        						<a href="<?php the_permalink();?>">
					                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
					                                </a>
		                        				</div>
		                        				<div class='col-6' style="text-align: justify;">
		                        					<a href="<?php the_permalink();?>">
					                              		<h4 style="color:#ff0000"><?php the_title(); ?></h4>
					                              	</a>
					                              	<a href="<?php the_permalink();?>">		
						                                <p style="font-size: 1.2em; color:#000;">
														<?php 
							                                $content=get_the_content();
							                                $content_20word=wp_trim_words($content,40);
							                                _e($content_20word);
						                                ?>	
						                                </p>
						                            </a>    
				                            	</div>
				                            </div>
			                   		
	                            	
	                           	<?php
	                           		endif;
	                            	

	                                }
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }

      
   }/*end function*/
/*+++++++++++++++++++++End get_lead_post_by_cat_with_post_img_and_title++++++++++++++++++++++++++++++*/

/*+++++++++++++++++++++get_post_with_left_lead_lead_news++++++++++++++++++++++++++++++*/
function get_post_with_left_lead_lead_news($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name = get_cat_name ( $cat_id);  
                    $category_link = get_category_link ( $cat_id);  
                    ?>
                    <div class="<?php _e($div_class);?>  cat-post-container" style="background:<?php _e($title_bg_color_code);?> ">
                    	
                    		<div class="row">
	                    		<div class="col-12">
		                    		<div class="category-title" >
		                    			<span style=" text-transform: uppercase; background: #4db2ec; padding: 3px 10px;"> <a href="<?php $category_link; ?>">
				                    				<?php _e( $cat_name); ?>
		                    			</a></span>
		                    		</div>
	                    		</div>
	                    	</div>
                    		<div class="row post-box-container">


                    <?php   
                        $query = new WP_Query( $args );
                        $i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):	                                   
			                   			?>
			                   				<div class='col-3'>
				                   				<div class='lead-post-box'>
					                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
					                                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
					                                <?php 
						                                $content=get_the_content();
						                                $content_20word=wp_trim_words($content,20);
					                                ?>	
					        
					                                <p><?php _e($content_20word); ?></p>
				                            	</div>
			                            	</div>
			                   				<div class='col-9'>
				                   				<div class='row'>                            	
			                   			<?php
	                                 endif;	
	                                 if($i>1):
	                            ?>
			                            	<div class='lead-news-box'>
				                                <a href="<?php the_permalink();?>">
				                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
				                                </a>
				                                <a href="<?php the_permalink();?>">
				                                	<?php the_title(); ?>           		
				                                </a>
			                            	</div>
		                            	
	                           	<?php
	                           		endif;                            	

	                            }
			                    			_e("</div>");
			                    		_e("</div>");
                    		_e("</div>");


                    		

                		_e("</div>");
                	
                    endif; 
                    wp_reset_postdata();
            }
        }
/*+++++++++++++++++++++End get_post_with_left_lead_lead_news ++++++++++++++++++++++++++++++*/



/*+++++++++++++++++++++get_lead_post_by_cat_with_img_with_formate++++++++++++++++++++++++++++++*/

function get_lead_post_by_cat_with_img_with_formate($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){


       if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name = get_cat_name ( $cat_id);  
                    $category_link = get_category_link ( $cat_id);  
                    ?>
                    <div class="<?php _e($div_class);?> cat-post-container" style="background:<?php _e($title_bg_color_code);?> ; border:1px solid #EFF5F9; padding-top:10px;">
                        <div class="row each-row">
                                <div class="category-title" >
                                    <span style=" text-transform: uppercase; background: #4db2ec;border-radius: 3px 3px 0px 0px; padding: 3px 10px;">  
                                      <a href="<?php $category_link; ?>">
                                                <?php _e( $cat_name); ?>
                                      </a>
                                    </span>
                                </div>
                        </div>

                        <div class="row">                      

                        <?php
                            $query = new WP_Query( $args );

                              if ( $query->have_posts() ) :
                                  while ( $query->have_posts() ) {
                                      $query->the_post();                                     
                              ?>
                           
                                <div class='col-4 '>
                                    <a href="<?php the_permalink();?>">
                                        <img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                      </a>
                                    <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                                </div>
                              <?php
                            }
                            _e("</div>");
                        _e("</div>");
                    endif; 
                    wp_reset_postdata();
            }

        
        }
/*+++++++++++++++++++++End get_lead_post_by_cat_with_img_with_formate++++++++++++++++++++++++++++++*/



/*+++++++++++++++++++++get_special_two_post++++++++++++++++++++++++++++++*/
function get_special_two_post($cat_id, $post_no, $div_class){                 
                  $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                    $cat_name = get_cat_name( $cat_id);                     


				?>

					<div class="<?php _e($div_class); ?>">
					 <div style="width: 100%; float: left; background:#654DF9; text-align: center; color: #fff;">
			            <h3> <a href="<?php _e($category_link); ?>"> <?php _e($cat_name); ?> </a> </h3>          
			        </div>
			        <div style="width: 100%; padding:2%;  float: left; background: #D8E7FF; text-align: left; color: #000;">

				<?php 

	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):
					                   			?>				                   				
					                   				<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%">
					                   				 <h3>
					                   				 	<a href="<?php the_permalink();?>">
					                   				 		<?php the_title(); ?>
					                   				 	</a>
					                   				 </h3>
		             								<p style="border-bottom-style: dotted;"> 

		             									<?php 
							                                $content=get_the_content();
							                                $content_20word=wp_trim_words($content,40);
							                                _e($content_20word);
								                         ?>
		             								</p> 
			                        		   	<?php
			                           		endif;
		                           		?>
		                           			<h4>
	             								<a href="<?php the_permalink();?>">
	             									<?php the_title(); ?>
	             								</a>
	             							</h4>


		                           		<?php

	                                }
		                        endif;
                    		echo "</div>";
                    	echo "</div>";                   
                    wp_reset_postdata();
      
   }/*end function*/
/*+++++++++++++++++++++End get_special_two_post++++++++++++++++++++++++++++++*/

/*+++++++++++++++++++++get_lead_post_with_lead_content_and_img++++++++++++++++++++++++++++++*/
function get_lead_post_with_lead_content_and_img($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

			 if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                   
                   	 _e("<div class='".$div_class." cat-post-container' style='background:#ffffff; border:1px solid #EFF5F9' >");
		                   _e ("<div class='box-container'>");
		                   _e ("<div class='row cat-img-containe'>");
			                   _e("<div class='cat-img-container' style='width:100%;'> ");
			                   			_e("<a href='".$category_link ."'><span> <h2 class='cat-title' style='background:".$title_bg_color_code."'>". get_cat_name($cat_id) ."</h2> </span></a>");
			                           
			                   _e("</div>");
		                   	_e("</div>");
                            

		                  _e("<div class='row post-box-container'>");

	                            $query = new WP_Query( $args );

	                            	$i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):

	                                   _e("<div class='col-12'> ");
			                   			?>
			                   				<div class='row inner-row'>
		                        				<div class='col-6'>
					                                
					                                <a href="<?php the_permalink();?>">
					                                	<h3><?php the_title(); ?></h3>
					                                </a>
					                                <p>
													<?php 
						                                $content=get_the_content();
						                                $content_20word=wp_trim_words($content,40);
						                                _e($content_20word);
					                                ?>	
					                                </p>
				                            	</div>
		                        				<div class='col-6'>
	                        						<a href="<?php the_permalink();?>">
					                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
					                                </a>
		                        				</div>
				                            </div>
			                   			<?php
			                           
			                   			_e("</div>");
			                   			_e("<div class='col-12'> ");
			                   			_e("<div class='row inner-row'> ");

	                                    else:	
	                            ?>
	                            	<!-- <div class='col-6'> -->
	                            	<div class='col-6 '>
			                            	<div class='row inner-row'>
			                            		<div class='col-4'>
				                                		<a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
				                                </div>		
				                                <div class='col-8'>
				                                		<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
				                                </div>
			                            	</div>
	                            	</div>
	                           	<?php
	                           		endif;
	                            	/*_e("</div>");*/

	                                }
                    		_e("</div>");
                    		_e("</div>");
                    		_e("</div>");

                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }

        
        }
/*+++++++++++++++++++++End get_post_with_top_lead_post_and_post_thumb_on_top ++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_with_left_two_lead_post_and_post_thumb_at_teft++++++++++++++++++++++*/
function get_post_with_left_two_lead_post_and_post_thumb_at_teft($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name = get_cat_name ( $cat_id);  
                    $category_link = get_category_link ( $cat_id);  
                    ?>
                    <div class="<?php _e($div_class);?> cat-post-container" style="background:<?php _e($title_bg_color_code);?> ">
                    		<div class="row">
	                    		<div class="col-12">
		                    		<div class="category-title" >
		                    			<span style=" text-transform: uppercase; background: #4db2ec;border-radius: 3px 3px 0px 0px; padding: 3px 10px;"> 
		                    			<a href="<?php $category_link; ?>">
				                    				<?php _e( $cat_name); ?>
		                    			</a>
		                    			</span>
		                    		</div>
	                    		</div>
	                    	</div>
                    		<div class="row post-box-container">


                    <?php   
                        $query = new WP_Query( $args );
                        $i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i <=2):	                                   
			                   			?>
			                   				<div class='col-4'>
				                   				<div class='lead-post-box'>
					                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
					                                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
					                                <?php 
						                                $content=get_the_content();
						                                $content_20word=wp_trim_words($content,30);
					                                ?>	
					        
					                                <p><?php _e($content_20word); ?></p>
				                            	</div>
			                            	</div>
			                   			                           	
			                   			<?php
	                                 endif;	


	                                 if($i==3):

	                            ?>	                            
	                        		<div class='col-4'>

	                            <?php     
	                                 endif;	
	                                 if($i>2):
	                            ?>
		                        			<div class='row inner-row'>
		                        				<div class='col-6'>
	                        						<a href="<?php the_permalink();?>">
					                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
					                                </a>
		                        				</div>
		                        				<div class='col-6'>
					                                <a href="<?php the_permalink();?>">
					                                	<?php the_title(); ?>           		
					                                </a>
				                            	</div>
				                            </div>
			                            
		                            	
	                           	<?php
	                           		endif;                            	

	                            }

                    		
                    		_e("</div>");
                    		_e("</div>");
                	_e("</div>");
                    endif; 
                    wp_reset_postdata();
            }
        }
/*+++++++++++++++++++End get_post_with_left_two_lead_post_and_post_thumb_at_teft++++++++++++++++++++*/



/*+++++++++++++++++++++get_post_with_post_thumb_on_top++++++++++++++++++++++++++++++*/
function get_post_with_post_thumb_on_top($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){


			 if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id);                          
                   
                   	 _e("<div class='".$div_class."' style='background:#ffffff; border:1px solid #EFF5F9' >");
		                   _e ("<div class='box-container'>");
		                   _e ("<div class='row cat-img-containe'>");
			                   _e("<div class='cat-img-container' style='width:100%;'> ");
			                   			_e("<a href='".$category_link ."'><span> <h2 class='cat-title' style='background:".$title_bg_color_code."'>". get_cat_name($cat_id) ."</h2> </span></a>");
			                           
			                   _e("</div>");
		                   	_e("</div>");
                            

		                  _e("<div class='row post-box-container'>");
		                  _e("<div class='col-12'>");
		                  _e("<div class='row'>");

	                            $query = new WP_Query( $args );

	                            	$i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                  if($i%2==0):
	                                  		_e("</div>");
	                                  		_e("<div class='row'>");
	                                  endif;	

	                            ?>
	                            	
		                            
			                            	<div class='single-post-box'>
				                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
				                                <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
			                            	</div>
			                            
			                           	
	                           	<?php
	                                  $i++;
	                           		
	                            	
	                                }
                    		
                    		_e("</div>");
                    		_e("</div>");
                    		_e("</div>");

                    echo "</div>";
                    echo "</div>";
                    endif; 
                    wp_reset_postdata();
            }

        
        }
/*+++++++++++++++++++++End get_post_with_post_thumb_on_top ++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_with_left_lead_post_and_post_thumb_on_top++++++++++++++++++++++++++++++*/
function get_post_with_left_lead_post_and_post_thumb_on_top($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code){

        if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name = get_cat_name ( $cat_id);  
                    $category_link = get_category_link ( $cat_id);  
                    ?>
                    <div class="<?php _e($div_class);?>">
                    	<div class="col-12 cat-post-container" style="background:<?php _e($title_bg_color_code);?> ">
                    		<div class="row">
	                    		<div class="col-12">
		                    		<div class="category-title" >
		                    			<a href="<?php $category_link; ?>">
				                    				<?php _e( $cat_name); ?>
		                    			</a>
		                    		</div>
	                    		</div>
	                    	</div>
                    		<div class="row post-box-container">


                    <?php   
                        $query = new WP_Query( $args );
                        $i=0;

	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    if($i==1):	                                   
			                   			?>
			                   				<div class='col-6'>
				                   				<div class='lead-post-box'>
					                                <a href="<?php the_permalink();?>"><img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
					                                <h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
					                                <?php 
						                                $content=get_the_content();
						                                $content_20word=wp_trim_words($content,20);
					                                ?>	
					        
					                                <p><?php _e($content_20word); ?></p>
				                            	</div>
			                            	</div>
			                   				<div class='col-6'>
				                   				<div class='row'>                            	
			                   			<?php
	                                 endif;	
	                                 if($i>1):
	                            ?>
			                            	<div class='single-post-box'>
				                                <a href="<?php the_permalink();?>">
				                                	<img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
				                                </a>
				                                <a href="<?php the_permalink();?>">
				                                	<?php the_title(); ?>           		
				                                </a>
			                            	</div>
		                            	
	                           	<?php
	                           		endif;                            	

	                            }
			                    			_e("</div>");
			                    		_e("</div>");
                    		_e("</div>");

                		_e("</div>");
                	_e("</div>");
                    endif; 
                    wp_reset_postdata();
            }
        }
/*+++++++++++++++++++++End get_post_with_left_lead_post_and_post_thumb_on_top ++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_by_cat_with_cat_name_and_cat_img++++++++++++++++++++++++++++++*/

function get_post_by_cat_with_cat_name_and_cat_img( $cat_id, $post_no,$div_class){

       // if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                      $category_link = get_category_link ( $cat_id);
                      $category_name = get_cat_name($cat_id);
                      $cat_image_id = get_term_meta ( $cat_id, 'category-image-id', true );
                      $cat_img_url = wp_get_attachment_image_url($cat_image_id, 'large'); 
                    ?>
                      <div class="<?php _e($div_class); ?>">
                          <div class="first-letter-design"> 
                            <a href="<?php _e($category_link); ?>"> 
                              <h4 class="cat-title" > 
                                <?php _e($category_name); ?> 
                              </h4>
                            </a>   
                          </div>
                          <div class="col-12" style="padding:0px; margin-bottom: 8px;">
                            <a href="<?php _e($category_link); ?>"> <img src="<?php _e($cat_img_url); ?>" width="100%"> </a>
                          </div>
                          <div class="col-12" style="padding:10px;">
                                <?php

                                      $query = new WP_Query( $args );
                                        $i=0;
                                      if ( $query->have_posts() ) :
                                              while ( $query->have_posts() ) {
                                                  $query->the_post(); 
                                           if($i ==0):
                                      ?>
                                          <a href="<?php the_permalink();?>" style="font-size: 1.4em;"><?php the_title(); ?></a>
                                      <?php 
                                           else:                                          
                                          ?>
                                            <p>
                                              <img src="/wp-content/themes/news-theme/images/icons/list-box-img.png"> 
                                              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                            </p>                                    
                                  <?php
                                          endif;
                                        $i++;
                                      }?>
                                        <a href="<?php _e($category_link); ?>" style="color:#0c5460; font-weight: 600;"><?php _e("আরো..."); ?></a>
                                      <?php
                                                         
                              endif; 
                        echo "</div>";
                        echo "</div>";
                  
                    wp_reset_postdata();
           // }
        }/*end function*/
/*+++++++++++++++++++++End get_post_by_cat_with_cat_name_and_cat_img++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_psot_by_cat_with_post_formate++++++++++++++++++++++++++++++*/
function get_psot_by_cat_with_post_formate($post_formate, $cat_id, $post_no,$div_class){

        if ( has_post_format($post_formate) ):          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name = get_cat_name ( $cat_id);
                    $category_link = get_category_link ( $cat_id);
                    $key=0;         
                   	
                   	$query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                    ?>
                	<div class="<?php _e($div_class);?>">
                   		<div class="col-sm-12 cat-post-container" style='background:#ffffff; border:1px solid #EFF5F9;'> 
			             	<div class="list-group list-group-flush">
			             		<a href="<?php _e($category_link);?>" class="list-group-item list-group-item-action list-group-item-dark category-title">
                    					<?php _e($cat_name);?>
                				</a>
                    <?php


                        while ( $query->have_posts() ):
                            $query->the_post();                    
                        	$key++;
							$engNumber = array(1,2,3,4,5,6,7,8,9,0);
							$bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
							$converted_bng_num = str_replace($engNumber, $bangNumber, $key);
                    ?>  
		            
		               	<a href="<?php the_permalink();?>" class="list-group-item list-group-item-action">              
			                <span class="<?php if($key>9): _e('double-number-point'); else: _e('single-number-point');  endif;?>" ><?php _e($converted_bng_num); ?></span> <?php the_title(); ?>          
			            </a>


                   	<?php
                        endwhile;                   
                   			_e("</div>");
                      _e("</div>");
                    _e("</div>");
                    endif; 
                    wp_reset_postdata();
        endif;
   }/*end function*/
/*+++++++++++++++++++++End get_psot_by_cat_with_post_formate++++++++++++++++++++++++++++++*/



/*++++++++++++++++++++++++  get_single_post_each_category+++++++++++++++++++++++++*/

function get_single_post_each_category($cat_id, $post_no,$div_class){

                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $cat_name      = get_cat_name($cat_id);
                    $category_link = get_category_link ( $cat_id);
                                           

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                ?>
                                    <div class="<?php _e($div_class); ?>">
                                       <div class="row">
                                          <div class="col-12">
                                            <div style="width: 100%">
                                                <a href="<?php the_permalink();?>"> 
                                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" >
                                                </a>
                                            </div>          
                                          </div>
                                          
                                            <div class="col-12" >
                                                <div style="width: 100%; padding: 2%; text-align: left; background: #fff;">
                                                    <p>
                                                        <a href="<?php the_permalink();?>" style="font-size: 1.4em; font-weight: 600;"> 
                                                             <?php the_title(); ?> 
                                                        </a>
                                                    </p>      
                                                    <a href="<?php _e($category_link); ?>">
                                                        <span class="left-stick"></span> 
                                                        <span><?php _e($cat_name); ?></span>
                                                    </a>
                                                </div>
                                            </div>                                          
                                       </div>
                                    </div>
                                <?php
                                   }
                           
                    endif; 
                    wp_reset_postdata();
            

}
/*++++++++++++++++++++++++++++++++++End get_category_that_have_post++++++++++++++++++++++++++++++++++++++++*/