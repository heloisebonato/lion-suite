<?php

/**

 *

 * Carregando scripts

 *

 * */
function theme_scripts()
{

	// Load right jquery library.
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/jquery/dist/jquery.min.js', array(), '', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', array(), '', true);
        wp_enqueue_script('aos_js', get_template_directory_uri() . '/assets/aos/dist/aos.js', array(), '', true);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.min.js', array(), '1.1.0', true);
        wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '', true);

}
add_action('wp_enqueue_scripts', 'theme_scripts');


/**

 *

 * Carregando styles

 *

 * */

function theme_styles()
{
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.min.css');
		wp_enqueue_style('slick_css', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.css');
		wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick-theme.css');
		wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/animate.css/animate.min.css');
		wp_enqueue_style('aos_css', get_template_directory_uri() . '/assets/aos/dist/aos.css');
        wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');