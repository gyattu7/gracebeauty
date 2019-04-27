<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <section class="p-reserveIntro">
      <div class="c-section">
        <h2 class="c-title02">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reserve/title.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reserve/title@2x.png 2x" alt="コンプレックスに向き合い未来へ踏み出す一歩をサポートします">
        </h2>
        <p class="txt">
          「悩みがあるけれど、どんな方法がベストかわからない」<br>
          あるいは「この施術に興味がある！」「予算が気になる」「複数のお悩みを相談したい」など<br>
          どんなきっかけでも構いません。<br>
          診断を受けられたからと言って、施術を強制することはありません。<br>
          まずはお気軽にご相談ください！
        </p>
        <div class="schedule">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reserve/schedule.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reserve/schedule@2x.png 2x" alt="診療スケジュール">
        </div>
      </div>
    </section>
    <section class="p-reserveSchedule">
      <?php get_template_part('parts/_callendar'); ?>
      <div class="c-section narrow">
        <div class="p-reserveSchedule__text">・診断にかかる時間は１５分程度です。<br>
          ・ご予約をキャンセルされる場合は、なるべく早めにご連絡をいただきますようお願いいたします。</div>
      </div>
    </section>

    <section class="p-reserveForm">
      <div class="c-section narrow">
        <?php echo do_shortcode('[mwform_formkey key="56"]'); ?>
      </div>
    </section>

  </main><!-- / main -->
<?php get_footer(); ?>
