<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body>
  <header id="header">
    <a href="http://localhost/wordpress/" class="name-btn"><h1 class="name">Ilona Rubtsova</h1><h6>Graphics art print shop</h6></a>
    <nav id="sideNav" class="sideNav">
      <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'menu_id'         => 'primary-menu',
            'menu_class'      => 'primary-menu menu',
            'sub-menu' => 'sub-menu',
        ));
      ?>
    </nav>
  </header>
