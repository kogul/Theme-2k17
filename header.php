<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="wrapped">
    <div class="header col-md-12">
        <h1><?php bloginfo(); ?></h1>
        <hr>
        <h4><?php echo get_bloginfo('description'); ?></h4>
    </div>
</div>
