<div class="container">
  <div class="contents">
    <div class="row align-items-stretch">
      <div class="col-sm-6">
        <div class="product-img">
          <?php $group = get_field('products_img_list');
          if (!empty($group)) : ?>
            <?php $cnt = 1;?>
            <?php foreach($group as $img){?>
              <?php if(!is_null($img['url'])){?>
                <img class="card-img <?= $cnt == 1 ? 'current' : '';?> img-<?= $cnt?>" src="<?php echo $img['url']; ?>" alt="topics" <?= $cnt == 1 ? '' : 'style="display:none"';?>>
                <?php $cnt++;?>
              <?php } ?>
            <?php }?>
          <?php endif; ?>
        </div>
        <ul id="product-subimg">
          <?php $group = get_field('products_img_list');
          if (!empty($group)) : ?>
            <?php $cnt = 1;?>
            <?php foreach($group as $img){?>
              <?php if(!is_null($img['url'])){?>
                <li class="<?= $cnt == 1 ? 'current' : '';?> img-<?= $cnt?>"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>" /></li>
                <?php $cnt++;?>
              <?php } ?>
            <?php }?>
          <?php endif; ?>
        </ul>
        <div class="row shop-link-table align-items-center">
          <?php if(!is_null(get_field('amazon_link'))){?>
            <div class="col-5">
              <a href="<?php echo get_field('amazon_link')?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/amazon_link.png"></a>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="product-description-area">
              <h1 class="product-title"><?php echo str_replace(' ', '<br>', get_the_title()); ?></h1>
              <p class="products-sub-title"><?php echo get_field('sub_title',$product_set->ID)?></p>
              <div class="product-description"><?php the_content() ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end contents-->
</div>
<!--end container-->