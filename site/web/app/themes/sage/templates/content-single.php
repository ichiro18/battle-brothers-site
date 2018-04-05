<div class="wrapper">
<?php while (have_posts()) : the_post(); ?>
    <h3 class="page-title"><?php the_title(); ?></h3>
    <div class="page-wrapper">
        <div class="main-content <?php if (is_active_sidebar( 'sidebar-primary' )){ echo "active-sidebar";}; ?>">
            <div class="post-single">
                <div class="post-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-date">
                    <?php get_template_part('templates/entry-meta'); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
	    <?php
	        get_template_part("templates/sidebar");
	    ?>
    </div>
</div>
<?php endwhile; ?>
</div>