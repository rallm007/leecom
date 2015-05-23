<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/header-cn.php"); ?>

<!-- Main-Area -->
<div id="main">
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '532575290153827',                        // App ID from the app dashboard
                status: true,                                 // Check Facebook Login status
                xfbml: true                                  // Look for social plugins on the page
            });
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "../../../../../connect.facebook.net/en_GB/all.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


    <div class="product-thumbnail-navi clearfix closed">
        <div class="page_margins">
            <div class="inner-wrapper">
                <h1 class="tk-myriad-pro tk-light">XQ系列</h1>
                <a id="thumb-product-prev" class="ir prod-thumb-nav" href="#">上一页</a>

                <div class="slider-wrapper">
                    <div class="product-thumbnail-slider clearfix">
                        <a href="#juwel-xq200lv" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/lv/80/xq200.png" alt="XQ-200 ">
                            XQ-200
                        </a>
                        <a href="#juwel-xq250w" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/lv/80/xq250.png" alt="XQ-250 ">
                            XQ-250
                        </a>
                    </div>
                </div>
                <a id="thumb-product-next" class="ir prod-thumb-nav" href="#">下一页</a>
            </div>

        </div>
    </div>

    <!-- Stage & Slider -->
    <div class="product-detail-stage"
         style="background-color:#00508c; background-image:url(<?php echo $site_url; ?>out/juwel/src/images/all/content-product-detail-stage_bgImage.jpg)">
        <!-- Hier kann der "Haupt-Hintergrund" gesetzt werden -->
        <!-- Slider Pagination (wird durch js generiert) -->
        <div class="page_margins stage-top-wrapper">
            <div class="stage-slider-pagination"></div>
        </div>
        <!-- ende -> Slider Pagination -->
        <!-- Main-Stage-Slider -->
        <div class="stage-slider">
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="juwel-xq200f" data-variants="juwel-xq200f">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XQ系列</li>
                            <li>XQ-200</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="juwel-xq200f" title="LEECOM | XQ-200 粉红色">
                            <a href="<?php echo $site_url; ?>out/f/1173/xq200.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/f/378/xq200.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq200l" title="LEECOM | XQ-200 蓝色">
                            <a href="<?php echo $site_url; ?>out/l/1173/xq200.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/l/378/xq200.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq200lv" title="LEECOM | XQ-200 绿色">
                            <a href="<?php echo $site_url; ?>out/lv/1173/xq200.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/lv/378/xq200.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XQ-200 </span></h2>
                        <!-- varianten headline -->
                        <p>节能、环保，轻松加水投饲，精巧、简约，尤其适合办公室、家居的桌面摆设。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XQ-125-white.php#!juwel-xq200f" title="XQ-200 粉红色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/2.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-125-white.php#!juwel-xq200l" title="XQ-200 蓝色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/3.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-125-white.php#!juwel-xq200lv" title="XQ-200 绿色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/5.png"
                                                width="33" height="33" alt=""></a></li>
                                </ul>
                            </div>
                            <!-- Auswahl-Slider unter runden Dekor-Bildern -->
                            <div class="variations-slider-wrapper">
                                <div class="variations-slider"></div>
                            </div>
                        </div>
                        <!-- ende-> Dekor-/Farb-Auswahl -->
                        <!-- Facebook -->


                        <!-- ende-> Facebook -->
                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XQ-200 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="juwel-xq250f" data-variants="juwel-xq250f">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XQ系列</li>
                            <li>XQ-250</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="juwel-xq250f" title="LEECOM | XQ-250 粉红色">
                            <a href="<?php echo $site_url; ?>out/f/1173/xq250.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/f/378/xq250.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq250l" title="LEECOM | XQ-250 蓝色">
                            <a href="<?php echo $site_url; ?>out/l/1173/xq250.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/l/378/xq250.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq250lv" title="LEECOM | XQ-250 绿色">
                            <a href="<?php echo $site_url; ?>out/lv/1173/xq250.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/lv/1173/xq250.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XQ-250 </span></h2>
                        <!-- varianten headline -->
                        <p>节能、环保，轻松加水投饲，精巧、简约，尤其适合办公室、家居的桌面摆设。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XQ-125-white.php#!juwel-xq250f" title="XQ-250 粉红色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/2.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-125-white.php#!juwel-xq250l" title="XQ-250 蓝色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/3.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-180-white.php#!juwel-xq250lv" title="XQ-250 绿色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/5.png"
                                                width="33" height="33" alt=""></a></li>
                                </ul>
                            </div>
                            <!-- Auswahl-Slider unter runden Dekor-Bildern -->
                            <div class="variations-slider-wrapper">
                                <div class="variations-slider"></div>
                            </div>
                        </div>
                        <!-- ende-> Dekor-/Farb-Auswahl -->
                        <!-- Facebook -->


                        <!-- ende-> Facebook -->
                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XQ-250 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>

            <div class="item" id="juwel-xq300f" data-variants="juwel-xq250f">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XQ系列</li>
                            <li>XQ-250</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="juwel-xq300f" title="LEECOM | XQ-300 粉红色">
                            <a href="<?php echo $site_url; ?>out/f/1173/xq300.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/f/378/xq300.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq300l" title="LEECOM | XQ-300 蓝色">
                            <a href="<?php echo $site_url; ?>out/l/1173/xq300.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/l/378/xq300.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="juwel-xq300lv" title="LEECOM | XQ-300 绿色">
                            <a href="<?php echo $site_url; ?>out/lv/1173/xq300.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/lv/1173/xq300.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XQ-300 </span></h2>
                        <!-- varianten headline -->
                        <p>节能、环保，轻松加水投饲，精巧、简约，尤其适合办公室、家居的桌面摆设。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>

                                    <li><a href="XQ-125-white.php#!juwel-xq250f" title="XQ-300 粉红色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/2.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-125-white.php#!juwel-xq250l" title="XQ-300 蓝色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/3.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XQ-180-white.php#!juwel-xq250lv" title="XQ-300 绿色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/5.png"
                                                width="33" height="33" alt=""></a></li>
                                </ul>
                            </div>
                            <!-- Auswahl-Slider unter runden Dekor-Bildern -->
                            <div class="variations-slider-wrapper">
                                <div class="variations-slider"></div>
                            </div>
                        </div>
                        <!-- ende-> Dekor-/Farb-Auswahl -->
                        <!-- Facebook -->


                        <!-- ende-> Facebook -->
                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XQ-250 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->

            <!-- ende-> Slider-Item (Produkt-Variante) -->
        </div>
        <a id="stage-prev" class="stage-nav" href="#"></a>
        <a id="stage-next" class="stage-nav" href="#"></a>
    </div>
    <!-- end  Stage & Slider -->

    <script>
        $(function () {

            // Content laden für Tab-Container und Cross-Selling-Slider für einzelne Produkte
            // wird aufgerufen, wenn der Produkt-Slider (Caroussell) bewegt wird und wenn der Auswahl-Slider der Dekore bewegt wird
            loadContentByArtId = function (sArtId) {

                var iArtId = sArtId.substr(6, 5);
                // alert(iArtId);
                //$('#sroverlay').show();
                var contentBox = $('#ajax-content')
                var loader = $('#product-loading-content');

                // vor dem request
                contentBox.slideUp('slow') // alten content ausblenden
                loader.show()			   // loader einblenden

                // url für Request
                // var url = 'http://www.juwel-aquarium.de/partials/produkt-detail/ajax-content/ajax.php/'
                var sData = "cl=srajax&fnc=getArticleContent&tpl=srarticlecontent.tpl&anid=" + iArtId + "";

                //data: {artId: iArtId},

                // if(window.location.protocol.indexOf("https") >= 0) {
                // 	var sUrl = "https://www.juwel-aquarium.de/cn/Products/Aquariums/XQ-Line/XQ-300-black.php#!juwel-xq200wcl=srajax";
                // } else {
                var sUrl = "../ajax-content/" + iArtId + ".php";
                // }

                // ajax request
                $.ajax({
                    type: "POST",
                    url: sUrl,
                    data: sData,
                    complete: function (result) {

                        var data = result.responseText;
                        // nach request
                        contentBox.empty(); // alten Content löschen
                        contentBox.append(data); // Box mit neuen Conetent befüllen
                        initTabContent(); // Aufbau der Tabs
                        loader.fadeOut('slow', 'easeInOutQuart', function () { // loader ausblenden
                            contentBox.slideDown(1000);// neuen Content einblenden
                        })
                        //$('#sroverlay').hide();
                    }
                });
            }

            // js für aufbau der Tabs und des Cross-Selling-Sliders
            initTabContent = function () {

                $('#ajax-content .tabs').tabs(); // jquery-ui tabs
                juwel.productTabContent();
                $.fn.slideToggler(); // Faq-Accordion in Tab-Container
                juwel.accessoriesSlider({width: 873}); // Cross-Selling-Slider

            }

            // übriges js für die Seite (in functions.js)
            juwel.detailStage();
        });
    </script>


    <div class="page_margins">
        <div class="content clearfix">
            <div id="ajax-content" style="position: relative; display: block;"><!-- Tab-Container -->

            </div>
            <div id="product-loading-content"></div>
            <div class="go-top clear clearfix">
                <a class="arrow-link top fr scroll-link" href="#header">回到页首</a>
            </div>
        </div>
    </div>
</div>
<!-- /Main-Area -->
<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
            <li><a href="../../index.php" title="产品展示">产品展示</a></li>
            <li><a href="#" title="">XQ系列</a></li>
        </ul>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/footer-cn.php"); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>