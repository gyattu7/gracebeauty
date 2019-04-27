<?php

/*******************************************************************************************

       js読込

 *******************************************************************************************/

//管理画面以外であれば自身で指定したjsを読み込む
if(!is_admin()){
    function my_scripts() {
        // jQueryバージョン
        $jquery_var = '1.11.3';

        // テンプレートディレクトリのパス
        $dir = get_template_directory_uri();

        // js読込
        wp_deregister_script( 'jquery' ); //あらかじめ登録されているjQueryを登録解除する
        $url = 'http://cdnjs.cloudflare.com/ajax/libs/jquery/'.$jquery_var.'/jquery.min.js'; //チェックするCNDのURL
        $test_url = @fopen($url,'r'); //CDNが利用可能かチェックする
        if( $test_url !== false ) {
            // CDNが利用可能であればjQueryを登録する
            wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/'.$jquery_var.'/jquery.min.js', array(), NULL , true);
        }
        else{
            // CDNが利用不可であればローカルのjQueryを登録する
            $local_url = $dir . '/src/js/vendor/jquery-'.$jquery_var.'.min.js';
            wp_register_script('jquery', $local_url, array(), NULL , true);
        }
        wp_register_script('Vue', '//unpkg.com/vue', array(), NULL , false);
        wp_enqueue_script('jquery'); //登録し直したjQueryを読み込む
        // 個別jsを読み込む
        // wp_enqueue_script( 'vue', $dir . '/assets/js/Vue/vue.js', array('jquery'), NULL, true );
        wp_enqueue_script( 'gmap', '//maps.googleapis.com/maps/api/js?key=AIzaSyCdzY6jpSRpEcLmTvJYCAeCn2Ehi_qY5lY', array('jquery'), NULL, true );
        wp_enqueue_script( 'all', $dir . '/assets/js/main.min.js', array('jquery', 'gmap'), NULL, false );
        wp_enqueue_script( 'list', $dir . '/assets/js/list.js', array(), NULL, true );
        wp_enqueue_script('Vue');
    }
    add_action('wp_enqueue_scripts', 'my_scripts');
}


/*******************************************************************************************

       headerお掃除

 *******************************************************************************************/

//  ヘッダの余計なタグを無効化
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
// Wordpress4.2から追加されたやつをけす
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );


//  セルフピンバックの禁止
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );


// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// カスタムサイズ画像
add_image_size( 'menu-thumbs', 400, 400, true );
add_image_size( 'article-thumbs', 880, 300, true );


/*******************************************************************************************

       管理画面調整

 *******************************************************************************************/

// アドミンバーを非表示
// ※表示する場合はコメントアウト
add_filter('show_admin_bar','__return_false');

