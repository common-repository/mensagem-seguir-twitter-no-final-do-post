<?php
/*
Plugin Name:  Mensagem Seguir Twitter no Final do Post
Description:  A simple plugin that adds a message at the end of each article asking users to follow us on Twitter and Facebook.
Version:      1.0
Requires at least: 5.2
Requires PHP: 7.2
Tested up to: 6.0.1
Author:       Conectando Net 
Author URI:   https://conectandonet.com.br
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Domain Path:  /languages
*/

function mensagem_seguir_twitter_no_final_do_post($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 
// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles
 
$content .= '<p class="mensagem_seguir_twitter_no_final_do_post">If you liked this article, then please follow us on <a href="https://twitter.com/conectandonet" title="Conectando Net on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/conectandonews" title="Conectando Net on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
 
} 
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'mensagem_seguir_twitter_no_final_do_post');