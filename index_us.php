<?php include($_SERVER['DOCUMENT_ROOT'] . "/header-en.php"); ?>

<!-- Main-Area tes t -->
<div id="main">
    <div class="home-stage">
        <div class="page_margins pagination-wrapper">
            <div id="home-stage-pagination" class="stage-slider-pagination"></div>
        </div>
        <div class="home-stage-slider" data-pause="250000">
            <div class="item"
                 style="background-color:#ffffff; background-image:url('out/pictures/promo/led_buehne.jpg');">
                <div class="page_margins item-content">
                    <h2 class="tk-myriad-pro tk-light">The story under the water.</h2>

                    <h3 class="tk-myriad-pro tk-semibold">XP Black</h3>

                    <p>You would always want s to know how the fishes decorate your space,<br/>
                        and what’s going on under the water.<br/>
                        Start your traveling from LEECOM XP series aquarium.</p>
                    <a class="button ci-shadow"
                       href="<?php echo $site_url; ?>en/Products/Aquariums/XP-Line/XP-300-black.php#!leecom-xp300b"
                       onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Pure Lifestyle']);">More detail</a>
                </div>
            </div>
            <div class="item"
                 style="background-color:#ffffff; background-image:url('out/pictures/promo/leecom_buehne_rekord_700(2).jpg');">
                <div class="page_margins item-content">
                    <h2 class="tk-myriad-pro tk-light">New Color</h2>

                    <h3 class="tk-myriad-pro tk-semibold">XT/XE White</h3>

                    <p>Choose classic white for a clean look and feel<br/>
                        <br/>
                        <br/></p>
                    <a class="button ci-shadow"
                       href="<?php echo $site_url; ?>en/Products/Aquariums/XT-Line/XT-300-black.php#!leecom-xt300w"
                       onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Your underwater world']);">More detail</a>
                </div>
            </div>
            <div class="item"
                 style="background-color:#ffffff; background-image:url('out/pictures/promo/home_slider_1(2).jpg');">
                <div class="page_margins item-content">
                    <h2 class="tk-myriad-pro tk-light">The flavor of the static</h2>

                    <h3 class="tk-myriad-pro tk-semibold">HI Hang-on filter</h3>

                    <p>Sterms from the nature,<br/>
                        to listen carefully currents,<br/>
                        submerged in the silent space,enjoy the quiet charm.</p>
                    <a class="button ci-shadow" href="<?php echo $site_url; ?>en/Products/More/HI-330.php"
                       onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Marine']);">More detail</a>
                </div>
            </div>
        </div>
        <a id="stage-prev" class="home-stage-nav ir" href="#">Prev</a>
        <a id="stage-next" class="home-stage-nav ir" href="#">Next</a>
    </div>

    <script>
        $(function () {
            leecom.homeSlider();
        });
    </script>
    <div class="page_margins">
        <div class="content clearfix">
            <!-- Headline -->
            <h1 class="home-welcome tk-myriad-pro tk-light">
                <div align="center"><font size="5"><strong class="tk-myriad-pro tk-regular">Only produce the best is our mission and business concept all the time.keep moving</strong>,
                        <strong class="tk-myriad-pro tk-regular">making new innovations</strong><br/>
                        <span class="uppercase">Discover the beautiful</span><span class="uppercase"><strong
                                class="tk-myriad-pro tk-regular"> of live with LEECOM.</strong></span></font></div>
            </h1>
            <!-- 2er Teaser -->
            <div class="clearfix home-teaser-wrap">
                <div class="grid_6 alpha home-teaser-big">
                    <!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
                    <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
                        <img src="out/pictures/promo/proShow.jpg" alt="产品Show">
                    </div>
                    <div class="grid_3 omega teaser-content">
                        <h3>Show room</h3>

                        <p>Experience modern living in aquarium environment.</p>
                        <a class="arrow-link" href="<?php echo $site_url . 'en/Products/index.php'; ?>"
                           title="start now">Start now</a>
                    </div>
                </div>
                <div class="grid_6 alpha home-teaser-big">
                    <!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
                    <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
                        <img src="out/pictures/promo/newcolor_1.png" alt="新的色调">
                    </div>
                    <div class="grid_3 omega teaser-content">
                        <h3>New colour</h3>

                        <p>Let’s view the elegent beauty of classic white</p>
                        <a class="arrow-link"
                           href="<?php echo $site_url . 'en/Products/Aquariums'; ?>/XT-Line/XT-300-black.php#!leecom-xt300w"
                           title="start now"
                           onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Automatic Feeder']);">Start now</a>
                    </div>
                </div>
            </div>
            <!-- 3er Teaser -->
        </div>
    </div>
    <script>
        $(window).load(function () {
            // vertikale Zentrierung der der Bilder in den 2er-Teasern
            // -> Sinnvoll? oder andere Positionierungs-Logik, oder Bilder immer auf Max-Format(220x220) zugeschnitten?
            $('.home-teaser-big .teaser-img').vAlign('img');
        });
    </script>

</div>
<!-- /Main-Area -->

<!-- Footer-Area -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer-en.php"); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>
