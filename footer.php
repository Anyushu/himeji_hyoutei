<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</main>
<footer data-aos="fade-up" id="footer">
  <div class="container position-relative">
    <span class="bg-illust position-absolute">
      <img src="<?php echo $wp_url; ?>/lib/images/bg_illust_6.png" alt="">
    </span>
    <div class="sec">
      <img class="img-fluid w-100 d-md-block d-none" src="<?php echo $wp_url; ?>/lib/images/footer_main.png" alt="">
      <img class="img-fluid w-100 d-md-none d-block" src="<?php echo $wp_url; ?>/lib/images/footer_main_sp.png" alt="">
      <div class="text-center mt-5">
        <p>ご予約はこちら</p>
        <p>
          <a class="tel text-body" href="tel:0792228180">Tel.079-222-8180</a>
        </p>
        <p class="small">お電話での完全予約制となっております。</p>
      </div>
    </div>
    <h2 class="text-center h3 m-0 foot-read">すべてのご縁を大切に。</h2>
    <div class="sec text-center">
      <div class="mb-4">
        <a href="<?php echo $home; ?>/">
          <img src="<?php echo $wp_url; ?>/lib/images/logo.png" alt="">
        </a>
      </div>
      <p class="mb-0">〒670-0012 兵庫県姫路市本町68番地</p>
      <p>[営業時間] 17:00〜22:00 <br class="d-md-none d-block">[定休日]日曜</p>
      <div class="d-flex align-items-center justify-content-center mt-5">
        <a class="text-body" href="https://www.facebook.com/himeji.hyotei/" target="_blank">
          <i class="fab fa-facebook-f mr-2"></i>
          <span class="d-md-inline d-none">Facebook</span>
        </a>
        <a class="text-body mx-4" href="https://www.instagram.com/hyoutei2/" target="_blank">
          <i class="fab fa-instagram mr-2"></i>
          <span class="d-md-inline d-none">Instagram</span>
        </a>
        <a class="text-body" href="https://www.youtube.com/channel/UCYBGGNkdwuytkLm81qtFftw" target="_blank">
          <i class="fab fa-youtube mr-2"></i>
          <span class="d-md-inline d-none">Youtube</span>
        </a>
      </div>
    </div>
    <p class="small text-center mb-0 py-3">©2020 hyoutei</p>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>