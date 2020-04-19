<?php
    

    /** stylesheet */

    function load_stylesheets()
    {
    
        // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css'); 
 

        wp_enqueue_style('child-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');

        wp_enqueue_style('child-media-query', get_stylesheet_directory_uri() . '/assets/css/media query.css');

        wp_enqueue_style('child-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css');

        wp_enqueue_style('child-font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');

        wp_enqueue_style('child-font-family', get_stylesheet_directory_uri() . '/assets/css/font-family.css');

        // wp_enqueue_style('child-media-query', get_stylesheet_directory_uri() . '/assets/css/media query.css');

        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/https://fonts.googleapis.com/icon?family=Material+Icons');
        
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');


    /** javascript */

    function load_js()
    {

        wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/assets/js/script.js');

        wp_enqueue_script('child-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js');

        wp_enqueue_script('child-bootstrapp', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');

        wp_enqueue_script('child-loader', get_stylesheet_directory_uri() . '/assets/js/loader.js');

        wp_enqueue_script('child-header', get_stylesheet_directory_uri() . '/assets/js/header.js');

        wp_enqueue_script('child-team', get_stylesheet_directory_uri() . '/assets/js/team.js');

        wp_enqueue_script('child-testimonial', get_stylesheet_directory_uri() . '/assets/js/testimonial.js');

        wp_enqueue_script('child-wow', get_stylesheet_directory_uri() . '/assets/js/wow.js');

        // wp_enqueue_script('child-smooth scroll', get_stylesheet_directory_uri() . '/assets/js/smooth scroll.js');


    }
    add_action('wp_enqueue_scripts', 'load_js');

    

    /** Menus */

    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );


    // function add_classes_on_li($classes, $item, $args) {
    //     $classes[] = 'nav-item';
    //     return $classes;
    // }
    // add_filter('nav_menu_css_class','add_classes_on_li',1,3

    

    class DPT_Twenty_Seventeen_Child {
 
    /**
     * Register hooks.
     */
        public function init() {
            // ...
        }
    }
     
    $ts_child_theme = new DPT_Twenty_Seventeen_Child();
    $ts_child_theme->init();



    


?>