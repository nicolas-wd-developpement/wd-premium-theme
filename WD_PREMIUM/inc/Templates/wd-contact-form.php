<!-- Meta info owner-->
<h1>WD PREMIUM CONTACT FORM</h1>
<p> Welcome <?php bloginfo('name');?> N'hésitez pas à me contacter pour plus d'information!</p>
<h2 class="title">Contact form</h2>
<p>FORMULAIRE DE CONTACT</p>
<?php
   //$picture = esc_attr( get_option('wd_profile_picture') );


?>
<?php settings_errors()?>
<div class="display-form">
  <div>
    <form action="options.php" method="post" class="bg.primary" id="wd-meta-personal-form" class="wd-personal-form">
        <?php settings_fields('wd-theme-contact');?>
        <?php do_settings_sections( 'wd_premium_theme_contact_form' )?>
        <?php submit_button();?>
    </form>
  </div>
</div>

