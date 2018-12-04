<?php  get_header(); ?>

<?php

      $first_ad = get_field('first_ad');
      $second_ad = get_field('second_ad');
      $third_ad = get_field('third_ad');
      $fourth_ad = get_field('fourth_ad');
      $fifth_ad = get_field('fifth_ad');

      $first_ad_img = $first_ad['url'];
      $second_ad_img = $second_ad['url'];
      $third_ad_img = $third_ad['url'];
      $fourth_ad_img = $fourth_ad['url'];
      $fifth_ad_img = $fifth_ad['url'];
      

?>

<!-- ++++++++++++First content++++++++++++ -->


  <div class="row each-row">
        <?php 
             //get_lead_post_by_cat_with_post_img($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code);
             //get_lead_post_by_cat_with_post_img('aside', 2 , 6, 'col-sm-5','#C2C2C2');

             get_lead_post_by_cat_with_post_img_and_title('aside', 2 , 6, 'col-sm-7','#C2C2C2');   
                     
            //get_post_by_special_cat_with_post_title_and_content_and_img( $cat_id, $post_no,$div_class);
            //get_post_by_special_cat_with_post_title_and_content_and_img(2 , 1, 'col-sm-12');

            //get_post_slider($cat_id, $post_no,$div_class);
            get_post_slider(7, 10, 'col-sm-5');
        ?>

  </div>




    <!-- Add section -->
        <?php if ( $second_ad_img !=""): ?>
          <div class="row each-row"> 
                <div class="col">
                      <img class="img-fluid" src="<? echo  $second_ad_img; ?>" width="100%" >
                </div>
            </div>   
        <?php endif; ?>
    <!-- End Add section -->

    <!-- Add section -->
        <?php if ( $third_ad_img !=""): ?>
          <div class="row each-row"> 
                <div class="col">
                      <img class="img-fluid" src="<? echo  $third_ad_img; ?>" width="100%" >
                </div>
            </div>   
        <?php endif; ?>
    <!-- End Add section -->

    <!-- Add section -->
        <?php if ( $fourth_ad_img !=""): ?>
          <div class="row each-row"> 
                <div class="col">
                      <img class="img-fluid" src="<? echo  $fourth_ad_img; ?>" width="100%" >
                </div>
            </div>   
        <?php endif; ?>
    <!-- End Add section -->

    <!-- Add section -->
        <?php if ( $fifth_ad_img !=""): ?>
          <div class="row each-row"> 
                <div class="col">
                      <img class="img-fluid" src="<? echo  $fifth_ad_img; ?>" width="100%" >
                </div>
            </div>   
        <?php endif; ?>
    <!-- End Add section -->
    
    <!-- Add section -->
        <?php if ( $first_ad_img !=""): ?>
            <div class="row each-row"> 
                <div class="col">
                      <img class="img-fluid" src="<? echo  $first_ad_img; ?>" width="100%" >
                </div>
            </div>   
        <?php endif; ?>
    <!-- End Add section -->


<div class="row each-row">       
     <!-- ++Left coll++ -->
    
          <?php
              get_post_with_left_lead_lead_news('aside',3 , 13, 'col-sm-8','#f2f2f2' );               
              //get_post_with_left_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f2f2f2' );

          ?>
      
     
     <!-- ++Left coll++ -->
      

      <!-- ++Right coll++ -->
      <div class="col-sm-4">
          <ul class="nav nav-pills">
            <li class="nav-item" style="width: 50%; text-align: center;">
              <a class="nav-link active" data-toggle="pill" href="#last_news">সর্বশেষ সংবাদ</a>
            </li>
            <li class="nav-item" style="width: 50%; text-align: center;">
              <a class="nav-link" data-toggle="pill" href="#recent_post">সর্বাধিক পঠিত</a>
            </li>
           
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane container active" id="last_news">
              <?php get_recent_post_function(10); ?>
            </div>
            <div class="tab-pane container fade" id="recent_post">
              <?php get_most_view_post(10); ?>      
            </div>

          </div>
        
      </div>
      <!-- ++Right coll++ -->
