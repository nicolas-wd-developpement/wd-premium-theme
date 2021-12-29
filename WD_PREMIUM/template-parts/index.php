<?php
/*
 @package wd-theme
    =================================
    WD THEME INDEX
    =================================

*/

get_header();?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                    if(have_posts(  )):
                        while(have_posts(  )):the_post(  );
                        get_template_part( '../template_parts/content', get_post_format( ) );
                        endwhile;
                    endif;
                ?>

            </div>
        </main> <!--#primary-->

    </div>
<?php get_footer();?>