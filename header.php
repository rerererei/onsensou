<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_deregister_script('jquery'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Spartan:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/resources/js/oss-function.js" type="text/javaScript" charset="utf-8"></script>
    <?php if (is_page()) : ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/oss-page.css">
    <?php endif; ?>
    <?php if (is_single()) : ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/css/oss-single.css">
    <?php endif; ?>

</head>

<?php
global $post;
$slug = get_the_category()[0]->slug;
if (is_null($slug)) {
    $slug = $post->post_name;
}
?>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header>
            <?php if (!is_home() && !is_front_page()) { ?>
                <div class="header-inner pcview <?php echo is_page('products') ? '' : 'bg-green' ?>">
                    <div class="navbar-inner">
                        <nav class="navbar">
                            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="header-img" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Logo-onsensou.png" /></a>
                            <div class="justify-content-end">
                                <ul class="nav nav-text">
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
                </div>
            <?php } ?>
            <div class="hamburger-menu spview">
                <?php if (!is_home() && !is_front_page()) { ?>
                    <div class="top-image-sp">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/Logo-onsensou.png" /></a>
                    </div>
                <?php } ?>
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('topics')->ID)); ?>">Topics</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about')->ID)); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('products')->ID)); ?>">Products</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('shops')->ID)); ?>">Shops</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('news')->ID)); ?>">News</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq')->ID)); ?>">Faq</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>