<?php
/*

    =================================
    ADMIN PAGE
    =================================

*/

function wd_premium_admin_page(){
    // Generates WP admin page
    add_menu_page('Wd Premium Options', 'Wd Premium', 'manage_options','nicolas_wd_premium','wd_premium_create_page','dashicons-admin-generic',110 );
   
    // Generates WP admin contact form
    add_submenu_page('nicolas_wd_premium', 'Wd Contact form', 'Contact','manage_options',' wd_premium_theme_contact_form','wd_premium_theme_contact_form_create_page');
    // Generates WP option settings page
    add_submenu_page( 'nicolas_wd_premium', 'Options', 'Options', 'manage_options', 'nicolas_wd_premium_theme_options', 'wd_premium_theme_options_create_page');

    // Generates WP admin sub menu persona page
    add_submenu_page('nicolas_wd_premium', 'Wd Premium Options', 'Propriété gérant','manage_options','nicolas_wd_premium','wd_premium_create_page');
    
     // Generates WP admin sub menu company page
     add_submenu_page('nicolas_wd_premium', 'Wd META COMPANY', 'Propriété société','manage_options','nicolas_wd_premium_company','wd_premium_create_page_company');
    
     // Generates WP admin sub menu company page
    add_submenu_page('nicolas_wd_premium', 'CUSTOM CSS', 'Customiser votre CSS ici','manage_options','nicolas_wd_premium_css','wd_premium_create_page_css');
    

}

     add_action('admin_menu','wd_premium_admin_page');
     // Activate custom settings registers
     add_action('admin_init','wd_custom_theme_settings');


     // Owner meta group

