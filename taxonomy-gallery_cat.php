<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <div class="c-pagetitle">
      <div class="c-pagetitle__inner">
       <?php if ( have_posts() ) : ?>

       <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

       <?php if (is_category()) { ?>
          <h1 class="c-title01"><span class="ja">"<?php single_cat_title(); ?>" の記事一覧</span></h1>

       <?php } elseif( is_tax() ) { ?>
       <h1 class="c-title01"><span class="ja"><?php printf(__('Posts Tagged &#8216; %s &#8217;'), single_tag_title('', false) ); ?></span></h1>

       <?php } elseif (is_day()) { ?>
       <h1 class="c-title01"><span class="ja"><?php printf(__('Archive for &#8216; %s &#8217;'), get_the_time(__('F jS, Y'))); ?></span></h1>

       <?php } elseif (is_month()) { ?>
       <h1 class="c-title01"><span class="ja"><?php printf(get_the_time(__('F, Y'))); ?>の記事一覧</span></h1>

       <?php } elseif (is_year()) { ?>
       <h1 class="c-title01"><span class="ja"><?php printf(get_the_time(__('Y'))); ?>年の記事一覧</span></h1>
       <?php } elseif (is_author()) { ?>

       <?php global $wp_query; $curauth = $wp_query->get_queried_object(); ?>
       <h1 class="c-title01"><span class="ja"><?php printf(__('Archive for the &#8216; %s &#8217;'), $curauth->display_name ); ?></span></h1>

       <?php } else { ?>
        <?php query_posts("post_type=gallery&posts_per_page=10&paged=$paged"); ?>
        <h1 class="c-title01"><span class="ja">記事一覧</span></h1>
       <?php }; ?>

     </div>
    </div>
    <?php get_template_part('parts/_bread'); ?>
    <div class="p-case">
      <div class="c-container">
        <div class="c-mainContainer">
          <section class="p-caseArea">

            <?php while ( have_posts() ) : the_post(); ?>


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
