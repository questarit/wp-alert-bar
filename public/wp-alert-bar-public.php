<?php

/**
 * This file builds the functionality of the alert bar
 */

// Hook alert bar
add_action( 'wp_head', 'mbwpab_page_display' );
function mbwpab_page_display() {

    if ( ( ( get_option( 'alert_display', 'home-page' ) == 'home-page' ) && is_front_page() ) || ( get_option( 'alert_display', 'full-site' ) == 'full-site' ) ) {
        mbwpab_alert_bar_markup();
    }

}

// Build alert bar
function mbwpab_alert_bar_markup() {

    if ( true === get_theme_mod( 'alert_close_display' ) ) {
        add_action( 'wp_footer', 'mbwpab_closer_script' );
    }

    ?>
        <div class="mbwpab-alert-bar<?php if ( true === get_theme_mod( 'alert_close_display' ) ) { echo ' mbwpab-alert-bar-has-close'; }?>">
            <div class="wrap">
                <?php if ( get_option( 'title' ) ) { ?>
                    <h1 class="mbwpab-alert-title"><?php echo get_option( 'title' ); ?></h1>
                <?php } ?>
                <p class="mbwpab-alert-message">
                    <?php if ( get_option( 'message' ) ) { ?>
                        <span class="mbwpab-alert-message"><?php echo get_option( 'message' ); ?></span>
                    <?php } ?>  
                </p>
                <p class="mbwpab-alert-message">
                    <?php if ( get_option( 'cta1' ) ) { ?>
                        <a href="<?php echo get_option( 'cta1_link' ); ?>"<?php if ( true === get_theme_mod( 'cta_target_blank' ) ) { echo ' target="_blank"'; }?> class="mbwpab-alert-cta"><?php echo get_option( 'cta1' ); ?></a>
                    <?php } ?> 
                    <?php if ( get_option( 'cta1' ) && get_option( 'cta2' ) ) { ?>
                        <span class="mbwpab-alert-cta-sep"> | </span>
                    <?php } ?> 
                    <?php if ( get_option( 'cta2' ) ) { ?>
                        <a href="<?php echo get_option( 'cta2_link' ); ?>"<?php if ( true === get_theme_mod( 'cta_target_blank' ) ) { echo ' target="_blank"'; }?> class="mbwpab-alert-cta"><?php echo get_option( 'cta2' ); ?></a>
                    <?php } ?> 
                    <?php if ( get_option( 'cta2' ) && get_option( 'cta3' ) ) { ?>
                        <span class="mbwpab-alert-cta-sep"> | </span>
                    <?php } ?> 
                    <?php if ( get_option( 'cta3' ) ) { ?>
                        <a href="<?php echo get_option( 'cta3_link' ); ?>"<?php if ( true === get_theme_mod( 'cta_target_blank' ) ) { echo ' target="_blank"'; }?> class="mbwpab-alert-cta"><?php echo get_option( 'cta3' ); ?></a>
                    <?php } ?> 
                    <?php if ( get_option( 'cta3' ) && get_option( 'cta4' ) ) { ?>
                        <span class="mbwpab-alert-cta-sep"> | </span>
                    <?php } ?> 
                    <?php if ( get_option( 'cta4' ) ) { ?>
                        <a href="<?php echo get_option( 'cta4_link' ); ?>"<?php if ( true === get_theme_mod( 'cta_target_blank' ) ) { echo ' target="_blank"'; }?> class="mbwpab-alert-cta"><?php echo get_option( 'cta4' ); ?></a>
                    <?php } ?> 
                    <?php if ( get_option( 'cta4' ) && get_option( 'cta5' ) ) { ?>
                        <span class="mbwpab-alert-cta-sep"> | </span>
                    <?php } ?> 
                    <?php if ( get_option( 'cta5' ) ) { ?>
                        <a href="<?php echo get_option( 'cta5_link' ); ?>"<?php if ( true === get_theme_mod( 'cta_target_blank' ) ) { echo ' target="_blank"'; }?> class="mbwpab-alert-cta"><?php echo get_option( 'cta5' ); ?></a>
                    <?php } ?> 
                </p>
                <?php if ( true === get_theme_mod( 'alert_close_display' ) ) { ?>
                    <div class="mbwpab-alert-closer"><i class="fas fa-times"></i></div>
                <?php } ?> 
            </div>
        </div>
    <?php
}

// Add alert body class
add_filter( 'body_class', 'mbwpab_add_body_class' );
function mbwpab_add_body_class( $classes ) {

    if ( ( ( get_option( 'alert_display', 'home-page' ) == 'home-page' ) && is_front_page() ) || ( get_option( 'alert_display', 'full-site' ) == 'full-site' ) ) {
        $classes[] = 'mbwpab-alert-bar-active';
    }

    return $classes;

}