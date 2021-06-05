
<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package  Theme Name
 */

get_header();

?>

    <article <?php post_class() ?>>
    <h2>
        <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <div class="post_thumbnail">
            <?php 
            
                if(has_post_thumbnail()):
                    the_post_thumbnail('theme-name-blog',array ('class' =>  'img-fluid'));
                endif;

            ?>
        </div>
        <div class="meta">
        <p> <?php esc_html_e( 'Published by','theme-name' ) ?>   <?php the_author_posts_link();?> <?php __('on', 'theme-name') ?>  <?php echo get_the_date(); ?> 
            <br>
            <?php if(has_category()): ?>
                <?php esc_html_e('Categories', 'theme-name') ?>: <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>
            <br>
            <?php if (has_tag()): ?>
                <?php esc_html_e('Categories', 'theme-name') ?>: <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>
            </p>
        </div>
    <div>
    
    <?php the_excerpt(); ?></div>

    </article>