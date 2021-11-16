<!-- Settings page option-->
<h1>WD PREMIUM SETTING PAGE OPTION</h1>
<p> Welcome <?php bloginfo('name');?> to admin theme option page proudly made by the very smart Nicolas BLOND</p>
<h2 class="title">Manage options</h2>
<p>WD PREMIUM SETTINGS</p>
<?php
   //$logo = esc_attr( get_option('wd_company_logo') );
?>
<?php settings_errors()?>

<div class="display-form">
    <div>
        <form action="options.php" method="post" class="bg.primary">
            <?php settings_fields('wd-theme-support');?>
            <?php do_settings_sections( 'nicolas_wd_premium_theme_options' )?>
            <?php submit_button();?>
        </form>
    </div>
</div>



