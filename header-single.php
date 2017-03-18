<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo(); ?></title>
    <meta charset="utf-8">
    <?php wp_head(); ?>
</head>
<body>
<div class="nav-side">
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'menuCont' ));
    ?>
</div>
<div class="menuIcon">
    <span class="glyphicon glyphicon-th"></span>
</div>

