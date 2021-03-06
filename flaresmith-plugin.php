<?php
/*
Plugin Name: Flare Smith
Plugin URI: http://xentek.net/code/wordpress/plugins/flaresmith/
Description: Plugin to insert FeedBurner's javascript to support FeedBurner Stats and FeedFlare units on your WordPress site. All without having to edit your theme files! <a href="options-general.php?page=feedflare/flaresmith-options.php" title="Configure the FlareSmith plugin">Configure Settings</a> or <a href="http://xentek.net/code/wordpress/plugins/flaresmith/?utm_source=plugin&amp;utm_medium=list&amp;utm_campaign=flaresmith" title="Get help with FlareSmith for suggest new features.">Get Support</a>.
Version: 0.21
Author: Eric Marden
Author URI: http://www.xentek.net/
*/

/*	Copyright 2008	Eric Marden	 (email : wp@xentek.net)

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

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'flaresmith_plugin_settings_link');

function flaresmith_plugin_settings_link($links)
{
	$settings_link = '<a href="options-general.php?page='. end( explode('/', dirname(__FILE__) ) ) . '/flaresmith-options.php">Settings</a>';
	array_unshift($links, $settings_link);
	return $links;
}

function flaresmith_load_translation()
{
	load_plugin_textdomain('feedflare', dirname(plugin_basename(__FILE__)));
}

function add_flaresmith_options_page()
{
	if (function_exists('add_options_page')) {
		add_options_page('Flare Smith', 'Flare Smith', 10, dirname(__FILE__) . '/flaresmith-options.php');
	}
}

function flaresmith_insert($content = '')
{
	
	$feedflare_snippet = get_option('feedflare_snippet');
	$feedflare_show_homepage = get_option('feedflare_show_homepage');
	$feedflare_address = get_option('feedflare_address');
	if (!$feedflare_address) {
		$feedflare_address = 'http://feeds.feedburner.com/';
	}

	if ($feedflare_show_homepage && !is_single() && !is_page()) {
		$content .= '<div id="flaresmith" class="feedflare"><script src="'.$feedflare_address.'~s/'.$feedflare_snippet.'?i='.get_permalink().'" type="text/javascript" charset="utf-8"></script></div>';
	} elseif (is_single()) {
		$content .= '<div id="flaresmith" class="feedflare"><script src="'.$feedflare_address.'~s/'.$feedflare_snippet.'?i='.get_permalink().'" type="text/javascript" charset="utf-8"></script></div>';
	}
	return $content;
}
?>