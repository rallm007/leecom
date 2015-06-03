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
                <h1 class="tk-myriad-pro tk-light">XT series</h1>
                <a id="thumb-product-prev" class="ir prod-thumb-nav" href="#">Prev</a>

                <div class="slider-wrapper">
                    <div class="product-thumbnail-slider clearfix">
                        <a href="#leecom-xt300b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/img/xt/xt300_378_b" alt="XT-300 ">
                            XT-300
                        </a>
                        <a href="#leecom-xt360b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xt360.png" alt="XT-360 ">
                            XT-360
                        </a>
                        <a href="#leecom-xt400b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xt400.png" alt="XT-400 ">
                            XT-400
                        </a>
                        <a href="#leecom-xt460b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xt460.png" alt="XT-460 ">
                            XT-460
                        </a>
                        <a href="#leecom-xt600b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xt600.png" alt="XT-600 ">
                            XT-600
                        </a>
                        <a href="#leecom-xt800b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xt800.png" alt="XT-800 ">
                            XT-800
                        </a>
                    </div>
                </div>
                <a id="thumb-product-next" class="ir prod-thumb-nav" href="#">Next</a>
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
            <div class="item" id="leecom-xt300b"
                 data-variants="leecom-xt300b leecom-xt300w leecom-000000000000001550 leecom-000000000000001700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-300</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt300b" title="LEECOM | XT-300 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt300_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt300_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt300w" title="LEECOM | XT-300 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt300_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt300_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-300 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-300-black.php#!leecom-xt300b" title="XT-300 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-125-white.php#!leecom-xt300w" title="XT-300 White"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XT-300 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xt360b"
                 data-variants="leecom-xt360b leecom-xt360w leecom-000000000000004550 leecom-000000000000004700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-360</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt360b" title="LEECOM | XT-360 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt360_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt360_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt360w" title="LEECOM | XT-360 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt360_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt360_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-360 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-360-black.php#!leecom-xt360b" title="XT-360 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-180-white.php#!leecom-xt360w" title="XT-360 White"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XT-360 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xt400b"
                 data-variants="leecom-xt400b leecom-xt400w leecom-000000000000003550 leecom-000000000000003700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-400</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt400b" title="LEECOM | XT-400 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt400_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt400_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt400w" title="LEECOM | XT-400 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt400_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt400_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-400 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-400-black.php#!leecom-xt400b" title="XT-400 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-240-white.php#!leecom-xt400w" title="XT-400 White"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XT-400 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xt460b"
                 data-variants="leecom-xt460b leecom-xt460w leecom-000000000000007550 leecom-000000000000007700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-460</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt460b" title="LEECOM | XT-460 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt460_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt460_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt460w" title="LEECOM | XT-460 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt460_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt460_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-460 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-600-black.php#!leecom-xt460b" title="XT-460 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-300-white.php#!leecom-xt460w" title="XT-460 White"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XT-460 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xt600b"
                 data-variants="leecom-xt600b leecom-xt600w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-600</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt600b" title="LEECOM | XT-600 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt600_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt600_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt600w" title="LEECOM | XT-600 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt600_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt600_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-600 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-400-black.php#!leecom-xt600b" title="XT-600 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-400-white.php#!leecom-xt600w" title="XT-600 White"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XT-600 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>

            <div class="item" id="leecom-xt800b"
                 data-variants="leecom-xt800b leecom-xt800w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XT series</li>
                            <li>XT-800</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xt800b" title="LEECOM | XT-800 Black">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt800_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt800_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xt800w" title="LEECOM | XT-800 White">
                            <a href="<?php echo $site_url; ?>out/img/xt/xt800_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xt/xt800_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XT-800 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XT-400-black.php#!leecom-xt800b" title="XT-800 Black"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XT-400-white.php#!leecom-xt800w" title="XT-800 White"><img
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
                                         src="" alt="XT-800 "></div>
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
                // 	var sUrl = "http://www.leecom.en/en/Products/Aquariums/XT-Line/XT-300-black.php#!leecom-xt300bcl=srajax";
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
                <a class="arrow-link top fr scroll-link" href="#header">Go to top</a>
            </div>
        </div>
    </div>
</div>
<!-- /Main-Area -->
<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
            <li><a href="../../index.php" title="PRODUCTS">PRODUCTS</a></li>
            <li><a href="#" title="">XT series</a></li>
        </ul>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/footer-en.php"); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>