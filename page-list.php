<?php
/*
Templatename: 物件リスト
*/

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$sort = $_GET['sort'];
$sort_url = '&sort='.$_GET['sort'];
$area = '';
$preferences = 0;
if (isset($_GET['area'])) {
    $area = $_GET['area'];
    $sort_url .= '&area='.$area;
}
if (isset($_GET['preferences'])) {
    $preferences = (int)$_GET['preferences'];
    $sort_url .= '&preferences='.$preferences;
}
get_header(); ?>

<div class="flex flex-start pc-wrap py-5">

<div id="main-wrap">

<section class="article-list">
<div class="wrap">
<ul class="flex">
<?php
if (isset($_GET['pages'])) {
    $pages = (int)$_GET['pages'];
    $total = search_build_data($page = (int)$_GET['pages'], 100000, 0, $preferences, $area)['count'];
    $builds = search_build_data($page = (int)$_GET['pages'], 100000, 0, $preferences, $area)['rooms'];
} else {
    $pages = search_build_data(1, 100000, 0, $preferences, $area)['page'];
    $total = search_build_data(1, 100000, 0, $preferences, $area)['count'];
    $builds = search_build_data(1, 100000, 0, $preferences, $area)['rooms'];
}
foreach ($builds as $key => $build):
$id = $build['id'];
$name = $build['buildingName'];
$img = $build['thumbnailUrl'];
$rent = number_unit($build['info']['rent']);
$address = $build['info']['address'];
$space = $build['info']['space'];
?>
<li id="build-<?php echo $id ?>">
<a href="<?php echo $home; ?>/list/detail?id=<?php echo $id ?>">
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
<?php pager($pages, $total, $sort_url); ?>
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
