<?php

//カスタムメニュー
register_nav_menu('sub_menu','サブメニュー');
register_nav_menu('main_menu','メインメニュー');
register_nav_menu('footer_sitemap','フッターサイトマップ');

//スクリプト読み込み
function add_scripts() {
    //jQuery
    wp_enqueue_script( 'jquery' );
}
add_action('wp_print_scripts', 'add_scripts');

//スマートフォン判別
function is_mysmartphone() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (
        (strpos($ua, 'Android') && strpos($ua, 'Mobile'))
        || strpos($ua, 'iPhone')
        || strpos($ua, 'Windows Phone')
    ){
        return true;
    } else {
        return false;
    }
}

//Custom CSSFile Widget
add_action('admin_menu', 'custom_css2_hooks');
add_action('save_post', 'save_custom_css2');
add_action('wp_head','insert_custom_css2');
function custom_css2_hooks() {
    add_meta_box('custom_css2', '個別CSSファイル', 'custom_css2_input', 'post', 'normal', 'high');
    add_meta_box('custom_css2', '個別CSSファイル', 'custom_css2_input', 'page', 'normal', 'high');
}
function custom_css2_input() {
    global $post;
    echo '<input type="hidden" name="custom_css2_noncename" id="custom_css2_noncename" value="'.wp_create_nonce('custom-css2').'" />';
    echo '<textarea name="custom_css2" id="custom_css2" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css2',true).'</textarea>';
}
function save_custom_css2($post_id) {
    if (!wp_verify_nonce($_POST['custom_css2_noncename'], 'custom-css2')) return $post_id;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
    $custom_css2 = $_POST['custom_css2'];
    update_post_meta($post_id, '_custom_css2', $custom_css2);
}
function insert_custom_css2() {
    if (is_page() || is_single()) {
        if (have_posts()) : while (have_posts()) : the_post();
        if (get_post_meta(get_the_ID(), '_custom_css2', true) !='') {
            echo "<link rel=\"stylesheet\" href=\"";
            echo get_template_directory_uri().get_post_meta(get_the_ID(), '_custom_css2', true)."\" type=\"text/css\" media=\"all\" />\n";
        }
        endwhile; endif;
        rewind_posts();
    }
}


//　改行の時に自動的にPタグが挿入されるのを防ぐ
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );

//管理者名を表示しない設定。
function theme_slug_redirect_author_archive() {
    if (is_author() ) {
        wp_redirect( home_url());
        exit;
    }
}

add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );


// Wordpressバージョン情報の削除
remove_action('wp_head','wp_generator');


	// カスタム投稿タイプ「sports」
	register_post_type(
		'sports',
		array(
			'labels' => array(
				'name' => 'スポーツ教室の紹介',
				'singular_name' => 'sports',
				'add_new' => 'スポーツ教室の新規追加',
				'add_new_item' => '新規追加',
				'edit_item' => 'スポーツ教室を編集',
				'new_item' => '新着情報',
				'all_items' => 'スポーツ教室一覧',
				'view_item' => 'スポーツ教室を見る',
				'search_items' => '検索する',
				'not_found' => 'スポーツ教室が見つかりませんでした。',
				'not_found_in_trash' => 'ゴミ箱内にスポーツ教室が見つかりませんでした。'
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
			'taxonomies' => array('sports')
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
	register_taxonomy( 'sports_cat', 'sports', $args );
}
add_action( 'init', 'new_custom_post_type');