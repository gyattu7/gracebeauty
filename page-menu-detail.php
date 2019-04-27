<?php
/*
Template Name: MenuDetail
*/
?>
<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <div class="p-menuDetail">
      <div class="c-container">
        <div class="c-mainContainer">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <section class="p-menuDetailHeader">
            <h2 class="c-title02">
              <span class="ja"><?php echo SCF::get('title-ja'); ?></span>
              <div class="en"><?php echo SCF::get('title-en'); ?></div>
            </h2>
            <h3 class="p-menuDetailCatch"><?php the_content(); ?></h3>
          </section>
          <section class="p-menuDetailIntro">
            <div class="row">
              <div class="column large-6">
                <div class="p-menuDetailIntro__photo">
                  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('menu-thumbs'); } ?>
                </div>
              </div>
              <div class="column large-6">
                <div class="p-menuDetailIntro__note">
                  <h4 class="c-title04"><?php echo SCF::get('intro-title'); ?></h4>
                  <div class="txt">
                    <p><?php echo nl2br(SCF::get('intro-txt')); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="p-menuDetailCheck">
            <h2 class="p-menuDetailCheck__title">このような方におすすめです</h2>
            <div class="row">
              <?php
                $cf_group = SCF::get('checkes');
                foreach ($cf_group as $field_name => $field_value ) {
                    echo ('<div class="column large-6"><div class="p-menuDetailCheck__target">' .  $field_value['check'] . '</div></div>');
                }
              ?>
            </div>
          </section>

          <section class="p-menuDetailPoint">
            <h2 class="c-title04"><?php echo SCF::get('point-title'); ?></h2>
            <div class="p-menuDetailPoint__txt">
              <?php echo nl2br(SCF::get('point-txt')); ?>
            </div>
            <table class="table c-goldTable p-menuDetailPoint__table">
              <tbody>

                <?php
                  $cf_group = SCF::get('point-table');
                  foreach ($cf_group as $field_name => $field_value ) {
                      echo ('<tr><th>' .  $field_value['point-th'] . '</th><td>' . nl2br($field_value['point-td']) . '</td></tr>');
                  }
                ?>

              </tbody>
            </table>
          </section>

          <section class="p-menuDetailAttention">
            <h2 class="c-title04">注意事項</h2>
            <ul class="p-menuDetailAttention__list">
              <li class="p-menuDetailAttention__listItem">・PTPトーニングを受けられた方は、お顔のレーザー脱毛は1ヶ月ほどあけての施術となります</li>
              <li class="p-menuDetailAttention__listItem">・まれに湿疹が出る場合がございます。レーザーの熱がこもってしまうのが原因ですが、しばらくしたら引いていきます。その場合は外用薬を湿疹が引くまで塗布して下さい。（ご心配な方はお電話にてお問い合わせくださいませ）</li>
              <li class="p-menuDetailAttention__listItem">・レーザー照射後は乾燥するので、しっかりと保湿をしてください。</li>
            </ul>
          </section>

          <section class="p-menuDetailFaq">
            <h2 class="c-title02">
              <span class="ja">よくあるご質問</span>
              <div class="en">FAQ</div>
            </h2>

            <div id="v-faq" class="p-faqCont__unit">
              <div v-for="menu in menus">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ menu.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ menu.answer }}</dd>
                </dl>
              </div>
            </div>

          </section>

          <section class="p-menuDetailBnr">
            <div class="row">
              <div class="column large-6">
                <div class="p-menuDetailBnr__inner">
                  <a href="<?php echo esc_url(home_url('/case')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/btn01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/btn01@2x.png 2x" alt="症例写真はこちら">
                  </a>
                </div>
              </div>
              <div class="column large-6">
                <div class="p-menuDetailBnr__inner">
                  <a href="<?php echo esc_url(home_url('/price')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/btn02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/menu/btn02@2x.png 2x" alt="料金はこちら">
                  </a>
                </div>
              </div>
            </div>
          </section>
          <?php endwhile; endif; ?>
        </div>

        <?php get_sidebar('menu'); ?>

      </div>
    </div>
  </main><!-- / main -->
<?php get_footer(); ?>
