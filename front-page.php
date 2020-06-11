<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="flex flex-start pc-wrap py-5">
<div id="main-wrap">
<section id="new" class="article-list">
<div class="wrap">
<div class="ttl flex">
<h2><i class="far fa-clock"></i>新着物件</h2>
<div class="btn-02 pc-only">
<a href="<?php $home; ?>/list?sort=新着">一覧を見る<i class="fas fa-chevron-right"></i></a>
</div>
</div>
<ul class="flex">
<?php
$builds = search_build_data()['rooms'];
foreach ($builds as $key => $build):
$id = $build['id'];
$name = $build['buildingName'];
$img = $build['thumbnailUrl'];
$rent = number_unit($build['info']['rent']);
$address = $build['info']['address'];
$space = $build['info']['space'];
?>
<li id="build-<?php echo $id ?>">
<a href="">
<div class="img-wrap">
<img src="<?php echo $img ?>" alt="<?php echo $name ?>">
</div>
<div class="txt-wrap">
<h3><?php echo $name ?></h3>
<p>面積：<?php echo $space ?>坪
<br>所在地：<?php echo $address ?>
<br>賃料：</p>
<p class="price"><?php echo $rent ?></p>
</div>
</a>
</li>
<?php endforeach; ?>
</ul>
<div class="btn-02 sp-only">
<a href="#">一覧を見る<i class="fas fa-chevron-right"></i></a>
</div>
</div>
</section>

<section id="ranking" class="article-list py-5">
<div class="wrap">
<div class="ttl flex">
<h2><i class="fas fa-star"></i>人気物件情報</h2>
<div class="btn-02 pc-only">
<a href="#">一覧を見る<i class="fas fa-chevron-right"></i></a>
</div>
</div>
<ul class="flex">
<!--- 物件情報 --->
<li>
<div class="img-wrap">
<img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
</div>
<div class="txt-wrap">
<a class="cat">名古屋駅</a>
<h3>オフィス名がはいります</h3>
<p>面積：8坪
<br>所在地：中区栄2
<br>賃料：</p>
<p class="price">6万5000円</p>
</div>
</li>
<!--- 物件情報終わり --->
<!--- 物件情報 --->
<li>
<div class="img-wrap">
<img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
</div>
<div class="txt-wrap">
<a class="cat">名古屋駅</a>
<h3>オフィス名がはいります</h3>
<p>面積：8坪
<br>所在地：中区栄2
<br>賃料：</p>
<p class="price">6万5000円</p>
</div>
</li>
<!--- 物件情報終わり --->
<!--- 物件情報 --->
<li>
<div class="img-wrap">
<img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
</div>
<div class="txt-wrap">
<a class="cat">名古屋駅</a>
<h3>オフィス名がはいります</h3>
<p>面積：8坪
<br>所在地：中区栄2
<br>賃料：</p>
<p class="price">6万5000円</p>
</div>
</li>
<!--- 物件情報終わり --->
</ul>
<div class="btn-02 sp-only">
<a href="#">一覧を見る<i class="fas fa-chevron-right"></i></a>
</div>
</div>
</section>
</div>
<!-- サイドバー -->
<div id="side-wrap">
<?php include("sidebar.php"); ?>
</div>
<!-- サイドバー終了 -->
</div>

<?php get_footer();
