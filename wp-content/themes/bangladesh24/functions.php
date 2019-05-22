<?php

/**
 * Iqbal Hasan- scripts and styles.
 * @since News Theme 1.0
 */


function newstheme_scripts() {
	// load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
}
add_action( 'wp_enqueue_scripts', 'newstheme_scripts' );


/*++++++++++++++++++++++++++++++++++++custom-logo+++++++++++++++++++++++++++++++++++++++++*/
/*$custom_logo_array = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $custom_logo_array );*/


function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*+++++++++++++++++++++++++++++++++++++Custom Header++++++++++++++++++++++++++++++++++++++++*/
$custom_header = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => false,
    'video-active-callback' => 'is_front_page',
);
add_theme_support( 'custom-header', $custom_header );
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

//set_post_thumbnail_size( 350, 150, true );
add_image_size('slider-size', 450, 300, true); // width, height, crop




/*add_image_size('covernews-slider-full', 1536, 1020, true); // width, height, crop
add_image_size('covernews-slider-center', 936, 897, true); // width, height, crop
add_image_size('covernews-featured', 1024, 0, false ); // width, height, crop
add_image_size('covernews-medium', 720, 380, true); // width, height, crop
add_image_size('covernews-medium-square', 675, 450, true); // width, height, crop



the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)*/
/*+++++++++++++++++++++++++++++++++add_post_formats++++++++++++++++++++++++++++++*/ 
    
function add_post_formats() {
    add_theme_support( 'post-formats', array('aside', 'quote', 'link', 'image', 'gallery', 'video', 'status') );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );

            /*add_theme_support( 'post-formats', array('aside', 'status', 'image', 'gallery', 'video', 'quote', 'link', 'audio','chat' ) );*/

            /*aside - A short piece of content, typically styled without a title.
            gallery - A gallery of images.
            link - A single link to another site.
            image - A single image.
            status - A short status update, similar to a Twitter status update.
            video - A single video.
            audio - A single audio file.
            chat - A chat transcript.*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*++++++++++++++++++++++++++++++Rename_post_formats++++++++++++++++++++++++++++++++++++++++++*/
add_filter( 'gettext_with_context', 'rename_post_formats', 10, 4 );
function rename_post_formats( $translation, $text, $context, $domain ) {

    $names = array(
        'Aside'  => 'News',
        'Quote'  => 'Lead News',
        'Link'  => 'Breaking News',
        'Image'  => 'Add',
        'Gallery'  => 'Photo Gallery',
        'Video'  => 'Video-24 TV',
        'Status' => 'Blog',
    );    
    if ( $context == 'Post format' ) {
        $translation = str_replace( array_keys( $names ), array_values( $names ), $text );
    }    
    return $translation;
}


/*function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Image' )
        return 'Add';

    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/



/*++++++++++++++++++++++++++++++++++++ Custom Menu Location+++++++++++++++++++++++++++++++++++++*/
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'top-mega-menu' => __( 'Top Mega Menu'),
      'top-menu' => __( 'Top Menu'),
      'primary-menu' => __( 'Primary Menu'),
      'media-menu' => __( 'Media Menu'),
      'top-media-menu' => __( 'Top Media Menu'),
      'footer-menu-one' => __( 'Footer Menu One'),
      'footer-menu-two' => __( 'Footer Menu Two'),
      'footer-menu-three' => __( 'Footer Menu Three')
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/






// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Social Media', 'Post Type General Name'),
        'singular_name'         => _x( 'Social Media', 'Post Type Singular Name'),
        'menu_name'             => __( 'Social Media'),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Social Media'),
        'description'           => __( 'Social Media Description'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt','post-formats','custom-fields' ),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'social-media', $args );

}
add_action( 'init', 'custom_post_type', 0 );





