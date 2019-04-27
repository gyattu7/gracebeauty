<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <section class="c-section p-single">
      <div class="p-single__main">
        <div class="p-single__mainNav">

          <ul class="c-column__list">
          <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
            <p>検索条件が入力されていません。</p>
          <?php } else { ?>
            <?php if(have_posts()): ?>
            <?php query_posts($query_string.'&posts_per_page=10'); ?>
              <?php while(have_posts()): the_post(); ?>
                <li class="c-column__listItem02">
                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_img = wp_get_attachment_image_src( $thumbnail_id , 'archive' );
                    $thumbnail_img2x = wp_get_attachment_image_src( $thumbnail_id , 'archive2x' );
                  ?>
                  <a href="<?php the_permalink(); ?>" style="background-image: url()">
                    <div class="c-column__bg"><img src="<?php if ( has_post_thumbnail() ) { echo $thumbnail_img[0]; } else {echo '<img src="http://placehold.it/377x250" />';} ?>" srcset="<?php if ( has_post_thumbnail() ) { echo $thumbnail_img2x[0]; } else {echo '<img src="http://placehold.it/754x500" />';} ?> 2x" alt=""></div>
                    <dl class="c-column__box">
                      <dt class="c-column__boxItem date"><?php echo get_the_date('Y.m.d'); ?></dt>
                      <dd class="c-column__boxItem title"><?php the_title(); ?></dd>
                    </dl>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <p>検索条件にヒットした記事がありませんでした。</p>
            <?php endif; ?>
          <?php } ?>
          </ul>

          <?php if ( function_exists( 'wp_pagenavi' ) ) : ?>
            <?php wp_pagenavi(); ?>
          <?php endif; ?>

        </div>
      </div>
      <?php get_sidebar(); ?>
    </section>
  </main><!-- / main -->
<?php get_footer(); ?>