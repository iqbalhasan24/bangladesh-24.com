<?php
/**
 * The template for displaying the footer
 *
 */
?>

<!--+++++++++++++++++Footer Section ++++++++++++++++++++++-->

<div class="row footer-row">
  <!-- <section class="footer" style="float: left; width: 100%;"> -->
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


    <div class="col-12 footer-widget-area">
        সম্পাদক <br>
		খন্দকার মোজাম্মেল হক<br>
		সহসভাপতি, ঢাকা সাংবাদিক ইউনিয়ন (ডিইউজে)<br>
		১০৯, ডি.আই.টি. রোড, ৪র্থ তলা (পশ্চিম পার্শ্বে), মালিবাগ, ঢাকা-১২১৭।<br>
		ফোন: +৮৮০-২-৪৮৩২১৫৪৭<br>
		ইমেইল: info@bangladesh-24.com
    </div>
    <div class="col-12 footer-menu-area">
        footer-menu-area
    </div>


    <div class="col-12 footer-bottom">
      <span class="footer-copy-right">© <?php _e(date("Y")); ?> - <?php bloginfo('name'); ?>. All Rights Reserved.
      </span>

      <span class="designer">Website Design & Development By : <a href="mailto:iqbalhasanms@gmail.com">Iqbal Mahmud Hasan</a></span>
    </div>

  <!-- </section> -->
</div>

<!--+++++++++++++++++Footer Section ++++++++++++++++++++++-->



</div>



<!--++++++++++++++++++Menu Script++++++++++++++++++++++-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	
		<script>
			/* ++++++++++++++++ jQuery for primary-menu ++++++++++++++++++++++++ */
		  	$('.primary-menu .menu-item').addClass('nav-item');
		  	$( '.primary-menu .menu-item > a' ).attr({'class':"nav-link"});
		  	$('.primary-menu .menu-item-has-children').addClass('dropdown');
		  	$('.primary-menu .menu-item-has-children > a').addClass('dropdown-toggle');
		  	$('.primary-menu .menu-item-has-children > a' ).attr({'href':"#", 'id':"navbardrop", 'data-toggle':"dropdown" ,'aria-expanded':"true"});
		  	$('.primary-menu .menu-item-has-children > ul').addClass('dropdown-menu');
		  	$('.primary-menu .menu-item-has-children > ul li a').removeClass('nav-link');
		  	$('.primary-menu .menu-item-has-children > ul li a').addClass('dropdown-item');
		  	$('.primary-menu .menu-item-has-children > ul').click(function(){
				    $(this).addClass("show");
				});
			/* ++++++++++++++++ End jQuery for primary-menu ++++++++++++++++++++++++ */



			/* ++++++++++++++++++jQuery for Slide text ++++++++++++++++++++++++ */
			$(document).ready(function(){
			        var div_width = "";
			        div_width += $("#headlines > .headlines-tag").width() + 20;
			        div_width += 'px';
					$(".slide-text").css({"position":"absolute","left":div_width});
						  
			});
			/* ++++++++++++++++ End jQuery for Slide text ++++++++++++++++++++++++ */



		  	
		  	

		  /*$('.dropdown > ul').addClass('dropdown-menu show');*/
		  	
		  	/*$('.menu-item-has-children').addClass('dropdown');
		  	$( ".menu-item-has-children > a" ).attr({'class':"dropdown-toggle", 'data-toggle':"dropdown", role:"button", 'aria-haspopup':"true", 'aria-expanded':"false"});
		  	$('.sub-menu').addClass('dropdown-menu'); 

		  	$(document).ready(function() {
			    $('.navbar a.dropdown-toggle').on('click', function(e) {
			        var $el = $(this);
			        var $parent = $(this).offsetParent(".dropdown-menu");
			        $(this).parent("li").toggleClass('open');

			        if(!$parent.parent().hasClass('nav')) {
			            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
			        }

			        $('.nav li.open').not($(this).parents("li")).removeClass("open");

			        return false;
			    });
			});*/
			
		</script>

<!--+++++++++++++++End Menu Script+++++++++++++++++++++-->
	
<style type="text/css">
	

	.footer{
			
		}
		.footer-widget-area{
			
			background: #000000;
			color: #ffffff;
			padding: 3% 2%;
			text-align: center;

		}
		.footer-menu-area{

	
			
			background: #2C2C2C;
			color: #ffffff;
			padding: 3% 2%;
			text-align: center;
		}

		.footer-bottom{ 
			background: #000000;
			color: #ffffff;
			text-align: center;
			padding: 2%;
			}
		.footer-copy-right{
			float: left;
		}
		.designer{
			float: right;
		}












.share-button {
    background: black;
    color: white;
    border-radius: 2px;
    padding: .5em;
    text-decoration:none;
}
.share-button:before {margin-right:.5em;}
.share-button.icon-facebook {background:#4867aa;}
.share-button.icon-twitter {background:#5ea9dd;}
.share-button.icon-google-plus {background:#db4b40;}


		


</style>



<?php wp_footer(); ?>

</body>
</html>
