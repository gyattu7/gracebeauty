<?php if(is_page()): ?>
<div class="c-pagetitle">
    <div class="c-pagetitle__inner">
      <h1 class="c-title01">
        <span class="ja"><?php the_title(); ?></span>
        <span class="en"><?php echo $post->post_name; ?></span>
      </h1>
    </div>
</div>
<?php elseif(is_tax('categories')): ?>
<div class="c-pagetitle">
    <div class="c-pagetitle__inner">
      <h1 class="c-title01 column">Column</h1>
      <span>「<?php single_term_title(); ?>」の記事一覧</span>
    </div>
</div>
<?php elseif(is_post_type_archive('gallery')): ?>
<div class="c-pagetitle">
    <div class="c-pagetitle__inner">
      <h1 class="c-title01">症例写真</h1>
    </div>
</div>
<?php elseif(is_search()): ?>
<div class="c-pagetitle">
    <div class="c-pagetitle__inner">
      <h1 class="c-title01 column">Column</h1>
      <span>「<?php the_search_query(); ?>」の記事一覧</span>
    </div>
</div>
<?php elseif(is_author()): ?>
<div class="c-pagetitle">
    <div class="c-pagetitle__inner">
      <h1 class="c-title01 column">Column</h1>
      <?php global $wp_query; $curauth = $wp_query->get_queried_object(); ?>
      <span><?php printf(__('「%s」の記事一覧'), $curauth->display_name ); ?></span>
    </div>
</div>
<!-- <?php elseif(is_month()): ?>
  <div class="c-pagetitle">
      <div class="c-pagetitle__inner">
        <h1 class="c-title01">
          <span class="ja"><?php the_title(); ?></span>
          <span class="en"><?php echo $post->post_name; ?></span>
        </h1>
      </div>
  </div> -->
<?php elseif(is_singular() || is_archive()): ?>
  <div class="c-pagetitle">
      <div class="c-pagetitle__inner">
        <h1 class="c-title01">
          <span class="ja">お知らせ</span>
          <span class="en">NEWS</span>
        </h1>
      </div>
  </div>
<?php else: ?>
  <div class="c-pagetitle">
      <div class="c-pagetitle__inner">
        <h1 class="c-title01">
          <span class="ja"><?php the_title(); ?></span>
          <span class="en"><?php echo $post->post_name; ?></span>
        </h1>
      </div>
  </div>
<?php endif; ?>
