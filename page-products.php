<?php
/*
Template Name: products
*/
?>
<?php get_header(); ?>
<div class="contents">
  <div class="products-page-top ">
    <h1 class="products-h1">Products</h1>
    <div>
      <img class="product-steam-top" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Products-Smoke.png" />
    </div>
    <div>
      <img class="product-top-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Products-BG.png" />
    </div>
  </div>
  <div class="page-contents">
    <h2 id="shampooandtreatment" class="anchor">頭皮ケアシリーズ</h2>
    <?php $s_and_t_list = get_posts(array('posts_per_page' => -1, 'category_name' => 'shampooandtreatment', 'order' => 'ASC', 'orderby' => 'category')); ?>
    <div class="row justify-content-center product-list">
      <?php foreach ($s_and_t_list as $s_and_t) { ?>
        <div class="col-6 col-sm-3 p-1">
          <a href="<?php echo get_permalink($s_and_t->ID) ?>">
            <img class="card-img product-img" src="<?php echo get_field('products_img_list', $s_and_t->ID)['product_img_1']['url'] ?>" alt="product">
          </a>
          <div class="product-title"><a href="<?php echo get_permalink($s_and_t->ID) ?>"><?php echo $s_and_t->post_title; ?><p class="products-sub-title"><?php echo get_field('sub_title',$product_set->ID)?></p></a></div>
        </div>
      <?php } ?>
    </div>
    <h2 id="bodycleanser" class="anchor">ボディケアシリーズ</h2>
    <?php $body_list = get_posts(array('posts_per_page' => -1, 'category_name' => 'bodycreanser', 'order' => 'ASC', 'orderby' => 'category')); ?>
    <div class="row justify-content-center product-list">
      <?php foreach ($body_list as $product_body) { ?>
        <div class="col-6 col-sm-3 p-1">
          <a href="<?php echo get_permalink($product_body->ID) ?>">
            <img class="card-img product-img" src="<?php echo get_field('products_img_list', $product_body->ID)['product_img_1']['url'] ?>" alt="product">
          </a>
          <div class="product-title"><a href="<?php echo get_permalink($product_body->ID) ?>"><?php echo $product_body->post_title; ?><p class="products-sub-title"><?php echo get_field('sub_title',$product_set->ID)?></p></a></div>
        </div>
      <?php } ?>
    </div>
    <h2>トラベルシリーズ</h2>
    <?php $set_list = get_posts(array('posts_per_page' => -1, 'category_name' => 'products-set', 'order' => 'ASC', 'orderby' => 'category')); ?>
    <div class="row justify-content-center product-list">
      <?php $cnt = 1; ?>
      <?php foreach ($set_list as $product_set) { ?>
        <div class="col-4 col-sm-3">
          <a href="<?php echo get_permalink($product_set->ID) ?>">
            <img class="card-img product-img" src="<?php echo get_field('products_img_list', $product_set->ID)['product_img_1']['url'] ?>" alt="product">
          </a>
          <div class="product-title"><a href="<?php echo get_permalink($product_set->ID) ?>"><?php echo str_replace(' ', '<br>',$product_set->post_title); ?><p class="products-sub-title"><?php echo get_field('sub_title',$product_set->ID)?></p></a></div>
        </div>
        <?php if ($cnt % 3 == 0) { //表示列の設定?>
          <div class="w-100"></div>
        <?php } ?>
        <?php $cnt++; ?>
      <?php } ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
