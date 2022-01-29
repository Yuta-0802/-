<?php get_header(); ?>

  <div class="l-lower-mv p-lower-mv js-mv">
    <picture class="p-lower-mv__image">
      <source srcset="<?php echo esc_attr(get_template_directory_uri()); ?>/img/works-archive/works-archive_mv.jpg" media="(min-width: 768px)" />
      <img src="<?php echo esc_attr(get_template_directory_uri()); ?>/img/works-archive/sp/works-archive_mv_sp.jpg" alt="制作実績" />
    </picture><!-- /.p-lower-mv__image -->
    <div class="p-lower-mv__title-wrapper">
      <h1 class="p-lower-mv__title">制作実績</h1>
    </div><!-- /.p-lower-mv__title-wrapper -->
  </div><!-- /.l-top-mv p-top-mv -->

<?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-lower l-lower-works-archive">
    <div class="l-lower-works-archive__main-content p-works-archive">
      <div class="l-inner">
        <ul class="p-works-archive__nav p-category-list">
          <li class="p-category-list__item">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="is-active">ALL</a>
          </li><!-- /.p-category-list__item -->
<?php
$terms = get_terms('genre', array('hide_empty' => false));
foreach ($terms as $term) :
?>
          <li class="p-category-list__item">
            <a href="<?php echo esc_url(get_term_link($term, 'genre')); ?>"><?php echo esc_html($term->name); ?></a>
          </li><!-- /.p-category-list__item -->
<?php endforeach; ?>
        </ul><!-- /.p-works-archive__category-nav p-category-list -->

<?php
$args = array(
  'post_type' => 'works',
  'posts_per_page' => 6,
  'order' => 'DESC',
  'orderby' => 'date',
);
$posts = get_posts($args);
if ($posts) :
?>
        <div class="p-works-archive__items">
<?php
foreach ($posts as $post) :
  setup_postdata($post);
?>
          <a href="<?php the_permalink(); ?>" class="p-works-archive__item p-works-card">
            <figure class="p-works-card__image">
<?php
if (has_post_thumbnail()) {
  the_post_thumbnail();
} else {
  echo '<img src="' . esc_attr(get_template_directory_uri()) . '/img/common/noimg.png" alt="アイキャッチ画像が設定されておりません。" />';
}
?>
              <span class="p-works-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'genre')[0]->name); ?></span>
            </figure><!-- /.p-works-card__image -->
            <div class="p-works-card__body">
              <h2 class="p-works-card__title"><?php the_title(); ?></h2>
            </div><!-- /.p-works-card__body -->
          </a><!-- /.p-works-archive__item p-works-card -->
<?php
  endforeach;
wp_reset_postdata();
?>
        </div><!-- /.p-works-archive__items -->
<?php endif; ?>

        <div class="p-works-archive__pagination">
          <?php wp_pagenavi(); ?>
        </div><!-- /.p-works-archive__pagination -->
      </div><!-- /.l-inner -->
    </div><!-- /.l-lower-works-archive__main-content p-works-archive -->

<?php get_footer('add-contact'); ?>