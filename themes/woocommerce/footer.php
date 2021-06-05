<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package  Theme Name
 */

?>



<footer>

        <section class="footer-widgets">
            <div class="container">
            <div class="row">


                <?php  if (is_active_sidebar('theme-name-sidebar-footer1')) : ?>

                <div class="col-md-4 col-12">
                    <?php dynamic_sidebar('theme-name-sidebar-footer1') ?>
                </div>
                <?php endif; ?>



                <?php  if (is_active_sidebar('theme-name-sidebar-footer2')) : ?>
                <div class="col-md-4 col-12">

                    <?php dynamic_sidebar('theme-name-sidebar-footer2') ?>
                </div>
                <?php endif; ?>


                <?php  if (is_active_sidebar('theme-name-sidebar-footer3')) : ?>
                <div class="col-md-4 col-12">

                    <?php dynamic_sidebar('theme-name-sidebar-footer3') ?>
                </div>
                <?php endif; ?>

            </div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-12 col-md-6">

            <p><?php echo esc_html(get_theme_mod( 'set_copyright' , __('Copyright x -All Right Reserved','theme-name'))); ?></p>
                    </div>
                </div>
            </div>
        </section>

</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>