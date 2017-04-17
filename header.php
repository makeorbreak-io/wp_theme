<?php
class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{
    /*
     * Add vertical menu class and submenu data attribute to sub menus
     */

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(''); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class='main'>
            <?php
                echo '<div class="top-bar"><div class="top-bar-right">';
                wp_nav_menu(array(
                    'container' => false,
                    'menu' => 'primary',
                    'menu_class' => 'dropdown menu',
                    'theme_location' => 'primary',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                    'walker' => new F6_TOPBAR_MENU_WALKER(),
                ));
                echo '</div></div>';
            ?>
        </header>
