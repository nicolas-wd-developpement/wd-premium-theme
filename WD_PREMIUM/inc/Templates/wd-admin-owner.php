<!-- Meta info owner-->
<h1>WD PREMIUM</h1>
<p> Welcome <?php bloginfo('name');?> to admin theme option page proudly made by the very smart Nicolas BLOND</p>
<h2 class="title">Manage options</h2>
<p>WD PREMIUM SETTINGS</p>
<?php
   $picture = esc_attr( get_option('wd_profile_picture') );
   $description = esc_attr( get_option("wd_data_company_description",'Description') );
   $job =  esc_attr( get_option( "wd_job", 'Fonction' ));
   $email =  esc_attr( get_option( "wd_data_email", 'Email' ));
   $metaName = esc_attr(get_option( "wd_meta_name", 'Enter your name' ));
   $metaSurname = esc_attr(get_option( "wd_meta_Surname", 'Enter your surname' ));
   $phoneNumber =  esc_attr( get_option( "wd_data_phone_number", 'Enter your phone number' ));

?>
<!-- Meta info owner-->
<?php settings_errors()?>

<div itemscope itemtype="https://schema.org/Person" id="wd-meta-company">
  <span itemprop="name" style= font-weight:bold;> <?php print $metaName?> <?php print $metaSurname?> </span>
  <div class="image-container">
    <div class="profile-picture">
     <img id="profile-picture-preview" src="<?php print $picture?>" itemprop="image" alt="Photo de " <?php print $metaName;?> <?php print $metaSurname;?>>
    </div>
  </div>
  <p>
    <span itemprop="jobTitle"> <?php print $job?> </span>
    </p>

  <p>
    <span style="color: #e09900;  font-size: large;">Téléphone:</span>
    <span itemprop="telephone">  <a href="tel:+33663905011"> <?php print $phoneNumber;?> </a></span> 
  </p>
  <p>
    <span style="color: #e09900; font-size: large;">Email:</span>
    <span itemprop="email"> <a href="mailto:nicolasblond@web-designers.fr"> <?php print $email;?></a></span>
  </p>
</div>
<div class="display-form">
  <div>
    <form action="options.php" method="post" class="bg.primary" id="wd-meta-personal-form" class="wd-personal-form">
        <?php settings_fields('wd-settings-owner');?>
        <?php do_settings_sections( 'nicolas_wd_premium' )?>
        <?php submit_button('Enregistrer','primary','btnSubmit');?>
    </form>
  </div>
</div>

