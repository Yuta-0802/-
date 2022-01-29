<?php get_header(); ?>

  <div class="l-top-mv p-top-mv js-mv">
    <div class="js-top-mv-swiper p-top-mv__content">
      <div class="swiper-wrapper">
        <div class="swiper-slide p-top-mv__slide">
          <picture class="p-top-mv__image">
            <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_mv_1.jpg" media="(min-width: 768px)" />
            <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/sp/top_mv_sp_1.jpg" alt="codeupsメインビジュアル1" />
          </picture><!-- /.p-top-mv__image -->
          <div class="p-top-mv__title-wrapper">
            <h2 class="p-top-mv__title">メインタイトルが入ります</h2>
            <span class="p-top-mv__subtitle">サブタイトルが入ります</span>
          </div><!-- /.p-top-mv__title-wrapper -->
        </div><!-- /.swiper-slide p-top-mv__slide -->

        <div class="swiper-slide p-top-mv__slide">
          <picture class="p-top-mv__image">
            <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_mv_2.jpg" media="(min-width: 768px)" />
            <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/sp/top_mv_sp_2.jpg" alt="codeupsメインビジュアル2" />
          </picture><!-- /.p-top-mv__image -->
          <div class="p-top-mv__title-wrapper">
            <h2 class="p-top-mv__title">メインタイトルが入ります</h2>
            <span class="p-top-mv__subtitle">サブタイトルが入ります</span>
          </div><!-- /.p-top-mv__title-wrapper -->
        </div><!-- /.swiper-slide p-top-mv__slide -->

        <div class="swiper-slide p-top-mv__slide">
          <picture class="p-top-mv__image">
            <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_mv_3.jpg" media="(min-width: 768px)" />
            <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/sp/top_mv_sp_3.jpg" alt="codeupsメインビジュアル3" />
          </picture><!-- /.p-top-mv__image -->
          <div class="p-top-mv__title-wrapper">
            <h2 class="p-top-mv__title">メインタイトルが入ります</h2>
            <span class="p-top-mv__subtitle">サブタイトルが入ります</span>
          </div><!-- /.p-top-mv__title-wrapper -->
        </div><!-- /.swiper-slide p-top-mv__slide -->
      </div><!-- /.swiper-wrapper -->
    </div><!-- /.p-top-mv__content -->
  </div><!-- /.l-top-mv p-top-mv -->

  <div class="l-top">
    <div class="l-top__news l-top-news p-top-news">
      <div class="l-inner">
        <div class="p-top-news__content">
<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'order' => 'DESC',
  'orderby' => 'date',
);
$news_posts = get_posts($args);
if ($news_posts) :
?>
          <div class="p-top-news__items">
<?php
foreach ($news_posts as $post) :
  setup_postdata($post);
?>
            <a href="<?php the_permalink(); ?>" class="p-top-news__item p-top-info">
              <div class="p-top-info__meta">
                <time datetime="<?php the_time('c'); ?>" class="p-top-info__published"><?php the_time('Y.n.j'); ?></time>
                <div class="p-top-info__category-wrapper">
<?php
$category = get_the_category();
if ($category[0]) {
  echo '<span class="p-top-info__category">' . $category[0]->cat_name . '</span>';
}
?>
                </div><!-- /.p-top-info__category-wrapper -->
              </div><!-- /.p-top-info__meta -->
              <h3 class="p-top-info__title"><?php the_title(); ?></h3>
            </a><!-- /.p-top-news__item p-top-info -->
<?php
  endforeach;
wp_reset_postdata();
?>
          </div><!-- /.p-top-news__items -->
