<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package  Theme Name
 */

?>


<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>


    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>



</head>

<body <?php body_class();?>>
    <div id="page" class="site">
        <header>
            <div class="container">

                <section class="search"><?php get_search_form(); ?></section>
                <section class="top-bar">
                    <div class="row">
                        <?php if(class_exists('WooCommerce')): ?>

                        <div class="brand col-3 col-md-3 col-12 col-lg-2 text-center text-md-left">
                            <a href="<?php echo esc_url( home_url('/')); ?>">
                                <?php if(has_custom_logo()): ?>
                                <?php the_custom_logo(); ?></a>
                            <?php else: ?>
                            <p class="site_title"><?php bloginfo('title'); ?></p>
                            <span>
                                <?php bloginfo('description'); ?>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="second-column col-md-9 col-12 col-lg-10 ">
                            <div class="row">

                                <div class="account col-12">
                                    <div class="navber-expand">
                                        <div class="navber-nav float-left">
                                            <?php if(is_user_logged_in()): ?>
                                            <li>
                                                <a class="nav-link" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id') ) ) ?>">
                                                    <?php esc_html_e('My Account','theme-name'); ?></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id') )) ) ?>">
                                                    <?php esc_html_e('Logout','theme-name'); ?></a>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <a    class="nav-link" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id') ) ) ?>">
                                                 <?php esc_html_e('Login/Register','theme-name'); ?></a>
                                            </li>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="cart  text-right">
                                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>"><span class="cart-icon"></span></a>
                                        <span class="items"><?php echo esc_html(WC()->cart->get_cart_contents_count());?></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="col-12">
                                    <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                                data-target="#bs-example-navbar-collapse-1"
                                                aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                                aria-label="<?php esc_attr_e( 'Toggle navigation', 'theme-name' ); ?>">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>

                                            <?php

                                                    wp_nav_menu( array(

                                                    'theme_location'    => 'theme_name_main_menu',
                                                    'depth'             => 2,
                                                    'container'         => 'div',
                                                    'container_class'   => 'collapse navbar-collapse',
                                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                                    'menu_class'        => 'nav navbar-nav',
                                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker'            => new WP_Bootstrap_Navwalker(),

                                                    ) );
                                                    
                                                    
                                            ?>

                                        </div>
                                    </nav>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </div>
            
        </header>
    