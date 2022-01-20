<?php
// Add metabox
function smart_register_meta_box() {
    add_meta_box( 'designation', esc_html__( 'Designation', 'smart' ), 'smart_meta_box_callback', 'our-career', 'advanced', 'high' );
    add_meta_box( 'icon', esc_html__( 'Icon', 'smart' ), 'smart_service_meta_box_callback', 'our-service', 'advanced', 'high' );
}
add_action( 'add_meta_boxes', 'smart_register_meta_box');

function smart_meta_box_callback( $meta_id ) {
 
    $outline = '<label for="designation" style="width:150px; display:inline-block;">'. esc_html__('Designation', 'smart') .'</label>';
    $designation = get_post_meta( $meta_id->ID, 'designation', true );
    $outline .= '<input type="text" name="designation" id="designation" class="designation" value="'. esc_attr($designation) .'" style="width:300px;"/>';
 
    echo $outline;
}

function smart_service_meta_box_callback( $meta_id ) {
 
    $outline = '<label for="icon" style="width:150px; display:inline-block;">'. esc_html__('Icon Class', 'smart') .'</label>';
    $icon = get_post_meta( $meta_id->ID, 'icon', true );
    $outline .= '<input type="text" name="icon" id="icon" class="icon" value="'. esc_attr($icon) .'" style="width:300px;"/>';
 
    echo $outline;
}

//save meta value with save post hook
add_action( 'save_post', function( $post_id ) {
    if ( isset( $_POST['designation'] ) ) {
        update_post_meta( $post_id, 'designation', $_POST['designation'] );
    }

    if ( isset( $_POST['icon'] ) ) {
        update_post_meta( $post_id, 'icon', $_POST['icon'] );
    }
} );


 