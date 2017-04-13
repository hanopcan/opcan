<?php
//don't show admin bar in front-end
show_admin_bar( false );


function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    //enqueue the debugging script
    wp_enqueue_script('myscript', get_stylesheet_directory_uri().'/js/toggledisplay.js', array('jquery'), '1.0', 'screen, projection');    
    
    //allow us to use icons in the post/page content
    wp_enqueue_style( 'dashicons' );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



?>