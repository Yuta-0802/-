<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header p-header js-header">
    <div class="l-header__inner p-header__content">
      <h1 class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="c-logo"><img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/common/logo.svg" alt="codeupsロゴ"></a></h1>
  
      <nav class="p-header__nav p-gnav">
        <ul class="p-gnav__items">
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/content/')); ?>">事業内容</a></li>
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/overview/')); ?>">企業概要</a></li>
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
          <li class="p-gnav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul><!-- /.p-gnav__items -->
      </nav><!-- /.p-header__nav p-gnav -->
  
      <button class="p-header__menu-icon c-hamburger js-hamburger">
        <span class="c-hamburger__bars">
          <span class="c-hamburger__bar"></span>
          <span class="c-hamburger__bar"></span>
          <span class="c-hamburger__bar"></span>
        </span><!-- /.c-hamburger__bars -->
      </button><!-- /.p-header__menu-icon c-hamburger -->
  
      <div class="p-header__drawer p-drawer js-drawer">
        <div class="p-drawer__scroll">
          <nav class="p-drawer__nav p-sp-nav">
            <ul class="p-sp-nav__items">
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/content/')); ?>">事業内容</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/overview/')); ?>">企業概要</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
              <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
            </ul><!-- /.p-sp-nav__items -->
          </nav><!-- /.p-drawer__nav p-sp-nav -->
        </div><!-- /.p-drawer__scroll -->
      </div><!-- /.p-header__drawer p-drawer -->
    </div><!-- /.l-header__inner p-header -->
  </header><!-- /.l-header -->