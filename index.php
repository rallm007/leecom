<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/header-en.php");?>

<!-- Main-Area -->
<div id="main">
    <div class="home-stage">
    <div class="page_margins pagination-wrapper">
        <div id="home-stage-pagination" class="stage-slider-pagination"></div>
    </div>
    <div class="home-stage-slider" data-pause="250000">
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/led_buehne.jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">Pure Lifestyle</h2>
                <h3 class="tk-myriad-pro tk-semibold">Vio 40</h3>
                <p>The Vio 40 from JUWEL Aquarium creates<br />
 a large glimpse of a fascinating underwater <br />
world despite its low volume.</p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>en/Products/Aquariums/Vio-Line/Vio-40-black-Int.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Pure Lifestyle']);">Read more</a>
            </div>
        </div>
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/juwel_buehne_rekord_700(2).jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">Your underwater world</h2>
                <h3 class="tk-myriad-pro tk-semibold">Rekord 700 White</h3>
                <p>You always wanted your own subwater <br />
world designed, varied and imaginative.<br />
Then start now with a rekord 700 in<br />
the world of JUWEL Aquariums.</p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>en/Products/Aquariums/Rekord-Line/Rekord-600-black-Int.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Your underwater world']);">Read more</a>
            </div>
        </div>
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/home_slider_1(2).jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">Marine</h2>
                <h3 class="tk-myriad-pro tk-semibold">Enjoy the Sea</h3>
                <p>Use the JUWEL Skimmer 3.0 and Marine tubes<br />
to turn your JUWEL Aquarium into a saltwater <br />
aquarium in next to no time.</p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>en/Products/More/Marine/Skimmer/Juwel-SeaSkim-INT.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Marine']);">Read more</a>
            </div>
        </div>
        </div>
    <a id="stage-prev" class="home-stage-nav ir" href="#">Prev</a>
    <a id="stage-next" class="home-stage-nav ir" href="#">Next</a>
</div>

<script>
    $(function(){
        juwel.homeSlider();
    });
</script>
<div class="page_margins">
    <div class="content clearfix">
        <!-- Headline -->
<h1 class="home-welcome tk-myriad-pro tk-light">
    <div align="center"><font size="5"><strong class="tk-myriad-pro tk-regular">Over 40 years experience</strong> in aquarium manufacturing, <strong class="tk-myriad-pro tk-regular">the most advanced production facilities</strong> and <strong class="tk-myriad-pro tk-regular">the highest certificated standards</strong><span class="uppercase">. Juwel</span> Aquarium — <span class="uppercase">Discover <strong class="tk-myriad-pro tk-regular">Life</strong></span></font></div>
</h1>
        <!-- 2er Teaser -->
        <div class="clearfix home-teaser-wrap">
    <div class="grid_6 alpha home-teaser-big"><!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
        <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
            <img src="out/pictures/promo/2(6)(2).png" alt="Brochure 2014/2015">
        </div>
        <div class="grid_3 omega teaser-content">
            <h3>Brochure 2014/2015</h3>
            <p>Experience modern living in aquarium environment.</p>
            <a class="arrow-link" href="" title="Discover Now">Discover Now</a>
        </div>
    </div>
    <div class="grid_6 alpha home-teaser-big"><!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
        <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
            <img src="out/pictures/promo/teaser_2_1(1).png" alt="Automatic Feeder">
        </div>
        <div class="grid_3 omega teaser-content">
            <h3>Automatic Feeder</h3>
            <p><span id="result_box" class="short_text" lang="en"><span class="hps">Very practical</span> <span class="hps">and</span> <span class="hps">easy</span> <span class="hps">to use.</span></span></p>
            <a class="arrow-link" href="<?php echo $site_url;?>en/Products/More/Accessories/Automatic-Feeder/EasyFeed-Automatic-Feeder.php" title="Automatic Feeder" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Automatic Feeder']);">Automatic Feeder</a>
        </div>
    </div>
         </div>
         <!-- 3er Teaser -->
    </div>
</div>
<script>
    $(window).load(function(){
            // vertikale Zentrierung der der Bilder in den 2er-Teasern
        // -> Sinnvoll? oder andere Positionierungs-Logik, oder Bilder immer auf Max-Format(220x220) zugeschnitten?
        $('.home-teaser-big .teaser-img').vAlign('img');
    });
</script>

</div>
<!-- /Main-Area -->

<!-- Footer-Area -->
                                                                                                
<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/footer-en.php");?>
            
    <div id="sroverlay" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>