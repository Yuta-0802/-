<?php get_header(); ?>

  <div class="l-lower-mv p-lower-mv js-mv">
    <picture class="p-lower-mv__image">
      <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/news/news_mv.jpg" media="(min-width: 768px)" />
      <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/news/sp/news_mv_sp.jpg" alt="お知らせ" />
    </picture><!-- /.p-lower-mv__image -->
    <div class="p-lower-mv__title-wrapper">
      <h1 class="p-lower-mv__title">お知らせ</h1>
    </div><!-- /.p-lower-mv__title-wrapper -->
  </div><!-- /.l-top-mv p-top-mv -->

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-lower l-lower-news">
    <div class="l-lower-news__archive p-lower-news">
      <div class="p-lower-news__inner">
<?php if (have_posts()) : ?>
        <div class="p-lower-news__items">
<?php 
while (have_posts()) : the_post();
?>
          <a href="<?php the_permalink(); ?>" class="p-lower-news__item p-lower-info">
            <div class="p-lower-info__meta">
              <time datetime="<?php the_time('c'); ?>" class="p-lower-info__published"><?php the_time('Y.n.j'); ?></time>
              <div class="p-lower-info__category-wrapper">
<?php
$category = get_the_category();
if ($category[0]) {
  echo '<span class="p-lower-info__category">' . $category[0]->cat_name . '</span>';
}
?>
              </div><!-- /.p-lower-info__category-wrapper -->
            </div><!-- /.p-lower-info__meta -->
            <h2 class="p-lower-info__title"><?php the_title(); ?></h2>
          </a><!-- /.p-lower-news__item p-lower-info -->
<?php endwhile; ?>
        </div><!-- /.p-lower-news__items -->
<?php endif; ?>

        <div class="p-lower-news__pagination">
          <?php wp_pagenavi(); ?>
        </div><!-- /.p-lower-news__pagination -->
      </div><!-- /.p-lower-news__inner -->
    </div><!-- /.l-lower-news__archive p-lower-news -->

<?php get_footer('add-contact'); ?>







