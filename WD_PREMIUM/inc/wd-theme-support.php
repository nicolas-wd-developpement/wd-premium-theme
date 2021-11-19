<?php
/*

    =================================
    WD THEME SUPPORT PAGE
    =================================

*/
$options = get_option('post_format');
$output=array();
$formats = array('aside','gallery','link','image','quote','status','video','audio','chat');
foreach($formats as $format){
    $output[] = (@$options[$format] == 1 ? $format :'' );
}

if(!empty($options)){
   add_theme_support( 'post-formats', $output );
}

$optionsCustomHeader = get_option('wd_custom_header');
if($optionsCustomHeader==1){
    add_theme_support( 'custom-header');
}
$optionsCustomFooter = get_option('wd_custom_theme');
if($optionsCustomFooter==1){
    add_theme_support( 'dark-editor-style');
}
$optionsCustomBackground = get_option('wd_custom_background');
if($optionsCustomBackground==1){
    add_theme_support( 'custom-background');
}
$optionsCustomCss = get_option('wd_custom_css');
if($optionsCustomCss==1){
    add_theme_support( 'custom-css');
}