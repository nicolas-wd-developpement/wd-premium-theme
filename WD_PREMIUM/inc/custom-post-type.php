<?php
/*

    =================================
    WD CUSTOM POST TYPE
    =================================

*/
$contact = get_option('activate_form');
if($contact==1){
    add_action( 'init', 'wd_contact_post_type');
    add_filter( 'manage_wd-contact_posts_columns', 'wd_set_wdContact_columns');
    add_action('manage_wd-contact_posts_custom_column','wd_set_contactColumn_content',10,2);
    add_action( 'add_meta_boxes', 'wd_contact_add_meta_boxe');
    add_action('save_post','wd_save_email_data');
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
        'menu_icon'         =>'dashicons-email-alt2',
        'supports'           =>array('title','editor','author')
    );
    register_post_type( 'wd-contact', $contactArgs);
};

//customiz post fields names
function wd_set_wdContact_columns($columns){
    $customColumn = array();
    $customColumn ['title'] = 'Nom';
    $customColumn ['message'] = 'Message';
    $customColumn ['email'] = 'E-mail';
    $customColumn ['date'] = 'date';
    
    return $customColumn;
}
function wd_set_contactColumn_content($column,$post_id){
    switch ($column) {
        case 'message':
            echo get_the_excerpt();
            break;
        case 'email':
            $email = get_post_meta( $post_id, '_contact_email_value_key', true );
            echo '<a href="mailto:'.$email.'">'.$email.'</a>';
            break;
                    
        default:
            # code...
            break;
    }
}
/* Contact META BOXES */
function wd_contact_add_meta_boxe(){
    add_meta_box( 'wd_contact_email', 'Email adress', 'wd_contact_get_email', 'wd-contact','side' );
}

function wd_contact_get_email($post){
    wp_nonce_field( 'wd_save_email_data', 'wd_contact_email_meta_boxe_nonce');
    $value = get_post_meta( $post->ID, '_contact_email_value_key', true );
    echo '<label for="wd_contact_email_field">Adress email </label>';
    echo '<input type="email" id="wd_contact_email_field" name="wd_contact_email_field" value="'. esc_attr($value).'" size="25" />';
}

function wd_save_email_data($post_id){
    if(!isset( $_POST['wd_contact_email_meta_boxe_nonce'])){
        return;
    }
    if(!wp_verify_nonce( $_POST['wd_contact_email_meta_boxe_nonce'], 'wd_save_email_data' )){
        return;
    }
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    if(!current_user_can( 'edit_post', $post_id )){
        return;
    }
    if(! isset($_POST['wd_contact_email_field'])){
        return;
    }
    $emailAdress = sanitize_text_field($_POST['wd_contact_email_field']);
    update_post_meta( $post_id, '_contact_email_value_key', $emailAdress );

}