<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme Name
 * @version 1.0
 */

get_header(); ?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p>
                <?php esc_html_e( 'Published by', 'theme-name' ); ?> <?php the_author_posts_link(); ?> 
                <?php esc_html_e( 'on', 'theme-name' ) ?> <?php echo get_the_date(); ?>
                <br />
                <?php if( has_category() ): ?>
                  <?php esc_html_e( 'Categories', 'theme-name' ) ?>: <span><?php the_category( ' ' ); ?>
                  <br/>
                <?php endif; ?>
                <?php if( has_tag() ): ?>
                    <?php esc_html_e( 'Tags', 'theme-name' ) ?>: <span><?php the_tags( '', ', '); ?></span>
                <?php endif; ?>
            </p>                            
        </div>
        <div class="post-thumbnail">
        	<?php 
            	if( has_post_thumbnail() ): 
            		the_post_thumbnail( 'theme-name-blog', array( 'class' => 'img-fluid') );
            	endif;
        	?>
        </div>
    </header>    
    <div class="content">
        <?php 
            wp_link_pages(
                array(
                'before'    => '<p class="inner-pagination">' . esc_html_e( 'Pages:', 'theme-name' ),
                'after'     => '</p>',
                )
            ); 
        ?>
        <?php the_content(); ?>

            

    </div>
</article>