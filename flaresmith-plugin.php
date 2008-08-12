<?php
/*
Plugin Name: Flare Smith
Plugin URI: http://xentek.net/code/wordpress/plugins/flaresmith/
Description: Plugin to insert FeedBurner's javascript to support FeedBurner Stats and FeedFlare units on your WordPress site. All without having to edit your theme files! <a href="options-general.php?page=feedflare/flaresmith-options.php" title="Configure the FlareSmith plugin">Configure Settings</a> or <a href="http://xentek.net/code/wordpress/plugins/flaresmith/" title="Get help with FlareSmith for suggest new features.">Get Support</a>. <em>Code</em>
Version: 0.13
Author: Eric Marden
Author URI: http://www.xentek.net/
*/

/*  Copyright 2008  Eric Marden  (email : wp@xentek.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('init','flaresmith_load_translation');
add_action('admin_menu', 'add_flaresmith_options_page');
add_filter('the_content','flaresmith_insert');

function flaresmith_load_translation() {
	load_plugin_textdomain('feedflare', PLUGINDIR.'/'.dirname(plugin_basename(__FILE__)));
}

function add_flaresmith_options_page() {
	if (function_exists('add_options_page')) {
		add_options_page('Flare Smith', 'FlareSmith', 10, dirname(__FILE__) . '/flaresmith-options.php');
	}
}

function flaresmith_insert($content = '') {
	global $post;
	$post->guid = get_permalink();
	
	$flaresmith = get_option('feedflare_snippet');
	$feedflare_show_homepage = get_option('feedflare_show_homepage');
	if ($feedflare_show_homepage && !is_single() && !is_page()) {
		$content .= '<script src="http://feeds.feedburner.com/~s/'.$flaresmith.'?i='.$post->guid.'" type="text/javascript" charset="utf-8"></script>';		
	} elseif (is_single()) {
		$content .= '<script src="http://feeds.feedburner.com/~s/'.$flaresmith.'?i='.$post->guid.'" type="text/javascript" charset="utf-8"></script>';		
	}
	return $content;
}
?>