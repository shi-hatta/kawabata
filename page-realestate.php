<?php

/*
Template Name: 川端工務店不動産情報ページ
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
            <h4 class="top-title">不動産情報<span class="h6"> -real estate-</span></h4>
        </div>
                                        <?php
  $args = array(
    'post_type' => 'real_estate', // 投稿タイプのスラッグを指定// 投稿件数の指定
    'order'=> 'DESC',
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-4">
					<?php if(has_post_thumbnail()): ?>
					    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					<?php else: ?>
					    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="no-image"></a>
					<?php endif; ?>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-xs-12 my-4">
            <?php     
            $term = wp_get_object_terms($post->ID,'real_estate_cat');
            $term_name = $term[0]->name;
            $term_slug = $term[0]->slug;
            ?>
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12 text-right real-tag">
                    <p class="font-weight-bold text-white <?php echo $term_slug; ?>"><?php echo $term_name; ?></p>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="real-text">
                        <p class="font-weight-bold text-muted"><?php the_time('Y.m.d'); ?></p>
                        <a class="url" href="<?php the_permalink(); ?>"><h5 class="font-weight-bold py-2 color-<?php echo $term_slug; ?>"><?php echo get_the_title(); ?></h5></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
                   
    </div>
</div>

<?php get_footer(); ?>