<?php get_header(); ?>
  <main role="main" id="js-pjaxArea" class="page-under page-">
    <?php get_template_part('parts', 'pagetitle'); ?>
    <?php get_template_part('parts/_bread'); ?>
    <div class="p-faq">
      <div class="c-container">
        <div class="c-mainContainer">
          <section class="p-faqHeader">
            <div class="inner">
              <p class="txt u-spNone">施術についてのご質問は各診察メニュー内に掲載しております。</p>
              <p class="txt link"><a href="#">各診察メニューを見る</a></p>
            </div>
          </section>
          <section class="p-faqMenu">
            <div class="row">
              <div class="column large-4">
                <a href="#" class="c-btn c-btn--arrow c-btn--square c-btn--block c-btn--outline-gold-dark">ご予約について</a>
              </div>
              <div class="column large-4">
                <a href="#" class="c-btn c-btn--arrow c-btn--square c-btn--block c-btn--outline-gold-dark">ご来院について</a>
              </div>
              <div class="column large-4">
                <a href="#" class="c-btn c-btn--arrow c-btn--square c-btn--block c-btn--outline-gold-dark">施術について</a>
              </div>
              <div class="column large-4">
                <a href="#" class="c-btn c-btn--arrow c-btn--square c-btn--block c-btn--outline-gold-dark">料金・お支払いについて</a>
              </div>
              <div class="column large-4">
                <a href="#" class="c-btn c-btn--arrow c-btn--square c-btn--block c-btn--outline-gold-dark">その他のご質問</a>
              </div>
            </div>
          </section>
          <section id="v-faq" class="p-faqCont">
            <div class="p-faqCont__unit">
              <h2 class="c-title03">ご予約について</h2>
              <div v-for="reserve in reserves">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ reserve.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ reserve.answer }}</dd>
                </dl>
              </div>
            </div>
            <div class="p-faqCont__unit">
              <h2 class="c-title03">ご来院について</h2>
              <div v-for="access in accesses">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ access.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ access.answer }}</dd>
                </dl>
              </div>
            </div>
            <div class="p-faqCont__unit">
              <h2 class="c-title03">施術について</h2>
              <div v-for="menu in menus">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ menu.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ menu.answer }}</dd>
                </dl>
              </div>
            </div>
            <div class="p-faqCont__unit">
              <h2 class="c-title03">料金・お支払いについて</h2>
              <div v-for="price in prices">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ price.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ price.answer }}</dd>
                </dl>
              </div>
            </div>
            <div class="p-faqCont__unit">
              <h2 class="c-title03">その他のご質問</h2>
              <div v-for="other in others">
                <dl class="p-faqCont__list">
                  <dt class="p-faqCont__listItem question">{{ other.question }}</dt>
                  <dd class="p-faqCont__listItem answer">{{ other.answer }}</dd>
                </dl>
              </div>
            </div>
          </section>
        </div>
        <div class="s__sidebar">
          <h2 class="s__sidebarTitle">
            <span class="en">FAQ</span>
            <span class="ja">よくあるご質問</span>
          </h2>
          <ul class="s__sidebarList p-faqSide__list">
            <li class="s__sidebarListItem p-faqSide__listItem">
              <a href="#" class="s__sidebarListTarget">ご予約について</a>
            </li>
            <li class="s__sidebarListItem p-faqSide__listItem">
              <a href="#" class="s__sidebarListTarget">ご来院について</a>
            </li>
            <li class="s__sidebarListItem p-faqSide__listItem">
              <a href="#" class="s__sidebarListTarget">施術について</a>
            </li>
            <li class="s__sidebarListItem p-faqSide__listItem">
              <a href="#" class="s__sidebarListTarget">料金・お支払いについて</a>
            </li>
            <li class="s__sidebarListItem p-faqSide__listItem">
              <a href="#" class="s__sidebarListTarget">その他のご質問</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main><!-- / main -->
<?php get_footer(); ?>
