<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css" rel="stylesheet">
<!-- Noto Sans Web font -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<!-- Yamm3 -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/yamm.css" rel="stylesheet">
<!-- print CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/print.css" rel="stylesheet" media="print">
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<meta name="google-site-verification" content="pfS2MJ3FKZwjaewn5tDTRd3EeSgwWEDA033TYvl6a70" />
</head>
<body <?php body_class (); ?>>
<?php wp_head(); ?>
    
<div class="container d-none d-md-block logo">
	<div class="row d-flex align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
            <a href="<?php echo home_url() ?>">
            <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店" width="300px">
            </a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 logo">
            <p class="font-weight-bold text-white text-right h5 mt-2"><i class="fas fa-phone-square"></i>&nbsp;0778-22-6577</p>
        </div>
	</div>
</div>

    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
        <a class="navbar-brand d-inline-block d-md-none d-flex align-items-center"><img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">私たちについて</a>
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
                    <a class="nav-link dropdown-toggle" href="<?php echo get_template_directory_uri(); ?>/contact" data-toggle="dropdown">お問い合わせ</a>
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
    