<?php
/**
 * @package Read Holy Quran
 * @version 1.0
 */
/*
Plugin Name: Read Holy Quran
Plugin URI: http://wordpress.org/plugins/read-holy-quran
Description: This is a simple Holy Quran Reader Plugin.
Author: Masum Billah
Version: 1.0
Author URI: http://getmasum.com
*/

function holy_quran_template() {
?>
<iframe src="http://www.quranflash.com/affiliate?en" frameborder="0" style="width: 100%; height: 600px;"></iframe>
<?php }

function holy_quran_shortcode() {
	ob_start();
	holy_quran_template();
	$quran = ob_get_clean();
	return $quran;
}
add_shortcode( 'holy-quran', 'holy_quran_shortcode' );