// プロフィールのいらないものを削除
function hide_profile_fields( $contactmethods ) {
  unset($contactmethods['aim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['yim']);
  return $contactmethods;
}
add_filter('user_contactmethods','hide_profile_fields');

// 管理者以外にはアップデートのお知らせは非表示
if (!current_user_can('edit_users')) {
  /*function wphidenag() {
    remove_action( 'admin_notices', 'update_nag');
  }
  add_action('admin_menu','wphidenag');*/
    // バージョン更新を非表示にする
    add_filter('pre_site_transient_update_core', '__return_zero');
    // APIによるバージョンチェックの通信をさせない
    remove_action('wp_version_check', 'wp_version_check');
    remove_action('admin_init', '_maybe_update_core');
}


/*******************************************************************************************

       BODYにスラッグ名をクラス追加

 *******************************************************************************************/

function pagename_class($classes = '') {
  if (is_page()) {
    $page = get_page(get_the_ID());
    $classes[] = 'page-' . $page->post_name;
    if ($page->post_parent) {
      $classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
    }
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');


if (function_exists('register_sidebar')) {
 register_sidebar(array(
 'name' => 'columnSidebar',
 'id' => 'sidebar1',
 'before_widget' => '<div>',
 'after_widget' => '</div>',
 'before_title' => '<h3 class="c-widget_title">',
 'after_title' => '</h3>'
 ));
}


/*******************************************************************************************

       投稿関連

 *******************************************************************************************/
// 投稿の画像にリンクを付けない
add_filter( 'the_content', 'attachment_image_link_remove_filter' );
function attachment_image_link_remove_filter( $content ) {
 $content =  preg_replace(  array('{<a(.*?)(wp-att|wp-content/uploads)[^>]*><img}',  '{ wp-image-[0-9]*" /></a>}'), array('<img','" />'),  $content  );
 return $content;
 }


/*******************************************************************************************

       プラグイン関連

 *******************************************************************************************/
// jetpackのjs無効化
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );


/*******************************************************************************************

       ページ独自

 *******************************************************************************************/
 //アクセス数をカウントする
 function set_post_views() {
 	$postID = get_the_ID();
 	$num = (int)date_i18n('H'); // 現在時間で番号取得
 	$key = 'pv_count';
 	$count_key = '_pv_count';
 	$count_array = get_post_meta( $postID, $count_key, true );
 	$sum_count = get_post_meta( $postID, $key, true );
 	if( !is_array($count_array) ) { //配列ではない
 		$count_array = array();
 		$count_array[$num] = 1;
 	} else { //配列である
 		if ( isset( $count_array[$num] ) ) { //カウント配列[n]が存在する
 			$count_array[$num] += 1;
 		} else { //カウント配列[n]が存在しない
 			$count_array[$num] = 1;
 		}
 	}
 	//アクセス数を更新する
 	update_post_meta( $postID, $count_key, $count_array );
 	// update_post_meta( $postID, $key, $sum_count + 1 );
 }

 //アクセス数をリセットする
 function reset_post_views() {
 	$num = (int)date_i18n('H');
 	$key = 'pv_count';
 	$reset_key = '_pv_count';
 	$args = array(
 		'posts_per_page'   => -1,
 		'post_type' => 'post',
 		'post_status'=>'publish',
 		'meta_key' => $reset_key,
 	);
 	$reset_posts = get_posts($args);
 	if($reset_posts):
 		foreach($reset_posts as $reset_post):
 			$postID = $reset_post->ID;
 			$count_array = get_post_meta( $postID , $reset_key, true );
 			if ( isset( $count_array[$num] ) ) { //カウント配列[n]が存在する
 				$count_array[$num] = 0;
 			}
 			//アクセス数をリセットする
 			update_post_meta( $postID, $reset_key, $count_array );
 			update_post_meta( $postID, $key, array_sum( $count_array ) );
 		endforeach;
 	endif;
 }

 //リセット関数を実行するアクションフックを追加
 add_action( 'set_hours_event', 'reset_post_views' );

 //実行間隔の追加
 function my_interval( $schedules ) {
 	// 1時間ごとを追加
 	$schedules['1hours'] = array(
 		'interval' => 3600,
 		'display' => 'every 1 hours'
 	);
 	return $schedules;
 }
 add_filter( 'cron_schedules', 'my_interval' );

 //アクションフックを定期的に実行するスケジュールイベントの追加
 function my_activation() {
 	if ( ! wp_next_scheduled( 'set_hours_event' ) ) {
 		wp_schedule_event( 1451574000, '1hours', 'set_hours_event' );
 	}
 }
 add_action('wp', 'my_activation');

 //ボットの判別
 function isBot() {
 	$bot_list = array (
 	'Googlebot',
 	'Yahoo! Slurp',
 	'Mediapartners-Google',
 	'msnbot',
 	'bingbot',
 	'MJ12bot',
 	'Ezooms',
 	'pirst; MSIE 8.0;',
 	'Google Web Preview',
 	'ia_archiver',
 	'Sogou web spider',
 	'Googlebot-Mobile',
 	'AhrefsBot',
 	'YandexBot',
 	'Purebot',
 	'Baiduspider',
 	'UnwindFetchor',
 	'TweetmemeBot',
 	'MetaURI',
 	'PaperLiBot',
 	'Showyoubot',
 	'JS-Kit',
 	'PostRank',
 	'Crowsnest',
 	'PycURL',
 	'bitlybot',
 	'Hatena',
 	'facebookexternalhit',
 	'NINJA bot',
 	'YahooCacheSystem',
 	'NHN Corp.',
 	'Steeler',
 	'DoCoMo',
 	);
 	$is_bot = false;
 	foreach ($bot_list as $bot) {
 		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
 			$is_bot = true;
 			break;
 		}
 	}
 	return $is_bot;
 }


?>
