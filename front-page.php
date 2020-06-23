<?php

/*
Template Name: 川端工務店フロントページ
*/
?>


<?php get_header('top'); ?>

<img src="<?php echo get_template_directory_uri(); ?>/images/top-img2.jpg" alt="トップ画像" width="100%">

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-4">
            <h6 class="text-center news">News<br><span class="h5">お知らせ</span></h6>
        </div>
        
        <?php
  $args = array(
    'post_type' => 'news', // 投稿タイプのスラッグを指定
    'posts_per_page' => '4' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 pt-5">
            <div>
                <div class="news-img">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?></a>
                </div>          
                <p class="news-time text-muted pt-2"><?php the_time('Y.m.d(D)'); ?></p>
                <div class="">
                    <a class="url" href="<?php the_permalink(); ?>"><p class="font-weight-bold py-2 news-title"><?php echo get_the_title(); ?></p></a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mt-3 mb-5">
            <a href="<?php echo get_template_directory_uri(); ?>/news" class="h5 url border-btn">More</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="row">


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="top-title">不動産情報<span class="h6"> -Real&nbsp;Estate-</span></h4>
                </div>
                        <?php
  $args = array(
    'post_type' => 'real_estate', // 投稿タイプのスラッグを指定
    'posts_per_page' => '3' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5">
            <div class="rbn">
                <p class="realestate-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
            </div>
            <div class="realestate-img">
					<?php if(has_post_thumbnail()): ?>
					    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					<?php else: ?>
					    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="川端工務店｜画像"></a>
					<?php endif; ?>
            </div>
            <div class="">
                <a class="works-text url" href="<?php the_permalink(); ?>"><p class="font-weight-bold py-2 works-title"><?php echo get_the_title(); ?></p></a>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                    <div class="text-center">
                        <a href="<?php echo home_url() ?>/realestate" class="h5 url border-btn">More</a>
                    </div>
                </div>


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="top-title">施工実績<span class="h6"> -Works-</span></h4>
                </div>
                        <?php
  $args = array(
    'post_type' => 'works', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5">
            <div class="rbn">
                <p class="works-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
            </div>
            <div class="works-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            </div>
            <div class="">
                <a class="works-text url" href="<?php the_permalink(); ?>"><p class="font-weight-bold py-2 works-title"><?php echo get_the_title(); ?></p></a>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                    <div class="text-center">
                        <a href="<?php echo get_template_directory_uri(); ?>/works" class="h5 url border-btn">More</a>
                    </div>
                </div>
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="top-title">リフォーム実績<span class="h6"> -Renovation-</span></h4>
                </div>
                                        <?php
  $args = array(
    'post_type' => 'renovation', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mt-5">
            <div class="rbn">
                <p class="rnb-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
            </div>
            <div class="rnb-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            </div>
            <div class="">
                <a class="rnb-text url" href="<?php the_permalink(); ?>"><p class="font-weight-bold py-2 rnb-title"><?php echo get_the_title(); ?></p></a>
            </div>
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                    <div class="text-center">
                        <a href="<?php echo get_template_directory_uri(); ?>/renovation" class="h5 url border-btn">More</a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-test my-5">
                <div class="bg-mask">
                    <h5 class="font-weight-bold text-white">家づくりの流れ</h5>
                </div>
                <a href="<?php echo home_url() ?>/nagare"></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-test my-5">
                <div class="bg-mask">
                    <h5 class="font-weight-bold text-white">長期優良住宅について</h5>
                </div>
                <a href="<?php echo home_url() ?>/longlife"></a>
            </div>

            <div class="pt-5">
                <h4 class="text-left inst"><a href="https://www.instagram.com/kawabatakoumuten226577/"><i class="fab fa-instagram fa-fw"></i>instagram</a></h4>
                <?php echo do_shortcode('[instagram-feed width=115]'); ?>
            </div>

				<div class="pt-5">
            <h4 class="text-left inst pb-3"><a href="https://www.facebook.com/kawabata.koumuten/"><i class="fab fa-facebook fa-fw"></i>facebook</a></h4>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkawabata.koumuten%2F&tabs=timeline&width=285&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="285" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>

			<div class="pt-5">
            <h4 class="text-left inst"><a href="https://www.youtube.com/channel/UCE4kChI3_d2FFjFHA3Hj8Iw"><i class="fab fa-youtube fa-fw"></i>YouTube</a></h4><br />
			<iframe width="285" height="157" src="https://www.youtube.com/embed/videoseries?list=PLzNCnTkLCFG1l-i58umaCQ7RXnfJm-ND4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			
			<div class="py-5">
			    <h4 class="text-left inst pb-3">
			    <i class="fab fa-pinterest"></i>
			    <a href="https://www.pinterest.jp/kawabatakoumuten226577/">Pinterest</a>
			    </h4>
			    <a data-pin-do="embedUser" data-pin-lang="ja" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.jp/kawabatakoumuten226577/"></a>
			</div>

			</div>

			</div>  <!-- row -->
        </div>  <!-- col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 -->
    </div>  <!-- row -->
</div>  <!-- container -->


<?php get_footer(); ?>