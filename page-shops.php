<?php
/*
Template Name: shops
*/
?>
<?php get_header(); ?>
<div class="contents">
  <div class="page-top">
    <h1>Shops</h1>
    <p class="text-center" style="">ONSENSOU温泉藻頭皮ケアシリーズは全国のバラエティショップでお取り扱いしております。</p>
    <p class="text-center">在庫状況などは変動がある為、直接店舗へお問い合わせください。</p>
    <div class="shop-content">

      <?php $page_data = get_page_by_path('shops'); $page = get_post($page_data);
        $content = $page -> post_content;
        $array = explode("\n", $content); // とりあえず行に分割
        $array = array_map('trim', $array); // 各行にtrim()をかける
        $array = array_filter($array, 'strlen'); // 文字数が0の行を取り除く
        $array = array_values($array); // これはキーを連番に振りなおしてるだけ
        $firstTime = true;
        foreach($array as $shopInfo){
          $firstTr = true;
          $shopArr = explode(',', $shopInfo);
          if(count($shopArr) == 1){
            if(!$firstTime){
              echo '</table></div></div>';
            }
            echo  '<div><span>'. $shopArr[0] . '</span><div class="shop-list"><table class="shop-table">';
            $firstTime = false;
          }else{
            echo '<tr>';
            foreach($shopArr as $shopDetail){
              if(strpos($shopDetail,'http') !== false){
                $shopDetail = '<a href="' . $shopDetail .'" target="_blank">サイトへ <img src="' . get_stylesheet_directory_uri() .'/resources/images/LinkArrowGreen.png" style="width:0.7em"></a>';
              }
              echo '<td>'. $shopDetail .'</td>';
            }
            echo '</tr>';
          }
        }
        echo '</table></div></div>';
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>