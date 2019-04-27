<!doctype html>
<!--[if IE 8]>        <html class="no-js lt-ie9" lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php if(is_tag()) { ?><?php UTW_ShowCurrentTagSet('tagsettextonly') ?> | <?php } ?><?php bloginfo('name'); ?></title>
  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>

  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="imagetoolbar" content="no">
  <![endif]-->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/clip.png" />
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#777777">
  <meta name="theme-color" content="#ffffff">
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/ie7/IE9.js"></script>
  <![endif]-->
</head>
<body id="top" <?php body_class(); ?>>
<div id="wrapper">
  <header id="site-header" role="banner" data-nav="close" data-fixed="nofix">
    <h1 class="h__copy">大阪・心斎橋駅から徒歩2分 美肌・しみ、しわ・二重・薄毛治療・アートメイクの心斎橋グレースビューティーヘルスクリニック</h1>
    <div class="h__inner">
      <div class="h__rogo"><a href="<?php echo esc_url(home_url('/')); ?>" class="inner"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/h__logo.svg" alt="GRACE Beauty Clinic"></a></div>
      <div class="h__pnav">
        <div class="inner">
          <div class="title">ご予約・お問い合わせ</div>
          <div class="phone"><i class="fa fa-mobile" aria-hidden="true"></i>06-6281-1339</div>
          <div class="btn">
            <a href="<?php echo esc_url(home_url('/reserve')); ?>" class="c-btn c-btn--block c-btn--warning">
              <i class="fa fa-envelope" aria-hidden="true"></i> 無料診断予約はこちら
            </a>
          </div>
        </div>
      </div>
      <nav class="h__tnav">
        <ul class="h__tnav-list">
          <li class="h__tnav-listItem"><a href="<?php echo esc_url(home_url('/access')); ?>">アクセス</a></li>
          <li class="h__tnav-listItem"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="h__tnav-listItem"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくあるご質問</a></li>
        </ul>
      </nav>
      <div id="site-spMenu">
          <div class="icon"></div>
      </div>
    </div><!-- /.h__inner -->
    <nav class="h__nav">
      <div class="c-section">
        <ul class="h__navList">
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">トップページ</span>
                <span class="en">HOME</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">当院について</span>
                <span class="en">ABOUT</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">診察メニュー</span>
                <span class="en">MENU</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/price')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">料金</span>
                <span class="en">PRICE</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/cosme')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">コスメ＆サプリ</span>
                <span class="en">COSME &amp; SUPPLEMENT</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/category/campaign/')); ?>" class="h__navTarget js-pjax">
              <div class="h__navTarget__inner">
                <span class="ja">キャンペーン</span>
                <span class="en">CAMPAIGN</span>
              </div>
            </a>
          </li>
          <li class="h__navListItem">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="h__navTarget js-pjax contact">
              <div class="h__navTarget__inner">
                <span class="ja">お問い合わせ</span>
                <span class="en">CONTACT</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header><!-- / #site-header -->
  <nav class="h__nav-sp">
    <ul class="h__nav-spList">
      <li class="h__nav-spListItem">
        <a href="<?php echo esc_url(home_url('/menu')); ?>" class="h__nav-spTarget js-pjax">
          <div class="h__nav-spTarget__inner">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav__icon-menu.svg" alt="">
            </div>
            <span class="ja">診察メニュー</span>
            <span class="en">MENU</span>
          </div>
        </a>
      </li>
      <li class="h__nav-spListItem">
        <a href="<?php echo esc_url(home_url('/price')); ?>" class="h__nav-spTarget js-pjax">
          <div class="h__nav-spTarget__inner">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav__icon-price.svg" alt="">
            </div>
            <span class="ja">料金</span>
            <span class="en">PEICE</span>
          </div>
        </a>
      </li>
      <li class="h__nav-spListItem">
        <a href="<?php echo esc_url(home_url('/category/campaign/')); ?>" class="h__nav-spTarget js-pjax">
          <div class="h__nav-spTarget__inner">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav__icon-campaign.svg" alt="">
            </div>
            <span class="ja">キャンペーン</span>
            <span class="en">CAMPAIGN</span>
          </div>
        </a>
      </li>
      <li class="h__nav-spListItem">
        <a href="tel:06-6281-1339" class="h__nav-spTarget call js-pjax">
          <div class="h__nav-spTarget__inner">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav__icon-call.svg" alt="">
            </div>
            <span class="ja">電話する</span>
            <span class="en">CALL</span>
          </div>
        </a>
      </li>
    </ul>
  </nav>
  <div class="h__overlay" id="js-overlay" data-status="out">
    <?php get_template_part('parts/_spNav'); ?>
  </div>
  <div id="site-main" data-status="in">
