<?php

/*
        ** Function to add my Custom Scripts 
        ** Added by @Dina 
        ** wp_enqueue_style(), wp_enqueue_script()
        */

function elzero_scripts()
{
        // Add bootstrap and font awesome styles 
        wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style("fontawesome-css", get_template_directory_uri() . '/css/fontawesome.min.css');
        // Add main style
        wp_enqueue_style("main-css", get_template_directory_uri() . '/css/main.css');

        // Add scripts 
        wp_deregister_script("jquery"); // Remove Registration for old JQuery    
        wp_register_script("jquery", includes_url("/js/jquery/jquert.js"), false, '', true); // Register a new JQuery in the footer
        wp_enqueue_script("jquery"); // Enquyer the new JQuery
        wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
}

/*
        ** Add Actions
        ** Added by @Dina 
        ** add_action()
        */
add_action("wp_enqueue_scripts", "elzero_scripts");

/*
        ** Add Custom Menue Support
        ** Added by @Dina 
        */
function elzero_register_custome_menue() {
        register_nav_menu('bootstrap menu', __('Navigation Bar'));
}

add_action( "init", "elzero_register_custome_menue");