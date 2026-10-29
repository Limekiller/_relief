<?php 
get_header(); 
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail_url();
}
?>

<div id='main-content' class="content <?php echo $featured_image ? 'has-image' : '' ?>">
    <?php if ( $featured_image ) : ?>
        <div class="featured-container">
            <img class="featured-image" src="<?php echo $featured_image; ?>" />
            <div class="featured-content-container" style="margin: 0">
                <div class="header">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <div class="featured-content">
                    <?php echo get_field('featured_content'); ?>
                </div>
            </div>

        </div>
    <?php else : ?>
        <div class="header">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    <?php endif; ?>
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
        endwhile; endif;
    ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
