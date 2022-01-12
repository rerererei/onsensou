<div class="container">
  <div class="contents">
    <p class="topics-post-date"><?php echo date('Y.m',  strtotime($post->post_date)); ?></p>
    <h1 class="topics-title"><?php echo str_replace(' ', '<br>', get_the_title()); ?></h1>
    <div class="topics-content">
      <?php the_content() ?>
    </div>
    <!--end contents-->
  </div>
</div>
<!--end container-->