<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Tour Lite
 */
?>
        <div class="copyright-wrapper">
        	<div class="container">
                <!--<div class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div>--><!-- footer-menu -->
                <div class="clear"></div> 
                <div class="copyright">
                    <p><?php echo esc_attr(get_theme_mod('vw_tour_lite_footer_copy')); ?> <?php echo vw_tour_lite_credit(); ?></p>
            </div><!-- copyright -->
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>