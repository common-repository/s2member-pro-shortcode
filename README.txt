=== s2member-shortcode ===
Contributors: colinhahn
Requires at least: 3.9.1
Tested up to: 4.0
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin extends the s2member Pro plugin by adding a shortcode to render the pro login widget.

== Description ==

This plugin extends the s2member Pro plugin by adding a shortcode to render the pro login widget.

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.2.1 =
* Added wrapper to ensure that shortcode is not already loaded from another plugin

= 1.2 =
* Graceful failback if s2 Pro module is not installed

= 1.1 =
* Added support for args & options. See s2 Codex for documentation of the s2_pro_login_widget() function.

= 1.0 =
* Initial version