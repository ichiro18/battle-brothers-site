<?php
/**
 * Template Name: Навигационная страница
 */
?>

<div class="wrapper">
  <h3 class="page-title"><?php echo get_the_title(); ?></h3>
  <div class="page-wrapper">
    <div class="main-content">
      <ul class="child-nav">
          <?php
            $id = get_the_ID();
            $args = array(
                'sort_order'   => 'ASC',
                'sort_column'  => 'menu_order',
                'hierarchical' => 1,
                'exclude'      => '',
                'include'      => '',
                'meta_key'     => '',
                'meta_value'   => '',
                'authors'      => '',
                'child_of'     => $id,
                'parent'       => $id,
                'exclude_tree' => '',
                'number'       => '',
                'offset'       => 0,
                'post_type'    => 'page',
                'post_status'  => 'publish',
            );
            $pages = get_pages($args);
            foreach ($pages as $page) {
              $link = '<li><a href="'. get_page_link($page->ID) .'">'. $page->post_title. '</a></li>';
              echo $link;
            }
          ?>
      </ul>
    </div>
    <?php
      get_template_part("templates/sidebar");
    ?>
  </div>
</div>

