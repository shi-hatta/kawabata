<?php

// Wordpressバージョン情報の削除
remove_action('wp_head','wp_generator');

// ウィジェット
register_sidebar();

// RSSフィード
add_theme_support( 'automatic-feed-links' );

// 概要(抜粋)の文字数
function my_length($length) {
      return 100;
}
add_filter('excerpt_mblength','my_length');

// 概要(抜粋)の省略記号
function my_more($more) {
      return '...';
}
add_filter('excerpt_more', 'my_more');

// 改行埋め
str_replace( "\n", "", get_the_excerpt() ); 

// アイキャッチ有効化
add_theme_support( 'post-thumbnails' );

// Wordpressのご利用ありがとうございますの編集
add_filter('admin_footer_text', 'custom_admin_footer'); 
function custom_admin_footer() { 
    echo 'お困りの場合は、お気軽に<a href="mailto:abuse.zenshin@gmail.com">メールにてお問い合わせ</a>ください。'; 
} 

//　画像alt自動設定
function auto_set_alt($response, $attachment, $meta) {
if (empty($response['alt']))
$response['alt'] = $response['title'];
return $response;
}
add_filter('wp_prepare_attachment_for_js', 'auto_set_alt', 10, 3);

//管理者名を表示しない設定。
function theme_slug_redirect_author_archive() {
    if (is_author() ) {
        wp_redirect( home_url());
        exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );

//西暦和暦変換
function wareki($ymd)
{
list($y,$m,$d) = explode("/",$ymd);
$m = str_pad($m,2,0,STR_PAD_LEFT);
$d = str_pad($d,2,0,STR_PAD_LEFT);
 
$ymd = $y.$m.$d;
if ($ymd <= "19120729") {
$gg = "明治";
$yy = $y - 1867;
} elseif ($ymd >= "19120730" && $ymd <= "19261224") {
$gg = "大正";
$yy = $y - 1911;
} elseif ($ymd >= "19261225" && $ymd <= "19890107") {
$gg = "昭和";
$yy = $y - 1925;
} elseif ($ymd >= "19890108" && $ymd <= "20190430") {
$gg = "平成";
$yy = $y - 1988;
} elseif ($ymd >= "20190501") {
$gg = "令和";
$yy = $y - 2018;
}
 
$strm = ltrim($m, '0');
$strd = ltrim($d, '0');
 
if ($yy == 1) {
$yy = "元";
}
 
$wareki = "{$gg}{$yy}年";
return $wareki;
}


//　改行の時に自動的にPタグが挿入されるのを防ぐ
// remove_filter('the_content', 'wpautop');
// remove_filter( 'the_excerpt', 'wpautop' );


//Jetpack Page Speed Insightモバイル向け対策
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
 

// サムネイル画像を利用
add_theme_support( 'post-thumbnails', array( 'team' ) );
set_post_thumbnail_size( 150, 150, true );


// 不要なウィジェット類を非表示
function example_remove_dashboard_widgets() {
 if (!current_user_can('administrator')) { //管理者以下のユーザーの場合ウィジェットをunsetする
 global $wp_meta_boxes;
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
 }
 }
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');


// ビジュアルエディタ用css使用宣言
add_editor_style( 'editor-style.css' );

//エディタから見出し,h1,h2,h5,h6選択できないようにする
function custom_editor_settings( $initArray ) {
$initArray['body_class'] = 'editor-area';
$initArray['block_formats'] = "段落=p; 見出し3=h3; 見出し4=h4;";//必要なタグを記述
return $initArray;
}
 
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

// 管理者のみ管理バーを表示
function my_function_admin_bar($content) {
  return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// wp_list_categories にカテゴリースラッグの class が出力
function add_cat_slug_class( $output, $args ) {
    $regex = '/<li class="cat-item cat-item-([\d]+)[^"]*">/';
    $taxonomy = isset( $args['taxonomy'] ) && taxonomy_exists( $args['taxonomy'] ) ? $args['taxonomy'] : 'category';
     
    preg_match_all( $regex, $output, $m );
     
    if ( ! empty( $m[1] ) ) {
        $replace = array();
        foreach ( $m[1] as $term_id ) {
            $term = get_term( $term_id, $taxonomy );
            if ( $term && ! is_wp_error( $term ) ) {
                $replace['/<li class="cat-item cat-item-' . $term_id . '("| )/'] = '<li class="cat-item cat-item-' . $term_id . ' cat-item-' . esc_attr( $term->slug ) . '$1';
            }
        }
        $output = preg_replace( array_keys( $replace ), $replace, $output );
    }
    return $output;
}
add_filter( 'wp_list_categories', 'add_cat_slug_class', 10, 2 );

// 固定ページへの画像相対パス設定
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

// ContactForm7 のスパムメール対策（英文の本文は禁止にする）
function wpcf7_validate_spam_message( $result, $tag ) {
  $value = str_replace(array(PHP_EOL,' '), '', esc_attr($_POST['text-47']));
  if (!empty($value)) {
    if (preg_match('/^[!-~]+$/', $value)) {
      $result['valid'] = false;
      $result['reason'] = array('text-47' => '日本語で入力してください');
    }
  }
  return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );

// カスタム投稿タイプを登録する関数
function new_custom_post_type() {

	// もともと設定されていたカスタム投稿タイプ「news」
	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => 'お知らせ',
				'singular_name' => 'news',
				'add_new' => '新規追加',
				'add_new_item' => '新規追加',
				'edit_item' => 'お知らせを編集',
				'new_item' => '新着情報',
				'all_items' => 'お知らせ一覧',
				'view_item' => 'お知らせを見る',
				'search_items' => '検索する',
				'not_found' => 'お知らせが見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内にお知らせが見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-format-chat',
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'rewrite' => true,
			'taxonomies' => array('news')
		)
	);

	// 新しく設定したカスタム投稿タイプ「施工実績」
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => '施工実績',
				'singular_name' => 'works',
				'add_new' => '新規追加',
				'add_new_item' => '新規追加',
				'edit_item' => '施工実績を編集',
				'new_item' => '施工実績',
				'all_items' => '施工実績一覧',
				'view_item' => '施工実績を見る',
				'search_items' => '検索する',
				'not_found' => '施工実績が見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内に施工実績が見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-media-text',
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'rewrite' => true,
			'taxonomies' => array('works')
		)
	);

	// 新しく設定したカスタム投稿タイプ「リフォーム実績」
	register_post_type(
		'renovation',
		array(
			'labels' => array(
				'name' => 'リフォーム実績',
				'singular_name' => 'renovation',
				'add_new' => '新規追加',
				'add_new_item' => '新規追加',
				'edit_item' => 'リフォーム実績を編集',
				'new_item' => '新着情報',
				'all_items' => 'リフォーム実績一覧',
				'view_item' => 'リフォーム実績を見る',
				'search_items' => '検索する',
				'not_found' => 'リフォーム実績が見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内にリフォーム実績が見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-media-text',
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'rewrite' => true,
			'taxonomies' => array('renovation')
		)
	);
    
    // 新しく設定したカスタム投稿タイプ「不動産情報」
	register_post_type(
		'real_estate',
		array(
			'labels' => array(
				'name' => '不動産情報',
				'singular_name' => 'works',
				'add_new' => '新規追加',
				'add_new_item' => '新規追加',
				'edit_item' => '不動産情報を編集',
				'new_item' => '不動産情報',
				'all_items' => '不動産情報一覧',
				'view_item' => '不動産情報を見る',
				'search_items' => '検索する',
				'not_found' => '不動産情報が見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内に不動産情報が見つかりませんでした。'
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-media-text',
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'rewrite' => true,
			'taxonomies' => array('real_estate')
		)
	);

	$labels = array(
		'name'                => 'カテゴリー',
		'singular_name'       => 'カテゴリー',
		'search_items'        => 'カテゴリー検索',
		'all_items'           => '全てのカテゴリー',
		'parent_item'         => '親カテゴリー',
		'parent_item_colon'   => '親カテゴリー:',
		'edit_item'           => 'カテゴリーを編集',
		'update_item'         => 'カテゴリーを更新',
		'add_new_item'        => 'カテゴリーを追加',
		'new_item_name'       => '新規カテゴリー',
		'menu_name'           => 'カテゴリー'
	);
	$args = array(
		'hierarchical'        => true,
		'labels'              => $labels,
	);
	register_taxonomy( 'news_cat', 'news', $args );
	register_taxonomy( 'works_cat', 'works', $args );
	register_taxonomy( 'renovation_cat', 'renovation', $args );
    register_taxonomy( 'real_estate_cat', 'real_estate', $args );
}
add_action( 'init', 'new_custom_post_type');

// ContactForm 7 のメールアドレス確認用のチェックコード
function wpcf7_main_validation_filter( $result, $tag ) {
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
  if ( 'email' == $type || 'email*' == $type ) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
      } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );


// ファイルの最大アップロードサイズを変更する
@ini_set( 'max_execution_time', '100' );
@ini_set( 'post_max_size', '50M');
@ini_set( 'upload_max_size' , '30M' );

// カスタムメニュー設定
function add_menus() {
    register_nav_menus(array(
        'global_nav' => 'グローバルナビゲーション',
        'footer_nav' => 'フッターのナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');