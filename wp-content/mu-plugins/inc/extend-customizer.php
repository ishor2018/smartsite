<?php
//require get_template_directory() . '/inc/customizer.php';

function smart_customizer_settings($wp_customize) {
    
    // Homepage
    // add a setting for the homepage background image
    $wp_customize->add_setting('homepage_logo');    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_logo',
        array(                
            'label'    => __( 'Homepage Background Image', 'smart' ),
            'section' => 'static_front_page',
            'settings' => 'homepage_logo',
            'priority' => 201
            ) 
        ) 
    );

    // add a setting for the homepage top text
    $wp_customize->add_setting('homepage_top_text');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'homepage_top_text',
            array(
                'label'    => __( 'Homepage Banner Top Text', 'smart' ),
                'section'  => 'static_front_page',
                'settings' => 'homepage_top_text',
                'type'     => 'text',
                'priority' => 202
            )
        )
    );

    // add a setting for the homepage main/bold text
    $wp_customize->add_setting('homepage_main_text');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'homepage_main_text',
            array(
                'label'    => __( 'Homepage Bold Text', 'smart' ),
                'section'  => 'static_front_page',
                'settings' => 'homepage_main_text',
                'type'     => 'text',
                'priority' => 203
            )
        )
    );

    // add a setting for the homepage subtitle
    $wp_customize->add_setting('homepage_subtitle_text');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'homepage_subtitle_text',
            array(
                'label'    => __( 'Homepage Subtitle Text', 'smart' ),
                'section'  => 'static_front_page',
                'settings' => 'homepage_subtitle_text',
                'type'     => 'text',
                'priority' => 204
            )
        )
    );
    // Footer contact information
    $wp_customize->add_section( 'contact_info' , array(
        'title'    => __( 'Footer Contact Information', 'smart' ),
        'priority' => 300
    ) ); 
   
    $wp_customize->add_setting('addresses');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'addresses',
            array(
                'label'    => __( 'Footer Contact Addresses', 'smart' ),
                'section'  => 'contact_info',
                'settings' => 'addresses',
                'type'     => 'text',
                'priority' => 101
            )
        )
    );

    $wp_customize->add_setting('phone');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'phone',
            array(
                'label'    => __( 'Footer Contact Phone', 'smart' ),
                'section'  => 'contact_info',
                'settings' => 'phone',
                'type'     => 'text',
                'priority' => 102
            )
        )
    );

    $wp_customize->add_setting('email');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'email',
            array(
                'label'    => __( 'Footer Contact Email', 'smart' ),
                'section'  => 'contact_info',
                'settings' => 'email',
                'type'     => 'text',
                'priority' => 103
            )
        )
    );

    // Footer copyright information
    $wp_customize->add_section( 'copyright_info' , array(
        'title'    => __( 'Copyright Information', 'smart' ),
        'priority' => 301
    ) ); 

    $wp_customize->add_setting('copyright');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'copyright',
            array(
                'label'    => __( 'Copyright', 'smart' ),
                'section'  => 'copyright_info',
                'settings' => 'copyright',
                'type'     => 'textarea',
                'priority' => 101
            )
        )
    );


    // Footer social icon information
    $wp_customize->add_section( 'social_icon_info' , array(
        'title'    => __( 'Socail Icon Settings', 'starter' ),
        'priority' => 302
    ) ); 

    $wp_customize->add_setting('facebook');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'facebook',
            array(
                'label'    => __( 'Facebook URL', 'smart' ),
                'section'  => 'social_icon_info',
                'settings' => 'facebook',
                'type'     => 'URL',
                'priority' => 101
            )
        )
    );

    $wp_customize->add_setting('twitter');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'twitter',
            array(
                'label'    => __( 'Twitter URL', 'smart' ),
                'section'  => 'social_icon_info',
                'settings' => 'twitter',
                'type'     => 'URL',
                'priority' => 102
            )
        )
    );

    $wp_customize->add_setting('instagram');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'instagram',
            array(
                'label'    => __( 'Instagram URL', 'smart' ),
                'section'  => 'social_icon_info',
                'settings' => 'instagram',
                'type'     => 'URL',
                'priority' => 103
            )
        )
    );

    $wp_customize->add_setting('linkedin');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'linkedin',
            array(
                'label'    => __( 'Linkedin URL', 'smart' ),
                'section'  => 'social_icon_info',
                'settings' => 'linkedin',
                'type'     => 'URL',
                'priority' => 103
            )
        )
    );


    // Footer copyright information
    $wp_customize->add_section( 'career' , array(
        'title'    => __( 'Careers Settings', 'smart' ),
        'priority' => 303
    ) ); 

    $wp_customize->add_setting('banner_heading');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'banner_heading',
            array(
                'label'    => __( 'Banner Heading', 'smart' ),
                'section'  => 'career',
                'settings' => 'banner_heading',
                'type'     => 'text',
                'priority' => 101
            )
        )
    );

    $wp_customize->add_setting('banner_desc');
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'banner_desc',
            array(
                'label'    => __( 'Banner Description', 'smart' ),
                'section'  => 'career',
                'settings' => 'banner_desc',
                'type'     => 'textarea',
                'priority' => 102
            )
        )
    );

    $wp_customize->add_setting('career_banner');    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'career_banner',
        array(                
            'label'    => __( 'Career Banner Image', 'smart' ),
            'section' => 'career',
            'settings' => 'career_banner',
            'priority' => 201
            ) 
        ) 
    );

}
add_action('customize_register', 'smart_customizer_settings');