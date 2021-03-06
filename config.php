<?php

/*
// Override any of the default settings below:

$config['site_title'] = 'Pico';			// Site title
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/

$config['site_title'] = 'Mail-Skills';     // Site title
$config['theme'] = 'mail-skills';       // Set the theme (defaults to "default")

$config['js_path'] = "/javascripts";

if($_SERVER["SERVER_ADDR"] == "127.0.0.1")
{
  $config['production'] = FALSE;
  $config['development'] = TRUE;
}
else
{
  $config['production'] = TRUE;
  $config['development'] = FALSE;
}

$config['front_page'] = "/courses/product-owner";
$config['google_site_verification'] = "googledf753e2a01eab14f.html";
