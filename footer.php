<div class="<?php echo !is_home() && !is_front_page() ? 'other-' : 'top-' ?>footer-wrap pcview">
  <div class="top-footer">
    <div class="row justify-content-between">
      <div class="col-6">
        <a class="footer-logo-link" href="<?php echo home_url(); ?>"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/<?php echo !is_home() && !is_front_page() ? 'M-Foot-Logo-W.png' : 'M-Foot-Logo.png' ?>" /></a>
      </div>
      <div class="sns-link col-5 text-right">
        <p class="sns-head">INFO</p>
        <hr style="height:2px">
        <p class="sns-company-name">ヴェラス株式会社</p>
        <p class="sns-mail"><a href="mailto:info@onsensou.jp?subject=問い合わせ&amp;body=ご記入ください">info@onsensou.jp</a></p>
        <p class="sns-instagram"><a href="https://Instagram.com/onsensou_beppu_japan" target="_blank">Instagram <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/<?php echo !is_home() && !is_front_page() ? 'LinkArrowWhite.png' : 'LinkArrowGreen.png' ?>"></a></p>
      </div>
    </div>
  </div>
</div>
<div class="<?php echo !is_home() && !is_front_page() ? 'other-' : 'top-' ?>footer-wrap spview">
  <div class="top-footer">
    <div class="footer-img">
      <a href="<?php echo home_url(); ?>"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/<?php echo !is_home() && !is_front_page() ? 'M-Foot-Logo-W.png' : 'M-Foot-Logo.png' ?>" /></a>
    </div>
    <p class="sns-head pcview">INFO</p>
    <hr class="pcview" style="height:2px">
    <div class="sns-link ">
      <div class="ns-company-name">ヴェラス株式会社</div>
      <div class="sns-mail"><a href="mailto:info@onsensou.jp?subject=問い合わせ&amp;body=ご記入ください">info@onsensou.jp</a></div>
      <div class="sns-instagram"><a href="https://Instagram.com/onsensou_beppu_japan" target="_blank">Instagram <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/<?php echo !is_home() && !is_front_page() ? 'LinkArrowWhite.png' : 'LinkArrowGreen.png' ?>"></a></div>
    </div>
  </div>
</div>
</div>
<!--end footer-inner-->
</footer>
</div>
<?php wp_footer(); ?>
<!--システム・プラグイン用-->
</body>

</html>