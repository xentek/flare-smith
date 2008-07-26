<?php
/*
		Options page for the FlareSmith Plugin
		http://xentek.net/code/wordpress/plugins/flaresmith/
*/

/*  Copyright 2008  Eric Marden  (email : wp@xentek.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<div class="wrap">
	<h2><?php _e('FlareSmith Options', 'feedflare'); ?></h2>

	<p><?php _e('This plugin will build your FeedBurner Stats / FeedFlare javascript for you. All you have to do is paste in the unique part of your FeedBurner address.', 'feedflare'); ?><br /><?php _e('(The bolded part in the example)', 'feedflare');?>.</p>
	<p><em><?php _e('Example:','feedflare'); ?> http://feeds.feedburner.com/</em><strong><?php_e('MyUniqueFeedName', 'feedflare'); ?></strong></p>

	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="feedflare_snippet" />
		<input type="hidden" name="page_options" value="feedflare_show_homepage" />
		<label for="feedflare_snippet"><?php _e('FeedBurner Feed ID:','feedflare'); ?></label> <input type="text" name="feedflare_snippet" value="<?php echo get_option('feedflare_snippet'); ?>" size="45" />
		<?php
			$feedflare_show_homepage = get_option('feedflare_show_homepage');
		?>
		<p><label for="feedflare_show_homepage">Do you use FeedFlare?</label> <input type="checkbox" name="feedflare_show_homepage" value="1" <?php if ($feedflare_show_homepage) { ?>checked="checked"<?php } ?>> <small><?php _e('Check this box if you want FeedFlare to show up on all pages.','feedflare'); ?> <em><?php ('Do not check this box if you only use FeedBurner stats.','feedflare'); ?></em></small></p>
		<p class="submit">
			<input type="submit" name="Submit" value="<?php _e('Update Options »', 'feedflare') ?>" />
		</p>
	</form>
	<p><a href="http://feedburner.com/" title="i heart feedburner"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/plugins/flaresmith/i_heart_fb.gif" /></a></p>
</div>