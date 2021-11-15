<?php
/*

    =================================
    ADMIN CSS / JS PAGE
    =================================

*/

function wd_premium_load_admin_scripts( $hook ){
    if ('toplevel_page_nicolas_wd_premium' != $hook ) {
        if ('toplevel_page_nicolas_wd_premium_company' != $hook ) {
            return;
        }
    }
    // load admin css
    wp_register_style( 'wd_premium_admin', get_template_directory_uri() .'/../css/wd.admin.css', array(), '1.0.1', 'all' );
    wp_enqueue_style( 'wd_premium_admin');
    // load jquery
    wp_register_script( 'wd_premium_script', get_template_directory_uri() . '/../js/wd-developpements-admin.js', array('jquery'), '1.0.1', true );
    wp_enqueue_script( 'wd_premium_script');
    //load medialoader
    wp_enqueue_media( );
}
add_action('admin_enqueue_scripts','wd_premium_load_admin_scripts');