<?php
/*
		Options page for the FeedFlare Plugin: http://xentek.net/
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
	<h2>FlareSmith Options</h2>

	<p>This plugin will build your Feedflare javascript for you. All you have to do is paste in the unique part of your FeedBurner address. (The bolded part in the example).</p>
	<p><em>Example: http://feeds.feedburner.com/</em><strong>MyUniqueFeedName</strong></p>

	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="feedflare_snippet" />	
		<label for="feedflare_snippet">FeedBurner Feed ID:</label><input type="text" name="feedflare_snippet" value="<?php echo get_option('feedflare_snippet'); ?>" size="45" />
		<p class="submit">
			<input type="submit" name="Submit" value="<?php _e('Update Options »') ?>" />
		</p>
	</form>
	<p><a href="http://feedburner.com/" title="i heart feedburner"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/plugins/flaresmith/i_heart_fb.gif" /></a></p>
</div>