<?php get_header(); ?>

  <div class="l-lower-mv p-lower-mv js-mv">
    <picture class="p-lower-mv__image">
      <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/blog-archive/blog-archive_mv.jpg" media="(min-width: 768px)" />
      <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/blog-archive/sp/blog-archive_mv_sp.jpg" alt="ブログ" />
    </picture><!-- /.p-lower-mv__image -->
    <div class="p-lower-mv__title-wrapper">
      <h1 class="p-lower-mv__title">ブログ</h1>
    </div><!-- /.p-lower-mv__title-wrapper -->
  </div><!-- /.l-top-mv p-top-mv -->

<?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-lower l-lower-blog-archive">
    <div class="l-lower-blog-archive__main-content p-blog-archive">
      <div class="l-inner">
        <ul class="p-blog-archive__nav p-category-list">
          <li class="p-category-list__item">
            <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="is-active">ALL</a>
          </li><!-- /.p-category-list__item -->
<?php
$terms = get_terms('topics', array('hide_empty' => false));
foreach ($terms as $term) :
?>
          <li class="p-category-list__item">
            <a href="<?php echo esc_url(get_term_link($term, 'topics')); ?>"><?php echo esc_html($term->name); ?></a>
          </li><!-- /.p-category-list__item -->
<?php endforeach; ?>
        </ul><!-- /.p-blog-archive__nav p-genre-list -->

<?php
$args = array(
  'post_type' => 'blog',
  'posts_per_page' => 9,
  'order' => 'DESC',
  'orderby' => 'date',
);
$posts = get_posts($args);
if ($posts) :
?>
        <div class="p-blog-archive__items">
<?php
foreach ($posts as $post) :
  setup_postdata($post);
?>
          <a href="<?php the_permalink(); ?>" class="p-blog-archive__item p-blog-card">
            <?php addition_new_badge(3) ?>
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
              <time datetime="<?php the_time('c') ?>" class="p-blog-card__published"><?php the_time('Y.n.j') ?></time>
            </div><!-- /.p-blog-card__meta -->
          </a><!-- /.p-blog-archive__item p-blog-card -->
<?php
  endforeach;
wp_reset_postdata();
?>
        </div><!-- /.p-blog-archive__items -->
<?php endif; ?>

        <div class="p-blog-archive__pagination">
          <?php wp_pagenavi(); ?>
        </div><!-- /.p-blog-archive__pagination -->
      </div><!-- /.l-inner -->
    </div><!-- /.l-lower-blog-archive__main-content p-blog-archive -->

<?php get_footer('add-contact'); ?>