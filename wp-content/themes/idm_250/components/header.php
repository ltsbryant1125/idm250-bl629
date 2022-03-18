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