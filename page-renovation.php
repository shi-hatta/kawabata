<?php

/*
Template Name: 川端工務店リフォーム実績ページ
*/
?>

<?php get_header(); ?>

<?php if (wp_is_mobile()) { //モバイルデバイスでアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword_smart.png" alt="人｜地元とのつながりを第一に"></div>
<?php } else { //それ以外でアクセスされた場合 ?>
<div class="key_top"><img src="<?php echo get_template_directory_uri(); ?>/images/keyword.png" alt="人｜地元とのつながりを第一に"></div>
<?php } ?>
<?php echo do_shortcode('[metaslider id="903"]'); ?>

<div class="container construction-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="top-title">リフォーム実績<span class="h6"> -Renovation-</span></h4>
        </div>
                                        <?php
  $args = array(
    'post_type' => 'renovation', // 投稿タイプのスラッグを指定// 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 my-4">
            <div class="rbn-2">
                <p class="rnb-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
            </div>
            <div class="rnb-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            </div>
            <div class="bg-white">
                <a class="rnb-text url" href="<?php the_permalink(); ?>"><p class="font-weight-bold py-2 rnb-title"><?php echo get_the_title(); ?></p></a>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
                   
    </div>
</div>

<?php get_footer(); ?>