<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/header-en.php"); ?>

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
                <h1 class="tk-myriad-pro tk-light">XC series</h1>
                <a id="thumb-product-prev" class="ir prod-thumb-nav" href="#">上一页</a>

                <div class="slider-wrapper">
                    <div class="product-thumbnail-slider clearfix">
                        <a href="#leecom-xc300b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc300.png" alt="XC-300 ">
                            XC-300
                        </a>
                        <a href="#leecom-xc360b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc360.png" alt="XC-360 ">
                            XC-360
                        </a>
                        <a href="#leecom-xc400b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc400.png" alt="XC-400 ">
                            XC-400
                        </a>
                        <a href="#leecom-xc460b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc460.png" alt="XC-460 ">
                            XC-460
                        </a>
                        <a href="#leecom-xc600b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc600.png" alt="XC-600 ">
                            XC-600
                        </a>
                        <a href="#leecom-xc800b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/80/xc800.png" alt="XC-800 ">
                            XC-800
                        </a>
                    </div>
                </div>
                <a id="thumb-product-next" class="ir prod-thumb-nav" href="#">下一页</a>
            </div>

        </div>
    </div>

    <!-- Stage & Slider -->
    <div class="product-detail-stage"
         style="background-color:#00508c; background-image:url(<?php echo $site_url; ?>out/leecom/src/images/all/content-product-detail-stage_bgImage.jpg)">
        <!-- Hier kann der "Haupt-Hintergrund" gesetzt werden -->
        <!-- Slider Pagination (wird durch js generiert) -->
        <div class="page_margins stage-top-wrapper">
            <div class="stage-slider-pagination"></div>
        </div>
        <!-- ende -> Slider Pagination -->
        <!-- Main-Stage-Slider -->
        <div class="stage-slider">
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xc300b"
                 data-variants="leecom-xc300b leecom-xc300w leecom-000000000000001550 leecom-000000000000001700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-300</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc300b" title="LEECOM | XC-300 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc300_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc300_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc300w" title="LEECOM | XC-300 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc300_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc300_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-300 </span></h2>
                        <!-- varianten headline -->
                        <p>简洁而不失大方，现代而不失典雅。简约，时尚、优雅是我们的代名词。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-300-black.php#!leecom-xc300b" title="XC-300 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-125-white.php#!leecom-xc300w" title="XC-300 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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
                                         src="<?php echo $site_url; ?>out/img/54/xp300.png" alt="XC-300 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xc360b"
                 data-variants="leecom-xc360b leecom-xc360w leecom-000000000000004550 leecom-000000000000004700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-360</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc360b" title="LEECOM | XC-360 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc360_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc360_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc360w" title="LEECOM | XC-360 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc360_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc360_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-360 </span></h2>
                        <!-- varianten headline -->
                        <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-360-black.php#!leecom-xc360b" title="XC-360 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-180-white.php#!leecom-xc360w" title="XC-360 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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
                                         src="'" alt="XC-360 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xc400b"
                 data-variants="leecom-xc400b leecom-xc400w leecom-000000000000003550 leecom-000000000000003700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-400</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc400b" title="LEECOM | XC-400 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc400_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc400_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc400w" title="LEECOM | XC-400 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc400_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc400_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-400 </span></h2>
                        <!-- varianten headline -->
                        <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-400-black.php#!leecom-xc400b" title="XC-400 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-240-white.php#!leecom-xc400w" title="XC-400 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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

                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="" alt="XC-400 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xc460b"
                 data-variants="leecom-xc460b leecom-xc460w leecom-000000000000007550 leecom-000000000000007700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-460</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc460b" title="LEECOM | XC-460 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc460_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc460_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc460w" title="LEECOM | XC-460 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc460_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc460_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-460 </span></h2>
                        <!-- varianten headline -->
                        <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-600-black.php#!leecom-xc460b" title="XC-460 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-300-white.php#!leecom-xc460w" title="XC-460 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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

                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="" alt="XC-460 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xc600b"
                 data-variants="leecom-xc600b leecom-xc600w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-600</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc600b" title="LEECOM | XC-600 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc600_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc600_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc600w" title="LEECOM | XC-600 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc600_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc600_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-600 </span></h2>
                        <!-- varianten headline -->
                        <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-400-black.php#!leecom-xc600b" title="XC-600 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-400-white.php#!leecom-xc600w" title="XC-600 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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

                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="" alt="XC-600 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>

            <div class="item" id="leecom-xc800b"
                 data-variants="leecom-xc800b leecom-xc800w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>您的位置:</li>
                            <li>XC series</li>
                            <li>XC-800</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xc800b" title="LEECOM | XC-800 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc800_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc800_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xc800w" title="LEECOM | XC-800 白色">
                            <a href="<?php echo $site_url; ?>out/img/xc/xc800_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xc/xc800_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XC-800 </span></h2>
                        <!-- varianten headline -->
                        <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XC-400-black.php#!leecom-xc800b" title="XC-800 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XC-400-white.php#!leecom-xc800w" title="XC-800 白色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/4.png"
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

                    </div>
                </div>
                <!-- versteckte Elemente -->
                <div class="hidden"><img class="nav-product-preview-image"
                                         src="" alt="XC-800 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
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

                var iArtId = sArtId.substr(7, 5);
                // alert(iArtId);
                //$('#sroverlay').show();
                var contentBox = $('#ajax-content')
                var loader = $('#product-loading-content');

                // vor dem request
                contentBox.slideUp('slow') // alten content ausblenden
                loader.show()			   // loader einblenden

                // url für Request
                // var url = 'http://www.leecom.en/partials/produkt-detail/ajax-content/ajax.php/'
                var sData = "cl=srajax&fnc=getArticleContent&tpl=srarticlecontent.tpl&anid=" + iArtId + "";

                //data: {artId: iArtId},

                // if(window.location.protocol.indexOf("https") >= 0) {
                // 	var sUrl = "https://www.leecom.en/en/Products/Aquariums/XC-Line/XC-300-black.php#!juwel-xc300bcl=srajax";
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
                leecom.productTabContent();
                $.fn.slideToggler(); // Faq-Accordion in Tab-Container
                leecom.accessoriesSlider({width: 873}); // Cross-Selling-Slider

            }

            // übriges js für die Seite (in functions.js)
            leecom.detailStage();
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
            <li><a href="#" title="">XC series</a></li>
        </ul>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/footer-en.php"); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>