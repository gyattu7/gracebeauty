<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <section class="p-accessTel">
      <?php get_template_part('parts/_phone'); ?>
    </section>
    <section class="p-accessSchedule">
      <?php get_template_part('parts/_callendar'); ?>
    </section>
    <section class="p-accessRoute">
      <div class="c-section narrow">
        <h2 class="c-title02">交通アクセス</h2>
        <p class="txt">〒542-0081　大阪市中央区南船場4-12-10 ACN心斎橋４階<br>大阪メトロ（旧 市営地下鉄）心斎橋駅から徒歩2分</p>
        <div class="p-accessRoute__illust">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/route.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/access/route@2x.png 2x" alt="路線図">
          <div id="js-zoom" class="zoom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon-zoom.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon-zoom@2x.png 2x" alt="クリックで拡大">
          </div>
          <div class="modal">
            <div class="modal-btn_box">
              <a href="javascript:void(0)" class="close_btn" id="js_modal_close"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/close.svg" alt="close"></a>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/route.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/access/route@2x.png 2x" alt="路線図">
            </div>
          </div>
        </div>
        <div class="p-accessRoute__map">
          <div id="js-gmap">

          </div>
          <div class="btn">
            <a href="https://goo.gl/maps/4oxiFG83QzZRGUEK6" class="c-btn c-btn--square c-btn--lg c-btn--block c-btn--outline-gold-dark">Googleマップで見る <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>
  </main><!-- / main -->
<?php get_footer(); ?>
