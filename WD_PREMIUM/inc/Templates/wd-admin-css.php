<!-- CSS CODE-->
<h1>WD PREMIUM</h1>
<p> Welcome <?php bloginfo('name');?> to admin theme option page proudly made by the very smart Nicolas BLOND</p>
<h2 class="title">CSS ZONE</h2>
<p>Programmez votre code CSS ici</p>
<?php
   //$logo = esc_attr( get_option('wd_company_logo') );


?>
<?php settings_errors(); ?>

        <form action="options.php" method="post" class="bg.primary" id="wd-save-custom-css-form" class="wd-company-form">
            <?php settings_fields('wd-theme-css');?>
            <?php do_settings_sections( 'nicolas_wd_premium_css' )?>
            <?php submit_button('Enregistrer','primary','btnSubmit');?>
        </form>
