<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- お問い合わせセクション -->
<?php include("sec-contact.php"); ?>
<!-- お問い合わせセクション終了 -->

<!-- トップへ -->
<div id="pagetop">
<a href="#header"><i class="fas fa-chevron-up"></i></a>
</div>
<!-- トップへ終了 -->

<!-- フッター -->
<footer id="footer" class="pt-5">
<div class="wrap pc-wrap">
<div class="flex">
<div class="left">
<p class="b">オフィス10万円以下ドットコム</p>
<p>〒460-0004
<br>愛知県名古屋市中区新栄町2-13栄第一生命ビル8階
<br>TEL：<a href="tel:052-973-3344">052-973-3344</a>
</p>
</div>
<div class="right flex">
<div>
<p class="b">エリア検索</p>
<ul>
<li><a href="">名古屋駅</a></li>
<li><a href="">栄</a></li>
<li><a href="">丸の内</a></li>
<li><a href="">伏見</a></li>
<li><a href="">金山</a></li>
<li><a href="">その他</a></li>
</ul>
</div>
<div>
<p class="b">こだわり検索</p>
<ul>
<li><a href="">レンタルオフィス</a></li>
<li><a href="">シェアオフィス</a></li>
<li><a href="">敷金礼金なし物件</a></li>
</ul>
</div>
</div>
</div>
<div class="flex">
<ul>
<li><a href="https://www.officebank.co.jp/company/" target="_blank">会社概要</a></li>
<li><a href="https://www.officebank.co.jp/privacypolicy/" target="_blank">個人情報の取り扱い</a></li>
</ul>
<small class="fff">Copyright (C) 2020 OFFICE 10MANEN IKA.COM All right reserved</small>
</div>
</div>
</footer>
<!-- フッター終了 -->
<?php wp_footer(); ?>
<script src="<?php echo $wp_url; ?>/lib/js/index.js" defer></script>
</body>
</html>
