<?php

    add_theme_support( 'post-thumbnails' );

    function scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'ui-kit', get_stylesheet_directory_uri() . '/includes/css/uikit.almost-flat.css' );

    }
    add_action( 'wp_enqueue_scripts', 'scripts' );


    /**
     * Register our sidebars and widgetized areas.
     *
     */
    function mektek_widgets_init() {

        register_sidebar( array(
            'name'          => 'Footer 1',
            'id'            => 'footer_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => 'Footer 4',
            'id'            => 'footer_4',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );

    }
    add_action( 'widgets_init', 'mektek_widgets_init' );

    /**
     * Register our post types.
     *
     */

    function mektek_post_type_init() {
        register_post_type( 'services',
            array(
                'labels' => array(
                    'name' => __( 'Services' ),
                    'singular_name' => __( 'Service' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'service' ),
                'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            )
        );
        register_post_type( 'coupons',
            array(
                'labels' => array(
                    'name' => __( 'Coupons' ),
                    'singular_name' => __( 'Coupon' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'coupon' ),
                'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
            )
        );
    }
    add_action( 'init', 'mektek_post_type_init' );

    add_theme_support( 'menus' );
    register_nav_menus(array(
        'primary' => __( 'Primary Menu', 'mtact' ),
    ));