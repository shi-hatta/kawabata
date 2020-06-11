<?php

/*
Template Name: 川端工務店固定ページ
*/
?>

<?php get_header(); ?>
 
<?php if (wp_is_mobile()) { //モバイルデバイスでアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword_smart.png" alt="人｜地元とのつながりを第一に"></div>
<?php } else { //それ以外でアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword.png" alt="人｜地元とのつながりを第一に"></div>
<?php } ?>
<?php echo do_shortcode('[metaslider id="903"]'); ?>

<div class="container single-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
            <div class="row">
                <?php if(have_posts()): the_post(); ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="top-title single-title medium"><?php echo get_the_title(); ?><span class="h6 text-muted"> -<?php the_time('Y.m.d'); ?>-</span></h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-content"><?php the_content(); ?></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
 
<?php get_footer(); ?>