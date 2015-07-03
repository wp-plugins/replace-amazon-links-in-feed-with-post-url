<?php
/**
 * Plugin Name: Replace Amazon Links in Feed with post URL
 * Plugin URI: http://www.klongdesigns.com
 * Description: This plugin replaces all of the amazon links in your feed with a link to the post itself, adhering to the Amazon TOS page.
 * Version: 1.0
 * Author: Chris Klongpayabal
 * Author URI: http://www.klongdesigns.com
 * 
 */


function kd_amz_rss($content) {
$content = preg_replace('/href="(http|https):\/\/(www\.)?amazon.co(.*)"/Ui', 'href="'.get_permalink().'"', $content);
$content = preg_replace('/href="(http|https):\/\/(www\.)?amzn.to(.*)"/Ui', 'href="'.get_permalink().'"', $content);
return $content;
}
add_filter('the_content_feed', 'kd_amz_rss', 1);