<?php endif; ?>

          <div class="p-top-news__button">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-button-news">すべて見る</a>
          </div><!-- /.p-top-news__button -->
        </div><!-- /.p-top-news__content -->
      </div><!-- /.l-inner p-top-news__inner -->
    </div><!-- /.l-top__news l-top-news p-top-news -->

    <div class="l-diagonal-line">
      <div class="l-diagonal-line__downward">
        <section class="l-top__content l-top-content p-content">
          <div class="l-inner">
            <div class="p-content__subtitle">
              <span class="c-section-subtitle">content</span>
            </div><!-- /.p-content__subtitle -->
            <div class="p-content__title">
              <h2 class="c-section-title">事業内容</h2>
            </div><!-- /.p-content__title -->

            <div class="p-content__items">
              <a href="<?php echo esc_url(home_url('/content/')); ?>" class="p-content__item p-philosophy-link">
                <div class="p-philosophy-link__image">
                  <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_content_1.jpg" alt="経営理念ページへ">
                </div><!-- /.p-philosophy-link__image -->
                <div class="p-philosophy-link__title-wrapper">
                  <h3 class="p-philosophy-link__title">経営理念ページへ</h3>
                </div><!-- /.p-philosophy-link__title-wrapper -->
              </a><!-- /.p-content__item p-philosophy-link -->
      
              <a href="<?php echo esc_url(home_url('/content#philosophy-1')); ?>" class="p-content__item p-philosophy-link">
                <div class="p-philosophy-link__image">
                  <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_content_2.jpg" alt="理念１へ">
                </div><!-- /.p-philosophy-link__image -->
                <div class="p-philosophy-link__title-wrapper">
                  <h3 class="p-philosophy-link__title">理念１へ</h3>
                </div><!-- /.p-philosophy-link__title-wrapper -->
              </a><!-- /.p-content__item p-philosophy-link -->
      
              <a href="<?php echo esc_url(home_url('/content#philosophy-2')); ?>" class="p-content__item p-philosophy-link">
                <div class="p-philosophy-link__image">
                  <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_content_3.jpg" alt="理念２へ">
                </div><!-- /.p-philosophy-link__image -->
                <div class="p-philosophy-link__title-wrapper">
                  <h3 class="p-philosophy-link__title">理念２へ</h3>
                </div><!-- /.p-philosophy-link__title-wrapper -->
              </a><!-- /.p-content__item p-philosophy-link -->
      
              <a href="<?php echo esc_url(home_url('/content#philosophy-3')); ?>" class="p-content__item p-philosophy-link">
                <div class="p-philosophy-link__image">
                  <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_content_4.jpg" alt="理念３へ">
                </div><!-- /.p-philosophy-link__image -->
                <div class="p-philosophy-link__title-wrapper">
                  <h3 class="p-philosophy-link__title">理念３へ</h3>
                </div><!-- /.p-philosophy-link__title-wrapper -->
              </a><!-- /.p-content__item p-philosophy-link -->
            </div><!-- /.p-content__items -->
          </div><!-- /.l-inner -->
        </section><!-- /.l-top__content l-top-content p-content -->
    
        <section class="l-top__works l-top-works p-works">
          <div class="l-inner">
            <div class="p-works__subtitle">
              <span class="c-section-subtitle">works</span>
            </div><!-- /.p-works__subtitle -->
            <div class="p-works__title">
              <h2 class="c-section-title">制作実績</h2>
            </div><!-- /.p-works__title -->
          </div><!-- /.l__inner -->
    
          <div class="p-works__media p-works-media">
            <div class="l-inner">
              <div class="p-works-media__content">
<?php
$args = array(
  'post_type' => 'works',
  'posts_per_page' => 3,
  'order' => 'DESC',
  'orderby' => 'date',
);
$works_posts = get_posts($args);
if ($works_posts) :
?>
                <div class="js-top-works-swiper p-works-media__head">
                  <div class="swiper-wrapper">
<?php
foreach ($works_posts as $post) :
  setup_postdata($post);
?>
                    <div class="swiper-slide p-works-media__image">
<?php
if (has_post_thumbnail()) {
  the_post_thumbnail('large');
} else {
  echo '<img src="' . esc_attr(get_template_directory_uri()) . '/img/common/noimg.png" alt="アイキャッチ画像が設定されておりません。" />';
}
?>
                    </div><!-- /.swiper-slide p-works-media__image -->
<?php
  endforeach;
wp_reset_postdata();
?>
                  </div><!-- /.swiper-wrapper -->
                  <div class="swiper-pagination p-works-media__pagination"></div>
                </div><!-- /.p-works-media__head -->
