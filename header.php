<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>空プロ 青木鉄工</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1" name="viewport">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.jpg">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.jpg">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if( is_front_page() ): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/contact-form7.css" rel="stylesheet">
<?php elseif(is_home()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" rel="stylesheet">
<?php elseif(is_page()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" rel="stylesheet">
<?php endif; ?>
<style rel="stylesheet" type="text/css">
#wrapper {
    height: 100%;
	display: none;
}
#loader-bg {
  display: none;
  position: fixed;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  background: #00b0fa;
  z-index: 9998;
  transform: translate3d(0,0,2000px);
}
#loader {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 80px !important;
    text-align: center;
    color: #fff;
    z-index: 9999;
	transform: translate(-50%,-50%);
	animation: loader 5s both infinite;
}
@keyframes loader {
0% {
	transform: translate(-50%,-40%);
}
50% {
	transform: translate(-50%,-60%);
}
100% {
	transform: translate(-50%,-40%);
}
}
#loader img{
	width: 100%;	
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177397955-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177397955-1');
</script>
<?php wp_head(); ?>
</head>
<body>
<div id="loader-bg">
  <div id="loader">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="80" height="80" alt="" />
  </div>
</div>
<div id="wrapper">
<header>
<div id="header-top">
<p>高所作業車免許と建築施工管理技士<br class="br-sp">資格をもつ技術者が空中施工するので、<br class="br-sp"><span>速さ</span>と<span>安心</span>を<span>リーズナブル</span>に叶えます!</p></div>
<div id="header-middle">
	<div id="sorapro_logo-box">
		<div id="sorapro_logo-box-inner">
		<h1><a href="/"><img id="top-logo" src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></a></h1>
		<img id="header-text" src="<?php echo get_template_directory_uri(); ?>/images/top/top-catch.svg" width="100%" height="auto" alt="空中リフォームのプロフェッショナル達が挑む新発想プロジェクト！"/>
		</div>
	</div>
</div>
<div id="header-bttom">
<div id="header-bttom-reft"><nav class="global-navi"><ul><li><a href="/">トップページ</a></li><li><a href="/company/">運営会社</a></li><li><a href="/consumers/#main-contents-form">お問合わせ</a></li></ul></nav></div>
<div id="header-bttom-right"><img id="credit-ok" src="<?php echo get_template_directory_uri(); ?>/images/credit-ok.svg" width="100%" height="auto" alt="カード決済可"/></div>
</div>
<div id="header-bg-cloud">
	<div id="top-cloud03"></div>
	<div id="top-cloud02"></div>
	<div id="top-cloud01"></div>
</div>
<div id="header-bg">
<div id="header-bg-left"><a href="/consumers/">
	<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img id="top-bg-left" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-left01.jpg" width="100%" height="auto" alt="画像"/>
					</div>
					<div class="swiper-slide">
						<img id="top-bg-left" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-left02.jpg" width="100%" height="auto" alt="画像"/>
					</div>
					<div class="swiper-slide">
						<img id="top-bg-left" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-left03.jpg" width="100%" height="auto" alt="画像"/>
					</div>
				</div>
	</div>
	<img id="top-consumers-button" src="<?php echo get_template_directory_uri(); ?>/images/top/top-consumers-button.svg" width="120px" height="auto" alt="一般住宅のリフォームをご検討の方はこちら"/></a></div>
<div id="header-bg-right"><a href="/business/">
	<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img id="top-bg-right" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-right01.jpg" width="100%" height="auto" alt="画像"/>
					</div>
					<div class="swiper-slide">
						<img id="top-bg-right" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-right02.jpg" width="100%" height="auto" alt="画像"/>
					</div>
					<div class="swiper-slide">
						<img id="top-bg-right" src="<?php echo get_template_directory_uri(); ?>/images/top/slider/top-bg-right03.jpg" width="100%" height="auto" alt="画像"/>
					</div>
				</div>
	</div>
	<img id="top-business-button" src="<?php echo get_template_directory_uri(); ?>/images/top/top-business-button.svg" width="120px" height="auto" alt="事務所・工場のリフォームをご検討の方はこちら"/></a></div>
</div>
</header>