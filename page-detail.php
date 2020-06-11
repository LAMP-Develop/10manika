<?php
/*
Templatename: 物件詳細
*/

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$data = get_property_detail((int)$_GET['id']);
get_header(); ?>

<div class="flex flex-start pc-wrap py-5">

<div id="main-wrap">
<section id="property-detail">
<h2 class="ttl-property"><?php echo $data['buildingName']; ?></h2>
<ul class="property-detail-info">
<li>
<h3>所在地</h3>
<p><?php echo $data['info']['address']; ?></p>
</li>
<li>
<h3>面積</h3>
<p><?php echo $data['info']['floor']; ?>／<?php echo $data['info']['space'].'坪'; ?></p>
</li>
<li>
<h3>賃料</h3>
<p class="font-weight-bold text-danger"><?php echo number_unit($data['info']['rent']); ?>円</p>
</li>
</ul>
<div class="gallery">
<div class="main-gallery">
<img src="<?php echo str_replace('http:','',$data['imageUrls'][0]['url']); ?>" alt="">
</div>
<ul class="gallery-list">
<?php
$temp = 0;
foreach ($data['imageUrls'] as $key => $urls):
if ($key == 0) {
    continue;
}
$thumbnail = str_replace('http:','',$thumbnail);
?>
<li>
<a href="<?php echo str_replace('http:','',$urls['url']); ?>" data-lightbox="group" data-title="<?php echo $urls['caption']; ?>">
<img data-url="<?php echo str_replace('http:','',$urls['url']); ?>" src="<?php echo str_replace('http:','',$urls['url']); ?>" alt="<?php echo $data['buildingName'].$temp; ?>">
</a>
</li>
<?php endforeach; ?>
</ul>
</div>
<div class="contens">
<h3>物件詳細</h3>
<p><?php echo $data['description']; ?></p>
<table class="property-tb">
<tbody>
<tr>
<th>路線</th>
<td><?php echo $data['info']['line']; ?></td>
</tr>
<tr>
<th>最寄り駅</th>
<?php
if ($data['info']['minutes'] != '') {
    $minutes = '　徒歩'.$data['info']['minutes'].'分';
} else {
    $minutes = '';
} ?>
<td><?php echo $data['info']['station'].$minutes; ?></td>
</tr>
<tr>
<th>規模</th>
<td><?php echo $data['info']['scale']; ?></td>
</tr>
<tr>
<th>駐車場</th>
<td><?php echo $data['info']['parking']; ?></td>
</tr>
<tr>
<th>償却</th>
<td><?php echo $data['info']['amortization']; ?></td>
</tr>
</tbody>
</table>
<table class="property-tb">
<tbody>
<tr>
<th>築年</th>
<td><?php echo $data['info']['year']; ?></td>
</tr>
<tr>
<th>入居可能日</th>
<td><?php echo $data['info']['situation']; ?></td>
</tr>
<tr>
<th>建築構造</th>
<td><?php echo $data['info']['construction']; ?></td>
</tr>
<tr>
<th>設備</th>
<td><?php echo $data['info']['facility']; ?></td>
</tr>
<tr>
<th>備考</th>
<td><?php echo $data['info']['remarks']; ?></td>
</tr>
</tbody>
</table>
<?php if ($data['info']['point'] != ''): ?>
<div class="point">
<h4>担当者がおススメするポイント</h4>
<p><?php echo $data['info']['point']; ?></p>
</div>
<?php endif; ?>
<?php if ($data['info']['thetatag1'] != ''): ?>
<div class="street">
<?php echo $data['info']['thetatag1']; ?>
<?php if ($data['info']['thetatag2'] != ''): ?>
<?php echo $data['info']['thetatag2']; ?>
<?php endif; ?>
<?php if ($data['info']['thetatag3'] != ''): ?>
<?php echo $data['info']['thetatag3']; ?>
<?php endif; ?>
</div>
<?php endif; ?>
<div class="send-btn-wrap">
<a href="<?php echo $home_url; ?>/reserve/?names=<?php echo $data['buildingName'].'／'.$data['info']['floor'].'／'.$data['info']['space'].'坪'; ?>" class="send-btn">
<img src="<?php echo $wp_url; ?>/lib/images/common/send.png" alt="お問い合わせ">
<p>お問い合わせ・内覧希望</p>
</a>
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
