<?php
/*+++++++++++++++++++++get_post_by_post_formate_and_cat_with_catimg_and_title_bgc++++++++++++++++++++++++++++++*/
function get_post_slider($cat_id, $post_no,$div_class){
?>

<div class="<?php echo $div_class; ?>" >          
           <div id="lead_news" class="carousel slide" data-ride="carousel">

  <?php 
 $args = array(
                        'posts_per_page'  => $post_no,
                        //'posts_per_page'  => 5,
                        //'cat'           => $cat_id,
                        //'cat'           => 7,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );
                     $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) :
                             _e("<div class='carousel-inner'>");
                                $i=0;
                                  while ( $query->have_posts() ) {
                                      $query->the_post();
                              ?>
                       
                                
                                 <div class="carousel-item  <?php if($i==0): echo('active'); endif; ?>" style="min-height: 300px; background: #000; opacity: .6;">
                                   <span style="width: 100%; position: relative;"></span> <a href="<?php the_permalink(); ?> "> 
                                        <?php the_post_thumbnail('slider-size');  //echo get_the_post_thumbnail_url();?> 
                                    </a>
                                    <a href="<?php the_permalink();?>" style="color:#ffffff; font-size: 1.2em; font-weight: 550;">
                                    <span style="position: absolute; top:55%; background: #f60000; width: 96%; margin-left:2%; padding-top: 1%;  opacity: .9; color: ">
                                        <p style=" text-align: center;"> 
                                             <?php the_title(); ?> 
                                        </p>
                                    </span>
                                  </a>
                                 </div>   
                              <?php
                               
                            
                                $i++;
                                  }
                                _e("</div>");

                             endif; 
                            

?>
    
              <a class="carousel-control-prev" href="#lead_news" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#lead_news" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
    </div>
  </div> 
  <?php wp_reset_postdata(); ?>

<?php } ?>
