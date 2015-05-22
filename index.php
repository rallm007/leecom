<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/header-cn.php");?>

<!-- Main-Area tes t -->
<div id="main">
    <div class="home-stage">
    <div class="page_margins pagination-wrapper">
        <div id="home-stage-pagination" class="stage-slider-pagination"></div>
    </div>
    <div class="home-stage-slider" data-pause="250000">
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/led_buehne.jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">水底的故事</h2>
                <h3 class="tk-myriad-pro tk-semibold">XP黑色</h3>
                <p>你总想时时关注爱鱼是如何点缀你空间的，<br />
它每天都是如何愉快度过每一日的。<br />
马上从XP系列水族箱开始你的水底探索之旅。</p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>cn/Products/Aquariums/XF-Line/XF-40-black-Int.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Pure Lifestyle']);">了解更多</a>
            </div>
        </div>
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/juwel_buehne_rekord_700(2).jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">新的颜色</h2>
                <h3 class="tk-myriad-pro tk-semibold">XT/XE白色</h3>
                <p>对于简洁干净的感觉，<br />
经典白色也是必选的。<br />
我们的XT/XE系列鱼缸白色从此问世。<br /></p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>cn/Products/Aquariums/Rekord-Line/Rekord-600-black-Int.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Your underwater world']);">了解更多</a>
            </div>
        </div>
            <div class="item" style="background-color:#ffffff; background-image:url('out/pictures/promo/home_slider_1(2).jpg');">
                            <div class="page_margins item-content">
                            <h2 class="tk-myriad-pro tk-light">静的味道</h2>
                <h3 class="tk-myriad-pro tk-semibold">HI挂缸</h3>
                <p>源于自然，聆听细细水流，<br />
淹没在寂静的空间，<br />
享受这静谧的韵味。</p>
                <a class="button ci-shadow" href="<?php echo $site_url;?>cn/Products/More/Marine/Skimmer/Juwel-SeaSkim-INT.php" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Marine']);">了解更多</a>
            </div>
        </div>
        </div>
    <a id="stage-prev" class="home-stage-nav ir" href="#">上一张</a>
    <a id="stage-next" class="home-stage-nav ir" href="#">下一张</a>
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
    <div align="center"><font size="5"><strong class="tk-myriad-pro tk-regular">做最好的产品一直是我们的宗旨与追求</strong>，不论国内，还是国外，<strong class="tk-myriad-pro tk-regular">我们都秉承同样的经营理念。让每一个客户都享有同质量的产品，最优质的服务。不断进取，不断创新。</strong><br />
    <span class="uppercase">与LEECOM一起</span>——<span class="uppercase">发现<strong class="tk-myriad-pro tk-regular">生活的美。</strong></span></font></div>
</h1>
        <!-- 2er Teaser -->
        <div class="clearfix home-teaser-wrap">
    <div class="grid_6 alpha home-teaser-big"><!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
        <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
            <img src="out/pictures/promo/2(6)(2).png" alt="Brochure 2014/2015">
        </div>
        <div class="grid_3 omega teaser-content">
            <h3>产品show</h3>
            <p>与我们一起感受水族点缀的MODERN世界</p>
            <a class="arrow-link" href="" title="start now">start now</a>
        </div>
    </div>
    <div class="grid_6 alpha home-teaser-big"><!-- um den "NEW"-Störer anzuzeigen hier die class "new" setzen -->
        <div class="grid_3 alpha teaser-img"> <!-- Bilder dürfen eine maximale Größe von 220x220 haben -->
            <img src="out/pictures/promo/teaser_2_1(1).png" alt="Automatic Feeder">
        </div>
        <div class="grid_3 omega teaser-content">
            <h3>新的色调</h3>
            <p>让我们一睹XT,XE系列经典白色的风姿</p>
            <a class="arrow-link" href="<?php echo $site_url;?>cn/Products/More/Accessories/Automatic-Feeder/EasyFeed-Automatic-Feeder.php" title="start now" onclick="_gaq.push(['_trackEvent', 'Teaserklicks Startseite', 'click', 'Automatic Feeder']);">start now</a>
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
                                                                                                
<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/footer-cn.php");?>
            
    <div id="sroverlay" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>
