<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <section class="p-contactIntro">
      <div class="c-section narrow">
        <p class="txt">
          当院の施術内容やアフターケア、その他ご質問などございましたら<br>
          下記フォームよりお気軽にお問い合わせください。<br>
          よくあるご質問も併せてご覧ください。<br>
          ※ご来院でのご相談をご希望の方は、無料診断予約フォームからご予約をお願いいたします。
        </p>
        <div class="p-contactIntro__bnr row">
          <div class="column large-6">
            <a href="<?php echo esc_url(home_url('/faq')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/bnr-faq.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/bnr-faq@2x.png 2x" alt="ご質問"></a>
          </div>
          <div class="column large-6">
            <a href="<?php echo esc_url(home_url('/reserve')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/bnr-reserve.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/bnr-reserve@2x.png 2x" alt="ご予約"></a>
          </div>
        </div>
      </div>
    </section>

    <section class="p-contactPhone">
      <h2 class="c-title02">お電話でのお問い合わせ</h2>
      <div class="text-center">
        <?php get_template_part('parts/_phone'); ?>
      </div>
    </section>

    <section class="p-contactDesc">
      <div class="c-section narrow">
        <h2 class="c-title02">お問い合わせフォーム</h2>
        <div class="p-contactDesc__box">
          <p>・以下のフォームに必要事項をご入力の上、送信してください。<br>
            ・送信後、ご入力いただいたメールアドレスに自動返信メールが届きます。◯時間たってもメールが届かない場合は、メールアドレスが間違っている可能性がございます。再度送信いただくか、お電話でお問い合わせください。</p>
        </div>
      </div>
    </section>

    <section class="p-contactForm">
      <div class="c-section narrow">
        <?php echo do_shortcode('[mwform_formkey key="54"]'); ?>
      </div>
    </section>

  </main><!-- / main -->
<?php get_footer(); ?>
