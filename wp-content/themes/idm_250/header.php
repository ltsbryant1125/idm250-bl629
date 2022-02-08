<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/styles/main.css">
    <link rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php
        //Link - https://developer.wordpress.org/reference/functions/wp_head/
        //Plugins and WordPress core use this function to insert crucial elements into your header
        //Always put wp_head() just before the closing tag of your theme
     wp_head();
     ?>
</head>
<body>
    <img src="http://bludevdesign.com/idm250/wp-content/uploads/2022/02/Logo-1.png" alt="Logo">
    <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
    <?php
    wp_nav_menu(['theme_location' => 'primary_menu']);
