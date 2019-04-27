<nav class="s__nav">
  <div class="s__navArea">
    <div class="s__nav__inner">
      <ul class="s__navBtn">
        <li class="s__navBtnItem">
          <a href="" class="c-btn c-btn--primary c-btn--block"><span class="icon call"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/s__icon-tel.svg" alt="電話する"></span><span class="txt">電話する</span></a>
        </li>
        <li class="s__navBtnItem">
          <a href="tel:06-0000-0000" class="c-btn c-btn--warning c-btn--block"><span class="icon reserve"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/s__icon-envelope.svg" alt="無料診察予約はこちら"></span><span class="txt">無料診察予約はこちら</span></a>
        </li>
      </ul>
    </div>
    <ul class="s__navList">
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="s__navTarget c-target js-pjax">
          トップページ
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="s__navTarget c-target js-pjax">
          当院について
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="s__navTarget menu c-target js-pjax">
          診察メニュー
        </a>
        <nav class="snavChild">
          <ul class="s__navChild__list">
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#skin')); ?>">
                肌のお悩み
              </a>
            </li>
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#facial')); ?>">
                顔のお悩み
              </a>
            </li>
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#body')); ?>">
                体のお悩み
              </a>
            </li>
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#hair')); ?>">
                毛のお悩み
              </a>
            </li>
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#art-make')); ?>">
                アートメイク
              </a>
            </li>
            <li class="s__navChild__listItem">
              <a href="<?php echo esc_url(home_url('/menu#other')); ?>">
                その他のお悩み
              </a>
            </li>
          </ul>
        </nav>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/price')); ?>" class="s__navTarget c-target js-pjax">
          料金
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/case')); ?>" class="s__navTarget c-target js-pjax">
          症例写真
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="s__navTarget c-target js-pjax">
          キャンペーン
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="s__navTarget c-target js-pjax">
          お問い合わせ
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/access')); ?>" class="s__navTarget c-target js-pjax">
          アクセス
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="s__navTarget c-target js-pjax">
          お知らせ
        </a>
      </li>
      <li class="s__navListItem">
        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="s__navTarget c-target js-pjax">
          よくあるご質問
        </a>
      </li>
    </ul>
  </div>
</nav>
