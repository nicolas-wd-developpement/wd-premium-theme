<?php
/*

    =================================
    REMOVE WP VERSION
    =================================

*/

function wd_rmv_version_string($src){
    global $wp_version;
    parse_str(parse_url($src,PHP_URL_QUERY),$query);
    if( !empty($query['ver'] ) && $query['ver'] === '$wp_version' ){
        src = remove_query_arg( 'ver', $src );
    }
    return $src;
}

add_filter( 'script_loader_src','wd_rmv_version_string' );
add_filter( 'style_loader_src','wd_rmv_version_string' );