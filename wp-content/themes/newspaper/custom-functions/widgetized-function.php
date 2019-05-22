<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function prayer_time_widgets_init() {

	register_sidebar( array(
		'name'          => 'Prayer Time Widgetized',
		'id'            => 'prayer_time',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="prayer-time">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'prayer_time_widgets_init' );


function special_circular_widgets_init() {

	register_sidebar( array(
		'name'          => 'Special Circular Widgetized',
		'id'            => 'special_circular',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="special-circular">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'special_circular_widgets_init' );