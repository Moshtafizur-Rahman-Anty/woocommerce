<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Theme Name

 */


 get_header();

 ?>

<div class="content-area">
    <main>

        <div class="container">

            <div class="error-404">

                <header>

                    <h1><?php esc_html_e(' Page not found', 'theme-name'); ?> </h1>
                    <p><?php esc_html_e('Unfortunately, the page you tried to reach does not exist on this site!', 'theme-name'); ?>
                    </p>

                </header>

                <?php 
            
                the_widget('WP_Widget_Recent_Posts', array (


                    'title'         =>      esc_html__('Take a Look At Our Latest Posts', 'theme-name'),
                    'number'        =>      3, 

                ) );
            
            ?>

            </div>

        </div>

    </main>

</div>


<?php get_footer(); ?>