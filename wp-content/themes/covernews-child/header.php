<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoverNews
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property=og:title content="<?php ?>"/>
    <meta property=og:site_name content="<?php ?>"/>
    <meta property=og:description content="<?php ?>"/>
    <meta property=og:type content=website />
    <meta property=og:url content="<?php ?>"/>
    <meta property=og:image content="<?php ?>"/>
    <meta property=og:image:width content=600 />
    <meta property=og:image:height content=315 />
    
    <meta name=fb:app_id property=fb:app_id content=1499138263726489 />
    <meta name=twitter:card content=summary_large_image />
    <meta name=twitter:site content="@prothomalo"/>
    <meta name=twitter:creator content="@prothomalo"/>
    <meta name=twitter:url content="<?php _e(get_site_url()); ?>"/>
    <meta name=twitter:title content="<?php ?>"/>
    <meta name=twitter:description content="<?php ?>"/>
    <meta name=twitter:image content="<?php ?>"/>
    <link rel=canonical href="<?php _e(get_site_url()); ?>/">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel=icon type="image/ico" href="/favicon.ico"/>
    <link rel=alternate type="application/rss+xml" title="<?php ?> RSS" href="<?php _e(get_site_url()); ?>/feed/"/>



    

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$enable_preloader = covernews_get_option('enable_site_preloader');
if ( 1 == $enable_preloader ):
    ?>
    <div id="af-preloader">
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
    </div>
<?php endif; ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'covernews'); ?></a>

<?php covernews_get_block('header-layout-1'); ?>
    <div id="content" class="container">
<?php
    do_action('covernews_action_get_breadcrumb');