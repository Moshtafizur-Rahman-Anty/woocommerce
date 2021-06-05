<?php

/**
 * Theme Name functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package  Theme Name

 */


/* 

1. ENQUEUING STYLESHHET INCLIDUING BOOTSTRAP AND GOOGLE FONT

2. REFGISTERING MENU AND WOOCOMMERCE SUPPORT (ADD THEME SUPPORT)

3. WOOCOMMERCE CART

*/




  /*=======================================================================
                  ENQUEUING STYLESHHET INCLIDUING BOOTSTRAP 
   =======================================================================*/


//REGISTER CUSTOM NAVIGATION WALKER


require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/customizer.php';



function theme_name_scripts () {



    // BOOTSTRAP JAVASCRIPT AND CSS FILES

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.5.3', true );

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css',  array(), '4.5.3' , 'all');



    
    //THEMES MAIN STYLESHEET

    wp_enqueue_style('theme_name_style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) , 'all');

    


    //GOOGLE FONTS

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap&family=Seaweed+Script&display=swap', [], null);



    //ENQUEUING FLEXSLIDER JAVASCRIPT AND CSS FILES

    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), ' ', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), ' ', true);
    wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array() , ' ', 'all');


}


add_action('wp_enqueue_scripts','theme_name_scripts');











  /*=======================================================================
                     REFGISTERING MENU AND WOOCOMMERCE SUPPORT
   =======================================================================*/





function theme_name_config () {


        register_nav_menus(

            array (

                'theme_name_main_menu' => esc_html__('Theme name Main Menu', 'theme-name'),
                
            )

        ); 


        $textdomain         =       'theme-name';
        
        
        load_theme_textdomain ( $textdomain, get_stylesheet_directory() . '/languages/' );

        load_theme_textdomain ( $textdomain, get_template_directory() . '/languages/' );





    add_theme_support( 'woocommerce', array (



            'thumbnail_image_width' => 255,

            'single_image_width' => 255,

            'product_grid' => array (


                'default_rows'      =>      10,
                'min_rows'          =>      5,
                'max_rows'          =>      10,
                'default_columns'   =>      1,
                'min_columns'       =>      1,
                'max_columns'       =>      1,
                


            )

 
    )   );





    add_theme_support('wc-product-gallery-zoom');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');



    add_theme_support('custom-logo', array (
        
        'height'        =>      85,
        'width'         =>      160,
        'flex_height'   =>      true,
        'flex_width'    =>      true,   

    ));


    add_theme_support('post_thumbnail');
    add_image_size( 'theme-name-slider', 1920, 800, array('center', 'center') );
    add_image_size( 'theme-name-blog', 960, 640, array('center', 'center') );






if ( ! isset( $content_width ) ) {


    $content_width = 600;
    

}

add_theme_support('title-tag');

}




add_action('after_setup_theme', 'theme_name_config', 0);











  /*=======================================================================
                                WOOCOMMERCE CART
   =======================================================================*/


/*


 * Show cart contents / total Ajax
 

 */



add_filter( 'woocommerce_add_to_cart_fragments', 'theme_name_woocommerce_header_add_to_cart_fragment' );


function theme_name_woocommerce_header_add_to_cart_fragment( $fragments ) {

	global $woocommerce;

	ob_start();

	?>

    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>

	<?php

    $fragments['span.items'] = ob_get_clean();
    
    return $fragments;
    
}


add_action('widgets_init', 'theme_name_sidebar') ;

function theme_name_sidebar ()  {


    register_sidebar ( array (

        'name'              =>  esc_html__('Theme Name Main Sidebar', 'theme-name'),
        'id'                =>  'theme-name-sidebar-1',
        'description'       =>  esc_html__('Drag and drop your widget here','theme-name'),
        'before_widget'     =>  '<div  id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'      =>  '</div>',  
        'before_title'      =>  '<h4 class="widget-title">',
        'after_title'       =>  '</h4>',

    ));

    register_sidebar ( array (

        'name'              =>  esc_html__('Sidebar Shop','theme-name'),
        'id'                =>  'theme-name-sidebar-shop',
        'description'       =>  esc_html__('Drag and drop your WooCommerce widget here','theme-name'),
        'before_widget'     =>  '<div  id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'      =>  '</div>',  
        'before_title'      =>  '<h4 class="widget-title">',
        'after_title'       =>  '</h4>',

    ));


    
    register_sidebar ( array (

        'name'              =>  esc_html__('Footer Sidebar 1', 'theme-name'),
        'id'                =>  'theme-name-sidebar-footer1',
        'description'       =>  esc_html__('Drag and drop your WooCommerce widget here', 'theme-name'),
        'before_widget'     =>  '<div  id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'      =>  '</div>',  
        'before_title'      =>  '<h4 class="widget-title">',
        'after_title'       =>  '</h4>',

    ));


       
    register_sidebar ( array (

        'name'              =>  esc_html__('Footer Sidebar 2','theme-name'),
        'id'                =>  'theme-name-sidebar-footer2',
        'description'       =>  esc_html__('Drag and drop your WooCommerce widget here','theme-name'),
        'before_widget'     =>  '<div  id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'      =>  '</div>',  
        'before_title'      =>  '<h4 class="widget-title">',
        'after_title'       =>  '</h4>',

    ));

       
    register_sidebar ( array (

        'name'              =>  esc_html__('Footer Sidebar 3','theme-name'),
        'id'                =>  'theme-name-sidebar-footer3',
        'description'       =>  esc_html__('Drag and drop your WooCommerce widget here','theme-name'),
        'before_widget'     =>  '<div  id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'      =>  '</div>',  
        'before_title'      =>  '<h4 class="widget-title">',
        'after_title'       =>  '</h4>',

    ));






}