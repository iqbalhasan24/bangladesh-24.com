<?php

/*+++++++++++++++++++++get_lead_post_by_cat_with_cat_img++++++++++++++++++++++++++++++*/
function get_lead_post_by_cat_with_cat_img($cat_id, $post_no,$div_class){                 
                  
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    
                    $cat_name = get_cat_name ( $cat_id);
                    $category_link = get_category_link ( $cat_id);
                    $cat_image_id = get_term_meta ( $cat_id, 'category-image-id', true );
                    $cat_url = wp_get_attachment_image_url($cat_image_id, 'large');  
                    $key=0;         
                    
                    $query = new WP_Query($args);
                    if ( $query->have_posts() ) :
                    ?>
                  <div class="<?php _e($div_class); ?> lead-container">
                    <div class="col-12 cat-post-container">
                          <div class="row">
                              <div class="col-12" >
                                <div class="lead-title" >
                                     <?php
                                          while ( $query->have_posts() ): $query->the_post();
                                          $key++;
                                          if($key==1):
                                      ?>                                      
                                        <a href="<?php the_permalink();?>">  
                                            <?php the_title(); ?> 
                                        </a>
                                      <?php endif; endwhile;  wp_reset_postdata(); ?> 
                                  </div>
                                </div>  
                          </div>


                        <div class="row">
                            <div class="col-5">
                                <a href="<?php _e($cat_url ); ?>"><img class="mx-auto" src="<?php _e($cat_url);?>" width="100%"> </a>
                            </div>

                                <div class="col-7"> 
                                    <?php
                                        while ( $query->have_posts() ): $query->the_post();
                                            $key++;                            
                                            if($key > ($post_no+1) ):
                                    ?>
                                     <a href="<?php the_permalink();?>" class="title-text">  <?php the_title(); ?> </a>
                                  <?php
                                          endif;
                                      endwhile; 
                              _e("</div>");
                        _e("</div>");
                    _e("</div>");
                    _e("</div>");
                    endif; 
                    wp_reset_postdata();
      
   }/*end function*/
/*+++++++++++++++++++++End get_post_by_cat_with_cat_img++++++++++++++++++++++++++++++*/

/*+++++++++++++++++++++get_psot_by_cat++++++++++++++++++++++++++++++*/
function get_psot_by_cat($cat_id, $post_no,$div_class){                 
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
                   		<div class="col-sm-12 cat-post-container"> 
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
      
   }/*end function*/
/*+++++++++++++++++++++End get_psot_by_cat++++++++++++++++++++++++++++++*/


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





/*+++++++++++++++++++++get_lead_post_by_cat_with_img++++++++++++++++++++++++++++++*/


/*+++++++++++++++++++++End get_lead_post_by_cat_with_img++++++++++++++++++++++++++++++*/



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
                    <div class="<?php _e($div_class);?>" style="background:<?php _e($title_bg_color_code);?> ; border:1px solid #EFF5F9; padding-top:10px;">
                        <div class="row each-row">
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







/*+++++++++++++++++++++get_post_by_special_cat_with_post_title_and_content_and_img++++++++++++++++++++++++++++++*/

function get_post_by_special_cat_with_post_title_and_content_and_img( $cat_id, $post_no,$div_class){

       // if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        //'order'       => 'DESC',
                        'order'       => 'ASC',
                    );

                      $category_link = get_category_link ( $cat_id);
                      $category_name = get_cat_name($cat_id);
                      $cat_image_id = get_term_meta ( $cat_id, 'category-image-id', true );                      
                    ?>
                      <div class="<?php _e($div_class); ?>">
                        <div class="col-12" style="position: relative;">
                             <img class="img-responsive" style="width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">           
                                <?php
                                      $query = new WP_Query( $args );
                                      
                                      if ( $query->have_posts() ) :
                                              while ( $query->have_posts() ) {
                                                  $query->the_post();  

                                                  $content=get_the_content();
                                                  $title=get_the_title();
                                                  $content_20word=wp_trim_words($content,15);  
                                                  $content_text=str_replace(" ","</span> &nbsp; <span>", $content_20word);        
                                                  $title_text=str_replace(" ","</span> &nbsp; <span>", $title);        
                                          ?>
                                            <p class="special-text col-12"  style="position: absolute;top:5%; width: 96%; margin-left: 2%;">
                                                <a href="<?php the_permalink();  ?>"> 
                                                    <span> <?php _e($title_text); ?> </span>
                                                </a> 
                                            </p>  

                                            <p class="special-text col-12"  style="position: absolute;bottom:5%; width: 96%; margin-left: 2%; text-align: left; ">
                                                <a href="<?php the_permalink(); ?>" style="color:#0c5460; font-weight: 600;">
                                                  <span> <?php _e($content_text); ?> </span>    
                                                </a>
                                            </p>                                  
                                  <?php                                   
                                    
                                     }
                                                         
                              endif; 


                        echo "</div>";
                        echo "</div>";
                  
                    wp_reset_postdata();
           // }
        }/*end function*/
/*+++++++++++++++++++++End get_post_by_special_cat_with_post_title_and_content_and_img++++++++++++++++++++++++++++++*/