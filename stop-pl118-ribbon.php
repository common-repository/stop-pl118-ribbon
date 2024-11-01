<?php
/*
Plugin Name: Stop PL118 Ribbon
Plugin URI: http://wp-portugal.com/wp-content/uploads/2012/01/stop-pl118-ribbon.zip
Description: When activated, this plugin will show a 'Não à taxa' ribbon on the top right corner of your website. This is a fork of Konstantin Kovshenin's and Mindsahre Studio's plugin.
Author: Zé Fontainhas
Version: 1.0.2
License: GPLv2
Author URI: http://wp-portugal.com/
*/

function render_stop_pl118_ribbon() {
	$ribbon_url = plugins_url('stop-pl118-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "<a target='_blank' class='stop-pl118-ribbon' href='http://www.peticaopublica.com/PeticaoVer.aspx?pi=pl118nao'><img src='{$ribbon_url}' alt='Dizer NÃO à taxa' style='position: fixed; top: ".$padding_top ."px; right: 0; z-index: 100000; cursor: pointer; border:none;' /></a>";
}
add_action('wp_footer', 'render_stop_pl118_ribbon');