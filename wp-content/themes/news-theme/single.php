<?php get_header(); ?>

<!-- <div class="row">
		<div class="col-12 lead-add-section" style="text-align: center;display: block; min-height: 120px; padding: 0px 50px; background: #ffffff; ">
			
		</div>
 </div> -->

<div class="row" style="padding-top:0; padding-bottom: 0; padding-left: 5%; padding-right: 5%;">
	<!-- ++++++++++++++ Left Side +++++++++++++++ -->
	<!-- ++++++++++++++ Left Side +++++++++++++++ -->
		<div class="col-8" >
				<button onclick="window.print()" style="padding:5px; text-align:center; background:#193261; float:right; display:block; color:#fff; border-radius:4px;">Print <i class="fa fa-print" aria-hidden="true"></i></button>

			<div style="border: 1px solid #C4C4C4; width: 100%; padding: 10px; ">
				<h1><?php the_title(); ?></h1>
				<p>					
					<?php 

						$published_date=get_the_date("Y-F-d :: g:i:s A",get_the_ID());
						$modified_date=get_the_modified_date("Y-F-d :: g:i:s A",get_the_ID());

						$engNumber = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,am,pm,AM,PM,th, TH );
						$bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার','পূর্বাহ্ন', 'অপরাহ্ন','পূর্বাহ্ন', 'অপরাহ্ন','ই','ই');
						$converted_published_date = str_replace($engNumber, $bangNumber, $published_date);	
						$converted_modified_date = str_replace($engNumber, $bangNumber, $modified_date);							
					?> 
					<span><?php _e(get_the_author());?> </span> --
					<span> প্রকাশিত: <?php  _e($converted_published_date); ?></span>
					<span> || আপডেট: <?php  _e($converted_modified_date); ?></span>
					
				</p>


				<div class="row banner-section">
					<!--  Share Row -->
					<div class="col-12 social-media-share" style="margin-bottom: 5px;">
						<span class="share-handler" style="padding: 4px; margin-right: 20px; ">
							<i class="bf-icon  fa fa-share-alt"></i> <b class="text">Share</b>
						</span>
						<!-- Facebook Share -->
					    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
					        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" width="33px;" />					        
					    </a>
						<!-- Facebook Share -->
					    
					    <!-- Google+ -->
					    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">
					        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" width="33px;"/>
					    </a>
					    
					    <!-- LinkedIn -->
					    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
					        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" width="33px;" />
					    </a>
					    
					    <!-- Twitter -->
					    <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
					        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" width="33px;"/>
					    </a>
					    


						
					</div>
					<!-- End Share Row -->
					<div class="col-8 mx-auto">
						<?php $post_img=get_the_post_thumbnail_url(); ?>
						
						<span data-toggle="modal" data-target="#featureModal">
							<img class="img-responsive" style="width: 100%" src="<?php echo $post_img ?>">
						 </span>
					</div>
				</div> 

				  <!-- The Modal -->
				  <div class="modal" id="featureModal">
				    <div class="modal-dialog  modal-lg">
				      <div class="modal-content"> 
				        <div class="modal-body">
				        <span type="button" class="close" data-dismiss="modal">&times;</span>
				           <span> <img src="<?php echo $post_img ?>" width="100%"></span>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- End The Modal -->

			<div class="container">
				<div class="row">
					<div class="col-12 post-container" style="text-align: justify; margin-top: 20px; display: block;">						
						<?php
							if (have_posts()) :
								while (have_posts()) : the_post();

								?>
									<p><?php _e(get_the_content()); ?></p>
								<?php
								endwhile;
							else :
								_e('<p> No content found. </p>');
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row" style="padding-top:0; padding-bottom: 0; padding-left: 5%; padding-right: 5%;">
			<div class="col-md-12">
				<span class="float-sm-left"> <?php previous_post_link(); ?>  </span>
				<span class="float-sm-right"><?php next_post_link(); ?> </span>	
			</div>

			<div class="col-md-12 user-section" style="border: 1px solid #C4C4C4; margin: 10px; padding: 10px;">				
				<span class="float-sm-left"> 
						<img class="img-responsive" src="<?php _e(get_avatar_url()); ?>" width="80"> 
				</span>
				<a href="<?php _e(get_author_posts_url());?>"><span style="padding-left: 8px;"><?php _e(get_the_author());?> </span></a>	
			</div>
			<div class="col-md-12" style="border: 1px solid #C4C4C4; margin: 10px; padding: 10px;">
				<?php
						$post_id=get_the_ID();
						
						//get_related_post($post_id,$postnumber);
						get_related_post($post_id,9);
				?>			
			</div>
		</div>
		

		
	</div>


	<div class="col-4">
		<div class="row">
			<div class="col-12">
				<div class="latest-news">
						<span class="head-title"> সর্বশেষ সংবাদ </span>
						<?php
						//get_recent_post_function($numberposts)
						get_recent_post_function(10);
						?>					
				</div>

		</div>			
		</div>

		<div class="row">
			<div class="col-12">
				<?php 
				$ad_title=get_field('ad_title'); 
				$ad_img=get_field('ad_photo');
				
				?>

				<h3> <?php _e($ad_title);?> </h3>
				
				<img src="<?php _e($ad_img['url']);?>" width="100%">
			</div>			 
		</div>
		
		
	</div>
</div>

<?php // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
 ?>

<?php get_footer(); ?>