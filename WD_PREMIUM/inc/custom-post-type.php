<?php
/*

    =================================
    WD CUSTOM POST TYPE
    =================================

*/
$contact = get_option('activate_form');
if($contact==1){
    add_action( 'init', 'wd_contact_post_type');
}

/* Contact CPT */

function wd_contact_post_type(){
    $labels = array (
        'name'           => 'message',
        'singular_name'  => 'message',
        'menu_name'      => 'messages',
        'name_admin_bar' => 'message'
    );
    $contactArgs = array(
        'labels'            => $labels,
        'show_ui'           =>true,
        'show_in_menu'      =>true,
        'capability_type'   =>'post',
        'hierachical'       =>false,
        'menu_position'     =>26,
        'manu_icon'         =>'dashicons-email',
        'supports'           =>array('title','editor','author')
    );
    register_post_type( 'wd-contact', $contactArgs);
};