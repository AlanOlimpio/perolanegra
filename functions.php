<?php

// Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
require get_template_directory().'/include/shortcode/shortcode_redes_sociais.php';
require get_template_directory().'/include/shortcode/shortcode_post_grid.php';
require get_template_directory().'/include/ajax.php';
// Hooks
add_action('wp_enqueue_scripts', 'pn_thema_styles');
add_action( 'get_footer', 'pn_prefix_add_footer_styles' );
add_action('after_setup_theme','pn_after_setup');
add_filter( 'nav_menu_link_attributes', 'pn_add_specific_menu_location_atts', 10, 3 );
add_action('widgets_init', 'pn_widgets');
add_action('customize_register', 'pn_customize_register');
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
add_shortcode('redes_sociais', 'shortcode_rede_social');
add_shortcode( 'pn_post_grid', 'pn_shortcode_post_grid' );
add_filter('wp_nav_menu','pn_change_submenu_class');  
add_filter('nav_menu_css_class', 'pn_add_active_class', 10, 2 );
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
add_action( 'phpmailer_init', 'pn_mailer_config', 10, 1);
add_action( 'wp_ajax_gd_contact_form_send', 'pn_contact_form_send' );
add_action( 'wp_ajax_nopriv_gd_contact_form_send', 'pn_contact_form_send' );
add_action('after_switch_theme', 'pn_menu_theme_activation_function', 10 ,  2);
