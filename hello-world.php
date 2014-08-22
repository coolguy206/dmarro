<?php
/*
Plugin Name: Hello-World
Plugin URI: http://davidtproductions.com
Description: A simple hello world wordpress plugin
Version: 1.0
Author: David Thanphilom
Author URI: http://davidtproductions.com
License: GPL
*/
?>

<?php function hello_world() { echo 'hello world';  } ?>

<?php 
if ( is_admin() ){
add_action( 'admin_menu', 'my_hello_world_menu' ); 
}
?>

<?php
/* Runs when plugin is activated */
register_activation_hook(__FILE__,'hello_world_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'hello_world_remove' );

function hello_world_install() {
/* Creates new database field */
add_option("hello_world_data", 'Default', '', 'yes');
}

function hello_world_remove() {
/* Deletes the database field */
delete_option('hello_world_data');
}

?>

<?php function my_hello_world_menu() {
 add_options_page( 'Hello World', 'Hello World','Hello_World','Hello-World', 'my_hello_world_function');
} ?>

<?php function my_hello_world_function() {
?>
<div>
<h2>Hello World Options</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table width="510">
<tr valign="top">
<th width="92" scope="row">Enter Text</th>
<td width="406">
<input name="hello_world_data" type="text" id="hello_world_data"
value="<?php echo get_option('hello_world_data'); ?>" />
(ex. Hello World)</td>
</tr>
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="hello_world_data" />

<p>
<input type="submit" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>

 <?php } ?>