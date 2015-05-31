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
                <h1 class="tk-myriad-pro tk-light">XE series</h1>
                <a id="thumb-product-prev" class="ir prod-thumb-nav" href="#">上一页</a>

                <div class="slider-wrapper">
                    <div class="product-thumbnail-slider clearfix">
                        <a href="#leecom-xe300b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe300.png" alt="XE-300 ">
                            XE-300
                        </a>
                        <a href="#leecom-xe360b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe360.png" alt="XE-360 ">
                            XE-360
                        </a>
                        <a href="#leecom-xe400b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe400.png" alt="XE-400 ">
                            XE-400
                        </a>
                        <a href="#leecom-xe460b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe460.png" alt="XE-460 ">
                            XE-460
                        </a>
                        <a href="#leecom-xe600b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe600.png" alt="XE-600 ">
                            XE-600
                        </a>
                        <a href="#leecom-xe800b" class="caroufredsel">
                            <!-- (href="#vision180") ID dient zur Navigation zum jeweiligen Produkt im Main-Slider (siehe zeile 60)-->
                            <img data-src="<?php echo $site_url; ?>out/b/80/xe800.png" alt="XE-800 ">
                            XE-800
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
            <div class="item" id="leecom-xe300b"
                 data-variants="leecom-xe300b leecom-xe300w leecom-000000000000001550 leecom-000000000000001700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-300</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe300b" title="LEECOM | XE-300 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe300_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe300_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe300w" title="LEECOM | XE-300 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe300_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe300_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-300 </span></h2>
                        <!-- varianten headline -->
                        <p>Simple yet elegant, modern and yet elegant. Simple, stylish, elegance is synonymous with our。</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-300-black.php#!leecom-xe300b" title="XE-300 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-300-black.php#!leecom-xe300w" title="XE-300 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-300 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xe360b"
                 data-variants="leecom-xe360b leecom-xe360w leecom-000000000000004550 leecom-000000000000004700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-360</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe360b" title="LEECOM | XE-360 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe360_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe360_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe360w" title="LEECOM | XE-360 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe360_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe360_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-360 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-360-black.php#!leecom-xe360b" title="XE-360 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-180-white.php#!leecom-xe360w" title="XE-360 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-360 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xe400b"
                 data-variants="leecom-xe400b leecom-xe400w leecom-000000000000003550 leecom-000000000000003700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-400</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe400b" title="LEECOM | XE-400 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe400_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe400_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe400w" title="LEECOM | XE-400 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe400_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe400_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-400 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-400-black.php#!leecom-xe400b" title="XE-400 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-240-white.php#!leecom-xe400w" title="XE-400 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-400 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xe460b"
                 data-variants="leecom-xe460b leecom-xe460w leecom-000000000000007550 leecom-000000000000007700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-460</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe460b" title="LEECOM | XE-460 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe460_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe460_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe460w" title="LEECOM | XE-460 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe460_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe460_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-460 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-600-black.php#!leecom-xe460b" title="XE-460 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-300-white.php#!leecom-xe460w" title="XE-460 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-460 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>
            <!-- ende-> Slider-Item (Produkt-Variante) -->
            <!-- Slider-Item (Produkt-Variante) -->
            <div class="item" id="leecom-xe600b"
                 data-variants="leecom-xe600b leecom-xe600w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-600</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe600b" title="LEECOM | XE-600 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe600_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe600_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe600w" title="LEECOM | XE-600 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe600_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe600_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-600 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-400-black.php#!leecom-xe600b" title="XE-600 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-400-white.php#!leecom-xe600w" title="XE-600 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-600 "></div>
                <!-- ende-> versteckte Elemente -->
            </div>

            <div class="item" id="leecom-xe800b"
                 data-variants="leecom-xe800b leecom-xe800w leecom-000000000000005550 leecom-000000000000005700">
                <!-- hier als id den Produktnamen(z.B.) setzen -> wichtig für navigation: in thumbnail-navigation (href="#vision180") -->
                <div class="page_margins item-content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb nav fl clearfix">
                        <ul class="fl">
                            <li>You are here:</li>
                            <li>XE series</li>
                            <li>XE-800</li>
                        </ul>
                    </div>
                    <!-- ende -> Breadcrumb -->
                    <!-- Produkt-Bilder (einzelne Dekore eines Aquariums) -->
                    <div class="product-image">
                        <div class="product-image-wrapper" data-id="leecom-xe800b" title="LEECOM | XE-800 黑色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe800_1173_b.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe800_378_b.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                        <div class="product-image-wrapper" data-id="leecom-xe800w" title="LEECOM | XE-800 白色">
                            <a href="<?php echo $site_url; ?>out/img/xe/xe800_1173_w.jpg" class="cloud-zoom">
                                <!-- großes Bild für Zoom (wird im Zoom-Fenster angezeigt) im 'href' (gleiche Proportion, wie das "kleine Vorschaubild")  -->
                                <img data-src="<?php echo $site_url; ?>out/img/xe/xe800_378_w.png" alt=""><!-- auf der Seite sichtbares "Vorschaubild" des Produktes -->
                            </a>
                        </div>
                    </div>
                    <!-- ende-> Produkt-Bilder -->
                    <!-- rechter Bereich im Slider neben dem Produktbild -->
                    <div class="right">
                        <h2 class="tk-myriad-pro tk-light"><span class="product-line green">XE-800 </span></h2>
                        <!-- varianten headline -->
                        <p>Elegant but discreet, luxurious but not cumbersome, inadvertently create a romantic and charming atmosphere.</p>
                        <!-- Dekor-/Farb-Auswahl -->
                        <div class="variations nav clearfix">
                            <div class="oh">
                                <ul>
                                    <li><a href="XE-400-black.php#!leecom-xe800b" title="XE-800 黑色"><img
                                                src="<?php echo $site_url; ?>out/pictures/master/global/2/1.png"
                                                width="33" height="33" alt=""></a></li>
                                    <li><a href="XE-400-white.php#!leecom-xe800w" title="XE-800 白色"><img
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
                                         src="<?php echo $site_url; ?>out/b/54/xp300.png" alt="XE-800 "></div>
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
                // 	var sUrl = "https://www.leecom.en/en/Products/Aquariums/XE-Line/XE-300-black.php#!leecom-xe300bcl=srajax";
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
            <li><a href="#" title="">XE series</a></li>
        </ul>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/footer-en.php"); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>