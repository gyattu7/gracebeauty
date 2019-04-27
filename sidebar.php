<div class="s__sidebar">
  <h2 class="s__sidebarTitle">
    <span class="en">Category</span>
    <span class="ja">カテゴリー</span>
  </h2>
  <div class="s__sidebarUnit">
    <ul class="s__sidebarList p-priceSide__list">


      <?php
        $cat_disp = wp_list_categories(array(
            'show_count' => 0,
            'title_li'   => '',
            'hide_empty' => 1,
            'depth'      => 1,
            'echo'       => 0
            // 'exclude'    =>
        ));
        echo preg_replace('/<a href/', '<a class="s__sidebarListTarget" href', $cat_disp);
      ?>
    </ul>
  </div>
  <h2 class="s__sidebarTitle">
    <span class="en">Archives</span>
    <span class="ja">アーカイブ</span>
  </h2>
  <div class="s__sidebarUnit">
    <ul class="s__sidebarList p-priceSide__list">
      <?php
        $archive_disp = wp_get_archives(array(
            'type' => 'monthly',
            'show_post_count' => 0,
            'echo' => 0
          ));
        echo preg_replace('/<a href/', '<a class="s__sidebarListTarget" href', $archive_disp);
      ?>
    </ul>
  </div>
</div>
