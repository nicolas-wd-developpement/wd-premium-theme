<?php
/*

    =================================
    ADMIN PAGE
    =================================

*/

function wd_premium_admin_page(){
    // Generates WP admin page
    add_menu_page('Wd Premium Options', 'Wd Premium', 'manage_options','nicolas_wd_premium','wd_premium_create_page','dashicons-admin-generic',110 );

    // Generates WP admin sub menu persona page
    add_submenu_page('nicolas_wd_premium', 'Wd Premium Options', 'Propriété gérant','manage_options','nicolas_wd_premium','wd_premium_create_page');
    
     // Generates WP admin sub menu company page
     add_submenu_page('nicolas_wd_premium', 'Wd META COMPANY', 'Propriété société','manage_options','nicolas_wd_premium_company','wd_premium_create_page_company');
    
}


     // Activate custom settings
     add_action('admin_init','wd_custom_settings_owner');
     add_action('admin_init','wd_custom_settings_company');

     // Owner meta group

Function wd_custom_settings_owner () {
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
}

// company meta group
Function wd_custom_settings_company () {
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
}

function wd_meta_profile_picture(){
    $picture = esc_attr( get_option( 'wd_profile_picture'));
        if(empty($picture)){
            echo '<input type="button" class="button button-secondary" value="Enregistrer la photo" id="wd-upload-profile-picture-btn"> <input type="hidden" name="wd_profile_picture" id="wd-upload-profile-picture" value=""/>';
            return;
        }else{
            echo '<input type="button" class="button button-secondary" value="Remplacer la photo" id="wd-upload-profile-picture-btn"> <input type="hidden" name="wd_profile_picture" id="wd-upload-profile-picture" value="'.$picture.'"/>';
            echo  '<input type="button" class="button button-secondary" value="Supprimer" id="wd-delete-profile-picture-btn"> <input type="hidden" name="wd_profile_picture" id="wd-delete-profile-picture" value="'.$picture.'"/>';
        }
    }
function wd_meta_data_company_logo(){
    $logo = esc_attr( get_option( 'wd_company_logo'));
    echo '<input type="button" class="button button-secondary" value="Télécharger" id="wd-upload-logo-btn"> <input type="hidden" name="wd_company_logo" id="wd-upload-company-logo" value="'.$logo.'"/>';
}
function wd_meta_data_company(){
//    echo 'Enter here your company address';
}

function wd_meta_data_company_description(){
   $description = esc_attr( get_option("wd_data_company_description",'Description') );
echo '<input type="text" name="wd_data_company_description" placeholder="Description" value="'.$description.'"><p>Entrez la description de votre société</p>';
}

function wd_meta_company_region(){
    $region = esc_attr( get_option("wd_meta_company_region",'Département') );
 echo '<input type="text" name="wd_meta_company_region" placeholder="Département" value="'.$region.'"><p>Entrez votre département</p>';
 }

function wd_meta_company_street(){
    $street = esc_attr( get_option("wd_company_street",'Rue') );
echo '<input type="text" name="wd_company_street" placeholder="Rue" value="'.$street.'"/>';
}

function wd_meta_company_city(){
    $city = esc_attr( get_option("wd_company_city",'Ville') );
    echo '<input type="text" name="wd_company_city" placeholder="Ville" value="'.$city.'"/>';
}

function wd_meta_company_post_code(){
    $postCode = esc_attr( get_option("wd_company_post_code",'Code postale') );
    echo '<input type="text" name="wd_company_post_code" placeholder="Code postale" value="'.$postCode.'"/>';
}

function wd_meta_job(){
    $job =  esc_attr( get_option( "wd_job", 'Fonction' ));
    echo '<input type="text" name="wd_job" placeholder="Enter your fonction" value="'.$job.'"/>';
}

function wd_meta_company_adress(){
    $adress =  esc_attr( get_option( "wd_company_adress", 'Adress' ));
    echo '<input type="text" name="wd_company_adress" placeholder="Enter your adress" value="'.$adress.'"/>';
}

function wd_meta_data_email(){
    $email =  esc_attr( get_option( "wd_data_email", 'Email' ));
    echo '<input type="email" name="wd_data_email" placeholder="dupon@mon-mail.com" value="'.$email.'"/>';
}

function wd_meta_company_name(){
    $companyName =  esc_attr( get_option( "wd_company_name", 'Company name' ));
    echo '<input type="text" name="wd_company_name" placeholder="Ma petite entreprise" value="'.$companyName.'"/>';
}

function wd_meta_data_siret(){
    $siret =  esc_attr( get_option( "wd_data_siret", 'Numéro de Siret' ));
    echo '<input type="number" name="wd_data_siret" placeholder="0123456789" value="'.$siret.'"/>';
}

function wd_meta_fullName(){
    $metaName = esc_attr(get_option( "wd_meta_name", 'Enter your name' ));
    $metaSurname = esc_attr(get_option( "wd_meta_surname", 'Enter your surname' ));
    echo '<input type="text" name="wd_meta_name" placeholder="enter your Name" value="'.$metaName.'"/> 
          <input type="text" name="wd_meta_surname" placeholder="enter your surname" value="'.$metaSurname.'"/>';
}

function wd_meta_data_phone_number(){
    $phoneNumber =  get_option( "wd_data_phone_number", 'Enter your phone number' );
    echo '<input type="tel" name="wd_data_phone_number" placeholder="enter your Phone Number" value="'.$phoneNumber.'"/>';
}

function wd_meta_data_company_website(){
    $companyWebsite  =  esc_attr( get_option( "wd_data_company_website", 'Enter your web site' ));
    echo '<input type="text" name="wd_data_company_website" placeholder="Entrez votre site web" value="'.$companyWebsite.'"/>';
}
function wd_premium_create_page(){
    //generation of our admin page
        require_once (get_template_directory() . '/../inc/templates/wd-admin-owner.php');
}

function wd_premium_create_page_company(){
    //generation of our admin page
    require_once (get_template_directory() . '/../inc/templates/wd-admin-company.php');
}
add_action('admin_menu','wd_premium_admin_page');