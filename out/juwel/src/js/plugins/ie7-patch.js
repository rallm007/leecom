$(function(){			
		/* fake :before-support */
		$('.main-nav > ul > li > a, #panel-nav a.icon, #panel-nav .main-panel .has-drop, #panel-nav .drop a, .main-nav .drop, .main-nav .flyout .left a, .variations-slider, .home-teaser-big.new .teaser-img, .accessories_detail-thumb-nav .overview-drop, .tab-teaser .slide-toggle h4, .button, .form-select, .product-overview .item .line-info, .product-overview .item .line-info .inner, #distr_finder .distance-slider').append('<span class="before"></span>')
		
		
		/* fake :after-support */
		$('#panel-nav li.has-drop > a, #panel-nav .cart, .main-nav .drop, .variations-slider, .accessories_detail-thumb-nav .overview-drop, .checkout-process li, .product-overview .item .line-info, #distr_finder .distance-slider').append('<span class="after"></span>')
		
		var prod_drop = $('.main-nav .products .flyout')
		
		prod_drop.find('.left').append('<span class="left-before"></span><span class="left-after"></span>')
		prod_drop.find('.right').append('<span class="right-before"></span><span class="right-after"></span>')
		
		
		/* breadcrumb */
		$('.breadcrumb li').append('<span class="before">/</span>')
		
		/* fixes several and depending z-index-bugs in product-detail-stage */
		$(window).ready(function(){
			$(".product-detail-stage .product-image .product-image-wrapper").mouseover(function(){
				$('.product-detail-stage').css('z-index', '100').find('.caroufredsel_wrapper').css('z-index', '100')
			}).mouseout(function(){
				$('.product-detail-stage').css('z-index', '1').find('.caroufredsel_wrapper').css('z-index', '1')
			});
			$(".product-detail-stage .right, #header, #main .content, .product-detail-stage .stage-nav").mouseover(function(){
				$('.product-detail-stage').css('z-index', '1').find('.caroufredsel_wrapper').css('z-index', '1')
			})
		});
		// fix z-index bug 
		$('.slide-toggle.blue-arrows > div').each(function(i){
			index = $(this).parent().find('> div').length - i;
			$(this).css('z-index', index)			
		});
	
});