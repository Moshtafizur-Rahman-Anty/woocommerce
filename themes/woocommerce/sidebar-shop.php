<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Theme Name
 */
?>

<?php if ( is_active_sidebar( 'theme-name-sidebar-shop' ) ) : ?>


		<?php dynamic_sidebar( 'theme-name-sidebar-shop' ); ?>

    
        
<?php endif; ?>
