<?php
/**
* Template Name: No Header
*/
?>
<?php get_header(); ?>

<div id="main-content" class="content no-header">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
        endwhile; endif;
    ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
