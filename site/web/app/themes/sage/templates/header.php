<header class="container top-header">
    <div class="logo-main">
        <a href="/">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Боевое братство"></a>
    </div>
    <div class="company-name">
        <h1>
            <h2 class="name">
                ВСЕРОССИЙСКАЯ ОБЩЕСТВЕННАЯ ОРГАНИЗАЦИЯ ВЕТЕРАНОВ «БОЕВОЕ БРАТСТВО»
            </h2>
            <span class="sub-name">
                Кировское отделение
            </span>
        </h1>
    </div>
</header>
<div class="top-navigation">
    <div class="container">
        <a class="main-menu-link" href="#">Об Организации</a>
        <div class="social pull-right">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-vk"></i></a>
            <a href="#"><i class="fa fa-odnoklassniki"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
    <div class="main-menu">
        <?php
            if (has_nav_menu('primary_navigation')){
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            }
        ?>
    </div>
</div>

<!--<header class="banner">-->
<!--  <div class="container">-->
<!--      <h1>HEADER</h1>-->
<!--    <a class="brand" href="--><?//= esc_url(home_url('/')); ?><!--">--><?php //bloginfo('name'); ?><!--</a>-->
<!--    <nav class="nav-primary">-->
<!--      --><?php
//      if (has_nav_menu('primary_navigation')) :
//        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
//      endif;
//      ?>
<!--    </nav>-->
<!--  </div>-->
<!--</header>-->
