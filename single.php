<?php get_header(); ?>
<?php
if ( in_category('products') ) { //  カテゴリースラッグかカテゴリーIDを指定
      include(TEMPLATEPATH . '/single-products.php');
} else if ( in_category('topics') ) { 
      include(TEMPLATEPATH . '/single-topics.php');
} else if ( in_category('news') ) { 
      include(TEMPLATEPATH . '/single-news.php');
} else {
      include(TEMPLATEPATH . '/single-other.php');
}
?>
<?php get_footer(); ?>
