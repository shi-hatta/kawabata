<footer class="bgWood">
<div class="container">
	<div class="row text-center">

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-5 py-3 navbar_footer" style="font-size: 0.85rem;">

    <nav class="sticky-top">
        <div id="menu_wrapper" class="menu_wrapper">
        <?php
          $args = array(
            'theme_location' => 'footer_nav',
            'container' => 'div',
            'container_class' => 'footer_nav',
            'container_id' => 'footer_nav',
            'menu_class' => 'footer_menu',
            'menu_id' => 'footer_menu',
            'before' => '', // 各メニューテキストの前に表示される要素
            'after' => '', // 各メニューテキストの後ろに表示される要素
            'link_before' => '', // <a>タグの前に付ける要素
            'link_after' => '', // <a>タグの後ろに付ける要素
          );
          wp_nav_menu($args); ?>
          </div>
    </nav>

<!--
       <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark d-none d-md-block">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav w-100 nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url() ?>">トップページ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/news">お知らせ</a>
                </li>
                <li class="nav-item dropdown yamm-fw">
                    <a class="nav-link dropdown-toggle" href="#"data-toggle="dropdown">実績</a>
                    <ul class="dropdown-menu">
                        <li>
					<div class="yamm-content">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3"><a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/works/">施工実績</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo get_template_directory_uri(); ?>/renovation/">リフォーム実績</a></div>
					</div>
					</div>
					</li>
                    </ul>
                </li>
                <li class="nav-item dropdown yamm-fw">
                    <a class="nav-link dropdown-toggle" href="#"data-toggle="dropdown">私たちについて</a>
                    <ul class="dropdown-menu">
                        <li>
					<div class="yamm-content">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3"><a class="dropdown-item" href="<?php echo home_url() ?>/greeting">ご挨拶</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/gaiyou">企業情報</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/staff">スタッフ紹介</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/syokunin">職人紹介</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/watashitatino">私たちの家づくり</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/nagare">家づくりの流れ</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/longlife">長期優良住宅</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/naruhodo">なるほど住まい館</a></div>
					</div>
					</div>
					</li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url() ?>/realestate/">不動産情報</a>
                </li>
                <li class="nav-item dropdown yamm-fw end">
                    <a class="nav-link dropdown-toggle" href="<?php echo get_template_directory_uri(); ?>/contact"data-toggle="dropdown">お問い合わせ</a>
                    <ul class="dropdown-menu">
                        <li>
					<div class="yamm-content">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3"><a class="dropdown-item" href="<?php echo home_url() ?>/contact">お問い合わせ</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/gaiyou">企業情報</a></div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-3"><a class="dropdown-item" href="<?php echo home_url() ?>/access">アクセス</a></div>
					</div>
					</div>
					</li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
-->

	</div>

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 center txtWhite">
	<img src="<?php echo get_template_directory_uri(); ?>/images/logo_w.png" width="400px" alt="株式会社　川端工務店"><br />
		<div class="h5">
		〒915-0857 <br class="d-xl-none d-lg-none d-md-none d-sm-inline">福井県越前市四郎丸町31-2-9<br>
		<i class="fas fa-phone-square"></i>&nbsp;0778-22-6577
		</div>
	</div>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<a class="btn btn-ghost my-4  white" role="button" href="<?php echo home_url() ?>/access"><i class="fas fa-map-marker-alt "></i>&nbsp;アクセス</a>
		<a class="btn btn-ghost my-2 white" role="button" href="<?php echo home_url() ?>/contact"><i class="far fa-envelope"></i>&nbsp;お問い合わせ</a><br />
	</div>

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center md-5 txtWhite">
		<div class="mb-5">Copyright&nbsp;&#169;&nbsp;株式会社川端工務店.&nbsp;All&nbsp;Rights&nbsp;Reserved.<br />
	</div>

	</div>
</div>
</footer>
    
<!-- Bootstrap4 jQuery Popper CDN -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- sticky navbar -->
<script src="<?php echo get_template_directory_uri(); ?>/js/sticky.js"></script>

<!-- match height -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>

<script>
$(function($){
	$('.news-img').matchHeight();
});
</script>

<!-- Yamm3 -->
<script>
jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
   e.stopPropagation()
})
</script>

<script>
$(function($){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
                $(this).addClass('scrollin');
            }
        });
    });
});

</script>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<script>
const ham = document.getElementById('ham');
const menu_wrapper =
document.getElementById('menu_wrapper');
ham.addEventListener('click', function() {
    ham.classList.toggle('clicked');
    menu_wrapper.classList.toggle('clicked');
});
</script>
    
<script>
$(function(){
var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        $('#navbar').addClass('hide');
    } else {
        $('#navbar').removeClass('hide');
    }
    startPos = winScrollTop;
});
});
</script>

<?php wp_footer(); ?>
</body>
</html>