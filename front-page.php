<?php get_header(); ?>
<main role="main" class="main-container">
  <section class="p-homeHero u-pcNone">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/intro_mv_sp.jpg" alt="院内写真">
  </section>
  <section class="p-homeIntro">
    <div class="c-section fluid">
      <div class="p-homeIntro__inner">
        <div class="p-homeIntro__menu">
          <div class="p-homeIntro__menuInner">
            <div class="p-homeIntro__menuBox">
              <h2 class="p-homeIntro__menuTitle">
                <span class="en">Ranking</span>
                <span class="ja">当院の人気メニュー</span>
              </h2>
              <ol class="p-homeIntro__menuList">
                <li class="p-homeIntro__menuListItem">
                  <span class="number">1.</span>レーザートーニング
                </li>
                <li class="p-homeIntro__menuListItem">
                  <span class="number">2.</span>リジュビネーション
                </li>
                <li class="p-homeIntro__menuListItem">
                  <span class="number">3.</span>ほくろ・いぼ除去
                </li>
              </ol>
              <div class="p-homeIntro__menuBtn">
                <a href="#" class="c-btn c-btn--block c-btn--primary">全てのメニューを見る&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-homeIntro__news">
          <div class="p-homeIntro__newsBox">
            <dl class="p-homeIntro__newsList">
              <dt class="p-homeIntro__newsListItem title">
                NEWS
              </dt>
              <dd class="p-homeIntro__newsListItem cont">
                <ul class="p-homeIntro__newsCont__list">
                  <?php
                  query_posts(
                    Array(
                    'post_type' => array('post'),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'category_name' => '',
                    'posts_per_page' => 3,
                    'paged' => get_query_var('paged')
                    )
                  );
                  if (have_posts()) : while (have_posts()) : the_post();
                  $category = get_the_category();
                              $cat_name = $category[0]->cat_name;
                              $cat_slug = $category[0]->category_nicename;
                  ?>
                  <li class="p-homeIntro__newsCont__listItem">
                    <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
                    <div class="category"><span><?php echo $cat_name; ?></span></div>
                    <div class="title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                  </li>
                  <?php endwhile; else: ?>
                   <p>投稿はありません</p>
                   <?php endif; wp_reset_query(); ?>
                </ul>
              </dd>
            </dl>
            <a class="c-btn--more">
              MORE
            </a>
          </div>
        </div>
        <div class="p-homeIntro__about">
          <div class="p-homeIntro__aboutBox">
            <div class="title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/intro-about--title.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/intro-about--title@2x.png 2x" alt="心斎橋駅から徒歩5分">
            </div>
            <p class="note">当院は心斎橋駅から徒歩5分、大阪の中心地に位置する美容クリニックです。<br>通いやすい利便性と、豊富な実績による優れた技術力、<br class="u-spNone">最新の設備でお迎えいたします。</p>
            <p class="note">またひとりひとりのご要望に沿った丁寧な施術を心掛け、<br>患者様それぞれに最適なプランニングをご提案しております。</p>
            <div class="btn">
              <a href="#" class="c-btn c-btn--outline-gold-dark">心斎橋グレースビューティーヘルスクリニックについて<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-homeMenu">
    <div class="c-section">
      <h2 class="p-homeMenu__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/menu--title.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/menu--title@2x.png 2x" alt=""></h2>
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
                <p class="txt">小じわの改善、キメの向上、ハリのアップ、小顔効果、毛穴の開きの改善、にきび跡の改善等、お肌の悩みをオールマイティに解決します。お肌を再生し、ふっくらなめらか、引き締まった美肌を目指す方に。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#skin')); ?>" class="c-btn--more">MORE</a>
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
                <p class="txt">印象の変わる目元から若返りのリフトまで。経験豊富なドクターのカウンセリングでしっかりとした術後のイメージを共有し、満足度の高い外科施術を行います。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#facial')); ?>" class="c-btn--more">MORE</a>
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
                <p class="txt">痩身から豊胸まで。<br>最新の機器と蓄積した技術で確かな結果のためにあなたに最適な施術を行います。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#body')); ?>" class="c-btn--more">MORE</a>
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
                <p class="txt">今話題のアートメイク。眉、リップ、アイラインなどが２４時間いつでも美しく。世界大会出場の施術者があなたに最適なデザインで施術を行います。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#art-make')); ?>" class="c-btn--more">MORE</a>
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
                <p class="txt">しっかりとした効果の高い医療脱毛で最短コースでムダ毛にさようなら！いつでもうらやむツルすべ肌に。<br>薄くなってしまった頭皮には最新のAGA治療。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#hair')); ?>" class="c-btn--more">MORE</a>
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
                <p class="txt">内側からも美しく！悩みに合わせた点滴、注射を美容成分たっぷりであなたに施術いたします。またレーザーに合わせて処方も行います。</p>
                <div class="btn">
                  <a href="<?php echo esc_url(home_url('/menu#other')); ?>" class="c-btn--more">MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>
