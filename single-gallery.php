<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <div class="c-pagetitle">
        <div class="c-pagetitle__inner">
          <h1 class="c-title01">
            <span class="ja">症例写真</span>
            <span class="en">Gallery</span>
          </h1>
        </div>
    </div>
    <?php get_template_part('parts/_bread'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="p-case">
        <div class="c-container">
          <div class="c-mainContainer">
            <section class="p-caseArea">

              <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                $cat_slug = $category[0]->category_nicename;
              ?>


              <?php if ( function_exists( 'wp_pagenavi' ) ) : ?>
                <?php wp_pagenavi(); ?>
              <?php endif; ?>

              <article class="p-caseArticle">
                <div class="p-caseArticle__inner">
                  <div class="p-caseArticle__header">
                    <h2 class="p-caseArticle__title"><?php the_title(); ?></h2>
                    <div class="p-caseArticle__headerMeta">
                      <p class="p-caseArticle__date"><?php echo get_the_date('Y.m.d'); ?></p>
                      <ul class="p-caseArticle__cat">
                        <?php
                            if ($terms = get_the_terms($post->ID, 'gallery_cat')) {
                                foreach ( $terms as $term ) {
                                    echo ('<li class="p-caseArticle__catItem">') ;
                                    echo esc_html($term->name)  ;
                                    echo ('</li>') ;
                                }
                            }
                        ?>
                      </ul>
                    </div>

                  </div>
                  <div class="p-caseArticle__thumbs">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('article-thumbs'); } ?>
                  </div>
                  <div class="p-caseArticle__note">
                    <?php the_content(); ?>
                  </div>
                  <div class="p-caseArticle__tag">
                    <?php
                        if ($terms = get_the_terms($post->ID, 'gallery_tag')) {
                            foreach ( $terms as $term ) {
                                echo ('<span class="p-caseArticle__tagItem">') ;
                                echo esc_html($term->name)  ;
                                echo ('</span>') ;
                            }
                        }
                    ?>
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

          <?php get_sidebar('case'); ?>

        </div>
      </div>
  </main><!-- / main -->
<?php get_footer(); ?>
