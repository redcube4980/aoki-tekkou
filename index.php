<?php
/*
Template Name: index
*/
?>
<?php get_header('page');?>
<main>
<section id="main-contents-form">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<h1 class="page-title"><?php the_title(); ?></h1>
<time><i class="far fa-clock"></i><?php the_time('Y/m/d'); ?></time>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>	
</section>
<section id="main-contents-bottom">
	<ul id="main-contents-bottom-button">
	<li id="bottom-consumers-button" class="bottom-button"><a href="/consumers/"><h2>一般住宅のリフォーム</h2><p>詳細はこちら</p></a></li>
	<li id="bottom-business-button" class="bottom-button"><a href="/business/"><h2>事務所・工場のリフォーム</h2><p>詳細はこちら</p></a></li>
	</ul>
	<div id="main-contents-bttom-navi"><nav class="global-navi"><ul><li><a href="/">トップページ</a></li><li><a href="/company/">運営会社</a></li><li><a href="/consumers/#main-contents-form">お問合わせ</a></li></ul></nav></div>
</section>
</main>
<?php get_footer(); ?>