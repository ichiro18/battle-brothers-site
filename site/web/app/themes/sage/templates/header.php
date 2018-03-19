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
    <div class="main-menu" role="navigation">
        <?php
            if (has_nav_menu('primary_navigation')){
                $args_menu = array(
	                'theme_location' => 'primary_navigation',
                    'menu_class' => 'nav',
                    'after' => '<i class="fa fa-chevron-right submenu-lvl pull-right" aria-hidden="true"></i>'
                );
                wp_nav_menu($args_menu);
            }
        ?>
    </div>
</div>
<div class="extended-navigation">
    <div class="container">
        <div class="category-group-list">
		    <?php
		    $args = array(
			    'show_option_all'    => '',
			    'show_option_none'   => __('No categories'),
			    'orderby'            => 'name',
			    'order'              => 'ASC',
			    'show_last_update'   => 0,
			    'style'              => 'list',
			    'show_count'         => 0,
			    'hide_empty'         => 0,
			    'use_desc_for_title' => 1,
			    'child_of'           => 0,
			    'feed'               => '',
			    'feed_type'          => '',
			    'feed_image'         => '',
			    'exclude'            => '',
			    'exclude_tree'       => '',
			    'include'            => '',
			    'hierarchical'       => false,
			    'title_li'           => '',
			    'number'             => NULL,
			    'echo'               => 1,
			    'depth'              => 0,
			    'current_category'   => 0,
			    'pad_counts'         => 0,
			    'taxonomy'           => 'category',
			    'walker'             => 'Walker_Category',
			    'hide_title_if_empty' => true,
			    'separator'          => '<br />',
		    );
		    wp_list_categories($args);
		    ?>
        </div>
    </div>
</div>
