<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <section class="p-menuList">
      <div class="c-section">
        <div class="p-homeMenu__list">
          <div class="row">
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/skin.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/skin@2x.jpg 2x" alt="お肌のお悩み">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Skin</span>
                    <span class="ja">お肌のお悩み</span>
                  </h3>
                  <div class="btn">
                    <a href="#skin" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/face.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/face@2x.jpg 2x" alt="お顔のお悩み">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Facial</span>
                    <span class="ja">お顔のお悩み</span>
                  </h3>
                  <div class="btn">
                    <a href="#facial" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/body.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/body@2x.jpg 2x" alt="">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Body</span>
                    <span class="ja">お身体のお悩み</span>
                  </h3>
                  <div class="btn">
                    <a href="#body" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/artmake.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/artmake@2x.jpg 2x" alt="アートメイク">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Art make</span>
                    <span class="ja">アートメイク</span>
                  </h3>
                  <div class="btn">
                    <a href="#art-make" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/hair.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/hair@2x.jpg 2x" alt="毛のお悩み">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Hair</span>
                    <span class="ja">毛のお悩み</span>
                  </h3>
                  <div class="btn">
                    <a href="#hair" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-4">
              <div class="p-homeMenu__listItem">
                <div class="photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/other.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/other@2x.jpg 2x" alt="その他のお悩み">
                </div>
                <div class="note">
                  <h3 class="title">
                    <span class="en">Others</span>
                    <span class="ja">その他のお悩み</span>
                  </h3>
                  <div class="btn">
                    <a href="#other" class="c-btn--more">MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="skin" class="p-menuBox p-menuBox--skin">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-skin.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-skin@2x.jpg 2x" alt="お肌のお悩み">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Skin</span>
                  <span class="ja">お肌のお悩み</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  瞬間の美しさは肌で変わる
                </div>
                <div class="p-menuBox__txt">
                  <p>小じわの改善、キメの向上、ハリのアップ、小顔効果、毛穴の開きの改善、にきび跡の改善等、お肌の悩みをオールマイティに解決します。お肌を再生し、ふっくらなめらか、引き締まった美肌を目指す方に。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'skin' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="facial" class="p-menuBox p-menuBox--skin">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-face.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-face@2x.jpg 2x" alt="お顔のお悩み">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Facial</span>
                  <span class="ja">お顔のお悩み</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  より輝くあなたの笑顔のために
                </div>
                <div class="p-menuBox__txt">
                  <p>印象の変わる目元から若返りのリフトまで。経験豊富なドクターのカウンセリングでしっかりとした術後のイメージを共有し、満足度の高い外科施術を行います。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'facial' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="body" class="p-menuBox p-menuBox--body">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-body.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-body@2x.jpg 2x" alt="お身体のお悩み">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Body</span>
                  <span class="ja">お身体のお悩み</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  隠せる部分だからこそ意識したケアを
                </div>
                <div class="p-menuBox__txt">
                  <p>痩身から豊胸まで。最新の機器と蓄積した技術で確かな結果のためにあなたに最適な施術を行います。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'body' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="art-make" class="p-menuBox p-menuBox--art-make">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-artmake.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-artmake@2x.jpg 2x" alt="アートメイク">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Art Make</span>
                  <span class="ja">アートメイク</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  いつでも美しい自分でいれるために
                </div>
                <div class="p-menuBox__txt">
                  <p>今話題のアートメイク。眉、リップ、アイラインなどが２４時間いつでも美しく。世界大会出場の施術者があなたに最適なデザインで施術を行います。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'art-make' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="hair" class="p-menuBox p-menuBox--hair">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-hair.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-hair@2x.jpg 2x" alt="毛のお悩み">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Hair</span>
                  <span class="ja">毛のお悩み</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  人それぞれの悩みに最適なケアを
                </div>
                <div class="p-menuBox__txt">
                  <p>しっかりとした効果の高い医療脱毛で最短コースでムダ毛にさようなら！いつでもうらやむツルすべ肌に。<br>薄くなってしまった頭皮には最新のAGA治療。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'hair' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="other" class="p-menuBox p-menuBox--other">
      <div class="c-section">
        <div class="p-menuBox__inner p-menuBox__header">
          <div class="row">
            <div class="column large-6">
              <div class="p-menuBox__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-other.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/detail-other@2x.jpg 2x" alt="その他のお悩み">
              </div>
            </div>
            <div class="column large-6">
              <div class="p-menuBox__note">
                <h2 class="p-menuBox__title">
                  <span class="en">Other</span>
                  <span class="ja">その他のお悩み</span>
                </h2>
                <div class="p-menuBox__subtitle">
                  プラスアルファの美容のために
                </div>
                <div class="p-menuBox__txt">
                  <p>内側からも美しく！悩みに合わせた点滴、注射を美容成分たっぷりであなたに施術いたします。またレーザーに合わせて処方も行います。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-menuBox__inner p-menuBox__body">
          <div class="row">

            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'post_type' => 'page',
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '',
              'posts_per_page' => -1,
              'paged' => get_query_var('paged'),
              'tax_query' => array(
                array(
                  'taxonomy' => 'menu_item', //タクソノミー名
                  'field' => 'slug',
                  'terms' => 'other' //タームのスラッグ
                )
              )
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="column large-3">
              <div class="p-menuBox__bodyItem">
                <a href="<?php the_permalink(); ?>" class="p-menuBox__bodyTarget">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
            <?php endwhile; else: ?>
              <div class="column large-12">
                <p class="text-center">診察メニューがありません</p>
              </div>
            <?php endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
  </main><!-- / main -->
<?php get_footer(); ?>
