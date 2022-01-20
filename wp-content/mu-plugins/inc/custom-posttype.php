<?php 
function register_custom_post_types()
{
    $custom_post_type_maker = [
        [
            'cpt_single' => 'Our Technology',
            'cpt_plural' => 'Our Technology',
            'slug' => 'our-technology',
            'cpt_rewrite_slug' => '',
            'cpt_icon' => 'dashicons-admin-site-alt3',
            'cpt_archive' => false,
            'cpt_show_in_nav' => true,
            'publicly_queryable' => true,
            'cpt_supports' => array('title', 'thumbnail'),
        ],

        [
            'cpt_single' => 'Our Service',
            'cpt_plural' => 'Our Services',
            'slug' => 'our-service',
            'cpt_rewrite_slug' => '',
            'cpt_icon' => 'dashicons-admin-tools',
            'cpt_archive' => false,
            'cpt_show_in_nav' => true,
            'publicly_queryable' => true,
            'cpt_supports' => array('title', 'editor', 'thumbnail'),
        ],

        [
            'cpt_single' => 'Career',
            'cpt_plural' => 'Careers',
            'slug' => 'our-career',
            'cpt_rewrite_slug' => '',
            'cpt_icon' => 'dashicons-admin-home',
            'cpt_archive' => false,
            'cpt_show_in_nav' => true,
            'publicly_queryable' => true,
            'cpt_supports' => array('title', 'editor', 'thumbnail'),
        ]
    ];

    foreach ($custom_post_type_maker as $post_type) {
        $cpt_single = $post_type['cpt_single'];
        $cpt_plural = $post_type['cpt_plural'];
        $slug = $post_type['slug'];
        $cpt_icon = $post_type['cpt_icon'];
        $cpt_show_in_nav = $post_type['cpt_show_in_nav'];
        $cpt_archive = $post_type['cpt_archive'];
        $cpt_public_query = $post_type['publicly_queryable'];
        $cpt_supports = $post_type['cpt_supports'];
        $rewrite_slug = $post_type['cpt_rewrite_slug'];

        // Admin Labels Here
        $labels = custom_label_array($cpt_plural, $cpt_single);

        // Arguments Here
        $args = custom_post_type_args($labels, $cpt_plural, $cpt_icon, $cpt_archive, $cpt_show_in_nav, $cpt_supports, $cpt_public_query, $rewrite_slug);

        // Register Here !
        register_post_type($slug, $args);
    }
}
add_action('init', 'register_custom_post_types', 0);

function custom_label_array($cpt_plural, $cpt_single)
{
    $labels = array(
        'name' => $cpt_plural,
        'singular_name' => $cpt_single,
        'add_new' => 'Add New',
        'add_new_item' => 'Add New ' . $cpt_single,
        'edit_item' => 'Edit ' . $cpt_single,
        'new_item' => 'New ' . $cpt_single,
        'all_items' => 'All ' . $cpt_plural,
        'view_item' => 'View ' . $cpt_single . ' Page',
        'search_items' => 'Search ' . $cpt_plural,
        'not_found' => 'No ' . $cpt_plural . ' found',
        'not_found_in_trash' => 'No ' . $cpt_plural . ' found in the Trash',
        'parent_item_colon' => '',
        'menu_name' => $cpt_plural,
    );
    return $labels;
}

function custom_post_type_args($labels, $cpt_plural, $cpt_icon, $cpt_archive, $cpt_show_in_nav, $cpt_supports, $cpt_public_query, $rewrite_slug)
{
    $args = array(
        'labels' => $labels,
        'description' => 'Manage ' . $cpt_plural,
        'public' => true,
        'menu_position' => 10,
        'hierarchical' => false,
        'supports' => $cpt_supports,
        'has_archive' => $cpt_archive,
        'menu_icon' => $cpt_icon,
        'exclude_from_search' => true,
        'show_in_rest' => true,
        'publicly_queryable' => $cpt_public_query,
        'show_in_nav_menus' => $cpt_show_in_nav,
        'rewrite' => array('slug' => $rewrite_slug),
    );
    return $args;
}