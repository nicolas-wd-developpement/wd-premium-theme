<?php
/*

    =================================
    ADMIN CSS / JS PAGE
    =================================

*/

function wd_premium_load_admin_scripts( $hook ){
    if ('wd-premium_page_nicolas_wd_premium_company' == $hook ) {
           // load admin css
            wp_register_style( 'wd_premium_admin', get_template_directory_uri() .'/../css/wd.admin.css', array(), '1.3.0', 'all' );
            wp_enqueue_style( 'wd_premium_admin');
            // load jquery
            wp_register_script( 'wd_premium_script', get_template_directory_uri() . '/../js/wd-developpements-admin.js', array('jquery'), '1.3.0', true );
            wp_enqueue_script( 'wd_premium_script');
            //load medialoader
            wp_enqueue_media( );
    }else  if ('toplevel_page_nicolas_wd_premium' == $hook ) {
        // load admin css
         wp_register_style( 'wd_premium_admin', get_template_directory_uri() .'/../css/wd.admin.css', array(), '1.3.0', 'all' );
         wp_enqueue_style( 'wd_premium_admin');
         // load jquery
         wp_register_script( 'wd_premium_script', get_template_directory_uri() . '/../js/wd-developpements-admin.js', array('jquery'), '1.3.0', true );
         wp_enqueue_script( 'wd_premium_script');
         //load medialoader
         wp_enqueue_media( );
 } else if ('wd-premium_page_nicolas_wd_premium_css' == $hook ) {
        //load Ace Js
        wp_enqueue_script( 'Ace', get_template_directory_uri() . '/../js/ace/ace.js', array('jquery'), '1.4.13', true );
        wp_enqueue_script( 'wd-custom-css-script', get_template_directory_uri() . '/../js/wd-developpements-custom-css.js', array('jquery'), '1.0.9', true );
        wp_enqueue_style( 'wd_ace_css_style', get_template_directory_uri() . '/../css/wd.admim.custom-css-page.css', array(), '1.0.3', 'all' );
    }else {return;}

}
add_action('admin_enqueue_scripts','wd_premium_load_admin_scripts');

/*

    =================================
    FRONT CSS / JS PAGE
    =================================

*/

function wd_load_scripts(){
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/../js/jquery-3.6.0.min.js', false, '3.6.0', true );
    wp_enqueue_script( 'jquery');
    wp_enqueue_style( 'wd-style', get_template_directory_uri() . '/../css/wd.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/../css/bootstrap.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/../js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true );
};

add_action( 'wp_enqueue_scripts', 'wd_load_scripts' );
