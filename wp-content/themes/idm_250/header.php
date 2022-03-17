<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php
        //Link - https://developer.wordpress.org/reference/functions/wp_head/
        //Plugins and WordPress core use this function to insert crucial elements into your header
        //Always put wp_head() just before the closing tag of your theme
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
            <a href="https://bludevdesign.com/idm250/">
                <img src="http://bludevdesign.com/idm250/wp-content/uploads/2022/02/Logo-1.png" alt="Logo">
            </a>
        </div>
        <!-- Navigation Menu -->
        <ul class="nav-links">
            <!--CheckBox-->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <?php
                    $menu_items = idm_render_menu('primary_menu');

                    if ($menu_items) {
                    foreach ($menu_items as $key => $row) {
                    echo "<li><a href='$row->url'>$row->title</a></li>";
                        }
                    }
                ?>
            </div>
        </ul>
    </nav>
    </header>