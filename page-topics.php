<?php
/*
Template Name: topics
*/
?>
<?php get_header(); ?>
<div class="contents">
  <div class="page-top">
    <h1>Topics</h1>
    <div class="topics-contents">
      <div class="row">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $the_query = new WP_Query(array(
          'post_status' => 'publish',
          'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
          'paged' => $paged,
          'category_name' => 'topics',
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date',
          'order' => 'DESC'
        ));
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <div class="col-6 col-sm-4 topics-card">
              <a href="<?php echo get_permalink() ?>">
                <img class="card-img " src="<?php echo the_post_thumbnail_url("medium"); ?>" alt="topics">
              </a>
              <div class="product-title"><a href="<?php echo get_permalink($topics->ID) ?>"><?php echo str_replace(' ', '<br>', get_the_title()); ?></a></div>
            </div>

        <?php
          endwhile;
        else :
          echo '<div><p>ありません。</p></div>';
        endif;
        ?>
      </div>

      <div class="pnavi">
        <?php //ページリスト表示処理
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');
          $paginate_base .= '%_%';
        }
        echo paginate_links(array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $the_query->max_num_pages,
          'mid_size' => 1,
          'current' => ($paged ? $paged : 1),
          'prev_text' => '< 前へ',
          'next_text' => '次へ >',
        ));
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
