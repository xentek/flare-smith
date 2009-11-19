=== Plugin Name ===
Contributors: xenlab
Donate link: http://j.mp/dontate-to-xentek
Tags: feedburner, stats, feedflare, adsense, wordpressmu
Requires at least: 2.0
Tested up to: 2.9
Stable tag: trunk

FlareSmith is a plugin to integrate the FeedBurner Stats and FeedFlare services into your WordPress site - without editing your theme!

== Description ==

FlareSmith is a plugin to integrate the FeedBurner Stats and FeedFlare services into your WordPress site - all without having to edit any of your theme files!

It acts as a content filter, and adds the required javascript to your site after the output of your original content. It plays well with others (like other content filters), and works quite nicely with the FeedBurner FeedSmith plugin. In fact, I choose the name of my plugin as an homage to FeedSmith.

_A **FeedBurner** account is required to use this plugin._

== Installation ==

1. Unzip and Upload the 'feedflare' folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to the 'Settings' menu in WordPress, and enter the unique part of your FeedBurner address.
4. If you want FeedFlare units to be shown when ever a post is displayed (including the homepage, and other lists of posts), check the box.
5. If you are using Adsense for Feeds, or the My Brand service, then set the option for your address.

== Frequently Asked Questions ==

= Does this require a FeedBurner Account? =

Yes it does. Once you've signed up and 'burned' your feed. You will need to activate the Stats and (Site) FeedFlare functionality for your feed.

= Does this work with FeedBurner Pro Stats? =

Yes, it does.

= Will it display FeedFlare on my homepage or other lists of blog posts? =

It does now. _Thanks to [Bran](http://www.inspirational-board.com/) for the [feature suggestion](http://xentek.net/code/wordpress/plugins/flaresmith/#comment-886)._

= Does it insert FeedFlare on my Pages? =

No. It only operates on blog posts. Pages don't appear in Feeds and as such are outside of FeedBurner's domain.

= Does it work with Wordpress MU? =

Yes, as of version 0.13 it does. _Thanks to [Guillermo](http://liveinatx.net/) for the [bug report](http://xentek.net/code/wordpress/plugins/flaresmith/#comment-671)._

= Does it support Adsense enabled feeds or the My Brand Service? =

Yes, as of version 0.15, you can set the FeedBurner address you want to use. _Thanks to [David K.](http://handleit.info/) for [pointing this out](http://xentek.net/code/wordpress/plugins/flaresmith/#comment-984)._

_Version 0.17 fixes an issues with My Brand support, and lets you supply your MyBrand URL, which is probably different than your blog url (which v0.15 and v0.16 assumed)._

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/flare-smith). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)

== Changelog == 

= 0.20 = 
* Added settings link to the plugin page

= 0.19 =
* Refactored to not require a global $post object. Just using straight get_permalink() instead.

= 0.17 =
* Fixed issue with _My Brand_ support in the plugin

= 0.15 =
* Added _My Brand_ support for custom feedburner url aliases

= 0.13 =
* Patched to work with WPMU

== Screenshots ==

1. FlareSmith Options Screen

== Arbitrary section ==

The FlareSmith plugin was developed by Eric Marden, and is provided with out warranty under the GPLv3 License. More info and other plugins at: http://xentek.net

Copyright 2008  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA