<?php
// テーマのセットアップ
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

// CSSとJavaScriptの読み込み
function my_script_init() {
  wp_enqueue_style('noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), '1.0.0', 'all');
  wp_enqueue_style('noto-serif-jp', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap', array(), '1.0.0', 'all');
  wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '1.0.0', 'all');
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), '7.3.0', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');  
  wp_enqueue_script('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), '7.3.0', true);
  wp_enqueue_script('my', get_template_directory_uri() . '/js/bundle.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// カスタムメニューの登録
function register_my_menus() { 
  register_nav_menus(
		array( //複数のナビゲーションメニューを登録する関数
		  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
	    'main-menu' => 'Main Menu',
	    'footer-menu'  => 'Footer Menu',
	  )
	);
}
add_action( 'after_setup_theme', 'register_my_menus' );

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// 投稿の抜粋文の字数制限
function my_excerpt_length($length) {
  return 27;
}
add_filter('excerpt_length', 'my_excerpt_length');

// ブログ記事にNewマークを付与
function addition_new_badge($days) {
  $post_time = get_the_time('U');
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) {
    echo '<span class="p-blog-card__new c-new-badge">new</span>';
  }
}
