=== WP Alert Bar ===
Contributors: braceomatic88
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=ryanplugindonations@gmail.com&lc=US&no_note=0&item_name=Support+this+developer&cn=&curency_code=USD
Tags: alert, notification
Requires at least: 4.7.0
Tested up to: 5.4.1
Requires PHP: 5.4
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Quickly add an alert bar to your website

== Features ==
* Custom Colors to match your site branding
* Custom title, message and call to action ( all items are optional and fully conditional )
* Ability to display banner across your entire site or just the homepage
* Body class added to pages where WP Alert Bar is visible

== Screenshots ==

1. WP Alert Bar section in customizer

2. Sub sections in customizer for Styles, Content, and Display

3. Styles section to customize colors and font size. Options are editable from the customizer with real time preview

4. Content section to add custom messaging and call to action. Options are editable from the customizer with real time preview

2. Display section to customize where the alert displays on your site. Options are editable from the customizer with real time preview

== FAQ ==

= My WordPress site has a sticky header that uses position fixed causing it to cover the WP Alert Bar, how can I fix this? =

**WP Alert Bar** comes with a filter that allows you to define your sites fixed header so that it can account for the alert bar. Simply navigate to the functions.php file in your child theme and paste in the following code snippet, making sure to replace .site-header with the class or ID of your sites fixed position header.

>// Define fixed header for Wordpress Alert Bar
>add_filter( 'mbwpab_fixed_header_selector', 'mbwpab_define_fixed_header' );
>function mbwpab_define_fixed_header( $header ) {
>	$header 	=	'.site-header';
>	return $header;
>}

== Changelog ==

= 1.0.0 =
*Release Date - May 31 2020*

* New - Added WP Alert Bar to repository.