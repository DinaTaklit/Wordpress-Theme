<?php
// Include NavWalker Class for for Bootstrap Navigation Menue
require_once('class-wp-bootstrap-navwalker.php');

/*
        ** Function to add my Custom Scripts 
        ** Added by @Dina 
        ** wp_enqueue_style(), wp_enqueue_script()
        */

function elzero_scripts()
{
        // Add bootstrap and font awesome styles 
        wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style("fontawesome-css", get_template_directory_uri() . '/css/fontawesome-all.min.css');
        // Add main style
        wp_enqueue_style("main-css", get_template_directory_uri() . '/css/main.css');

        // Add scripts 
        wp_deregister_script("jquery"); // Remove Registration for old JQuery    
        wp_register_script("jquery", includes_url("/js/jquery/jquery.js"), false, '', true); // Register a new JQuery in the footer
        wp_enqueue_script("jquery"); // Enquyer the new JQuery
        wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
}

/*
        ** Add Custom Menue Support
        ** Added by @Dina 
        */
function elzero_register_custome_menue()
{
        register_nav_menus(array(
                'bootstrap-menu'   =>  __('Navigation Bar'),
                'footer-menu'      =>  __('Footer Bar')
        ));
}


/*
        ** Display the menue
        ** Added by @Dina 
        */
function elzero_bootstrap_menu()
{
        wp_nav_menu(array(
                'theme_location'   => "bootstrap-menu",
                'menu_class'       => "navbar-nav ml-auto",
                'container'        => false,
                'depth'            => 2,
                'walker'           => new WP_Bootstrap_Navwalker(),
        ));
}

/*
        ** Add Actions
        ** Added by @Dina 
        ** add_action()
        */
add_action("wp_enqueue_scripts", "elzero_scripts");
add_action("init", "elzero_register_custome_menue");


/*
        ** Customize the Excerpt word lenght & Read More dots
        ** Added by @Dina 
        */
function elzero_extend_excerpt_length($length){
        return 35;
}

function elzero_extend_change_dots($more){
        return ' ...';
}

/**
        ** Add filters 
 */

add_filter('excerpt_lenght', 'elzero_extend_excerpt_length');
add_filter('excerpt_more', 'elzero_extend_change_dots');
