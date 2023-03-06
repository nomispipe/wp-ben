<?php

function add_theme_scripts_and_styles() {
	wp_enqueue_style("style", get_stylesheet_uri());
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), 1, true);
}