Function wd_custom_theme_settings () {
    register_setting('wd-settings-owner','wd_profile_picture');
    register_setting('wd-settings-owner','wd_meta_name');
    register_setting('wd-settings-owner','wd_meta_surname');
    register_setting('wd-settings-owner','wd_job');
    register_setting('wd-settings-owner','wd_data_phone_number');
    register_setting('wd-settings-owner','wd_data_email');

    add_settings_section( 'wd-meta-personal', 'Entrez les Meta informations ici', 'wd_meta_data_company', 'nicolas_wd_premium' );  
    add_settings_field( 'wd-meta-picture', 'Photo de Profil', 'wd_meta_profile_picture', 'nicolas_wd_premium', 'wd-meta-personal');
    add_settings_field( 'wd-meta-fullName', 'Full Name', 'wd_meta_fullName', 'nicolas_wd_premium', 'wd-meta-personal');
    add_settings_field( 'wd-meta-job', 'Job', 'wd_meta_job', 'nicolas_wd_premium', 'wd-meta-personal');
    add_settings_field( 'wd-meta-email', 'Email', 'wd_meta_data_email', 'nicolas_wd_premium', 'wd-meta-personal');
    add_settings_field( 'wd-meta-phoneNumber', 'Numéro de téléphone', 'wd_meta_data_phone_number', 'nicolas_wd_premium','wd-meta-personal');

    // company meta group registers
    register_setting('wd-settings-company','wd_company_logo');
    register_setting('wd-settings-company','wd_company_street');
    register_setting('wd-settings-company','wd_company_city');
    register_setting('wd-settings-company','wd_company_post_code');
    register_setting('wd-settings-company','wd_company_name');
    register_setting('wd-settings-company','wd_data_siret');
    register_setting('wd-settings-company','wd_data_company_description');
    register_setting('wd-settings-company','wd_company_region');
    register_setting('wd-settings-company','wd_data_company_website');


    add_settings_section( 'wd-meta-company', 'Entrez les Meta informations ici', 'wd_meta_data_company', 'nicolas_wd_premium_company' );  
    add_settings_field( 'wd-meta-company-logo', 'Logo', 'wd_meta_data_company_logo', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-siret', 'Siret', 'wd_meta_data_siret', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-phoneNumber', 'Numéro de téléphone', 'wd_meta_data_phone_number', 'nicolas_wd_premium_company','wd-meta-company');
    add_settings_field( 'wd-meta-company-name', 'Nom de l\'entreprise', 'wd_meta_company_name', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-street', 'Rue', 'wd_meta_company_street', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-city', 'Ville', 'wd_meta_company_city', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-post-code', 'Code postale', 'wd_meta_company_post_code', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-description', 'Description', 'wd_meta_data_company_description', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-region', 'Département', 'wd_meta_company_region', 'nicolas_wd_premium_company', 'wd-meta-company');
    add_settings_field( 'wd-meta-company-website', 'Site Web', 'wd_meta_data_company_website', 'nicolas_wd_premium_company', 'wd-meta-company');    

        //Custom theme settings option
        register_setting( 'wd-theme-support', 'post_format');
        register_setting( 'wd-theme-support', 'wd_custom_header');
        register_setting( 'wd-theme-support', 'wd_custom_theme');
        register_setting( 'wd-theme-support', 'wd_custom_background');
    
        add_settings_section( 'wd-theme-option-settings-field', 'WD Option settings', 'wd_theme_options', 'nicolas_wd_premium_theme_options');
        add_settings_field( 'wd-post-formats', 'formats', 'wd_post_formats', 'nicolas_wd_premium_theme_options', 'wd-theme-option-settings-field');
        add_settings_field( 'wd-custom-header', 'Entête personalisé', 'wd_custom_header_activation', 'nicolas_wd_premium_theme_options', 'wd-theme-option-settings-field');
        add_settings_field( 'wd-custom-theme', 'Personalisé le theme', 'wd_custom_theme_activation', 'nicolas_wd_premium_theme_options', 'wd-theme-option-settings-field');
        add_settings_field( 'wd-custom-background', 'Fond personalisé', 'wd_custom_background_setting', 'nicolas_wd_premium_theme_options', 'wd-theme-option-settings-field');
    
       //Custom Contact form
       register_setting( 'wd-theme-contact', 'activate_form');
       add_settings_section( 'wd-contact-section', 'contact-form', 'wd_contact_form_section', 'wd_premium_theme_contact_form' );
       add_settings_field( 'wd-contact-form', 'Formulaire de contact', 'wd_contact_form_activation', 'wd_premium_theme_contact_form', 'wd-contact-section');
    
        //Custom CSS
        register_setting( 'wd-theme-css', 'wd_custom_css','wd_sanitize_custom_css');
        add_settings_section( 'wd-custom-css-section', 'Custom CSS', 'wd_custom_css_section_callBack', 'nicolas_wd_premium_css','' );
        add_settings_field( 'wd-custom-css', 'Personalisé le CSS', 'wd_custom_css_activation', 'nicolas_wd_premium_css', 'wd-custom-css-section');
}

    //Display Company street - Download from wp media + delete
function wd_meta_profile_picture(){
    $picture = esc_attr( get_option( 'wd_profile_picture'));
        if(empty($picture)){
            echo '<input type="button" class="button button-secondary" value="Enregistrer la photo" id="wd-upload-profile-picture-btn"> <input type="hidden" name="wd_profile_picture" id="wd-upload-profile-picture" value="" />';
            return;
        }else{
            echo '<input type="button" class="button button-secondary" value="Remplacer la photo" id="wd-upload-profile-picture-btn"> <input type="hidden" name="wd_profile_picture" id="wd-upload-profile-picture" value="'.$picture.'"/>
                  <input type="button" class="button button-secondary" value="Supprimer" id="wd-delete-profile-picture-btn" />';
        }
}


    //Display Company logo
function wd_meta_data_company_logo(){
    $logo = esc_attr( get_option( 'wd_company_logo'));
    if(empty($logo)){
        echo '<input type="button" class="button button-secondary" value="Télécharger" id="wd-upload-logo-btn"> <input type="hidden" name="wd_company_logo" id="wd-upload-company-logo" value="'.$logo.'"/>';
        return;
    }else{
        echo '<input type="button" class="button button-secondary" value="Remplacer le logo" id="wd-upload-logo-btn"> <input type="hidden" name="wd_company_logo" id="wd-upload-company-logo" value="'.$logo.'"/>
              <input type="button" class="button button-secondary" value="Supprimer" id="wd-delete-logo-btn" />';
    }
}
function wd_meta_data_company(){
//    echo 'Enter here your company address';
}
    //Display Company description
function wd_meta_data_company_description(){
   $description = esc_attr( get_option("wd_data_company_description",'Description') );
echo '<input type="text" name="wd_data_company_description" placeholder="Description" value="'.$description.'"><p>Entrez la description de votre société</p>';
}
    //Display Company region
function wd_meta_company_region(){
    $region = esc_attr( get_option("wd_meta_company_region",'Département') );
 echo '<input type="text" name="wd_meta_company_region" placeholder="Département" value="'.$region.'"><p>Entrez votre département</p>';
 }
    //Display Company street
function wd_meta_company_street(){
    $street = esc_attr( get_option("wd_company_street",'Rue') );
echo '<input type="text" name="wd_company_street" placeholder="Rue" value="'.$street.'"/>';
}
    //Didsplay Company city
function wd_meta_company_city(){
    $city = esc_attr( get_option("wd_company_city",'Ville') );
    echo '<input type="text" name="wd_company_city" placeholder="Ville" value="'.$city.'"/>';
}
    //Display company post code
function wd_meta_company_post_code(){
    $postCode = esc_attr( get_option("wd_company_post_code",'Code postale') );
    echo '<input type="text" name="wd_company_post_code" placeholder="Code postale" value="'.$postCode.'"/>';
}
    //Display Owner function
function wd_meta_job(){
    $job =  esc_attr( get_option( "wd_job", 'Fonction' ));
    echo '<input type="text" name="wd_job" placeholder="Enter your fonction" value="'.$job.'"/>';
}
    //Display company adress
function wd_meta_company_adress(){
    $adress =  esc_attr( get_option( "wd_company_adress", 'Adress' ));
    echo '<input type="text" name="wd_company_adress" placeholder="Enter your adress" value="'.$adress.'"/>';
}
    //Display owner email
function wd_meta_data_email(){
    $email =  esc_attr( get_option( "wd_data_email", 'Email' ));
    echo '<input type="email" name="wd_data_email" placeholder="dupon@mon-mail.com" value="'.$email.'"/>';
}
    //Display Company Name
function wd_meta_company_name(){
    $companyName =  esc_attr( get_option( "wd_company_name", 'Company name' ));
    echo '<input type="text" name="wd_company_name" placeholder="Ma petite entreprise" value="'.$companyName.'"/>';
}
    //Display company registration number
function wd_meta_data_siret(){
    $siret =  esc_attr( get_option( "wd_data_siret", 'Numéro de Siret' ));
    echo '<input type="number" name="wd_data_siret" placeholder="0123456789" value="'.$siret.'"/>';
}

    //Display Owner full name
function wd_meta_fullName(){
   global $metaName = esc_attr(get_option( "wd_meta_name", 'Enter your name' ));
    $metaSurname = esc_attr(get_option( "wd_meta_surname", 'Enter your surname' ));
    echo '<input type="text" name="wd_meta_name" placeholder="enter your Name" value="'.$metaName.'"/> 
          <input type="text" name="wd_meta_surname" placeholder="enter your surname" value="'.$metaSurname.'"/>';
}
    //Display Owner Phone Number
function wd_meta_data_phone_number(){
    $phoneNumber =  get_option( "wd_data_phone_number", 'Enter your phone number' );
    echo '<input type="tel" name="wd_data_phone_number" placeholder="enter your Phone Number" value="'.$phoneNumber.'"/>';
}
    //Display company url
function wd_meta_data_company_website(){
    $companyWebsite  =  esc_attr( get_option( "wd_data_company_website", 'Enter your web site' ));
    echo '<input type="text" name="wd_data_company_website" placeholder="Entrez votre site web" value="'.$companyWebsite.'"/>';
}
    //Theme options
function wd_theme_options(){
    echo 'Activate and deactivate option';
}
    //Contact form options call back
function wd_contact_form_section(){
    echo 'Activation et désactivation de la page de contact';
}
    // Post formats callback
function wd_post_formats(){
    //loop the checkbox status
    $options = get_option('post_format');
    $output='';
    $formats = array('aside','gallery','link','image','quote','status','video','audio','chat');
    foreach($formats as $format){
        $checked = (@$options[$format] == 1 ? 'checked' :'' );
        $output .= '<label><input type="checkbox" id="'.$format.'" name="post_format['.$format.']" value="1" '.$checked.'> '.$format.'</label><br>';
    }
    echo $output;
}

function wd_premium_theme_contact_form_create_page(){
    //generation of our contact form page
    require_once (get_template_directory() . '/../inc/templates/wd-contact-form.php');
}
function wd_premium_create_page(){
    //generation of our admin page
        require_once (get_template_directory() . '/../inc/templates/wd-admin-owner.php');
}
    //generation of our admin page
function wd_premium_create_page_company(){

    require_once (get_template_directory() . '/../inc/templates/wd-admin-company.php');
}
    // generation of our settings page
function wd_premium_theme_options_create_page(){
    require_once (get_template_directory(  ) . '/../inc/templates/wd-admin-settings.php');
}

//generation of our admin page
function wd_premium_create_page_css(){

    require_once (get_template_directory() . '/../inc/templates/wd-admin-css.php');
}

function wd_contact_form_activation(){
    //loop the checkbox status
    $options = get_option('activate_form');
    $checked = (@$options == 1 ? 'checked' :'' );
    echo '<label><input type="checkbox" id="activate_form" name="activate_form" value="1" '.$checked.'></label>';

}


function wd_custom_css_activation(){
    $css = get_option('wd_custom_css');
    $css = (empty($css) ? '/* wd Theme Custom CSS */' : $css );
    echo '<div id="customCss">'.$css.'</div><textarea id="wd_css" name="wd_css" style="display:none;visibility:hidden;">'.$css.'</textarea>';
}

function wd_custom_css_section_callBack(){
    echo 'Customisez ici votre thème WD premium avec votre propre code CSS';
}


function wd_custom_header_activation(){
    //loop the checkbox status
    $options = get_option('wd_custom_header');
    $checked = (@$options == 1 ? 'checked' :'' );
    echo '<label><input type="checkbox" id="wd_custom_header" name="wd_custom_header" value="1" '.$checked.'> Activer l\'entête personalisé</label>';
}
function wd_custom_theme_activation(){
    $options = get_option('wd_custom_theme');
    $checked = (@$options == 1 ? 'checked' :'' );
    echo '<label><input type="checkbox" id="wd_custom_theme" name="wd_custom_theme" value="1" '.$checked.'> Activer la personalisalisaton du thème</label>';
}
function wd_custom_background_setting(){
    $options = get_option('wd_custom_background');
    $checked = (@$options == 1 ? 'checked' :'' );
    echo '<label><input type="checkbox" id="wd_custom_background" name="wd_custom_background" value="1" '.$checked.'> Activer le fond personalisé</label>';
}

function wd_sanitize_custom_css( $input ){
	$output = esc_textarea( $input );
	return $output;
}