<?php
/*
Plugin Name: Header-Color
Description: Changes the color of the header
Version: 1.0
Author: David Thanphilom
Author URI: http://davidtproductions.com
License: GPL
*/
function header_color(){
echo get_option('header_color_data');
}
 
if ( is_admin() ){
add_action( 'admin_menu', 'my_header_color_menu' );
}

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'header_color_install');

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'header_color_remove' );

function hello_world_install() {
/* Creates new database field */
add_option("header_color_data", 'Default', '', 'yes');
}

function hello_world_remove() {
/* Deletes the database field */
delete_option('header_color_data');
}

function my_header_color_menu() {
 add_theme_page( 'Header Color', 'Header Color','administrator','header-color', 'my_header_color_function');
}

function my_header_color_function() {
?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>Header Color Options</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table width="510">
<tr valign="top">
<th width="92" scope="row">Enter Text</th>
<td width="406">
<input name="header_color_data" type="text" id="header_color_data"
value="<?php echo get_option('header_color_data'); ?>" />
(ex. red or #f00)</td>
</tr>
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="header_color_data" />

<p>
<input type="submit" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>

<?php } ?>