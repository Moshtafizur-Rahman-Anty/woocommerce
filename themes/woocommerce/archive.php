<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Name

 */

get_header(); ?>

<div class="content-area">
    <main>

        <div class="container">
            <div class="row">

            <div class="col-lg-9 col-md-8 col-12">


                <?php 
            

            the_archive_title('<h1 class="article-tilte">', '</h1>');
                //if there any post

                if( have_posts() ):

                    //load posts loop

                    while( have_posts() ): the_post();


                    get_template_part('template-parts/content','archive');


                endwhile;

                the_posts_pagination(array (

                    'prev_text'     => esc_html__('Previous','theme-name)',
                    'next_text'     => esc_html__('Next','theme-name)'

                ));
                
                 else:

                ?>



                <p><?php esc_html_e('Nothing to display.', 'theme-name'); ?></p>

                <?php endif; ?>

            </div>

            <?php get_sidebar(); ?>

            </div>
        </div>

    </main>
</div>

<?php get_footer(); ?>