<!-- Meta info Company-->
<h1>WD PREMIUM</h1>
<p> Welcome <?php bloginfo('name');?> to admin theme option page proudly made by the very smart Nicolas BLOND</p>
<h2 class="title">Manage options</h2>
<p>WD PREMIUM SETTINGS</p>
<?php
   $logo = esc_attr( get_option('wd_company_logo') );
   $description = esc_attr( get_option("wd_data_company_description",'Description') );
   $street = esc_attr( get_option("wd_company_street",'Rue') );
   $city = esc_attr( get_option("wd_company_city",'Ville') );
   $postCode = esc_attr( get_option("wd_company_post_code",'Code postale') );
   $region = esc_attr( get_option("wd_company_region",'Département') );
   $companyName =  esc_attr( get_option( "wd_company_name", 'Company name' ));
   $siret =  esc_attr( get_option( "wd_data_siret", 'Numéro de Siret' ));
   $companyWebsite  =  esc_attr( get_option( "wd_data_company_website", 'Enter your web site' ));

?>

<!-- Meta info company-->
<?php settings_errors()?>

<div itemscope itemtype="https://schema.org/LocalBusiness" id="wd-meta-company">
  <h4>
      <span itemprop="name"><?php print $companyName;?></span>
  </h4>

  <a href="https://web-designers.fr/wp-content/uploads/2021/10/logo.png" itemprop="url">
     <img id="company-logo-preview" src="<?php print $logo?>" itemprop="image" alt="Photo de " <?php print $companyName;?> <?php print $logo;?>>
  </a>
  <p>
    <itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span style="color: #e09900;  font-size: large;">Adresse:</span>
    <span itemprop="streetAddress"><?php print $street;?></span>
    <span itemprop="postalCode"><?php print $postCode;?></span>
    <span itemprop="addressLocality"><?php print $city;?></span>
    <span itemprop="addressRegion"><?php print $region;?></span>
  </p>
  <span itemprop="url"> <a href="https://wd-developpements.fr/" /></span> 
  <p><span itemprop="description"> <?php print $description;?> | <?php print $siret;?></span></p>
  <p>
    <a href="https://wd-developpements.fr/"><?php print $companyWebsite;?></a>
  </p>
</div>
<div class="display-form">
    <div>
        <form action="options.php" method="post" class="bg.primary" id="wd-meta-company-form" class="wd-company-form">
            <?php settings_fields('wd-settings-company');?>
            <?php do_settings_sections( 'nicolas_wd_premium_company' )?>
            <?php submit_button();?>
        </form>
    </div>
</div>



