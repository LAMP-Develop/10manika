<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<section id="footer-contact" class="py-5">
  <div class="wrap">
    <div class="ttl"><h2 class="fff txt-c">名古屋のオフィスについて<br class="pc-only">お気軽にお問い合わせください</h2></div>
    <p  class="fff txt-c">サービスについてご不明な点や、お探しの物件がございましたら、こちらよりお気軽にお問い合わせください。
    <br>ビルやテナントの掲載希望の方もコチラからご連絡ください。(有料)</p>
    <div class="flex flex-center">
      <a href="tel:0520973-3344">
        <img src="<?php echo $wp_url ?>/lib/images/common/footer_tel.png" alt="10万円以下ドットコムの電話番号">
      </a>
      <div class="btn-01">
        <a href="#" target="_blank">資料請求／お問い合わせ<i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</section>
