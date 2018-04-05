<?php
/**
 * Template Name: Навигационная страница
 */
?>

<?php
$category = get_queried_object();
$category_id = $category->term_id;
$posts_query = new WP_Query(array(
	'post_type'=>'post',
	'post_status'=>'publish',
	'posts_per_page'=>10,
    'category__in' => $category_id,
));
?>
<div class="wrapper">
  <h3 class="page-title">
      <?php
        single_cat_title();
      ?>
  </h3>
  <?php
    $term_description = term_description();
    if (!empty($term_description)) {
  ?>
    <div class="page-description">
        <?php echo $term_description; ?>
    </div>
  <?php }; ?>
  <div class="page-wrapper">
    <div class="main-content <?php if (is_active_sidebar( 'sidebar-primary' )){ echo "active-sidebar";}; ?>">
        <?php if ($posts_query->have_posts()) { ?>
	        <?php
                $posts = $posts_query->posts;
	        ?>
            <div class="posts-easy-grid">
                <?php foreach ($posts as $post) { ?>
                    <article class="post-item" role="article">
                        <a
                                class="post-thumbnail"
                                style='background-image: url("<?php echo get_the_post_thumbnail_url($post->ID); ?>");'
                                title="<?php echo get_the_post_thumbnail_caption($post->ID); ?>"
                                href="<?php echo get_permalink($post->ID, false); ?>"
                        >
                        </a>
                        <header class="post-header">
                            <h1>
                                <a href="<?php echo get_permalink($post->ID, false); ?>"><?php echo $post->post_title; ?></a>
                            </h1>
                        </header>
                        <footer class="post-footer">
                            <ul class="tag-list">
                                <?php echo get_the_tag_list("<li>","</li><li>","</li>"); ?>
                            </ul>
                            <div class="date">
	                            <?php
                                    the_modified_date("j F Y - H:i");
                                ?>
                            </div>
                        </footer>
                    </article>
                <?php } ?>
            </div>
        <?php wp_reset_postdata(); ?>
        <?php
        } else { ?>
            <div class="alert alert-danger full-width" role="alert">
                В данной рубрике отстутствуют записи
            </div>
        <?php }; ?>
    </div>
    <?php
      get_template_part("templates/sidebar");
    ?>
  </div>
</div>

