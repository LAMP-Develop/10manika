<?php $home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside id="sidebar">
<?php if(!is_front_page() && !is_home()): ?>
<div class="search mb-4">
<p class="b"><i class="fas fa-search mr-2"></i>こだわり検索</p>
<ul class="prejudice-list m-0">
<li>
<a href="<?php $home; ?>/list?sort=レンタルオフィス&preferences=8">
<p>レンタル<br>オフィス物件</p>
<div class=""><i class="fas fa-arrow-circle-right"></i></div>
</a>
</li>
<li>
<a href="<?php $home; ?>/list?sort=シェアオフィス&preferences=2">
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
</div>

<div class="search area mb-4">
<p class="b"><i class="fas fa-search mr-2"></i>エリアから検索</p>
<ul class="area-list m-0">
<li><a href="<?php $home; ?>/list?sort=名古屋駅&area=<?php echo set_area('名古屋駅'); ?>">名古屋駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=栄駅&area=<?php echo set_area('栄駅'); ?>">栄駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=丸の内&area=<?php echo set_area('丸の内'); ?>">丸の内<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=伏見駅&area=<?php echo set_area('伏見駅'); ?>">伏見駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=久屋大通駅&area=<?php echo set_area('久屋大通駅'); ?>">久屋大通駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=金山駅&area=<?php echo set_area('金山駅'); ?>">金山駅<i class="fas fa-chevron-right"></i></a></li>
<li><a href="<?php $home; ?>/list?sort=その他&area=<?php echo set_area('その他'); ?>">その他<i class="fas fa-chevron-right"></i></a></li>
</ul>
</div>
<?php endif; ?>
<div class="news">
<p class="b">お知らせ</p>
<ul>
<li><a href="#"><p><span class="gray">2020/01/01</span><br>お知らせ内容が入ります。</p></a></li>
</ul>
</div>

<div class="fb mt-4">
<p class="b mb-4">フェイスブック</p>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F318848938213792&tabs=timeline&width=270px&height=300px&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="400px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>

</aside>
