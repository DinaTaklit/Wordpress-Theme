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