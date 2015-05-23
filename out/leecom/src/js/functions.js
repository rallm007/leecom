var leecom = {};

$(function(){

    //disables double tracking of google Analytics caused by jQuery.address plugin
    $.address.tracker(null);

	/* --- clear inputs on focus */

	$.fn.clearInputs = function() {
		this.each(function(){
			el = $(this);
			var value = el.val();

			el
			.focusin(function(){
				if ($(this).val() == value) {
					$(this).val("");
				}
			})
			.focusout(function(){
				if ($.trim($(this).val()) == "") {
					$(this).val(value);
				}
			});
		});
	};

	$("#header input, #footer input").clearInputs();


	/* --- vertical align elements */
	$.fn.vAlign = function(container) {
		return this.each(function(i){
			var el = $(this).children(container + ":first");
			var elh = $(el).height(); // element height
			var ph = $(this).height(); //parent height
			var nh = (ph - elh) / 2; //new height to apply
			$(el).css('margin-top', nh); // set margin-top to center element
		});
	};
	// --- Smooth Scroll To Anchor
	$('#main').on('click', '.scroll-link', function() {
		$("html, body").animate({
			scrollTop: $($(this).attr("href")).offset().top + "px"
		}, {
			duration: 700,
			easing: 'easeInOutQuart'
		});
		return false;
	});

	/* main-navi - product flyout */
	leecom.productFlyout = function() {
		var p_class = '#header .products .flyout';
		var p = $(p_class);
		var info = p.find('.product-info');
		var sel_link = p.find('.left li a')

		info.hide();
		// open right panel
		p.on('mouseenter', '.left li a', function(e){
			p.removeClass('closed');
			info.hide(); // hide all product info

			var sel = $(e.target).attr('id');
			p.find('#info-'+sel).show(); // show associated product info
		});
		// close right panel
		p.on('mouseleave', function(){
				$(this).addClass('closed');
				info.hide();
		});

	};

	$.fn.slideToggler = function() {
		$( ".slide-toggle > div" ).hide();
		$( ".slide-toggle.nested > div > div" ).hide();
		$( ".slide-toggle h4, .slide-toggle h5" ).on('click', function(){
			$(this).toggleClass('active').next('div').slideToggle();
		});

	}

	// --- Form Tooltips

	var form_icon_info = $('#main form .icon-info');
	if(form_icon_info){
		form_icon_info.tipsy({fade: true, offset: -2, gravity: 's'});
	}

	// ------ HomePage -> Stage Slider    -------------------------------------------------------------------------------------------------------------------------------------
	leecom.homeSlider = function() {

		var home_stage = $('#main .home-stage')
		var slider_sel = home_stage.find(".home-stage-slider");
		var slider_item = slider_sel.find('.item');
        var pause_duration  = parseInt(slider_sel.data('pause')) > 0 ? slider_sel.data('pause') : 7000;
		Slider();


		$(window).resize(function(){ // Adjust Slider when browser is resized
			var newWidth = $(window).width();
			slider_item.each(function(){
				$(this).css('width', newWidth); // set viewport-width to items
			});
			$('#main .home-stage .caroufredsel_wrapper').css('width', newWidth);
			slider_sel.trigger("configuration", ["width", newWidth]);

		});
		/*$(window).resize(function(){ // Adjust Slider when browser is resized
			Slider();
		});*/

		function Slider(){
			var ww = $(window).width();
			slider_item.each(function(){
				$(this).css('width', ww).children('.item-content').css('opacity', '0'); // set viewport-width to items and hide items content
			});


			// Slider
			slider_sel.carouFredSel({
				/*circular: false,*/
				/*auto : false,*/
				width: ww,
				height: 384,
				items : 1,
				auto : {/* automatic scrolling after 7 seconds */
                    timeoutDuration: pause_duration,
					pauseOnHover: true
    			},

                onCreate: function( current_slide ) {
                    if($('video', current_slide).length) {
                        $('video', current_slide ).get(0).play();
                    }

                },


                scroll :{
					items: 1,
					easing      : 'easeInOutQuart',
					duration : 1300,
					wipe: true,

					onBefore : function(oldItems, newItems) {
						oldItems.find('> .item-content').fadeTo(500, 0); // fade out current item-content before scrolling

                        if ($('video', newItems ).length) {
                            $('video', newItems ).get(0).play();
                        }
					},

					onAfter	: function(oldItems, newItems) {
						newItems.find('> .item-content').fadeTo(550, 1); // fade in new item-content after scrolling

                        if($('video', oldItems ).length){
                            $('video', oldItems ).get(0).pause();
                        }

					}

				},

				prev : {
					button	: "#stage-prev"
				},
				next : {
					button	: "#stage-next"
				},
				pagination	: "#home-stage-pagination"
			}).find(".item:first > .item-content").css('opacity', '1'); //

			/* stage-navigation-arrows - hover-effect */
			home_stage.on('mouseenter', '.home-stage-nav', function(){
				$(this).stop(true, true).addClass('hoverbg').addClass('hover', 200)
			}).on('mouseleave', '.home-stage-nav', function(){
				$(this).stop(true, true).removeClass('hover', 200).queue(function () {
					$(this).removeClass('hoverbg').dequeue();
				});
			});


		}
	};

	// ------ Product-Carousel-Stage -> Stage Slider + X     -------------------------------------------------------------------------------------------------------------------------------------
	leecom.productCarousel = function() {

		var html = $('html');
		var stage = '#main .product-detail-stage';
		var stage_sel = $(stage); // stage
		var slider_sel = stage_sel.find('.stage-slider'); // main-slider
		var slider_item_sel = slider_sel.find('.item'); // main-slider items
		var item_size = slider_item_sel.length; // number of items
		var slider_image = slider_item_sel.find('.image img'); // big image
		var pag_slider_sel = stage_sel.find('.stage-slider-pagination'); // slider pagination

		/* settings */
		var top = '131px';
		//var top = '49px';
		var top_active = '49px'
		var font_sml = '28px'
		var font_big = '40px'
		var font_resize_time = 500
		var img_ani_time = 900
		var slide_time = 900
		/* end settings */

		/* init */
		images_start();
		stageSlider();
		stageNavi();
		// -----

		// Adjust Slider when browser is resized
		$(window).resize(function(){
			var newWidth = $(window).width();
			if(html.hasClass('ie7')){
				$('#main .product-overview-wrapper').css('width', newWidth) // ie7 fix
			};
			slider_sel.trigger("configuration", ["width", newWidth]);
		});
		
		// start action
		function images_start(){
			slider_item_sel.each(function(i){

				var item = $(this);
				var image_wrapper = item.find('.image')
				var image = image_wrapper.find('img')				
				var headline = item.find('h2')
				var pag_item = item.find('.hidden a')
				var popup = item.find('.line-info')
				var oh = image.height();
				var ow = image.width();
				var sh = oh * 0.65;
				var sw = ow * 0.65;
				var imap = image_wrapper.find('map') // add 
				var mapid = '#' + $("map").attr("id"); // get map id
				image.data({
					'org_height' : oh,
					'org_width' : ow,
					'sml_height' : sh,
					'sml_width' : sw,
					'map_id' : mapid
				});


				if(i == 1){ // 2nd item
					item.css('width', '347px').addClass('active')
					image.css({'width' : ow, 'height' : oh, 'top' : top_active})
					image_wrapper.css({'top' : top_active})
					headline.addClass('active')
					pag_item.addClass('selected')
					image.attr("usemap", mapid);
				}else{ // all other items
					item.css('width', '297px').removeClass('active')
					image.css({'width' : sw, 'height' : sh})
					image_wrapper.css({'top' : top})
					image.removeAttr("usemap");
				}

				// build up pagination
				pag_item.appendTo(pag_slider_sel);

				// big select popup
				var popup_items = popup.find('a').length;
				var popup_width = popup_items * 130 - 10;
				popup.css({'width' : popup_width, 'margin-left' : '-'+ (popup_width / 2) + 'px'});
			});
		};
		
		/* functions */

		// main slider
		function stageSlider(){
			var ww = $(window).width();
			//slider_sel.css('width', ww);// set viewport-width to items
			if(html.hasClass('ie7')){
				$('#main .product-overview-wrapper').css('width', ww) // ie7 fix
			};
			// pagination
			var pag_item_sel = pag_slider_sel.find('a')
			pag_item_sel.each(function(i) {
				$(this).on('click', function() {
					slider_sel.trigger("slideTo", [i-1, true]);
				});
			});
			// main slider
			slider_sel.carouFredSel({
					/*circular: false,*/
					infinite : false,
					auto : false,
					width: ww,
					items : {
						visible: 3,
						start: 0,
						align : 'center'
					},
					scroll :{
						items: 1,
						easing   : 'easeInOutQuart',
						duration : slide_time,
						wipe: true,
						onBefore : function(oldItems, newItems) {
							var oi = oldItems.filter(":eq(1)") // current active
							var ni = newItems.filter(":eq(1)") // new active
							var oi_img = oi.find('.image img')  
							var oi_h = oi_img.data('sml_height')
							var oi_w = oi_img.data('sml_width')
							var ni_img = ni.find('.image img')
							var ni_h = ni_img.data('org_height')
							var ni_w = ni_img.data('org_width')

							
							// current active item
							oi.animate({
								width: '297px' // Set new width -> resize item (Wrapper)
							}, 50).removeClass('active').find('h2').animate({ 'font-size' : font_sml }, font_resize_time);

							oi_img.animate({ // resize Image (old/current active)
								width: oi_w, /* Set new width */
								height: oi_h
							}, img_ani_time).parent().animate({ top : top }, img_ani_time);
							oi_img.removeAttr("usemap"); // add, remove map
							// new active item
							ni.animate({
								width: '347px' /* Set new width -> resize item (Wrapper) */
							}, 50).find('h2').animate({ 'font-size' : font_big }, font_resize_time);

							ni_img.animate({ // resize Image (new active)
								width: ni_w, /* Set new width */
								height: ni_h
							}, img_ani_time).parent().animate({ top : top_active }, img_ani_time);							

						},
						onAfter : function(oldItems, newItems){
							//newItems.filter(":eq(2)").css({'margin-right' : parseInt((ww-940)/2)})
							// get current position
							var pos = ($(this).triggerHandler( "currentPosition" ))+1;
							// adjust index in relation to current position
							if(pos == item_size){
								index = 0
							}else{
								index = pos
							}
							// select active item in pagination
							pag_item_sel.removeClass('selected');
							pag_item_sel.filter('":eq('+index+')"').addClass('selected');

							// add click-handler to first and third image
							oldItems.off('click', '.image img'); // first remove all old click-handlers
							newItems.filter(":eq(2)").on('click', '.image img', function(){
								slider_sel.trigger("next");
							});
							newItems.filter(":eq(0)").on('click', '.image img', function(){
								slider_sel.trigger("prev");
							});
							
							var ni = newItems.filter(":eq(1)");
							// add active state to second (middle) item
							ni.addClass('active');
							// add handle map in here
							var ni_map = ni.find('.image map')
							var ni_img = ni.find('.image img')
							var ni_mapid = '#' + ni_map.attr("id"); // get map id							
							ni_img.attr("usemap", ni_mapid); // add,  map

							// ie - hover-fix
							if(html.hasClass('ie7') || html.hasClass('ie8')){
								oldItems.filter(":eq(1)").off('mouseenter').off('mouseleave');
								newItems.filter(":eq(1)")
									.on('mouseenter', function(){
										$(this).find('.line-info').addClass('hover')
									})
									.on('mouseleave', function(){
										$(this).find('.line-info').removeClass('hover')
									});
							}
						}
					},
					prev : {
						button	: ".product-detail-stage #stage-prev"
					},
					next : {
						button	: ".product-detail-stage #stage-next"
					},
					onCreate: function(items) {	// first load
						// force "overflow: visible" after build to make popup work
						$('#main .caroufredsel_wrapper').css({'overflow' : 'visible'})
						// add click-handler to first and third image
						items.filter(":eq(2)").on('click', '.image img', function(){
							slider_sel.trigger("next");
						});
						items.filter(":eq(0)").on('click', '.image img', function(){
							slider_sel.trigger("prev");
						});
					}
			});
		};

		// stage Navi-Button animation
		function stageNavi(){
			stage_sel
				.on('mouseenter', '#stage-prev', function(e){
					$(e.target).stop(true, true).addClass('over').animate({left : '0px'}, 200);
				}).on('mouseleave', '#stage-prev', function(e){
					el = $(e.target);
					el.stop(true, true).animate({left : '-26px'}, 200,
					function() {
						el.removeClass('over')
					});
				});
			stage_sel
				.on('mouseenter', '#stage-next', function(e){
					$(e.target).stop(true, true).addClass('over').animate({right : '0px'}, 200);
				})
				.on('mouseleave', '#stage-next', function(e){
					el = $(e.target);
					el.stop(true, true).animate({right : '-26px'}, 200,
					function() {
						el.removeClass('over')
					});
				});
		}
	};

	// ------ Product-Detail-Stage -> Stage Slider + X     -------------------------------------------------------------------------------------------------------------------------------------
	leecom.detailStage = function() {

		var stage = '#main .product-detail-stage';
		var stage_sel = $(stage);
		var main_slider = stage_sel.find('.stage-slider');
		var main_slider_item = main_slider.find('.item');

		// --- init
		init();
        variationSlider();
		thumbnailNavi();
		init_gallery();

		// ---------------

		// set preview to navigation-buttons
		getPreviewThumbs($(stage + ' .item:last-child'), stage + ' #stage-prev');
		getPreviewThumbs($(stage + ' .item:first-child').next(), stage + ' #stage-next');


		$(window).resize(function(){ // Adjust Slider when browser is resized
			var newWidth = $(window).width();
			main_slider_item.each(function(){
				$(this).css('width', newWidth); // set viewport-width to items
			});
			$('#main .product-detail-stage .caroufredsel_wrapper').css('width', newWidth);
			main_slider.trigger("configuration", ["width", newWidth]);
		});

        var hash_val
        var start_item
        var scroll_duration = 1300
        var active_item
        var init = null

        function init(){
            // Init and change handlers
            $.address.crawlable(true).strict(false).init(function(e)
            {
                hash_val = $.address.value();
                hash_item = main_slider.find('.item[data-variants~="'+hash_val+'"]'); // find item with hash-ID
                start_item = (hash_item.length != 0) ? hash_item : main_slider_item.first() // hash-item or first item if no match
                active_item = start_item // the currently active slider-item
                startHash = (hash_item.length != 0) ? hash_val : start_item.attr('ID') //
                stageSlider(start_item, startHash) // main slider
            }).internalChange(function(e)
            {
            }).externalChange(function(e)
            {
                if(init){// do nothing here at first init-call
                    var val = e.value // hash-value
                    var new_item = val? main_slider.find('.item[data-variants~="'+val+'"]') : main_slider_item.first();
                    new_item.data('currentid', val) // update the current product-id
                    if(active_item.attr('ID') !== new_item.attr('ID')){ // new product - we have to slide
                        main_slider.trigger("slideTo", new_item); // other selections while sliding
                    }else{
                        //no sliding because of same item -> load new image(decor) only
                        selectImage(val, active_item)// selecting Image / load image, content and show it
                    }
                }
                init = 1
            });
        };

        function selectImage(hash, item, scrolling){ // hash = product-variant-ID , item = slider-item(product-line)
            var ID = (hash != 0 && item.data('variants').indexOf(hash) != -1) ? hash : item.attr('ID'); // checking hash and set ID
            item.find('.product-image .product-image-wrapper').css('display', 'none'); // hide all image-wrappers
            sel_img = item.find('.product-image .product-image-wrapper[data-id~="'+ID+'"]'); // selected image
            var index = sel_img.index();
            var timeout = scrolling ? scroll_duration : 0;
            item.find( ".variations-slider" ).slider( "value", (index +1) ); // update slider-position
            sel_img.css('display', 'block') // show selected image-wrapper
                .showImage(); // load selected image
            setTimeout(function(){ // bc of bad slide-performance with old browsers or slow systems
                $.address.title(sel_img.attr('title')); // update meta-title
                sel_img.activateProductZoom(); // bind image-zoom
                item.data('currentid', ID); // update current content ID (stores slider position and the ID for loading content)
                var fb_url = $('a', item.find('.variations ul li').get(index)).attr('href');
                CreateNewLikeButton(fb_url);
                CreateNewSendButton(fb_url);
                loadContentByArtId(ID) // load content (tabs and cross-selling)
            },timeout);
        };


        function stageSlider(startItem, startHash){

			var ww = $(window).width();

			main_slider_item.each(function(){
				$(this).css('width', ww); // set viewport-width to items
			});

			// *** Stage-Main-Slider
			main_slider.carouFredSel({
				circular: false,
				infinite : false,
				auto : false,
				width: ww,
				items : {
					visible: 1,
					start: startItem
				},
				scroll :{
					items: 1,
					easing   : 'easeInOutQuart',
					duration : scroll_duration,
					wipe: true,
					onBefore : function(oldItems, newItems) { // before scrolling
						var oldID = '#' + oldItems.attr('id');
						var newID = '#' + newItems.attr('id');
						$(".product-thumbnail-slider a[href~=" + oldID + "]").removeClass('selected');
						$(".product-thumbnail-slider a[href~=" + newID + "]").addClass('selected'); // select active item in thumbnail-navi
						$('.mousetrap').css('display', 'none'); // disable imageZoom while sliding
						//newItems.find('.product-image .product-image-wrapper:nth-of-type(1)').showImage() // load next Image
                        var contentID = newItems.data('currentid') // ID of content to load
                        selectImage(contentID, newItems, 'scrolling') // selecting Image / load image, content and show it
						$('#ajax-content').data('tab_index', '') // reset active-tab-index
					},
					onAfter	: function(oldItems, newItems) { // after scrolling
                        active_item = newItems; // set new active-item
						$('.mousetrap').css('display', 'block'); // reactivate imageZoom after sliding
						getPreviewThumbs($(stage + ' .item:last-child'), stage + ' #stage-prev'); // set preview-image to navigation-button
						getPreviewThumbs(newItems.next(), stage + ' #stage-next');
						//var oldID = oldItems.attr('id');
						//var newID = newItems.attr('id');
						//$("div[id~="+oldID+'-tabs'+"]").hide(); // hide tab-content of old product
						//$("div[id~="+newID+'-tabs'+"]").show() // show tab-content of new product
						//							   .find('.accessories_slider a').vAlign('img'); // vertical center images in slider
						//newItems.find('.product-image .product-image-wrapper:nth-of-type(1)').activateProductZoom() // bind image-zoom to next Image
						//contentID = newItems.data('currentid') // ID of content to load
						//loadContentByArtId(contentID) // load tab-content
                        $.address.value(newItems.data('currentid')); // update hash string
					}
				},
				prev : {
					button	: stage+' #stage-prev'
				},
				next : {
					button	: stage+' #stage-next'
				},
				pagination	: ".stage-slider-pagination",
				onCreate: function(items) {	// first load
					//var ID = items.attr('ID');
                    var ID = startHash; // deep-linking url-hash-value  -> see function init()
					var first_img_wrapper = items.find('.product-image .product-image-wrapper:nth-of-type(1)')
					$(".product-thumbnail-slider a[href~="+'#'+ ID + "]").addClass('selected');// select active item in thumbnail-navi
					//$("div[id~="+ID+'-tabs'+"]").show(); // show tab-content of active product
					//first_img_wrapper.showImage(); // show first product-image of first active item
					//first_img_wrapper.activateProductZoom(); // bind image-zoom to first product-image of first active item
					//loadContentByArtId(ID)	// load tab-content according to active product (on first call the content-id (ajax-request) = attr(ID))
                    selectImage(ID, items) // selecting Image / load image, content and show it
				}
			});

		};
		// show preview images in left - and right navigation-button
		function getPreviewThumbs(item, navelement){
				var nav_image = item.find('div.hidden img.nav-product-preview-image');
				var src = nav_image.attr('src');
				var title = nav_image.attr('alt');

				$(navelement).html('<span style="background-image: url(' + src + ')">' + title + '</span>');
		};

		// *** sliding thumbnail-navigaton
		function thumbnailNavi(){
				var navi_sel = $( "#main .product-thumbnail-navi" );
				var slider_sel = navi_sel.find('.product-thumbnail-slider');

				slider_sel.find("a").trigger("linkAnchors"); // navigate to item 'X' in main-slider

				navi_sel.on('mouseenter', function() {
					// show thumbnail-navigation
					var el = $(this);
					var thumb_item = el.find('a')
					el.find('.inner-wrapper').clearQueue().delay(200).animate({height: '154px', opacity: 1}, 800, "easeInOutQuart");
					el.delay(300).queue(function () {
						el.removeClass('closed').dequeue();
					});
					thumb_item.each(function(){
						$(this).showImage()
					})
				}).on('mouseleave', function() {
					// hide thumbnail-navigation
					var el = $(this);
					el.find('.inner-wrapper').clearQueue().animate({height: '0px', opacity: 0}, 400, "easeInOutQuart");
					el.delay(300).queue(function () {
						el.addClass('closed').dequeue();
					});
				});
				// thumbnail-slider
				slider_sel.carouFredSel({
					circular: false,
					infinite: false,
					auto : false,
					align : 'left',
					width: 607,
					items : 5,
					scroll :{
						items: 1,
						easing      : 'easeInOutQuart',
						duration : 400,
						wipe: true
					},
					prev : {
						button	: "#thumb-product-prev"
					},
					next : {
						button	: "#thumb-product-next"
					}
				});

		};

		// *** variation Slider (Decor-Slider)
		function variationSlider(){
				main_slider_item.each(function(){
					var parent = $(this);
					var parentID = parent.attr('id'); // Product-Item-ID to select different products
					var image_wrap = parent.find('.product-image-wrapper');
					var i_max = image_wrap.length; // number of selectable images
					var slider_width = (i_max - 1) * 53; // slider-width depends on number of selectable images
					var decors = parent.find(".variations ul li");/* decor images for selction */

					parent.data('currentid', parentID) // on start 'currentid' = attr('ID') for each main-slider-item (needed for ajax-requests)

					decors.each(function(i){/* set up decor-image control */
						var index = i+1;
						$(this).on('click', function(){
							slider.slider( "value", index );/* control slider */
							changeImage(index); /* select Decor-ProductImage */
						})
                        .find('a').on('click', function(e){
                            e.preventDefault(); // no action on click
                        });
					});


                    var slider = parent.find( ".variations-slider" ).slider({// build individual slider for each item (product)
						min: 1,
						max: i_max,
						slide: function( event, ui ) {
							changeImage(ui.value);/* select Decor-ProductImage */
						}
					}).css('width', slider_width); // set slider-width

					function changeImage(index){/* switch to selected Decor-Image */
						$( '#' + parentID + ' ' + '.product-image-wrapper' ).css('display', 'none');
						sel_img = $( '#' + parentID + ' ' + '.product-image-wrapper:nth-of-type(' + index + ')' ) // selected image
						sel_img.css('display', 'block') // show selected image-wrapper
								.showImage(); // load selected image
						sel_img.activateProductZoom(); // bind image-zoom
                        $.address.title(sel_img.attr('title')); // update meta-title
                        // request for specific item-content
						var ajaxID = sel_img.data('id'); // artID for ajax-request
						parent.data('currentid', ajaxID); // update current content ID (stores slider position and the ID for loading content)
                        $.address.value(ajaxID);
                        var fb_url = $('a', decors.get(index-1)).attr('href');
                        CreateNewLikeButton(fb_url);
                        CreateNewSendButton(fb_url);
                        loadContentByArtId(ajaxID); // load content (tabs and cross-selling)
					};
				});
		};

        function CreateNewLikeButton(url){
            locale = $("meta[property='og:locale']").attr("content");
            fbIframe = '<iframe src="//www.facebook.com/plugins/like.php?href='+ encodeURIComponent(url.replace('#!', '?_escaped_fragment_=')) +'&amp;width=450&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=532575290153827&amp;locale='+locale+'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>';
            $("#fblike").html(fbIframe);
        }

        function CreateNewSendButton(url){
            $(".fb-send").attr('href', url);
            if (typeof FB !== 'undefined') {
                FB.XFBML.parse($(".fb-send").get(0));
            }
        }

        /* stage-navigation-arrows - hover-effect */
			stage_sel.on('mouseenter', '.stage-nav', function(){
				/*$('span',this).hide();*/
				var el = $(this)
				el.stop(true, true).addClass('over').addClass('hover', 30).queue(function () {
					$('span',this).show(0);
					el.dequeue();
				}).children('span').hide();
			}).on('mouseleave', '.stage-nav', function(){
				/*$('span',this).hide();*/
				var el = $(this)
				el.stop(true, true).removeClass('hover', 30).queue(function () {
					el.removeClass('over').dequeue();
				}).children('span').hide();
			});

		/* call the Gallery-LightBox */
		function init_gallery(){
			main_slider_item.each(function(){
				var el = $(this);
				var el_prod_img = el.find('.product-image .product-image-wrapper');
				var productID = el.attr('ID'); // gallery-item ID
				var galleryBox = el.find('.gallery-box');
				var galleryBoxID = 'gallery-'+productID
				galleryBox.attr('ID', galleryBoxID); // add specific and item-related ID to the gallery-content-box
				var pagination = galleryBox.find('.pagination'); // pagination in gallery-box
				var galleryOpener = el.find('.product-act-nav .gallery a'); // button to open the gallery
				// build up pagination-slider
				galleryBox.find('.gallery-item').each(function(i){
					var el = $(this);
					el.attr('ID', 'gallery-item-'+productID+'-'+i)
						.find('.thumb').attr('href', '#gallery-item-'+productID+'-'+i)
						.appendTo(pagination);
					});

				// call
				if(galleryBox.length !=0){ // if gallery-content exists
					el.on('click', '.right .product-act-nav .gallery a', function(){	// bind call to button
						leecom.galleryBox('#'+galleryBoxID);
								return false;
					});
					el_prod_img.each(function(i){
						$(this).on('click', '.mousetrap, .cloud-zoom', function(){
							leecom.galleryBox('#'+galleryBoxID, i);
							return false;
						});
					});
				}
			});
		}
	};

	// --- show images  ---------------------------

	/*!
	* jQuery imagesLoaded plugin v1.0.4
	* http://github.com/desandro/imagesloaded
	*
	* MIT License. by Paul Irish et al.
	*/

	(function($, undefined) {

	  // execute a callback when all images have loaded.
	  // needed because .load() doesn't work on cached images

	  // callback function gets image collection as argument
	  //  `this` is the container

	  $.fn.imagesLoaded = function( callback ) {
	    var $this = this,
	        $images = $this.find('img').add( $this.filter('img') ),
	        len = $images.length,
	        blank = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

	    function triggerCallback() {
	      callback.call( $this, $images );
	    }

	    function imgLoaded( event ) {
	      if ( --len <= 0 && event.target.src !== blank ){
	        setTimeout( triggerCallback );
	        $images.unbind( 'load error', imgLoaded );
	      }
	    }

	    if ( !len ) {
	      triggerCallback();
	    }

	    $images.bind( 'load error',  imgLoaded ).each( function() {
	      // cached images don't fire load sometimes, so we reset src.
	      if (this.complete || typeof this.complete === "undefined"){
	        var src = this.src;
	        // webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
	        // data uri bypasses webkit log warning (thx doug jones)
	        this.src = blank;
	        this.src = src;
	      }
	    });

	    return $this;
	  };
	})(jQuery);


	// --------------------- loading images
	$.fn.showImage = function() {
		el = $(this);
		var img = el.find('img');
		var src = img.data('src'); // real img-scr from attr "data-src"

		var loader = '<div class="img_loader"></div>'

		if(src !== 'loaded'){ // if image is not loaded
			el.append(loader);
			var img_loader = el.find('.img_loader');
			img.hide().attr('src', src);

			img.imagesLoaded(function(){ // if image is loaded, remove "loader" and fade in image
				img_loader.fadeOut().remove();
				$(this)
				.fadeIn('slow').data('src', 'loaded');
			});
		}
	};
	// --- init image-zoom
	$.fn.activateProductZoom = function() {
		var el = $(this);
		var el_init = el.data('init');
		if(!el_init && !Modernizr.touch){ // do nothing if done or if device is touch
			el.on('mouseenter', function(){
				el.find('.cloud-zoom').CloudZoom({
					adjustX: 60, adjustY:-75, zoomWidth: 460, zoomHeight: 384
				})
				el.off('mouseenter'); // self unbind
			})
			el.data('init', 'true');
		}
	};
	// ------ end --- Product-Detail

	leecom.productTabContent = function() {

		// select the last active tab
		var box_parent = $('#ajax-content');
		var tab_box = box_parent.find('.tabs');
		var tab_index_data = box_parent.data('tab_index');
		var tab_index = tab_index_data? tab_index_data : 0;

		tab_box.tabs("select" , tab_index) // select this tab on start

		// bind tab-select event (store / change tab-index)
		tab_box.bind( "tabsselect", function(event, ui) {
			  box_parent.data('tab_index', ui.index);
			});
		$(window).load(function(){ // Styling: "push image on level width main content"
			$('.tab-teaser-prod_details').each(function(){
				var el = $(this);
				var content = el.find('.grid_8'); // main content
				var image = el.find('.grid_4 img');// image
				var ch = content.innerHeight();
				var ih = image.height();
				if(ih < ch){
					image.css('margin-top', (ch - ih) ); // push image on level width main content (only if content is higher than image)
				}
			});
		});

		// only for styling -> count tabs and set class for styling
		$('#main .content-tabs > ul').each(function(){
			var tabsQu = $(this).children('li').length;
			$(this).addClass('quantity-'+tabsQu);
			$(this).children('li:last-child').addClass('last');
			if($('html').hasClass('ie7')){
				$('#ajax-content').find('.tab-teaser .slide-toggle h4').append('<span class="before"></span>');
			}
		});
	};

	// ---- used in several pages
	leecom.accessoriesSlider = function( opts ) {
		var parent_sel = $('.accessories'); // slider wrapper
		var sel = parent_sel.find('.accessories_slider'); // slider slector
		var item = sel.find('a'); // silder item

		item.tipsy({fade: true, gravity: 's'}); // Tooltips

		var defaults = {
			items: 5,	// number of visible items
			width: 500	// wrapper width
		};

		var opts = $.extend(defaults, opts);

		Slider();

		function Slider(){

			parent_sel.each(function(i, el){
				var parent = $(el); // "div.accessories"
				var slider_sel = parent.find('.accessories_slider');

				var prev = parent.find('.accessories-prev'); // prev-button
				var next = parent.find('.accessories-next'); // next-button
				slider_sel.carouFredSel({ // init slider
					circular: false,
					infinite: false,
					auto : false,
					align : 'left',
					items : opts.items,
					width : opts.width,
					scroll :{
						items: 1,
						easing   : 'easeInOutQuart',
						duration : 500,
						wipe: true
					},
					prev : {
						button	: prev
					},
					next : {
						button	: next
					}
				});
			});
		}
	};

	// ----- Lightbox Gallery
	leecom.galleryBox = function(box, startWith) {
			var contentHref = box? box : '.gallery-box';
			var startItem = startWith? startWith : 0;

			var parent_box = $(contentHref);
			var mainSlider = parent_box.find('.gallery-slider');
			var paginationSilder = parent_box.find('.pagination');
			var image_wrapper = mainSlider.find('.gallery-item .wrapper');
			$.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, width: 880, height: 640, inline:true, href: contentHref,
								onLoad:function(){
									$('#colorbox').addClass('gallery');
								},
								onComplete:function(){
									if($('html').hasClass('ie7')){ // ie7 fix -> Lightbox has wrong height
										$.fn.colorbox.resize({
												innerHeight:(640)
										});
									};

									Slider(); // start main image-slider
									thumbSlider(); // start pagination-slider

									image_wrapper.each(function(){
										var wrapper = $(this);
										var wrapper_initialized = wrapper.data('initialized');
										el = wrapper.find('.cloud-zoom');
										var big_img_src = el.attr('href');
										// first call on each image
										if(!wrapper_initialized){
											wrapper.data('initialized', 'true');
											wrapper.on('click', '.cloud-zoom', function(){
												var target = $(this);
												target.CloudZoom({ // start/bind image zoom
													zoomWidth: 750, zoomHeight: 450, onclick: true
												})
												// if big zoom-image is loaded open image zoom
												var big_img = new Image();
												big_img.src = big_img_src

												$(big_img).imagesLoaded(function () {
													 setTimeout(function () {
														 target.off('click'); // self unbind
														 target.parent().addClass('zoom-active').find('.mousetrap') // open image zoom
														.trigger('click');
													 }, 300);

												});
												target.parent().on('click', '.mousetrap', function(e){// set class to wrapper if zoom is active
													$(e).parent().toggleClass('zoom-active');
												})
												return false;

											});
										}

									});


							 },
							onCleanup: function(){
													mainSlider.trigger("destroy", true); //  put the items back in to the original order
													paginationSilder.trigger("destroy", true); //  put the items back in to the original order
												},
							onClosed: function(){
													$('#colorbox').removeClass('gallery');
													$(contentHref+" .pagination a").removeClass('selected');
												}
			});
			// main Image-slider
			function Slider(){
						mainSlider.carouFredSel({
							circular: false,
							infinite: false,
							auto : false,
							//synchronise : contentHref+' .pagination', // scroll the pagination slider
							width: 880,
							items : {
								height: 450,
								width: 880,
								visible: 1,
								start: startItem
							},
							scroll :{
								items: 1,
								easing      : 'easeInOutQuart',
								duration : 800,
								wipe: true,
								onBefore : function(oldItems, newItems) {
									var oldID = '#' + oldItems.attr('id');
									var newID = '#' + newItems.attr('id');
									$(contentHref+" .pagination a[href~=" + oldID + "]").removeClass('selected');
									$(contentHref+" .pagination a[href~=" + newID + "]").addClass('selected'); // select active item in pagination
									newItems.showImage() // load next image
								}
							},
							prev : {
								button	: contentHref+' .gb-prev'
							},
							next : {
								button	: contentHref+' .gb-next'
							},
							onCreate: function(items) {
								var ID = '#'+items.attr('ID');
								items.showImage() // load first visible image
								$(contentHref+" .pagination a[href~=" + ID + "]").addClass('selected');// select active item in pagination
								if(paginationSilder.children('.thumb').length > 7){
									mainSlider.trigger("configuration", ["synchronise", contentHref+' .pagination']); // sychronise the pagination-slider with the main-slider (only if paginationSlider is needed)
								}

          					}
						});
			}
			// pagination-slider
			function thumbSlider(){
						mainSlider.trigger('linkAnchors', [contentHref+' .pagination', "a"]); // navigate to item 'X' in main-Image-slider
						paginationSilder.carouFredSel({
							circular: false,
							infinite: false,
							auto : false,
							align: false,
							height: 90,
							width: 560,
							items : { visible: 7, height: 90, width: 77},
							scroll :{
								items: 1,
								easing: 'easeInOutQuart',
								duration : 400,
								wipe: true
							},
							prev : {
								button	: contentHref+' .gb-thumb-prev'
							},
							next : {
								button	: contentHref+' .gb-thumb-next'
							}
						});
			}


		};

	// ------ Accessories-Detail-Page     -------------------------------------------------------------------------------------------------------------------------------------
	leecom.accessoriesDetail = function() {
		var main = $('#main');
		var main_right = main.find('.content.accessories_detail .grid_8');
		var main_right_top = main_right.find('.accessories_detail_top');
		var product_images = main_right_top.find('.product-images');
		var compatibility = main_right_top.find('.compatibility');

		/*$(window).load(function(){
			product_images.find('.cloud-zoom').each(function(){
				el = $(this)
				var child = el.find('img');
				var cw = child.width();
				var ch = child.height();
				el.css({'width' : cw, 'height' : ch}); // set width to image-wrapping a-tag, to center it
				el.parent().css({'height' : ch, 'padding-top' : (300-ch)}) // and bring the image-wrapping a-tag to the bottom of the parent div(height: 300px)
			});
		});	*/

		// init
		main_right.find('.tab-content .content-tabs').tabs(); // tabs
		compatibility.tipsy({fade: true, gravity: 'se'}); // Tooltips
		productImages(); // product-images -> switch-image, zoom-function and thumbnail-slider
		thumbNavi(); // thumbnail-product-navigation (top)
		$.fn.slideToggler(); // FAQ-Accordion
		leecom.accessoriesSlider({width: 538, items: 3}); // bottom accessories-slider
		compatibilityTableBox();
		gallery();
		// --------

		function productImages(){
			//var product_images = $('.product-images')
			product_images.tabs({ fx: { opacity: 'toggle', duration: 'fast' } });	// tabs -> switch big images

			product_images.find('.product-images-nav').carouFredSel({ // sliding preview images
				circular: false,
				infinite: false,
				auto : false,
				items : 4,
				width : 256,
				scroll :{
					items: 4,
					easing   : 'easeInOutQuart',
					duration : 400,
					wipe: true
				},
				prev : {
					button	: "#product-images-prev"
				},
				next : {
					button	: "#product-images-next"
				}
			});
			if (!Modernizr.touch){// no zoom on touch-devices
				product_images.find('.cloud-zoom').CloudZoom({ // image-zoom
					zoomWidth: 300, zoomHeight: 300
				});
			}
		}
		function thumbNavi(){

			main.find('.product-thumbnail-navi .product-thumbnail-slider').carouFredSel({ // Slider
					circular: false,
					infinite: false,
					auto : false,
					width: 481,
					items : 6,
					scroll :{
						items: 1,
						easing      : 'easeInOutQuart',
						duration : 400,
						wipe: true
					},
					prev : {
						button	: "#thumb-product-prev"
					},
					next : {
						button	: "#thumb-product-next"
					}
			})
			.find('a').tipsy({fade: true, gravity: 's'}); // Tooltips

		}
		/* ----- call the Gallery-LightBox ----- */
		function gallery(){
			var galleryBox = $('.gallery-box');
			var pagination = galleryBox.find('.pagination');
			var galleryOpener = $('.product-act-nav .gallery a');
			galleryBox.find('.gallery-item').each(function(i){
				$(this).attr('ID', 'gallery-item-'+i).find('.thumb').attr('href', '#gallery-item-'+i).appendTo(pagination);
			});

			// call
			if(galleryBox.length !=0){
				galleryOpener.bind('click', function(){ // gallery-button
					leecom.galleryBox('.gallery-box');
					return false;
				});
				$(window).load(function(){
					product_images.find('.ui-tabs-panel').each(function(i){ // product-images
						$(this).bind('click', '.mousetrap, .cloud-zoom', function(){
							leecom.galleryBox('.gallery-box', i); // select item
							return false;
						});
					});
				});
			}

		}

		// ----- LightBox product added to cart -----

		// init
		leecom.addedToCartBox = function() {

			$.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, width: 640, height: 560, inline:true, href:"#added-to-cart",
								onComplete:function(){ $('#colorbox').addClass('standard');
														if($('html').hasClass('ie7')){
															$.fn.colorbox.resize({
																	innerHeight:(560)
															});
														};
													   leecom.accessoriesSlider({width: 538, items: 3}); // product-suggestion slider
													   $('.accessories_slider a, #added-to-cart .product .image').vAlign('img'); // align image
													   $('#added-to-cart').on('click', '.continue', function() {
														   $.fn.colorbox.close(); // close Lightbox
														});
													 },
								onClosed:function(){	leecom.accessoriesSlider({width: 538, items: 3}); // reinitialise slider in main-page
												   		$('#colorbox').removeClass('standard');
												   }
			});

		};
		// call
		/*$('.buy .button').click(function(){
			leecom.addedToCartBox();
			return false;
		});*/
		// ----- end  LightBox product added to cart -----

		// ----- LightBox compatibility table -----
		function compatibilityTableBox(){

			compatibility.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, width: 640, height: 560, inline:true, href:"#compatibility-box",
										  onComplete:function(){ $('#colorbox').addClass('standard');
																if($('html').hasClass('ie7')){
																	$.fn.colorbox.resize({
																			innerHeight:(560)
																	});
																};
																 //$('#compatibility-box .article-heading .image').vAlign('img'); // align image
																 $('#compatibility-box .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100}); // custom scroll-bar
																},
										  onClosed: function(){$('#colorbox').removeClass('standard');}
			});

		};

	};
	// ------ end -- Accessories-Detail-Page    -------------------------------------------------------------------------------------------------------------------------------------

	leecom.contentLightBox = function(content) {

			$.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, width: 640, height: 560, inline:true, href: content,
										  onComplete:function(){ $('#colorbox').addClass('standard');
										  						if($('html').hasClass('ie7')){
																	$.fn.colorbox.resize({
																			innerHeight:(560)
																	});
																};
																 $(content + ' .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100}); // custom scroll-bar
																},
										  onClosed: function(){$('#colorbox').removeClass('standard');}
			});

		};


	/* ----- Checkout    ------------------------------------------------------------------------------------------------------------------------------------- */
	leecom.checkout = function() {

		// init
		$('form.jqtransform').jqTransform(); // replace form-elements

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//
		// DO NOT UNCOMMENT FOLLOWING LINE
		//
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//$.fn.del_addr_Toggle(); // toggle delivery address

		payment_select(); // select payment-method
		// -----

		// select payment-method
		function payment_select(){

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//
			// DO NOT UNCOMMENT FOLLOWING LINE
			//
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// do nothing
		}

		// vertical center images in Cart-Table
		$(window).load(function(){
			$('.checkout-items-table .image').vAlign('img');
		});

	};
	/* ----- end --- Checkout     ------------------------------------------------------------------------------------------------------------------------------------- */

	/* toggle delivery address */
	$.fn.del_addr_Toggle = function() {
		var toggler = $('.form-col.delivery_address .col-head').find('input')
		var el = $('.form-col.delivery_address').find('.inner')

		if(!(toggler.is(':checked'))){
			el.css('opacity', 0);
			el.hide();
		}
		toggler.on('click', function() {
			el.css('opacity', 1);
			el.slideToggle(500);
		});
		/*
		 */
	}

	/* ----- Register    ------------------------------------------------------------------------------------------------------------------------------------- */
	leecom.register = function() {

		// init
		$('form.jqtransform').jqTransform(); // replace form-elements
		$.fn.del_addr_Toggle(); // toggle delivery address
		finder_yes_Toggle();
		distr_address(); // clear and restore form-data
		// -----

		function finder_yes_Toggle(){
			var sel = $('.form-cols .finder-yes');
			var toggler = sel.find('input');
			var el = sel.next('.finder-area');

			if(!(toggler.is(':checked'))){
				el.hide();
			}
			toggler.on('click', function() {
				el.slideToggle(500);
			});
		}

		function distr_address(){
			var sel = $('.finder-area .invoice-addr');
			var toggler = sel.find('input');
			var el = $('#address-form');
			var inputs = el.find('input');
			// store form data
			inputs.each(function(){
				$(this).data('value', $(this).val())
			});

			if((toggler.is(':checked'))){
				el.addClass('inactive');
				inputs.attr('disabled', true) // disable inputs
			}
			toggler.on('click', function() {
				inputs.each(function(){
					if(el.hasClass('inactive')){
						$(this).val("").removeAttr('disabled'); // clear form fields and activate them
					}
					if(!(el.hasClass('inactive'))){
						$(this).val($(this).data('value')).attr('disabled', true); // restore form field default values and disable them
					};
				});
				el.toggleClass('inactive');
			});
		}
	};
	/* ----- end --- Register     ------------------------------------------------------------------------------------------------------------------------------------- */

	/* ----- MyLeecom    ------------------------------------------------------------------------------------------------------------------------------------- */
	leecom.myleecom = function() {

		// init
		$('form.jqtransform').jqTransform(); // replace form-elements
		$.fn.del_addr_Toggle(); // toggle delivery address
		$.fn.slideToggler(); // toggle top-points
		newsletter(); // check newsletter state
		order_toggle();
        finder_yes_Toggle();
        distr_address();
		// -----

        function finder_yes_Toggle(){
            var y_sel = $('.form-cols .finder-yes');
            var y_toggler = y_sel.find('input');
            var y_el = y_sel.next('.finder-area');

            if(!(y_toggler.is(':checked'))){
                y_el.hide();
            }
            y_toggler.on('click', function() {
                y_el.slideToggle(500);
            });
        }

        function distr_address(){
            var d_sel = $('.finder-area .invoice-addr');
            var d_toggler = d_sel.find('input');
            var d_el = $('#address-form');
            var d_inputs = d_el.find('input');
            // store form data
            d_inputs.each(function(){
                $(this).data('value', $(this).val())
            });

            if((d_toggler.is(':checked'))){
                el.addClass('inactive');
                d_inputs.attr('disabled', true) // disable inputs
            }
            d_toggler.on('click', function() {
                d_inputs.each(function(){
                    if(d_el.hasClass('inactive')){
                        $(this).val("").removeAttr('disabled'); // clear form fields and activate them
                    }
                    if(!(d_el.hasClass('inactive'))){
                        $(this).val($(this).data('value')).attr('disabled', true); // restore form field default values and disable them
                    };
                });
                d_el.toggleClass('inactive');
            });
        }

		$('.myleecom-newsletter .jqTransformSelectWrapper ul li a').on('click', function(){
			newsletter() // check newsletter state
		});

		/* check newsletter state*/
		function newsletter(){
			var yes_sel = $('.myleecom-newsletter .jqTransformSelectWrapper ul li a[index="1"]') // positive selector

			if(!(yes_sel.hasClass('selected'))){ // "no" is selected
				$('.myleecom-newsletter .form-text').hide();
			}else{ // "yes" is selected
				$('.myleecom-newsletter .form-text').show();
			}
		}

		function order_toggle(){
			$('.order').each(function(i, el){
				var parent = $(el);
				var preview = parent.find('.order-preview');
				var detail = parent.find('.order-detail');

				detail.hide(); // hide details

				preview.on('click', '.open', function(){
					preview.slideUp();
					detail.slideDown();
				});
				detail.on('click', '.close', function(){
					detail.slideUp();
					preview.slideDown();
				});
			});
		}

	};
	/* ----- end --- MyLeecom     ------------------------------------------------------------------------------------------------------------------------------------- */

	// ------ Header -> Panel     -------------------------------------------------------------------------------------------------------------------------------------
	$(window).ready(function(){
		$('.panel-cart .cart-item .image').vAlign('img'); // vertical center product images
		checkCart();
		});
	$('#panel-nav .distributor a, #panel-nav .configurator a').tipsy({offset: -4, gravity: 'n'}); // Tooltips

	// Login - Lightbox

	// init
	leecom.initLogin = function() {
		var box = $('#colorbox')
		var content = $('#login-box')

		$.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, inline:true, href:"#login-box",
									onLoad: function(){
										var login_form = content.find('.login-form');
										var new_pass_form = content.find('#forgot-pass-form');
										var new_pass = content.find('.forgot-pass-form');

										//reset
										login_form.show();
										new_pass.hide();

										//change URL to current deeplink
										login_form.attr('action', window.location);

										content.on('click', '#get-new-pass', function() { // open new password form
										  login_form.hide()
										  new_pass_form.show()
										  $.fn.resizeLoginBox();
										});

										content.on('click', '#forgot-pass-confirmation .button', function() { // back to login
										  new_pass.hide()
										  login_form.show()
										  $.fn.resizeLoginBox();
										});
									},
									onComplete:function(){ $('form.login-form').jqTransform(); // replace from-elements
														   box.addClass('standard');
														   $.fn.resizeLoginBox();
														 },
									onClosed: function(){box.removeClass('standard');}

		});


		// resize login-box
		$.fn.resizeLoginBox = function() {
			$.fn.colorbox.resize({
									innerHeight:(content.outerHeight()),
									innerWidth:(content.outerWidth())
			});
		}
	}
	// call login-box
	$('#panel-nav, #main').on('click', '.open-login', function(e){
		leecom.initLogin();
		e.preventDefault();
	});
    // end Login - Lightbox



    // call colorbox to display val
    jQuery('.small.txt.info > a').colorbox({transition:'elastic', speed:300, opacity: 0.5, scrolling: false});


	// cart slider
	if($('#panel-nav .panel-cart').length !=0){
		panel_cart();
	}

	function panel_cart(){

		$("#panel-nav .panel-cart .cart-slider").carouFredSel({
					circular: false,
					infinite : false,
					auto : false,
					direction : 'up',
					height: 'variable',
					items : {visible:3,	height: 105},
					width : 304,
					scroll :{items: 1, easing: 'easeInOutQuart', duration : 500, wipe: true},
					prev : {button	: "#cart-prev"},
					next : {button	: "#cart-next"}
		});
		/*
		.find(".item-delete, this")
				.tipsy({offset: 3, gravity: 'e', delayIn: 10, delayOut: 10, container: 'http://www.leecom-aquarium.de/out/leecom/src/js/.has-drop.cart .drop'}) // bind the tooltip
				.on('click', function() { // delete item test
					$('.tipsy').remove(); // remove tooltip
					$(".panel-cart .cart-slider").trigger("removeItem", $(this).parent()); // remove the item from markup
					checkCart(); // check if cart is empty

		});
		*/
		$('#panel-nav .panel-cart').on('click', 'http://www.leecom-aquarium.de/out/leecom/src/js/.button.grey',function(){ // close cart on click
			$('#panel-nav .panel-cart').parent().addClass('hidden').delay(500).queue(function () {
				$('#panel-nav .panel-cart').parent().removeClass('hidden').dequeue();
			});
		});
	}

	// check if cart is empty
	function checkCart(){
		if($('.panel-cart .cart-slider .cart-item').length !=0){
			$('#panel-nav .cart').addClass('filled');
		}else{
			$('#panel-nav .cart').removeClass('filled');
		}
	}
	// ------ end --- Header -> Panel ------

	// i8-fix
	if($('html').hasClass('ie8')){
		$('.breadcrumb ul li:last-of-type').addClass('last')

	}

	// Facebook "send-button"
	$('.product-act-nav li.share')
		.mouseenter(
			function () {
				$(this).children('.bubble').show();
				$('#main').css('overflow-y', 'hidden'); // fix overflow-bug
				$('#main .product-detail-stage').find('.caroufredsel_wrapper, .stage-slider, .item').css('overflow', 'visible');

		}).mouseleave(
			function(){
				$(this).children('.bubble').hide();
				$('#main').css('overflow-y', 'visible');
				$('#main .product-detail-stage').find('.caroufredsel_wrapper, .stage-slider, .item').css('overflow', 'hidden')
			});

    //
    if(getUrlVar('_escaped_fragment_') != '' && ($.address.value() == '/' || $.address.value() == '')) {
        window.location.href = $.address.baseURL()+ "#!" + getUrlVar('_escaped_fragment_');
    }
});

function getUrlVar(key){
    var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
    return result && unescape(result[1]) || "";
}