</div>

  <div class="row each-row">
      <!-- ++Left coll++ -->
     <div class="col-sm-12 left-column">                
                  <div class="row each-row">
                        <?php
                          // get_lead_post_by_cat_with_img_with_formate($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code)
                         get_lead_post_by_cat_with_img_with_formate('aside', 4 , 6, 'col-sm-8','#fff');


                         //get_special_two_post($cat_id, $post_no, $div_class)
                         get_special_two_post(90, 2, "col-sm-4")
                         ?>
                 </div>
                  <div class="row each-row">
                      <?php
                          //get_lead_post_with_lead_content_and_img($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
                          get_lead_post_with_lead_content_and_img('aside',6 , 5, 'col-sm-8','#f20000' );
                      ?>

                      <div class="col-sm-4">
                          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbangladesh24production%2F%3Fref%3Daymt_homepage_panel&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=269412256939285" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                      </div>
                  </div>        
                 <div class="row each-row">
                     <?php
                         //get_post_with_left_two_lead_post_and_post_thumb_at_teft($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);                              
                          get_post_with_left_two_lead_post_and_post_thumb_at_teft('aside',7 , 6, 'col-sm-8','#f2f2f2' );
                      ?>

                      <div class="col-sm-4">
                            <h3 style="text-align: center;"> নামাজ এর সময় সূচী</h3>
                            <?php dynamic_sidebar( 'prayer_time' ); ?>

                      </div>

                  </div>
         
            <!-- ++ End Left coll++ -->             
      </div>

<!-- ++++++++++++First content++++++++++++ -->




    <div class="row each-row">
        <?php
            
            //get_post_with_top_lead_post_and_post_thumb_on_top($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
            //get_post_with_top_lead_post_and_post_thumb_on_top('aside',5 , 3, 'col-sm-4','#f20000' );            
            //get_post_with_post_thumb_on_top($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);

            get_post_with_post_thumb_on_top('aside',5 , 4, 'col-sm-4','#f20000' );

            //get_post_with_left_lead_post_and_post_thumb_on_top($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);                        
            get_post_with_left_lead_post_and_post_thumb_on_top('aside',86, 5, 'col-sm-4','#f2f2f2' ); 

             //get_post_by_post_formate_and_cat_with_catimg_and_title_bgc($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
            //get_post_by_post_formate_and_cat_with_catimg_and_title_bgc('aside',8 , 5, 'col-sm-3','#f20000' );

            

            // get_lead_post_by_cat_with_cat_img($cat_id, $post_no,$div_class)
            //get_lead_post_by_cat_with_cat_img(3 , 4, 'col-sm-8');                                      
            
            /*get_post_with_top_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f20000' );                                      
            get_post_with_top_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f20000' );*/

                                             
        ?>
        
    </div>


    <div class="row each-row"> 
        <?php  
            //get_post_by_cat_with_cat_name_and_cat_img($cat_id, $post_no,$div_class);
            get_post_by_cat_with_cat_name_and_cat_img(8 , 5, 'col-sm-3');
            get_post_by_cat_with_cat_name_and_cat_img(85 , 5, 'col-sm-3');
            get_post_by_cat_with_cat_name_and_cat_img(94 , 5, 'col-sm-3');
            get_post_by_cat_with_cat_name_and_cat_img(15 , 5, 'col-sm-3');
        ?>
    </div>


    <div class="row each-row">     
          <?php get_psot_by_cat_with_post_formate('aside',9 , 5, 'col-sm-3'); ?>
          <?php get_psot_by_cat_with_post_formate('aside',89 , 5, 'col-sm-3'); ?>
          <?php get_psot_by_cat_with_post_formate('aside',10 , 5, 'col-sm-3'); ?>
          <?php get_psot_by_cat_with_post_formate('aside',88 , 5, 'col-sm-3'); ?>
    </div>
    
    <div class="row each-row" style="margin-bottom: 20px; ">
        <?php
          //get_post_by_post_formate_and_cat_with_catimg_and_title_bgc($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
           //get_post_by_post_formate_and_cat_with_catimg_and_title_bgc('aside',8 , 5, 'col-sm-3','#f20000' );

                         
           /* get_post_with_left_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f2f2f2' );               
            get_post_with_left_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f2f2f2' );*/                
                         
        ?>
    </div> 


    <div class="row each-row">
        <?php 
            //get_single_post_each_category($cat_id, $post_no, $div_class);
            get_single_post_each_category(84, 1, 'col');
            get_single_post_each_category(85, 1, 'col');
            get_single_post_each_category(15, 1, 'col');
            get_single_post_each_category(11, 1, 'col');
            get_single_post_each_category(87, 1, 'col');

        ?> 
    </div>
    <div class="row each-row">
        <?php 
            //get_single_post_each_category($cat_id, $post_no, $div_class);
            //get_single_post_each_category(90, 1, 'col');
            get_single_post_each_category(127, 1, 'col');
            get_single_post_each_category(16, 1, 'col');
            get_single_post_each_category(91, 1, 'col');
            get_single_post_each_category(92, 1, 'col');
            get_single_post_each_category(93, 1, 'col');

        ?> 
    </div>



  </div>

<?php  get_footer(); ?>