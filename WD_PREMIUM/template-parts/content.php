<?php
/*
 @package wd-theme
    =================================
    WD THEME standard post format
    =================================

*/

?>
<article id="post-<?php the_ID(  );?>" class="<?php post_class();?>">
    <header class="entry-header text-center">
        <?php the_title( '<h1 class="entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>');?>
        <div class="entry-meta">
            <?php echo wd_posted_meta();?>
        </div > <!-- .entry-meta -->
    </header>
    <div class="entry-content">
        <?php if(has_post_thumbnail( )):
         $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID(  ) ) );
        ?>
            <a class="standard-featured-link" href="<?php the_permalink(  );?>">
                <div class="standard-featured background-image" style = "background-image: url(<?php echo $featured_image;?>) ">
                </div> <!-- .standard-featured -->
            </a><!-- .standard-featured-link -->
        <?php endif;?>
        <div class="entry-excerpt">
            <?php the_excerpt(  );?>
        </div> <!-- . entry-excerp -->
    </div> <!-- .entry-content-->

    <div class="button-container text-center">
        <a href="<?php the_permalink(  );?>" class="btn btn-primary"><?php _e( 'Read more' );?> </a>
    </div>

    <footer class="entry-footer">
        <?php echo wd_posted_footer() ;?>
    </footer>
</article>