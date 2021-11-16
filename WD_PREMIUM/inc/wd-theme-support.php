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