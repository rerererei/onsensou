<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<div class="contents">
  <div class="page-top">
    <h1>News</h1>
    <div class="news-content">
      <?php
      $the_query = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
        'category_name' => 'news',
        'posts_per_page' => -1, // 表示件数
        'orderby' => 'date',
        'order' => 'ASC'
      ));
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <p><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></p>

      <?php
        endwhile;
      else :
        echo '<div><p>ありません。</p></div>';
      endif;
      ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>