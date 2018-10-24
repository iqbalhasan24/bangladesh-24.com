<?php
/**
 * The template for displaying the footer
 *
 */
?>

</div>


<!--+++++++++++++++++Footer Section ++++++++++++++++++++++-->
<div class="container-fluid">
<div class="row footer-row">
  <!-- <section class="footer" style="float: left; width: 100%;"> --> 
		<?php if ( has_nav_menu( 'media-menu' ) ): ?>
		    <div class="col-12 footer-social-media-menu">
		    	<?php    			
		 			
				        $footer_menu_one = array(
							'theme_location' 	=> 'media-menu',							
							'container'       	=> 'div',
							'menu_class'     	=> 'media-menu',
							'before'   			=> '<ul>',
							'after'   			=> '</ul>',
							);
							wp_nav_menu($footer_menu_one);
						
				?>
		    </div>
		<?php endif; ?>    


<?php if ( has_nav_menu( 'footer-menu-one' ) || has_nav_menu( 'footer-menu-two' ) || has_nav_menu( 'footer-menu-three' ) ): ?>
    <div class="col-12 footer-menu-area footer-wrapper" style="margin:0;">
    	 <div class="col-4">
    	 		<?php
    	 			if ( has_nav_menu( 'footer-menu-one' ) ):
				        $footer_menu_one = array(
							'theme_location' 	=> 'footer-menu-one',							
							'container'       	=> 'div',
							'menu_class'     	=> 'footer-menu footer-menu-one',
							'before'   			=> '<ul>',
							'after'   			=> '</ul>',
							);
							wp_nav_menu($footer_menu_one);
					endif;
				?>
    	 </div>
    	 
    	 <div class="col-4">
         		<?php
				    if ( has_nav_menu( 'footer-menu-two' ) ):
				        $footer_menu_two = array(
							'theme_location' 	=> 'footer-menu-two',
							'container'       	=> 'div',
							'before'   			=> '<ul>',
							'after'   			=> '</ul>',
							'menu_class'     	=> 'col-3 footer-menu footer-menu-two',
							);

							wp_nav_menu($footer_menu_two);
					endif;
				?>		
			</div>
			<div class="col-4">
					<?php
						if ( has_nav_menu( 'footer-menu-three' ) ):
					        $footer_menu_three = array(
								'theme_location' 	=> 'footer-menu-three',
								'container'       	=> 'div',
								'before'   			=> '<ul>',
								'after'   			=> '</ul>',
								'menu_class'     	=> 'footer-menu footer-menu-three',
								);

							wp_nav_menu($footer_menu_three);
						endif;
				?>				
			</div>				
    </div>
<?php endif; ?>


    <div class="col-12 footer-bottom">
      <span class="footer-copy-right1">© <?php _e(date("Y")); ?> - <?php bloginfo('name'); ?>. All Rights Reserved.
      </span>||

      <span class="designer1">Website Design & Development By : <a href="mailto:iqbalhasanms@gmail.com">Iqbal Mahmud Hasan</a></span>
    </div>
  <!-- </section> -->
</div>
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

.footer-social-media-menu{
			
			background: #202629;
			color: #ffffff;
			padding: 10px;
			text-align: center;

		}
.footer-social-media-menu ul{
	margin: 0;
	padding: 0;
}		

.footer-social-media-menu ul li a{
	font-size: 1.8em;
	color: #AAACAE;
}
	.footer-wrapper{
			text-align: center;
	}
	.footer-menu{
		 display: inline-block;
	}


	.footer-menu li{
		/*float: left;*/
		list-style: none;
		text-decoration: none;
		margin-right: 4px;
		display: block;
		text-align: left;
		
	}

	.footer-menu li a{
		color: #fff;
		font-weight: 600;
	}


.footer-menu li a:before {
   /* content: "👉 ";*/
 } 

.footer-menu li a:hover {
    text-decoration: none;
 }   

	.footer{
			
		}
		
		.footer-menu-area{

	
			
			background: #2F383D;
			color: #ffffff;
			padding: 3% 2%;
			text-align: center;
		}

		.footer-bottom{ 
			background: #202629;
			color: #ffffff;
			text-align: center;
			padding: 2%;
			}

		.footer-bottom a{ 
			
			color: #ffffff;
			
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
