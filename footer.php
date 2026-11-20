<?php wp_enqueue_style ('footer', get_template_directory_uri() . '/assets/css/build/footer.css'); ?>
</div> <!-- /.container -->
    <footer>
        <div class="widgets">
            <?php if ( is_active_sidebar( 'footer-section-one' ) ) : ?>
                <div class="footer-section-one">
                    <?php dynamic_sidebar( 'footer-section-one' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-section-two' ) ) : ?>
                <div class="footer-section-two">
                    <?php dynamic_sidebar( 'footer-section-two' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-section-mobile' ) ) : ?>
                <div class="footer-section-mobile">
                    <?php dynamic_sidebar( 'footer-section-mobile' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <img id="pars-star" src="<?php echo get_template_directory_uri() . '/assets/img/pars_star.png' ?>" alt="" />
        <div class="bottom-bar">
            <span>© <?php echo date("Y"); ?> Pennsylvania Relief Sale</span>
            <span>&nbsp;• <a href="https://bryceyoder.com">Site credit</a></span>
        </div>
    </footer>

  <?php 
  wp_enqueue_script('header', get_template_directory_uri() . '/assets/js/header.js');
  wp_enqueue_script('newsletter', get_template_directory_uri() . '/assets/js/newsletter.js');
  wp_footer(); 
?>
        <div class="newsletter-signup">
            <button class="close outline">Close</button>
            <div>
                <h3>Sign up for our newsletter!</h3>
                <?php 
                    $cc_form_id = get_field('newsletter_form_id');
                    echo do_shortcode("[ctct form='$cc_form_id']"); 
                ?>
            </div>
        </div>
    </body>
</html>
