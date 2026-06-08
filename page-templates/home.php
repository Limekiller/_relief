<?php
/**
* Template Name: Home Page
*/
wp_enqueue_style('hero', get_template_directory_uri() . '/assets/css/hero.css');
?>

<?php 
get_header(); 
$images = get_field('hero_images');
?>

<div class="hero">
    <?php if ($images): ?>
        <div class="gallery">
            <div class="main">
                <img class="base" src="<?php echo esc_url($images[0]['url']); ?>" alt="<?php echo esc_attr($images[0]['alt']); ?>" />
                <img class='mask' src="<?php echo esc_url($images[0]['url']); ?>" alt="<?php echo esc_attr($images[0]['alt']); ?>" />
            </div>
            <div class="selector">
                    <?php foreach($images as $index => $image): ?>
                        <button class="selector-img none" aria-label="Show gallery image <?php echo $index?>">
                            <img 
                                src="<?php echo esc_url($image['url']); ?>" 
                                alt="<?php echo esc_attr($image['alt']); ?>" 
                            />
                        </button>
                    <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <section class="text">
        <div>
            <?php echo get_field('hero_text_top'); ?>
        </div>
        <div>
            <?php echo get_field('hero_text_bottom'); ?>
        </div>
    </section>
</div>

<main id="main-content" class="content">
<?php the_content(); ?>
</main>

<?php 
wp_enqueue_script('hero', get_template_directory_uri() . '/assets/js/hero.js');
get_footer();
?>
