<?php get_header(); ?>

<!-- ++++++++++++First content++++++++++++ -->

<div class="container">

  <div class="row each-row">
      <!-- ++Left coll++ -->
     <div class="col-sm-8 left-column">
            <div class="row each-row">
                  <?php
                   //get_lead_post_by_cat_with_post_img($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code);
                   get_lead_post_by_cat_with_post_img('aside', 3 , 6, 'col-sm-12','#C2C2C2');
                   ?>
            </div>
            <div class="row each-row">
                  <?php
                    // get_lead_post_by_cat_with_img_with_formate($post_formate, $cat_id, $post_no,$div_class,$title_bg_color_code)
                   get_lead_post_by_cat_with_img_with_formate('aside', 3 , 6, 'col-sm-12','#fff');
                   ?>
            </div>
            <div class="row each-row">
                  <?php 
                      // get_lead_post_by_cat_with_cat_img($cat_id, $post_no,$div_class)
                      get_lead_post_by_cat_with_cat_img(3 , 4, 'col-sm-12'); 
                  ?>
            </div>





             <div class="row each-row">
                <?php
                   //get_post_with_left_two_lead_post_and_post_thumb_at_teft($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);                              
                    get_post_with_left_two_lead_post_and_post_thumb_at_teft('aside',3 , 6, 'col-sm-12','#f2f2f2' );
                ?>
            </div>












        <div class="row each-row">
            <?php
                //get_lead_post_with_lead_content_and_img($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
                get_lead_post_with_lead_content_and_img('aside',3 , 5, 'col-sm-12','#f20000' );
            ?>
        </div>



        <div class="row each-row 2nd-parent-column" style="margin-bottom: 20px; ">
            <?php
                //get_post_by_post_formate_and_cat_with_catimg_and_title_bgc($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
               get_post_by_post_formate_and_cat_with_catimg_and_title_bgc('aside',3 , 4, 'col-sm-4','#f20000' );               
               get_post_by_post_formate_and_cat_with_catimg_and_title_bgc('aside',3 , 4, 'col-sm-4','#f20000' );               
               get_post_by_post_formate_and_cat_with_catimg_and_title_bgc('aside',3 , 4, 'col-sm-4','#f20000' );               
                              
            ?>
        </div>
        <div class="row each-row 2nd-parent-column" style="margin-bottom: 20px; ">
            <?php
               //get_post_with_left_lead_post_and_post_thumb_on_top($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
                            
                get_post_with_left_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-6','#f2f2f2' );               
                get_post_with_left_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-6','#f2f2f2' ); 


                            
                             
            ?>
        </div> 

        




        <div class="row each-row">
            <?php
                //get_post_with_top_lead_post_and_post_thumb_on_top($post_formate,$catid,$post_no,$div_class,$title_bg_color_code);
                get_post_with_top_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f20000' );                                      
                get_post_with_top_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f20000' );                                      
                get_post_with_top_lead_post_and_post_thumb_on_top('aside',3 , 5, 'col-sm-4','#f20000' );                                      
                                                 
            ?>
        </div>






    </div>
      <!-- ++ End Left coll++ -->

      <!-- ++Right coll++ -->
      <div class="col-sm-4 right-column">
          <!-- ++++++++++++++++++++++++++++++++++++++++++++ -->
          <div class="col-12" style="margin:0px; padding: 0px;">
              <nav class="multi-tab">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="width: 50%;font-size: 1.3em;">সর্বশেষ সংবাদ</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="width: 50%; font-size: 1.3em;">সর্বাধিক পঠিত</a>
                  
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">      
                      <?php get_recent_post_function(10); ?>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <?php get_most_view_post(4); ?>
                  </div>
              </div>
          </div>
          <!-- ++++++++++++++++++++++++++++++++++++++++++++ -->
      </div>
      <!-- ++Right coll++ -->   
</div>
<!-- ++++++++++++First content++++++++++++ -->


<div class="row each-row">
      <?php get_psot_by_cat(3 , 6, 'col-sm-2'); ?>
      <?php get_psot_by_cat(3 , 6, 'col-sm-2'); ?>
      <?php get_psot_by_cat(3 , 6, 'col-sm-2'); ?>
      <?php get_psot_by_cat_with_post_formate('aside',3 , 6, 'col-sm-3'); ?>
      <?php get_psot_by_cat_with_post_formate('aside',3 , 6, 'col-sm-3'); ?>
</div>






</div>
<?php  get_footer(); ?>