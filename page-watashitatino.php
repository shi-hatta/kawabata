<?php

/*
Template Name: 川端工務店私たちの家づくり
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
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
			<p class="h4 top-title">私たちの家づくり<span class="h6"> -watasitatino ie dukuri-</span></p>
		</div>

<div class="py-5 container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 h5 lh15 mt-5">
			<div class="text-center">家は<span class="h3 text-success">資産</span>であり<span class="h3 text-success">財産</span>です。</div>
			<br />
			<div class="h6">土地探しから資金計画、家づくり、税務、メンテナンスに至るまで、住まいに関する希望や悩みに幅広く応えながら、お客様と同じ目線に立った家づくりを行ってまいります。</div>
		</div>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
			<dl>
			<dt><a class="btn btn-info" href="<?php echo esc_url( home_url('nagare') ); ?>" style="width:300px;" role="button"><i class="fas fa-home"></i>&nbsp;家づくりの流れ</a></dt>
			<dd class="mt-3 border-bottom pb-3">「家を建てたい！」と思った時から完成、その後の大まかな流れを説明します。</dd>
			</dl>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
			<dl>
			<dt><a class="btn btn-info" href="<?php echo esc_url( home_url('longlife') ); ?>" style="width:300px;" role="button"><i class="fas fa-medal"></i>&nbsp;長期優良住宅について</a></dt>
			<dd class="mt-3 border-bottom pb-3">「資産としての住宅、長持ちする家づくりを説明します。</dd>
			</dl>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
			<dl>
			<dt><a class="btn btn-info" href="<?php echo esc_url( get_theme_file_uri('works') ); ?>" style="width:300px;" role="button"><i class="fas fa-clipboard-list"></i>&nbsp;実績一覧</a></dt>
			<dd class="mt-3 border-bottom pb-3">弊社が手掛けた様々なスタイルの住宅をご紹介します。</dd>
			</dl>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
			<dl>
			<dt><a class="btn btn-info" href="<?php echo esc_url( get_theme_file_uri('renovation') ); ?>" style="width:300px;" role="button"><i class="far fa-building"></i>&nbsp;リフォーム一覧</a></dt>
			<dd class="mt-3 border-bottom pb-3">リフォーム前後を比較したご紹介です。</dd>
			</dl>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 mb-5">
			<dl>
			<dt><a class="btn btn-info" href="<?php echo esc_url( get_theme_file_uri('news/式部の郷展示場%e3%80%80最終内覧会/') ); ?>" style="width:300px;" role="button"><i class="fas fa-hotel"></i>&nbsp;常設展示場「式部の郷」</a></dt>
			<dd class="mt-3 border-bottom pb-3">実際の暮らしをイメージできる展示場です。</dd>
			</dl>
		</div>
    </div>
</div>
	</div>
</div>

<?php get_footer(); ?>