/*+++++++++++++++++++++++++++++  Add Category Image++++++++++++++++++++++++++++++++++++*/
if ( ! class_exists( 'CT_TAX_META' ) ) {

class CT_TAX_META {

  public function __construct() {
    //
  }
 
 /*
  * Initialize the class and start calling our hooks and filters
  * @since 1.0.0
 */
 public function init() {
   add_action( 'category_add_form_fields', array ( $this, 'add_category_image' ), 10, 2 );
   add_action( 'created_category', array ( $this, 'save_category_image' ), 10, 2 );
   add_action( 'category_edit_form_fields', array ( $this, 'update_category_image' ), 10, 2 );
   add_action( 'edited_category', array ( $this, 'updated_category_image' ), 10, 2 );
   add_action( 'admin_enqueue_scripts', array( $this, 'load_media' ) );
   add_action( 'admin_footer', array ( $this, 'add_script' ) );
 }

public function load_media() {
 wp_enqueue_media();
}
 
 /*
  * Add a form field in the new category page
  * @since 1.0.0
 */
 public function add_category_image ( $taxonomy ) { ?>
   <div class="form-field term-group">
     <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
     <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
     <div id="category-image-wrapper"></div>
     <p>
       <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
       <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
    </p>
   </div>
 <?php
 }
 
 /*
  * Save the form field
  * @since 1.0.0
 */
 public function save_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     add_term_meta( $term_id, 'category-image-id', $image, true );
   }
 }
 
 /*
  * Edit the form field
  * @since 1.0.0
 */
 public function update_category_image ( $term, $taxonomy ) { ?>
   <tr class="form-field term-group-wrap">
     <th scope="row">
       <label for="category-image-id"><?php _e( 'Image', 'hero-theme' ); ?></label>
     </th>
     <td>
       <?php $image_id = get_term_meta ( $term -> term_id, 'category-image-id', true ); ?>
       <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
       <div id="category-image-wrapper">
         <?php if ( $image_id ) { ?>
           <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
         <?php } ?>
       </div>
       <p>
         <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
         <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
       </p>
     </td>
   </tr>
 <?php
 }

/*
 * Update the form field value
 * @since 1.0.0
 */
 public function updated_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     update_term_meta ( $term_id, 'category-image-id', $image );
   } else {
     update_term_meta ( $term_id, 'category-image-id', '' );
   }
 }

/*
 * Add script
 * @since 1.0.0
 */
 public function add_script() { ?>
   <script>
     jQuery(document).ready( function($) {
       function ct_media_upload(button_class) {
         var _custom_media = true,
         _orig_send_attachment = wp.media.editor.send.attachment;
         $('body').on('click', button_class, function(e) {
           var button_id = '#'+$(this).attr('id');
           var send_attachment_bkp = wp.media.editor.send.attachment;
           var button = $(button_id);
           _custom_media = true;
           wp.media.editor.send.attachment = function(props, attachment){
             if ( _custom_media ) {
               $('#category-image-id').val(attachment.id);
               $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
               $('#category-image-wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
             } else {
               return _orig_send_attachment.apply( button_id, [props, attachment] );
             }
            }
         wp.media.editor.open(button);
         return false;
       });
     }
     ct_media_upload('.ct_tax_media_button.button'); 
     $('body').on('click','.ct_tax_media_remove',function(){
       $('#category-image-id').val('');
       $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
     });
     // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
     $(document).ajaxComplete(function(event, xhr, settings) {
       var queryStringArr = settings.data.split('&');
       if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
         var xml = xhr.responseXML;
         $response = $(xml).find('term_id').text();
         if($response!=""){
           // Clear the thumb image
           $('#category-image-wrapper').html('');
         }
       }
     });
   });
 </script>
 <?php }

  }
 
$CT_TAX_META = new CT_TAX_META();
$CT_TAX_META -> init();
 
}
/*+++++++++++++++++++++++++ End Add Category Image++++++++++++++++++++++++++++++++++++*/







/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
// Custom Functions After Theme Setup
include_once('custom-functions/get_post_functions.php');
include_once('custom-functions/get-cat-have-post.php');
include_once('custom-functions/get-recent-post-function.php');
include_once('custom-functions/get-related-post-function.php');
include_once('custom-functions/get-most-view-post-function.php');
include_once('custom-functions/get-post-by-custom-post-type.php');

include_once('custom-functions/get-psot-by-cat.php');
include_once('custom-functions/post_slider.php');
include_once('custom-functions/view-counter-function.php');
include_once('custom-functions/widgetized-function.php');
include_once('custom-functions/get-all-post-function.php');

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
include_once('custom-functions/new-get-post-function.php');
//include_once('custom-functions/get-post-for-category-page-function.php');
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


function wpb_related_author_posts($content) {
 
if ( is_single() ) { 
    global $authordata, $post;
     
    $content .= '<h4>Similar Posts by The Author:</h4> ';
  
    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
  
    $content .= '<ul>';
    foreach ( $authors_posts as $authors_post ) {
        $content .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }
    $content .= '</ul>';
  
    return $content;
    } 
    else { 
    return $content; 
    }
}
 
add_filter('the_content','wpb_related_author_posts');


























