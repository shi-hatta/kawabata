<?php

/*
Template Name: 川端工務店アクセスページ
*/
?>

<?php get_header(); ?>

<?php if (wp_is_mobile()) { //モバイルデバイスでアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword_smart.png" alt="人｜地元とのつながりを第一に"></div>
<?php } else { //それ以外でアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword.png" alt="人｜地元とのつながりを第一に"></div>
<?php } ?>
<?php echo do_shortcode('[metaslider id="903"]'); ?>

<div class="container access-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="top-title">アクセス<span class="h6"> -access-</span></h4>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.969702304354!2d136.15854831465666!3d35.87425932696999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8ac9d6b796f7b%3A0x6f205729a462518b!2z77yI5qCq77yJ5bed56uv5bel5YuZ5bqX!5e0!3m2!1sja!2sjp!4v1555649958846!5m2!1sja!2sjp" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 my-2 access">
            <h5 class="my-3 medium">所在地</h5><a class="medium">〒915-0857　<br class="d-block d-lg-none">福井県越前市四郎丸町31-2-9</a>
            <h5 class="my-3 medium">TEL</h5><a class="medium">0778-22-6577 (代)</a>
            <h5 class="my-3 medium">FAX</h5><a class="medium">0778-22-6116</a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 my-2 access">
            <h5 class="my-3 medium">E-mail</h5><a href="mailto:info&#64;kawabata-koumuten.com" class="url">info@kawabata-koumuten.com</a>
            <h5 class="my-3 medium">HP</h5><a href="#" class="url">http://www.kawabata-koumuten.com/</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
