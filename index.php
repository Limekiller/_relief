<?php 
get_header(); 
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail_url();
}
?>

<div id='main-content' class="content <?php echo $featured_image ? 'has-image' : '' ?>">
    <?php if ( $featured_image ) : ?>
        <img class="featured-image star" src="<?php echo $featured_image; ?>" />
    <?php endif; ?>
    <div class="header <?php echo $featured_image ? "img-header" : "" ?>">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
        endwhile; endif;
    ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
