<?php get_header('home-page'); ?>


    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <section class="featured-post-area no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 pad-r">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                        <?php get_top_first_slider_post('aside', 2 , 10, 'col-sm-7','#C2C2C2');  ?>                     
                    </div><!-- Featured owl carousel end-->             
                </div><!-- Col 7 end -->
                <div class="col-lg-5 col-md-12 pad-l">
                    <div class="row">
                        <div class="col-md-12">
                            <?php get_top_second_sportligh_post(14, 1, 'hot-post-top');  ?> 
                        </div><!-- Col end -->

                        <div class="col-md-6 pad-r-small">
                            <?php get_top_second_sportligh_post(7, 1, 'hot-post-bottom');  ?>   
                            
                        </div><!-- Col end -->

                        <div class="col-md-6 pad-l-small">
                            <?php get_top_second_sportligh_post(6, 1, 'hot-post-bottom');  ?>   
                            
                        </div><!-- Col end -->
                    </div>
                </div><!-- Col 5 end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Trending post end -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <section class="block-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12">

                <!-- +++++++++++++++++++++++ -->
                    <div class="latest-news block color-red">
                        <h3 class="block-title"><span>সারাবাংলা</span></h3>
                        <div id="latest-news-slide-one" class="owl-carousel owl-theme latest-news-slide">
                            <?php get_some_post_form_single_cat(3, 12);  ?>
                            
                        </div><!-- Latest News owl carousel end-->
                    </div><!--- Latest news end -->
                    <!-- +++++++++++++++++++++++ -->
                    <div class="gap-50"></div>


                    <!--- Featured Tab startet -->
                    <div class="featured-tab color-blue">
                        <h3 class="block-title"><span>ফিচার</span></h3>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link animated fadeIn active" href="#tab_a" data-toggle="tab">
                                    <span class="tab-head">
                                        <span  style="font-size: 18px;" class="tab-text-title"> তথ্যপ্রযুক্তি</span>                    
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeIn" href="#tab_b" data-toggle="tab">
                                    <span class="tab-head">
                                        <span style="font-size: 18px;" class="tab-text-title">লাইফস্টাইল</span>                 
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeIn" href="#tab_c" data-toggle="tab">
                                    <span class="tab-head">
                                        <span style="font-size: 18px;" class="tab-text-title">আর্ট এন্ড কালচার</span>                   
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                          <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <div class="row">
                                    <?php get_post_for_tab_content(85,5); ?>
                            </div><!-- Tab pane Row 1 end -->
                          </div><!-- Tab pane 1 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_b">
                                <div class="row">
                                    <?php get_post_for_tab_content(86,5); ?>
                                </div><!-- Tab pane Row 2 end -->
                            </div><!-- Tab pane 2 end -->

                            <div class="tab-pane animated fadeInLeft" id="tab_c">
                                <div class="row">
                                    <?php get_post_for_tab_content(87,5); ?>
                                </div><!-- Tab pane Row 3 end -->
                                </div><!-- Tab pane 3 end -->   

                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->

                    <!-- ++++++++++++++++++++++++++++++++++++++ -->
                    <div class="gap-40"></div>
                    <div class="block color-orange">
                        <h3 class="block-title"><span>রঙ্গের দুনিয়া ও খেলা </span></h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                            <?php    
                                //get_double_cat_post_for_single_section( $cat_id, $post_no, $cat_po_class );
                                get_double_cat_post_for_single_section( 7, 5, '' );
                            ?>
                            </div><!-- Col 1 end -->                            

                            <div class="col-lg-6 col-md-6">
                                <?php   
                                    get_double_cat_post_for_single_section( 6, 5, 'last' );
                                ?>
                            </div><!-- Col 2 end -->
                        </div><!-- Row end -->
                    </div><!-- Block Lifestyle end -->
                    <!-- ++++++++++++++++++++++++++++++++++++++ -->
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="block-title"><span>Follow Us</span></h3>
                            <?php if ( has_nav_menu( 'top-media-menu' ) ): ?>               
                            <?php
                                $top_media_menu = array(
                                    'theme_location'    => 'top-media-menu',                            
                                    'container'         => 'ul',
                                    'menu_class'        => 'social-icon',
                                    'container_class'   => "", 
                                    'container_id'      => "",
                                    'before'            => "", 
                                    'after'             => "",
                                    'link_before'       => "<span class='social-icon'>", 
                                    'link_after'        => "</span>",
                                    );
                                    wp_nav_menu($top_media_menu);                           
                            ?>
                            <?php endif; ?> 
                        </div><!-- Widget Social end -->

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Popular News</span></h3>
                            <?php   // get_populer_post_by_cat( 5);     ?>


                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health4.jpg" alt="" />
                                    </a>
                                </div>
                                
                                <div class="post-content">
                                    <a class="post-cat" href="#">Health</a>
                                    <h2 class="post-title">
                                        <a href="#">Smart packs parking sensor tech and beeps when col…</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">Feb 06, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->


                            <div class="list-post-block">
                                <ul class="list-post">
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/gadget3.jpg" alt="" />
                                                </a>
                                                <a class="post-cat" href="#">Gadgets</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Mar 13, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" />
                                                </a>
                                                <a class="post-cat" href="#">Travel</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Hynopedia helps female travelers find health care...</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Jan 11, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 2 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/robot5.jpg" alt="" />
                                                </a>
                                                <a class="post-cat" href="#">Robotics</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Robots in hospitals can be quite handy to navigate around...</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 19, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 3 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food1.jpg" alt="" />
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->

                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div><!-- Popular news widget end -->

                        <div class="widget text-center">
                            <img class="banner img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-sidebar.png" alt="" />
                        </div><!-- Sidebar Ad end -->                       

                        <div class="widget color-default m-bottom-0">
                            <h3 class="block-title"><span>Photo Gallery</span></h3>

                            <div id="post-slide" class="owl-carousel owl-theme post-slide">
                                <div class="item">
                                    <div class="post-overaly-style text-center clearfix" data-toggle="modal" data-target="#myModal">
                                       <div class="post-thumb">
                                          <a href="#">
                                             <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/gadget1.jpg" alt="" />
                                          </a>
                                       </div><!-- Post thumb end -->

                                       <div class="post-content">
                                          <a class="post-cat" href="#">Gadgets</a>
                                          <h2 class="post-title">
                                             <a href="#">The best MacBook Pro alternatives in 2017 for Appl…</a>
                                          </h2>
                                          <div class="post-meta">
                                             <span class="post-date">Feb 06, 2017</span>
                                          </div>
                                       </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article 1 end -->                               

                                </div><!-- Item 1 end -->






                                <div class="item">

                                    <div class="post-overaly-style text-center clearfix">
                                       <div class="post-thumb">
                                          <a href="#">
                                             <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health5.jpg" alt="" />
                                          </a>
                                       </div><!-- Post thumb end -->

                                       <div class="post-content">
                                          <a class="post-cat" href="#">Health</a>
                                          <h2 class="post-title">
                                             <a href="#">Netcix cuts out the chill with an integrated perso…</a>
                                          </h2>
                                          <div class="post-meta">
                                             <span class="post-date">Feb 06, 2017</span>
                                          </div>
                                       </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article 3 end -->
                                </div><!-- Item 2 end -->
                            </div><!-- Post slide carousel end -->
                        </div><!-- Trending news end -->
                        <div class="gap-30"></div>  
                        <div class="widget text-center">
                            <img class="banner img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-sidebar.png" alt="" />
                        </div><!-- Sidebar Ad end -->


                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->


                                <!-- +++++++++++++++++++++++++Gallery Modal++++++++++++++++++++++++++++ -->
                                              <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">
                                                
                                                  <!-- Modal content-->
                                                  <div class="modal-content">                                                   
                                                  <div style="text-align: right;" >
                                                    <span style="padding: 5px;"  class="close" data-dismiss="modal"> &times;</span>
                                                     
                                                  </div>
                                                   
                                                    <div class="modal-body">
                                                      <p>Some text in the modal.</p>
                                                    </div>
                                                    
                                                  
                                                </div>
                                              </div>
                                              
                                            </div>
                                <!-- ++++++++++++++++++++++++++++End Gallery Modal+++++++++++++++++++++++++ -->

    <section class="ad-content-area text-center no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-content-one.jpg" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content top end -->

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <?php 
                    //get_single_cat_post_for_single_col( $cat_id, $post_no, $cat_bg_class );
                        get_single_cat_post_for_single_col( 5, 4, 'color-dark-blue' );
                     ?>                 
                </div><!-- Travel Col end -->

                <div class="col-lg-4">
                    <?php  get_single_cat_post_for_single_col( 15, 4, 'color-aqua' ); ?>
                    
                </div><!-- Gadget Col end -->

                <div class="col-lg-4">
                    <?php  get_single_cat_post_for_single_col( 88, 4, 'color-violet' ); ?>
                    
                </div><!-- Health Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 2nd block end -->

    <section class="block-wrapper video-block">
        <div class="container">
            <div class="row">
                <div class="video-tab clearfix">
                    <h2 class="video-tab-title">Watch Now</h2>
                    <div class="row">
                    <div class="col-lg-7 pad-r-0">
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeIn" id="video1">
                                <div class="post-overaly-style clearfix">
                                   <div class="post-thumb">
                                        <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video4.jpg" alt="" />
                                        <a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                      <div class="video-icon">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    </a>
                                   </div><!-- Post thumb end -->
                                   <div class="post-content">
                                      <a class="post-cat" href="#">Video</a>
                                      <h2 class="post-title">
                                         <a href="#">Is Running Good for You, Health Benefits of Morning Running</a>
                                      </h2>
                                   </div><!-- Post content end -->
                                </div><!-- Post Overaly Article end -->
                            </div><!--Tab pane 1 end-->

                            <div class="tab-pane animated fadeIn" id="video2">
                                <div class="post-overaly-style clearfix">
                                   <div class="post-thumb">
                                      <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video3.jpg" alt="" />
                                        <a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
                                      <div class="video-icon">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    </a>
                                   </div><!-- Post thumb end -->
                                   <div class="post-content">
                                      <a class="post-cat" href="#">Video</a>
                                      <h2 class="post-title title-medium">
                                         <a href="#">Breeze through 17 locations in Europe in this breathtaking video</a>
                                      </h2>
                                   </div><!-- Post content end -->
                                </div><!-- Post Overaly Article 2 end -->
                            </div><!--Tab pane 2 end-->

                            <div class="tab-pane animated fadeIn" id="video3">
                                <div class="post-overaly-style clearfix">
                                   <div class="post-thumb">
                                      <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video2.jpg" alt="" />
                                        <a class="popup" href="../../../external.html?link=https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
                                      <div class="video-icon">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    </a>
                                   </div><!-- Post thumb end -->
                                   <div class="post-content">
                                      <a class="post-cat" href="#">Video</a>
                                      <h2 class="post-title title-medium">
                                         <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
                                      </h2>
                                   </div><!-- Post content end -->
                                </div><!-- Post Overaly Article 2 end -->
                            </div><!--Tab pane 2 end-->
                            

                        </div><!-- Tab content end -->
                    </div><!--Tab col end -->

                    <div class="col-lg-5 pad-l-0">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link animated fadeIn" href="#video1" data-toggle="tab">
                                    <div class="post-thumb">
                                        <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video4.jpg" alt="" />
                                   </div><!-- Post thumb end -->
                                    <h3>Is Running Good for You, Health Benefits of Morning Running</h3>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeIn" href="#video2" data-toggle="tab">
                                    <div class="post-thumb">
                                      <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video3.jpg" alt="" />
                                   </div><!-- Post thumb end -->
                                    <h3>Breeze through 17 locations in Europe in this breathtaking video</h3>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated fadeIn" href="#video3" data-toggle="tab">
                                    <div class="post-thumb">
                                      <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/video/video2.jpg" alt="" />
                                   </div><!-- Post thumb end -->
                                    <h3>TG G6 will have dual 13-megapixel cameras on the back</h3>
                                </a>
                            </li>
                        </ul>
                    </div><!--Tab nav col end -->

                    </div>
                </div><!-- Video tab end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Video block end -->




    <!-- <a href="#" class="video" data-toggle="modal" data-target="#videoModal<?php //echo $id; ?>" data-video="<?php //echo $video; ?>">
        <img class="header-video-icon" src="https://www.conversica.com/downloads/2018/08/youtube-256.png" style="width: 60px;">
    </a> -->

    <!--Modal-->
         <div class="modal fade" id="videoModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button> <br/>
                          </div>
                            <iframe width="100%" height="550" src="" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    <!--End modal-->


    <section class="block-wrapper p-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <!-- +++++++++++++++++++++++ -->
                    <div class="latest-news block color-red">
                        <h3 class="block-title"><span>Latest News</span></h3>
                        <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                            <div class="item">
                                <ul class="list-post">                                  
                                    <?php get_latest_news_list(3, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(7, 1);  ?>                               
                                </ul><!-- List post 1 end -->
                            </div><!-- Item 1 end -->

                            <div class="item">

                                <ul class="list-post">
                                    <?php get_latest_news_list(4, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(13, 1);  ?>
                                </ul><!-- List post 2 end -->
                                
                            </div><!-- Item 2 end -->

                            <div class="item">
                                <ul class="list-post">
                                    <?php get_latest_news_list(3, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(7, 1);  ?>
                                </ul><!-- List post 3 end -->
                                
                            </div><!-- Item 3 end -->

                            <div class="item">
                                <ul class="list-post">
                                    <?php get_latest_news_list(4, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(13, 1);  ?>
                                </ul><!-- List post 3 end -->
                                
                            </div><!-- Item 4 end -->


                            <div class="item">
                                <ul class="list-post">
                                    <?php get_latest_news_list(3, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(7, 1);  ?>
                                </ul><!-- List post 3 end -->
                                
                            </div><!-- Item 5 end -->


                            <div class="item">
                                <ul class="list-post">
                                    <?php get_latest_news_list(4, 1);  ?>
                                    <div class="gap-30"></div>
                                    <?php get_latest_news_list(13, 1);  ?>
                                </ul><!-- List post 3 end -->
                                
                            </div><!-- Item 6 end -->

                            
                        </div><!-- Latest News owl carousel end-->
                    </div><!--- Latest news end -->
                    <!-- +++++++++++++++++++++++ -->


                
                    <div class="more-news block color-default">
                        <h3 class="block-title"><span>অন্যান্য</span></h3>
                        <div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">


                            <div class="item">
                                    <?php 
                                        //get_more_post_by_cat( $cat_id, $post_no); 
                                        get_more_post_by_cat( 16, 4); 

                                    ?>
                            </div><!-- Item 1 end -->
                            <div class="item">
                                    <?php get_more_post_by_cat( 128, 4); ?>
                            </div><!-- Item 2 end -->

                            <div class="item">
                                    <?php get_more_post_by_cat( 127, 4); ?>
                            </div><!-- Item 3 end -->

                            <div class="item">
                                    <?php get_more_post_by_cat( 129, 4); ?>
                            </div><!-- Item 2 end -->

                            <div class="item">
                                    <?php get_more_post_by_cat( 90, 4); ?>
                            </div><!-- Item 3 end -->
                            <div class="item">
                                    <?php get_more_post_by_cat( 94, 4); ?>
                            </div><!-- Item 2 end -->

                            <div class="item">
                                    <?php get_more_post_by_cat( 93, 4); ?>
                            </div><!-- Item 3 end -->

                            <div class="item">
                                    <?php get_more_post_by_cat( 91, 4); ?>
                            </div><!-- Item 2 end -->
                        
                        </div><!-- More news carousel end -->
                    </div><!--More news block end -->
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-sm-12">
                    <div class="sidebar sidebar-right">

                        <div class="widget color-default">
                            <h3 class="block-title"><span>Latest Reviews</span></h3>
                            <div class="list-post-block">
                                <ul class="list-post review-post-list">
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/review/review1.jpg" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Topical Resorts you need to know</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="review-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div><!-- Post meta end -->
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/review/review2.jpg" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Apple - MacBook Pro with Retina display</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="review-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 2 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/review/review3.jpg" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Asus ZenPad 3S 10 Z500M</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="review-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 3 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/review/review4.jpg" alt="" />
                                                </a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Polar M600 GPS Smart Sports Watch</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="review-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->

                                </ul><!-- List post end -->
                            </div><!-- List post block end -->
                        </div><!-- Latest Review Widget end -->

                        <div class="widget m-bottom-0">
                            <h3 class="block-title"><span>Newsletter</span></h3>
                            <div class="ts-newsletter">
                                <div class="newsletter-introtext">
                                    <h4>Get Updates</h4>
                                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                                </div>

                                <div class="newsletter-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                            <button class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Newsletter end -->
                        </div><!-- Newsletter widget end -->
                    </div><!--Sidebar right end -->
                </div><!-- Sidebar col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- 3rd block end -->

    <section class="ad-content-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-content-two.png" alt="" />
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Ad content two end -->

<?php get_footer('home-page'); ?>  