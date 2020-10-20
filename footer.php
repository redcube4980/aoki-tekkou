<footer>
<p id="footer-copy">大型鉄骨工事から戸建て内外装リフォームまで。<br class="br-sp">Since1969の信頼と実績</p>
<h2 id="footer-title"><a href="/"><img class="top-logo" src="<?php echo get_template_directory_uri(); ?>/images/top/top-logo.svg" width="100%" height="auto" alt="足場が要らない 住宅リフォーム 空プロ"/></a></h2>
<address>〒292-0014 千葉県木更津市高柳1-8-1</address>
<p id="main-tel">お問合わせ専用番号 <span>080-5009-2000</span></p>
<p id="tel">TEL：0438-41-6001<span class="tab">／</span><br class="br-sp">FAX：0438-41-6006</p>
<p id="mail">Mail：info@sorapro.jp</p>
<p id="copyright">Copyright©2020 Sora-Pro All Rights Reserved</p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function(){
    $('a[href^="#"]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("body,html").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});
var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= 850) {
		if(winScrollTop >= 850){
        $('.click-button').fadeIn(375).addClass('active');
		} 
    } else {
        $('.click-button').fadeOut(375).removeClass('active');
    }
    startPos = winScrollTop;
});
</script>
<script>
$(function() {
  var h = $(window).height();
	$('#loader-bg ,#loader').height(h).css('display','block');
	$('#wrapper').css('display','none');
});
$(window).on('load',function () {
	$('#loader-bg').delay(900).fadeOut(800);
	$('#loader').delay(600).fadeOut(300);
	$('#wrapper').fadeIn(100);
	setTimeout(function(){
		$('#wrapper').fadeIn(100);
	}, 1*1000);
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/userAgent.js"></script>
<?php if( is_front_page() ): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script>
var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
	autoplay: {
		delay:3000,
		stopONLast:false,
		disableOnInteraction:false,
	},
	speed: 3000,
	slidesPerView: 1,
	// slidesPerView: 1.2, // 何枚のスライドを表示するか
    spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'fade', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
	//
	allowTouchMove: false,
	freeModeMomentumBounce: false,
	initialslide:1,
	calculateHeight: true,
	centeredSlides : true,
	preloadImages: true, 
	observer: true,
	observeParents: true,
	//Enable lazy loading 
	lazy: { loadPrevNext: true,
		  	loadPrevNextAmount :1,
		   	loadOnTransitionStart: true,
		   	elementClass :'swiper-lazy' ,
		   	preloaderClass:'swiper-lazy-preloader' 
		  },
	breakpoints: {
    // when window width is <= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is <= 960px
    960: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is <= 1400px
    1400: {
      slidesPerView: 1,
      spaceBetween: 0
    },
	// when window width is <= 1980px
    1980: {
      slidesPerView: 1,
      spaceBetween: 0
    },
  	},
})
</script>
<?php endif; ?>
</body>
<?php wp_footer(); ?>
</html>