
      </div>
         </div>
         <footer class="footer--section">
            <div class="footer--widgets pd--30-0 bg--color-2">
               <div class="container">
                  <div class="row AdjustRow">
                     <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                           <div class="widget--title">
                              <h2 class="h4">About Us</h2>
                              <i class="icon fa fa-exclamation"></i> 
                           </div>
                           <div class="about--widget">
                              <div class="content">
                                 <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium laborum et dolorum fuga.
                                 </p>
                              </div>
                              <div class="action"> 
                                 <a href="#" class="btn-link">Read More<i class="fa flm fa-angle-double-right"></i></a> 
                              </div>
                              <ul class="nav">
                                 <li> <i class="fa fa-map"></i> <span>143/C, Fake Street, Melborne, Australia</span> </li>
                                 <li> <i class="fa fa-envelope-o"></i> <a href="../../../../external.html?link=http://themelooks.us/cdn-cgi/l/email-protection#2d48554c405d41486d48554c405d4148034e4240"><span class="__cf_email__" data-cfemail="ed88958c809d8188ad88958c809d8188c38e8280">[email&#160;protected]</span></a> </li>
                                 <li> <i class="fa fa-phone"></i> <a href="tel:+123456789">+123 456 (789)</a> </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                           <div class="widget--title">
                              <h2 class="h4">Usefull Info Links</h2>
                              <i class="icon fa fa-expand"></i> 
                           </div>
                           <div class="links--widget">
                              <ul class="nav">
                                 <li><a href="#" class="fa-angle-right">Gadgets</a></li>
                                 <li><a href="#" class="fa-angle-right">Shop</a></li>
                                 <li><a href="#" class="fa-angle-right">Term and Conditions</a></li>
                                 <li><a href="#" class="fa-angle-right">Forums</a></li>
                                 <li><a href="#" class="fa-angle-right">Top News of This Week</a></li>
                                 <li><a href="#" class="fa-angle-right">Special Recipes</a></li>
                                 <li><a href="#" class="fa-angle-right">Sign Up</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                           <div class="widget--title">
                              <h2 class="h4">Advertisements</h2>
                              <i class="icon fa fa-bullhorn"></i> 
                           </div>
                           <div class="links--widget">
                              <ul class="nav">
                                 <li><a href="#" class="fa-angle-right">Post an Add</a></li>
                                 <li><a href="#" class="fa-angle-right">Adds Renew</a></li>
                                 <li><a href="#" class="fa-angle-right">Price of Advertisements</a></li>
                                 <li><a href="#" class="fa-angle-right">Adds Closed</a></li>
                                 <li><a href="#" class="fa-angle-right">Monthly or Yearly</a></li>
                                 <li><a href="#" class="fa-angle-right">Trial Adds</a></li>
                                 <li><a href="#" class="fa-angle-right">Add Making</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                        <div class="widget">
                           <div class="widget--title">
                              <h2 class="h4">Career</h2>
                              <i class="icon fa fa-user-o"></i> 
                           </div>
                           <div class="links--widget">
                              <ul class="nav">
                                 <li><a href="#" class="fa-angle-right">Available Post</a></li>
                                 <li><a href="#" class="fa-angle-right">Career Details</a></li>
                                 <li><a href="#" class="fa-angle-right">How to Apply?</a></li>
                                 <li><a href="#" class="fa-angle-right">Freelence Job</a></li>
                                 <li><a href="#" class="fa-angle-right">Be a Member</a></li>
                                 <li><a href="#" class="fa-angle-right">Apply Now</a></li>
                                 <li><a href="#" class="fa-angle-right">Send Your Resume</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer--copyright bg--color-3">
               <div class="social--bg bg--color-1">
               </div>
               <div class="container">
                  <p class="text float--left">&copy; 2017 <?php  bloginfo('name'); ?> All Rights Reserved.</p>
                  <ul class="nav social float--right">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

                     <?php if ( has_nav_menu( 'media-menu' ) ): ?>
            
                              <?php        
                                 
                                      $footer_menu_one = array(
                                       'theme_location'  => 'media-menu',                    
                                       'container'          => 'ul',
                                       'menu_class'      => 'media-menu',
                                       /*'before'           => '<ul>',
                                       'after'           => '</ul>',*/
                                       );
                                       wp_nav_menu($footer_menu_one);
                                    
                              ?>          
                        <?php endif; ?> 



                  </ul>
                  <ul class="nav links float--right">
                     <li><a href="#">Home</a></li>                  
                     <li><a href="mailto:iqbalhasanms@gmail.com">Support</a></li>
                  </ul>
               </div>
            </div>
         </footer>
      </div>
      <div id="stickySocial" class="sticky--right">
         <ul class="nav">
            <li> <a href="#"> <i class="fa fa-facebook"></i> <span>Follow Us On Facebook</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-twitter"></i> <span>Follow Us On Twitter</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-google-plus"></i> <span>Follow Us On Google Plus</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-rss"></i> <span>Follow Us On RSS</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-vimeo"></i> <span>Follow Us On Vimeo</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-youtube-play"></i> <span>Follow Us On Youtube Play</span> </a> </li>
            <li> <a href="#"> <i class="fa fa-linkedin"></i> <span>Follow Us On LinkedIn</span> </a> </li>
         </ul>
      </div>
      <div id="backToTop"> <a href="#"><i class="fa fa-angle-double-up"></i></a> </div>
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="/wp-content/themes/beaconbangla/js/jquery-3.2.1.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/bootstrap.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/jquery.sticky.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/jquery.hoverIntent.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/jquery.marquee.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/jquery.validate.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/isotope.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/resizesensor.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/theia-sticky-sidebar.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/jquery.zoom.min.js"></script> 
      <!-- <script src="/wp-content/themes/beaconbangla/js/jquery.barrating.min.js"></script>  -->
      <script src="/wp-content/themes/beaconbangla/js/jquery.countdown.min.js"></script> 
      <script src="/wp-content/themes/beaconbangla/js/retina.min.js"></script> 
      <script src="../../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script> 
      <script src="/wp-content/themes/beaconbangla/js/main.js"></script>
      
<?php wp_footer(); ?>
   </body>
   <!-- Mirrored from themelooks.us/demo/usnews/html/home-1-boxed.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] শুক্র, 07 ডিসেম্বর 2018 11:55:29 GMT -->
</html>