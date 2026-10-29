<?php wp_enqueue_style ('posts', get_template_directory_uri() . '/assets/css/build/posts.css'); ?>
<?php get_header(); ?>

<div id="main-content" class="content no-header">
    <div class="header">
        <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>
    </div>
    <div>
        <?php if ( have_posts() ) : ?>
            <div class="posts">
                <?php while ( have_posts() ) : the_post(); ?>
                    <a class="post" href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } else { ?>
                            <img src="<?php echo get_random_quilt(); ?>" alt="Placeholder image for news item" />
                        <?php } ?>
                        <div class="text">
                            <h2><?php the_title(); ?></h2>
                            <h3><?php echo get_the_date(); ?></h3>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div> <!-- /.row -->

<?php 
wp_enqueue_script('news', get_template_directory_uri() . '/assets/js/news.js');
get_footer();
?>