<?php endif; ?>
          
                <div class="p-works-media__body">
                  <h3 class="p-works-media__title">メインタイトルが入ります。</h3>
                  <p class="p-works-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <div class="p-works-media__button">
                    <a href="<?php echo esc_url(home_url('/works/')); ?>" class="c-button-more">詳しく見る</a>
                  </div><!-- /.p-works-media__button -->
                </div><!-- /.p-works-media__body -->
              </div><!-- /.p-works-media__content -->
            </div><!-- /.p-works-media__inner -->
          </div><!-- /.p-works__media p-works-media -->
        </section><!-- /.l-top__works l-top-works p-works -->
      </div><!-- /.l-diagonal-line__downward -->
  
      <div class="l-diagonal-line__upward">
        <section class="l-top__overview l-top-overview p-overview">
          <div class="l-inner">
            <div class="p-overview__subtitle">
              <span class="c-section-subtitle">overview</span>
            </div><!-- /.p-overview__subtitle -->
            <div class="p-overview__title">
              <h2 class="c-section-title">企業概要</h2>
            </div><!-- /.p-overview__title -->
          </div><!-- /.l-inner -->

          <div class="p-overview__media p-overview-media">
            <div class="l-inner">
              <div class="p-overview-media__content">
                <figure class="p-overview-media__image">
                  <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/top/top_overview.jpg" alt="制作実績1">
                </figure><!-- /.p-overview-content__image -->
                <div class="p-overview-media__body">
                  <h3 class="p-overview-media__title">メインタイトルが入ります。</h3>
                  <p class="p-overview-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <div class="p-overview-media__button">
                    <a href="<?php echo esc_url(home_url('/overview/')); ?>" class="c-button-more">詳しく見る</a>
                  </div><!-- /.p-overview-media__button -->
                </div><!-- /.p-overview-media__body -->
              </div><!-- /.p-overview-media__content -->
            </div><!-- /.p-overview-media__inner -->
          </div><!-- /.p-overview__content p-overview-media -->
        </section><!-- /.l-top__overview l-top-overview p-overview -->
    
        <section class="l-top__blog l-top-blog p-blog">
          <div class="l-inner">
            <div class="p-blog__subtitle">
              <span class="c-section-subtitle">blog</span>
            </div><!-- /.p-blog__subtitle -->
            <div class="p-blog__title">
              <h2 class="c-section-title">ブログ</h2>
            </div><!-- /.p-blog__title -->

<?php
$args = array(
  'post_type' => 'blog',
  'posts_per_page' => 3,
  'order' => 'DESC',
  'orderby' => 'date',
);
$blog_posts = get_posts($args);
if ($blog_posts) :
?>
            <div class="p-blog__items">
<?php
foreach ($blog_posts as $post) :
  setup_postdata($post);
?>
              <a href="<?php the_permalink(); ?>" class="p-blog__item p-blog-card">
                <?php addition_new_badge(3); ?>
                <figure class="p-blog-card__image">
<?php
if (has_post_thumbnail()) {
  the_post_thumbnail();
} else {
  echo '<img src="' . esc_attr(get_template_directory_uri()) . '/img/common/noimg.png" alt="アイキャッチ画像が設定されておりません。" />';
}
?>
                </figure><!-- /.p-blog-card__image -->
                <div class="p-blog-card__info">
                  <h3 class="p-blog-card__title"><?php the_title(); ?></h3>
                  <p class="p-blog-card__text"><?php echo get_the_excerpt(); ?></p>
                </div><!-- /.p-blog-card__body -->
                <div class="p-blog-card__meta">
                  <span class="p-blog-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'topics')[0]->name); ?></span>
                  <time datetime="<?php the_time('c'); ?>" class="p-blog-card__published"><?php the_time('Y.n.j'); ?></time>
                </div><!-- /.p-blog-card__meta -->
              </a><!-- /.p-blog__item p-blog-card -->
<?php
 endforeach;
wp_reset_postdata();
?>
            </div><!-- /.p-blog__items -->
<?php endif ?>
      
            <div class="p-blog__button">
              <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c-button-more">詳しく見る</a>
            </div><!-- /.p-blog__button -->
          </div><!-- /.l-inner -->
        </section><!-- /.l-top__blog l-top-blog p-blog -->
      </div><!-- /.l-diagonal-line__upward -->
    </div><!-- /.l-diagonal-line -->

<?php get_footer('add-contact'); ?>