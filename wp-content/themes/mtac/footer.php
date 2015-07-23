<div class="footer">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-4">
                <?php dynamic_sidebar( 'footer_1' ); ?>
            </div>
            <div class="uk-width-1-4">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </div>
            <div class="uk-width-1-4">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Footer Contact Form"]'); ?>
            </div>
            <div class="uk-width-1-4">
                <?php dynamic_sidebar( 'footer_4' ); ?>

            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <p>&copy; Copyright. MekTek AutoCare. 2015.</p>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>