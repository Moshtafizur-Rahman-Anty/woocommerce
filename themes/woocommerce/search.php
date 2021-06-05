<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme Name
 */

get_header(); 

?>

<div class="content-area">
    <main>

        <div class="container">
            <div class="row col-12">
            <h1><?php esc_html_e('Search Result for:','theme-name'); ?> <?php echo get_search_query(); ?></h1>

                <?php 

                get_search_form();

                //if there any post

                if( have_posts() ):

                    //load posts loop

                    while( have_posts() ): the_post();


                    get_template_part('template-parts/content', 'search');


                endwhile;
                the_posts_pagination(array (

                    'prev_text'     => esc_html__('Previous','theme-name)',
                    'next_text'     => esc_html__('Next','theme-name)'


                ));
                
                 else:

                ?>



                <p><?php _e('There are no result for your query.','theme-name'); ?></p>

                <?php endif; ?>

            </div>
        </div>

    </main>
</div>

<?php get_footer(); ?>