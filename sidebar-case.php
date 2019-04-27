<div class="s__sidebar">
  <h2 class="s__sidebarTitle">
    <span class="en">Category</span>
    <span class="ja">カテゴリー</span>
  </h2>
  <div class="s__sidebarUnit">
    <ul class="s__sidebarList p-priceSide__list">

      <?php
        $terms = get_terms('gallery_cat');
        foreach ( $terms as $term ) {
          echo  '<li><a class="s__sidebarListTarget" href="'.get_term_link($term).'">'.$term->name.'</a></li>'; // タームタイトル
        }
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
            'post_type' => 'gallery',
            'show_post_count' => 0,
            'echo' => 0
          ));
        echo preg_replace('/<a href/', '<a class="s__sidebarListTarget" href', $archive_disp);
      ?>
    </ul>
  </div>
  <h2 class="s__sidebarTitle--case">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/case-sidePopular.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/case-sidePopular@2x.png 2x" alt="">
  </h2>
  <div class="s__sidebarUnit">
    <ul class="s__sidebarList p-caseSide__list">
      <?php if( is_single() && !is_user_logged_in() && !isBot() ):
      set_post_views();
      endif; ?>
      <?php
      $args = array(
      	'post_type'     => 'gallery',
      	'numberposts'   => 5,
      	'meta_key'      => 'pv_count',
      	'orderby'       => 'meta_value_num',
      	'order'         => 'DESC',
      );
      $posts = get_posts( $args );
      if( $posts ): ?>
      	<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
      		<dl class="p-caseSide__popularList">
      			<dt class="p-caseSide__popularListItem photo">
      				<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail( 'thumbnail' ); ?></a>
      			</dt>
      			<dd class="p-caseSide__popularListItem note">
              <div class="p-caseSide__popularCat">
                <?php
                    if ($terms = get_the_terms($post->ID, 'gallery_cat')) {
                        foreach ( $terms as $term ) {
                            echo ('<span class="p-caseSide__popularCatItem">') ;
                            echo esc_html($term->name)  ;
                            echo ('</span>') ;
                        }
                    }
                ?>

              </div>
      				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      			</dd>
      		</dl>
      	<?php endforeach;
      	wp_reset_postdata(); ?>
      <?php else : ?>
      	<p>アクセスランキングはまだ集計されていません。</p>
      <?php endif; ?>
    </ul>
  </div>
</div>
