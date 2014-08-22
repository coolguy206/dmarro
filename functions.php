<?php function custom_excerpt_length( $length ) {return 30;}add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); ?>
<?php function new_excerpt_more( $more ) {return ' <a href="'. get_permalink( get_the_ID() ) . '">Read More</a>';}add_filter( 'excerpt_more', 'new_excerpt_more' ); ?>
<?php add_theme_support('post-thumbnails'); ?>
<?php add_image_size( 'home-thumb', 355, 9999 ); ?>
<?php add_theme_support('custom-background'); ?>
<?php register_nav_menus(array('main' => 'main nav','media' => 'media nav', 'buy' => 'buy nav')); ?>
<?php add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 ); ?>
<?php add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 ); ?>
<?php function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
} ?>