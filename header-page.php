<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>空プロ 青木鉄鋼</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1" name="viewport">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.jpg">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.jpg">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if( is_page('business') ): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/contact-form7.css" rel="stylesheet">
<?php elseif( is_page('consumers') ): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/contact-form7.css" rel="stylesheet">
<?php elseif(is_page('company')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/company.css" rel="stylesheet">
<?php elseif(is_page('privacy-policy')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/privacy-policy.css" rel="stylesheet">
<?php elseif(is_home()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet">
<?php elseif(is_single()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/single.css" rel="stylesheet">
<?php elseif(is_page()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/page.css" rel="stylesheet">
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
<?php if( is_page('business') ): ?>
<a id="click-button" href="#main-contents-form"><img src="<?php echo get_template_directory_uri(); ?>/images/click-button.png" width="100%" height="auto" alt="お気軽にご相談ください！無料相談・お見積りはこちらから"/></a>
<?php elseif( is_page('consumers') ): ?>
<a id="click-button" href="#main-contents-form"><img src="<?php echo get_template_directory_uri(); ?>/images/click-button.png" width="100%" height="auto" alt="お気軽にご相談ください！無料相談・お見積りはこちらから"/></a>	
<?php elseif(is_page()): ?>
<a id="click-button" href="/consumers/#main-contents-form"><img src="<?php echo get_template_directory_uri(); ?>/images/click-button.png" width="100%" height="auto" alt="お気軽にご相談ください！無料相談・お見積りはこちらから"/></a>
<?php endif; ?>
<header>
<div id="header-top">
<p>高所作業車免許と建築施工管理技士<br class="br-sp">資格をもつ技術者が空中施工するので、<br class="br-sp"><span>速さ</span>と<span>安心</span>を<span>リーズナブル</span>に叶えます!</p></div>
<div id="header-middle"><div id="sorapro_logo-box">
	<?php if( is_page('business') ): ?>
	<a href="/business/">
	<div id="site-logo2"><img id="tatekaeshirazu_logo" src="<?php echo get_template_directory_uri(); ?>/images/top/tatekaeshirazu.png" width="100%" height="auto" alt="こんなこともできるの？あきらめない修繕なら、建て替え知ラズ by空プロ"/></div></a>
	<h1 class="page-title2">事務所・工場のリフォームをご検討の方</h1>
	<?php elseif( is_page('consumers') ): ?>
	<a href="/consumers/">
	<div id="site-logo"><img id="sorapro_logo" src="<?php echo get_template_directory_uri(); ?>/images/sorapro_logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></div></a>
	<h1 class="page-title">一般住宅のリフォームをご検討の方</h1>
	<?php elseif(is_page()): ?>
	<a href="/">
	<div id="site-logo"><img id="sorapro_logo" src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></div></a>
	<?php elseif(is_home()): ?>
	<a href="/">
	<div id="site-logo"><img id="sorapro_logo" src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></div></a>
	<?php else: ?>
	<a href="/">
	<div id="site-logo"><img id="sorapro_logo" src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></div></a>
	<?php endif; ?>
	</div><img id="credit-ok" src="<?php echo get_template_directory_uri(); ?>/images/credit-ok.svg" width="100%" height="auto" alt="カード決済可"/><img id="header-text" src="<?php echo get_template_directory_uri(); ?>/images/header-text.svg" width="100%" height="auto" alt="屋根・外壁・雨樋・フェンス・内装の修理や、災害に備えるリフォームなら、有資格専門技術者集団「空プロ」にお任せください。"/></div>
<div id="header-bttom"><span><h2><img class="header-text2" src="<?php echo get_template_directory_uri(); ?>/images/header-text2.svg" width="100%" height="auto" alt="空中リフォームのプロフェッショナル達が挑む 新発想プロジェクト！「空プロ」始動！"/></h2></span></div>
</header>