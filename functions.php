<?php
/*
    ** Function to add my Custom Styles 
    ** Added by @Dina 
    ** wp_enqueue_style()
    */

function elzero_add_styles()
{
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style("fontawesome-css", get_template_directory_uri() . '/css/fontawesome.min.css');
}

/*
        ** Function to add my Custom Scripts 
        ** Added by @Dina 
        ** wp_enqueue_script()
        */

function elzero_add_scripts()
{
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
}

/*
        ** Add Actions
        ** Added by @Dina 
        ** add_action()
        */

add_action("wp_enqueue_scripts", "elzero_add_styles");
add_action("wp_footer", "elzero_add_scripts");