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

<div class="sticky-top bg-white"  id="navbar">    
<div class="container d-none d-md-block logo">
	<div class="row d-flex align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
            <a href="<?php echo home_url() ?>">
            <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店" width="300px">
            </a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 logo">
            <p class="font-weight-bold text-right h5 mt-2 top-text"><i class="fas fa-phone-square"></i>&nbsp;0778-22-6577</p>
            <p class="font-weight-bold text-right h5 mt-2"><a class="top-text" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせはこちら</a></p>
        </div>
	</div>
</div>

    <nav>
      <a href="<?php echo home_url(); ?>" class="navbar-brand d-inline-block d-md-none align-items-center"><img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店"></a>
       <div id="ham" class="ham d-lg-none">
           <span class="ham_line ham_line1"></span>
           <span class="ham_line ham_line2"></span>
           <span class="ham_line ham_line3"></span>
       </div>
       <div id="menu_wrapper" class="menu_wrapper">
        <?php
          $args = array(
            'theme_location' => 'global_nav',
            'container' => 'div',
            'container_class' => 'global_nav',
            'container_id' => 'global_nav',
            'menu_class' => 'global_menu',
            'menu_id' => 'global_menu',
            'before' => '', // 各メニューテキストの前に表示される要素
            'after' => '', // 各メニューテキストの後ろに表示される要素
            'link_before' => '', // <a>タグの前に付ける要素
            'link_after' => '', // <a>タグの後ろに付ける要素
          );
          wp_nav_menu($args); ?>
          </div>
        
    </nav>
    </div>    
    