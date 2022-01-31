<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/styles/main.css">
    <title><?php wp_title(); ?></title>
    <?php
        //Link - https://developer.wordpress.org/reference/functions/wp_head/
        //Plugins and WordPress core use this function to insert crucial elements into your header
        //Always put wp_head() just before the closing tag of your theme
     wp_head();
     ?>
</head>
<body>
    <img src="http://localhost:8888/wp-content/uploads/2022/01/Logo.png" alt="Logo">
    <?php

    wp_nav_menu(['theme_location' => 'primary_menu']);
