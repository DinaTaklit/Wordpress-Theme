<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutener
 */

?>
<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php bloginfo("name"); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php elzero_bootstrap_menu() ?>
        </div>
    </nav>