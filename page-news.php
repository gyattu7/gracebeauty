<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <div class="p-news">
      <div class="c-container">
        <div class="c-mainContainer">
          <section class="p-newsArea">

            <?php
            query_posts(
              Array(
              'post_type' => array('post'),
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => 10,
              'paged' => get_query_var('paged')
              )
            );

            if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;
              $cat_slug = $category[0]->category_nicename;
            ?>


            <?php if ( function_exists( 'wp_pagenavi' ) ) : ?>
              <?php wp_pagenavi(); ?>
            <?php endif; ?>

            <article class="p-newsArticle">
              <div class="p-newsArticle__inner">
                <div class="p-newsArticle__category <?php echo $cat_slug; ?>"><span class="label"><?php echo $cat_name; ?></span></div>
                <div class="p-newsArticle__header">
                  <h2 class="p-newsArticle__title"><?php the_title(); ?></h2>
                  <div class="p-newsArticle__headerMeta">
                    <p class="p-newsArticle__date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <ul class="p-newsArticle__tag">
                      <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                          foreach($posttags as $tag) {
                            echo '<li class="p-newsArticle__tagItem">' . $tag->name . '</li>';
                          }
                        }
                      ?>
                    </ul>
                  </div>

                </div>
                <div class="p-newsArticle__thumbs">
                  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('article-thumbs'); } ?>
                </div>
                <div class="p-newsArticle__note">
                  <?php the_content(); ?>
                </div>
              </div>
            </article>

            <?php endwhile; else: ?>
              <p>投稿はありません</p>
            <?php endif; ?>
            <?php if ( function_exists( 'wp_pagenavi' ) ) : ?>
              <?php wp_pagenavi(); ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </section>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </main><!-- / main -->
<?php get_footer(); ?>
