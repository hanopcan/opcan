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



function opcan_text_after_title( $post_type ) { ?>
    <div class="after-title-help">
        <h3>Instructions for using the 'Content with image first' template</h3>
        <div class="inside">
            <p>You need an image at the top of this page. Insert it using CSS - make it a background image for a div or h2.</p>
            <p>Then surround the rest of the page's content in a div with the class "text".</p>
        </div><!-- .inside -->
    </div><!-- .postbox -->
<?php }
add_action( 'edit_form_after_title', 'opcan_text_after_title' );


function create_custom_post_type_talks(){
    $labels = array(
        'name' => 'Talks',
        'singular_name' => 'Talk',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Talk',
        'edit_item' => 'Edit Talk',
        'new_item' => 'New Talk',
        'view_item' => 'View Talk',
        'search_items' => 'Search Talks',
        'not_found' => 'No Talks found',
        'not_found_in_trash' => 'No Talks found in Trash',
        'parent_item_colon' => '',
    );
    
    $args = array(
        'label' => __('Talks'),
        'labels' => $labels, // from array above
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-megaphone', // from this list
        'hierarchical' => false,
        'rewrite' => array( "slug" => "talks" ), // defines URL base
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'post_tag'), // own categories
        'has_archive' => true
    );

    register_post_type('talks', $args);
}
add_action('init','create_custom_post_type_talks');

// function exclude_category( $query ) {
//     if ( is_post_type_archive( 'talks' ) ) {
//         $query->set( 'order', asc );
//         return;
//     }
// }
// add_action( 'pre_get_posts', 'exclude_category' );
?>