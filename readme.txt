=== MC4WP: WPML Integration ===
Contributors: Ibericode, DvanKooten, hchouhan, lapzor
Donate link: https://mc4wp.com/#utm_source=wp-plugin-repo&utm_medium=mailchimp-for-wp&utm_campaign=donate-link
Tags: mc4wp, wpml, mailchimp
Requires at least: 4.5
Tested up to: 7.0
Stable tag: 1.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.htmlq
Requires PHP: 7.4

WPML integration for the Mailchimp for WordPress plugin.

== Description ==

This is an add-on plugin for [MC4WP: Mailchimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/), adding the following features:

- Subscribe to a different Mailchimp audience for each of your site's languages.
- Set the subscriber's language based on the current site language.

This plugin requires PHP 5.3 or higher.

== Installation ==

#### Installing the plugin

1. In your WordPress admin panel, go to *Plugins > New Plugin*, search for **WPML - Mailchimp** and click "*Install now*"
1. Alternatively, download the plugin and upload the contents of `mc4wp-wpml.zip` to your plugins directory, which usually is `/wp-content/plugins/`.
1. Activate the plugin

== Frequently Asked Questions ==

#### Nothing happens after activating the plugin
Please ensure you have the [Mailchimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/) plugin installed & activated.

#### More documentation
More detailed documentation can be found in the [Mailchimp for WordPress knowledge base](https://mc4wp.com/kb/#utm_source=wp-plugin-repo&utm_medium=mailchimp-for-wp&utm_campaign=faq).

== Screenshots ==

1. The settings page.

== Changelog ==

#### 1.0.6 - May 5, 2026

- Bump required WordPress version to 4.5
- Bump required PHP version to 7.4 
- Handle dependency on [Mailchimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/) through the "Requires Plugins" plugin file header.
- Update tested WordPress version to 7.0.

#### 1.0.5 - Aug 18, 2025

- Fix license URL
- Remove no-op sanitization function


#### 1.0.4 - Jul 2, 2025

- Compatibility with WordPress 6.8
- Rename lists to audiences.


#### 1.0.3 - Sep 27, 2021

- Minor usability improvement.


#### 1.0.2 - Sep 13, 2021

- Re-tested compatibility with WordPress version 5.8


#### 1.0.1 - Sep 11, 2019

- Change plugin name.
- Change MailChimp to Mailchimp in all texts.


#### 1.0 - July 5, 2017

Initial plugin release.
