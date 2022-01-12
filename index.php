<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/oss-top.css">
<div class="contents">
  <div class="top-firstview">
    <video class="top-movie pcview" title="bgmovie" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/movie/ONSENSOU_30S.mov" autoplay muted loop></video>
    <video class="top-movie spview" title="bgmovie" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/movie/mobile-500x360.mp4" autoplay muted loop></video>
    <div>
      <img class="top-steam-top" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-A.png" />
    </div>
    <div>
      <img class="top-steam-under" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-B-1.png" />
    </div>
  </div>
  <div class="top-content">
    <div class="navbar-inner pcview">
      <nav class="navbar">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Logo-197x41.png" /></a>
        <div class="justify-content-end">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'topics' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('topics')->ID)); ?>">Topics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'products' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('products')->ID)); ?>">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'about' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'shops' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('shops')->ID)); ?>">Shops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'news' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('news')->ID)); ?>">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $slug == 'faq' ? 'active' : '' ?>" href="<?php echo esc_url(get_permalink(get_page_by_path('faq')->ID)); ?>">Faq</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="onsensou-logo">
      <img class=" spview" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Logo-197x41.png" />
    </div>

    <div class="scroll-area">
      <div class="products-area">
        <div class="products-content">
          <h2 class="top-caption products-text scrollanime slide-left">Products</h2>
          <div class="row justify-content-around products-list scrollanime downup">
          <div class="col-6 col-sm-4 p-1">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('products')->ID)); ?>#shampooandtreatment" class="card products-image">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/shampoo-and-treatment.png" alt="shampoo-and-treatment">
                <div class="card-body p-1">
                  <div class="products-title">頭皮ケアシリーズ</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 p-1">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path('products')->ID)); ?>#bodycleanser" class="card products-image">
                <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/body-cleanser.png" alt="body-cleanser">
                <div class="card-body p-1">
                  <div class="products-title">ボディケアシリーズ</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <img class="top-products-steam-under" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-D.png" />
      </div>
    </div>
    <div class="top-brandstory">
      <div>
        <img class="top-brandstory-steam-top" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-B-2.png" />
      </div>
      <div class="top-brandstory-content parallax-bg img-bg-01">
        <h2 class="top-brandstory-text top-caption-wt scrollanime slide-left">About</h2>
        <div class="about-text scrollanime slide-left">
        <img style="height: 1.5vw;margin: 0 0.3vw 0.3vw 0;" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Logo-197x41.png" />のブランド名は<br>「温泉藻」に由来します。<br>
          別府温泉に生息している、<br>藻類から抽出された美容成分。<br>
          この成分が頭皮の環境を整え、<br>頭皮のお悩みがある方に寄り添います。<br>
          温泉x別府からイメージを<br>得たシンプルなデザイン。<br>
          日本の精神的な文化であり<br>美意識である「宅び・寂び」を想起させます。<br>
          <br>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>">Learn more ...</a>
        </div>
      </div>
      <div class="top-concept ">
        <div>
          <img class="top-concept-steam-top" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-D.png" />
        </div>
        <div>
          <img class="top-concept-steam-under" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Smoke-E.png" />
        </div>
        <div class="consept-area scrollanime downup">
        </div>
      </div>
      <div class="top-topics">
        <h2 class="top-topics-text top-caption-wt scrollanime slide-left">Topics</h2>
        <div class="topics-list">
          <div class="row justify-content-center scrollanime downup">
            <?php $top_topics_list = get_posts(array('posts_per_page' => 3, 'category_name' => 'topics')); ?>
            <?php foreach ($top_topics_list as $top_topics) { ?>
              <div class="col-6 col-sm-4">
                <div class="card">
                  <a href="<?php echo get_permalink($top_topics->ID) ?>">
                    <img class="card-img news-img" src="<?php echo get_the_post_thumbnail_url($top_topics->ID, "learge"); ?>" alt="newsA">
                  </a>
                </div>
                <div class="card-body">
                  <div class="news-date"><?php echo date('Y.m',  strtotime($top_topics->post_date)); ?></div>
                  <div class="news-title"><a href="<?php echo get_permalink($top_topics->ID) ?>"><?php echo str_replace(' ', '<br>', $top_topics->post_title); ?></a></div>
                </div><!-- /.card-body -->
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!--end contents-->
    <?php get_footer(); ?>