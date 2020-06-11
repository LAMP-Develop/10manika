<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/common.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/header.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/footer.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/sidebar.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/sec-content.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/mv.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/top.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/article.css" rel="stylesheet">
<!-- <link href="<?php echo $wp_url; ?>/lib/css/single.css" rel="stylesheet"> -->
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header">
<nav class="wrap">
<div class="flex">
<div class="logo-wrap">
<a href="<?php echo $home ?>">
<img src="<?php echo $wp_url ?>/lib/images/common/header_logo.png" alt="10万円以下ドットコムのロゴ">
</a>
</div>
<div class="flex pc-only">
<img src="<?php echo $wp_url ?>/lib/images/common/header_tel.png" alt="10万円以下ドットコムの電話番号">
<div class="btn-01">
<a href="#" target="_blank">資料請求／お問い合わせ<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
</div>
</nav>
</header>
<!-- ヘッダー終了 -->

<?php if (is_home() || is_front_page()): ?>

<!-- トップページMV -->
<section id="mv" class="flex flex-center">
<div class="pc-wrap flex">
<h2 class="left">
<img src="<?php echo $wp_url ?>/lib/images/mv/mv_txt.png" alt="名古屋で安い事務所やオフィス、10万円以下の賃貸はお任せ！">
</h2>
<div class="right">
<h3><i class="fas fa-search"></i>こだわり検索</h3>
<ul class="flex prejudice-list">
<li>
<a href="<?php $home; ?>/list?sort=レンタルオフィス&preferences=8">
<p>レンタル<br>オフィス物件</p>
<div class=""><i class="fas fa-arrow-circle-right"></i></div>
</a>
</li>
<li>
<a href="<?php $home; ?>/list?sort=シェアフィス&preferences=2">
<p>シェア<br>オフィス物件</p>
<div class=""><i class="fas fa-arrow-circle-right"></i></div>
</a>
</li>
<li>
<a href="<?php $home; ?>/list?sort=敷金礼金なし&preferences=4">
<p>敷金礼金なし<br>物件</p>
<div class=""><i class="fas fa-arrow-circle-right"></i></div>
</a>
</li>
</ul>
<h3><i class="fas fa-search"></i>エリアから検索</h3>
<ul class="area-list flex">
<li><a href="<?php $home; ?>/list?sort=名古屋駅&area=<?php echo set_area('名古屋駅'); ?>">名古屋駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=栄駅&area=<?php echo set_area('栄駅'); ?>">栄駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=丸の内&area=<?php echo set_area('丸の内'); ?>">丸の内<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=伏見駅&area=<?php echo set_area('伏見駅'); ?>">伏見駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=久屋大通駅&area=<?php echo set_area('久屋大通駅'); ?>">久屋大通駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=金山駅&area=<?php echo set_area('金山駅'); ?>">金山駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=その他&area=<?php echo set_area('その他'); ?>">その他<i class="fas fa-chevron-right"></i></a></li>
</ul>
</div>
</div>
</section>
<!-- トップページMV終了 -->
<?php else: ?>
<?php if (is_page('list')):
$ttl = $_GET['sort'];
?>
<section id="sub-mv" class="bg-archives">
<div class="container">
<h2><?php echo $ttl; ?><span>から探す</span></h2>
</div>
</section>
<?php else: ?>
<section id="sub-mv" class="bg-single">
<div class="container">
<h2>物件詳細</h2>
</div>
</section>
<?php endif; ?>
<?php endif; ?>

<!-- メインコンテンツ -->
<main>
