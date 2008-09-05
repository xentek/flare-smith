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
<?php
if ( !empty($_POST ) ) : 
	if ($_POST['feedflare_address'] == 'mybrand') {
		update_option('feedflare_address',$_POST['feedflare_mybrand']);
	} else {
		update_option('feedflare_address',$_POST['feedflare_address']);
	}
	update_option('feedflare_snippet',$_POST['feedflare_snippet']);
	update_option('feedflare_show_homepage',$_POST['feedflare_show_homepage']);
?>
<div id="message" class="updated fade"><p><strong><?php _e('Options saved.','feedflare') ?></strong></p></div>
<?php endif; ?>
<?php
	$feedflare_show_homepage = get_option('feedflare_show_homepage');
	$feedflare_address = get_option('feedflare_address');
	if (!$feedflare_address = get_option('feedflare_address')) {
		$feedflare_address = 'http://feeds.feedburner.com/';
	}
	
	if ($feedflare_address == 'http://feeds.feedburner.com/' OR $feedflare_address == 'http://feedproxy.google.com/') {
		$mybrand = false;
		$feedflare_mybrand = get_bloginfo('url') . '/';
	} else {
		$mybrand = true;
		$feedflare_mybrand = $feedflare_address;
	}
?>
<div class="wrap">
	<h2><?php _e('Flare Smith Options','feedflare'); ?></h2>

	<p><?php _e('This plugin will build your FeedFlare javascript for you.','feedflrare'); ?> <?php _e('All you have to do is paste in the unique part of your FeedBurner address.','feedflare'); ?> <br />
		<small><em><?php _e('Example:','feedflare'); ?> http://feeds.feedburner.com/</em><strong><?php _e('MyUniqueFeedName','feedflare'); ?></strong></small>
	</p>
	
	<form method="post" action="" id="feedflare-settings">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="feedflare_address" />
		<input type="hidden" name="page_options" value="feedflare_snippet" />
		<input type="hidden" name="page_options" value="feedflare_show_homepage" />
		
		<fieldset style="border-top: 1px #DADADA solid; padding: 20px;">
			<legend><strong><?php _e('FeedBurner Feed ID','feedflare'); ?></strong></legend>
				<label class="hidden" for="feedflare_snippet"><?php _e('FeedBurner Feed ID','feedflare'); ?>:</label> <input type="text" name="feedflare_snippet" id="feedflare_snippet" value="<?php echo get_option('feedflare_snippet'); ?>" size="45" />
		</fieldset>

		<fieldset style="border-top: 1px #DADADA solid; padding: 20px;">
			<legend><strong><?php _e('Do you use FeedFlare?','feedflare'); ?></strong></legend>
			<label class="hidden" for="feedflare_show_homepage"><?php _e('Do you use FeedFlare?','feedflare'); ?></label> <input type="checkbox" name="feedflare_show_homepage" id="feedflare_show_homepage" value="1" <?php if ($feedflare_show_homepage) { ?>checked="checked"<?php } ?>> <small><?php _e('Check this box if you want FeedFlare to show up on all pages.','feedflare'); ?> <em><?php _e('Do not check this box if you only use FeedBurner stats.','feedflare'); ?></em></small>
		</fieldset>
		
		<fieldset style="border-top: 1px #DADADA solid; padding: 20px;">
			<legend><strong><?php _e('FeedBurner Address','feedflare'); ?></strong></legend>
				<label class="hidden" for="feedflare_address"><?php _e('FeedBurner Address','feedflare'); ?>:</label>
				<input name="feedflare_address" type="radio" value="http://feeds.feedburner.com/" <?php if ($feedflare_address == 'http://feeds.feedburner.com/' || !$feedflare_address) { echo 'checked="checked"'; } ?> /> Old School <small>(http://feeds.feedburner.com/)</small><br />
				<input name="feedflare_address" type="radio" value="http://feedproxy.google.com/" <?php if ($feedflare_address == 'http://feedproxy.google.com/') { echo 'checked="checked"'; } ?> /> New School <small>(http://feedproxy.google.com/)</small><br />
				<input name="feedflare_address" type="radio" value="mybrand" <?php if ($mybrand) { echo 'checked="checked"'; } ?> /> My Brand <input name="feedflare_mybrand" id="feedflare_mybrand" value="<?php echo $feedflare_mybrand; ?>" size="30" style="font-size: 75%;" />

			<p><small>
				<?php _e('If you are using the new FeedBurner Adsense integration, or are using the My Brand service, you will need to change the FeedBurner Address, too.','feedflare'); ?><br />
				<?php _e('When supplying your My Brand address, you URL MUST start with ','feedflare'); ?><em>http://</em><?php _e(' and end with a slash.','feedflare'); ?>
			</small></p>
		</fieldset>
		
		<div class="tablenav">
			<div class="alignleft"><input type="submit" name="submit" value="<?php _e('Update Options »', 'feedflare') ?>" class="button-secondary" /></div>
			<div class="alignright"><a href="http://xentek.net/?utm_source=plugin&amp;utm_medium=options&amp;utm_content=icon&amp;utm_campaign=flaresmith" title="visit xentek.net - creator of this plugin"><img src="http://xentek.net/img/icons/recruiter_32.png" width="52" height="32" alt="bullhorn icon" title="visit xentek.net - creator of this plugin" border="0" valign="middle" /></a> <a href="http://feedburner.com/" title="i heart feedburner"><img valign="middle" src="/<?php echo PLUGINDIR.'/'.dirname(plugin_basename(__FILE__)); ?>/i_heart_fb.gif" /></a></div>
		</div>
		
	</form>
</div>