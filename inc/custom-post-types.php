<?php
/**
 * The CPTs that need defining and functions for creating them
 *
 * This file is included from  functions.php
 *
 */

build_cpt('page', 'testimonial', 'testimonials', false, false, 'dashicons-testimonial');


function build_cpt($type, $singular, $plural, $tags = false, $categories = false, $icon = 'dashicons-admin-page')
{
    $singular = strtolower($singular);
    $plural = strtolower($plural);
    $lcSingular = str_replace('_', ' ', $singular);
    $lcPlural = str_replace('_', ' ', $plural);
    $ucSingular = ucwords($lcSingular);
    $ucPlural = ucwords($lcPlural);

    $taxonomies = array();

    if($tags)
    {
        register_taxonomy($singular.'_tag', $singular, array(
            "hierarchical" => "false",
            "public" => true,
            "labels" => array(
                "name" => _x( "{$ucSingular} Tags", "taxonomy general name" ),
                "singular_name" => _x( "{$ucSingular} Tag", "taxonomy singular name" ),
                "search_items" =>__( "Search {$ucSingular} Tags" ),
                "all_items" => __( "All {$ucSingular} Tags" ),
                "parent_item" => __( "Parent {$ucSingular} Tag" ),
                "parent_item_colon" => __( "Parent {$ucSingular} Tag:" ),
                "edit_item" => __( "Edit {$ucSingular} Tag" ),
                "update_item" => __( "Update {$ucSingular} Tag" ),
                "add_new_item" => __( "Add New {$ucSingular} Tag" ),
                "new_item_name" => __( "New {$ucSingular} Tag Name" ),
                "menu_name" => __( "{$ucSingular} Tag" )
            )
        ));

        $taxonomies[] = $singular.'_tag';
    }

    if($categories)
    {
        register_taxonomy($singular.'_category', $singular, array(
            "hierarchical" => "true",
            "public" => true,
            "labels" => array(
                "name" => _x( "{$ucSingular} Categories", "taxonomy general name" ),
                "singular_name" => _x( "{$ucSingular} Category", "taxonomy singular name" ),
                "search_items" =>__( "Search {$ucSingular} Categories" ),
                "all_items" => __( "All {$ucSingular} Categories" ),
                "parent_item" => __( "Parent {$ucSingular} Category" ),
                "parent_item_colon" => __( "Parent {$ucSingular} Category:" ),
                "edit_item" => __( "Edit {$ucSingular} Category" ),
                "update_item" => __( "Update {$ucSingular} Category" ),
                "add_new_item" => __( "Add New {$ucSingular} Category" ),
                "new_item_name" => __( "New {$ucSingular} Category Name" ),
                "menu_name" => __( "{$ucSingular} Category" )
            )
        ));

        $taxonomies[] = $singular.'_category';
    }

    $supports = array("title", "editor", "thumbnail", "excerpt", "author", "revisions", "page-attributes");

    $hierarchical = false;

    $rewrite = true;

    if($slug) $rewrite = array('slug'=>$slug);

    register_post_type($singular,
        array(
            "labels"=>array(
                "name" => __("{$ucSingular}"),
                "singular_name" => __("{$ucSingular}"),
                "add_new" => __("Add {$ucSingular}"),
                "add_new_item" => __("Add New {$ucSingular}"),
                "edit_item" => __("Edit {$ucSingular}"),
                "new_item" => __("New {$ucSingular}"),
                "view_item" => __("View {$ucSingular}"),
                "search_items" => __("Search {$ucPlural}"),
                "not_found" => __("No {$lcPlural} found"),
                "not_found_in_trash" => __("No {$lcPlural} found in trash"),
                "parent_item_colon" => __("Parent {$ucSingular}"),
                "menu_name" => __("{$ucPlural}"),
            ),
            "public" => true,
            "show_ui" => true,
            "has_archive" => false,
            "capability_type" => $type,
            "hierarchical" => $hierarchical,
            "supports" => $supports,
            "taxonomies" => $taxonomies,
			"rewrite" => $rewrite,
			'menu_icon' => $icon,
        )
    );
}