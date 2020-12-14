<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<?php wp_head(); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<meta name="keywords" content="">
<meta name="robots" content="noindex">
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
<link rel="icon" type="image/x-icon" href="apple-touch-icon-precomposed.png">
<link href="<?php echo get_stylesheet_uri(); ?>?<?php echo date_i18n('Ymd-His'); ?>" rel="stylesheet">
<?php if( is_page('consumers') ): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/consumers.css?20201211" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/contact-form7.css?<?php echo date_i18n('Ymd-His'); ?>" rel="stylesheet">
<?php elseif(is_home()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/page.css?<?php echo date_i18n('Ymd-His'); ?>" rel="stylesheet">
<?php elseif(is_page()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/page.css?<?php echo date_i18n('Ymd-His'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXXX-X');
</script>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<a id="click-button" href="#main-contents-form"><img src="<?php echo get_template_directory_uri(); ?>/images/click-button.png" width="100%" height="auto" alt="お気軽にご相談ください！無料相談・お見積りはこちらから"/></a>
<header>
<div id="header-top">
<p>高所作業車免許と建築施工管理技士の２つの資格をもつ技術者が空中施工するので、<span>速さ</span>と<span>安心</span>を<span>リーズナブル</span>に叶えます!</p></div>
<div id="header-middle"><div id="sorapro_logo-box"><h1><img id="sorapro_logo" src="<?php echo get_template_directory_uri(); ?>/images/sorapro_logo.svg" width="100%" height="auto" alt=""/></h1></div><img id="credit-ok" src="<?php echo get_template_directory_uri(); ?>/images/credit-ok.svg" width="100%" height="auto" alt="カード決済可"/><img id="header-text" src="<?php echo get_template_directory_uri(); ?>/images/header-text.svg" width="100%" height="auto" alt="屋根・外壁・雨樋・フェンス・内装の修理や、災害に備えるリフォームなら、有資格専門技術者集団「空プロ」にお任せください。"/></div>
<div id="header-bttom"><span><h2><img class="header-text2" src="<?php echo get_template_directory_uri(); ?>/images/header-text2.svg" width="100%" height="auto" alt="空中リフォームのプロフェッショナル達が挑む 新発想プロジェクト！「空プロ」始動！"/></h2></span></div>
</header>