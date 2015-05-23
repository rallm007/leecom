<?php $site_url = 'http://' . $_SERVER['SERVER_NAME'] . '/leecom/'; ?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]>
<html lang="cn" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>
<html lang="cn" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="cn" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="cn" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="fr" class="no-js" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
    <title>LEECOM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1024"/>
    <meta name="description" content="XP-300 black -">
    <meta name="keywords" content="xp-300, 125, black, products, aquariums, line">
    <meta property="og:locale" content="fr_FR"/>
    <meta property="fb:app_id" content="532575290153827"/>
    <meta property="og:title" content="LEECOM"/>
    <meta property="og:description" content="XP-300 black -"/>
    <meta property="og:type" content="og:product"/>
    <meta property="og:image" content="<?php echo $site_url; ?>out/pictures/master/product/1/xp300.png"/>
    <link rel="shortcut icon" href="<?php echo $site_url; ?>out/pictures/master/global/1/favicon.ico">
    <link rel="stylesheet" href="<?php echo $site_url; ?>out/leecom/src/css/styles.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>out/leecom/src/css/fr-FR.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>out/leecom/src/css/colorbox.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>out/leecom/src/css/jquery.jscrollpane.css">
    <script src="<?php echo $site_url; ?>out/leecom/src/js/libs/jquery.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/libs/jquery-ui-custom.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/libs/modernizr-1.7.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo $site_url;?>out/leecom/src/js/libs/selectivizr-min.js" type="text/javascript"></script>
    <script src="<?php echo $site_url;?>out/leecom/src/js/plugins/jquery-extra-selectors.js"
            type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $site_url;?>out/leecom/src/css/ie.css">
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="<?php echo $site_url;?>out/leecom/src/css/ie7.css">
    <script src="<?php echo $site_url;?>out/leecom/src/js/plugins/ie7-patch.js"></script>
    <![endif]-->
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.address.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.easing-1.3.pack.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.mousewheel.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/mwheelIntent.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.touchwipe.1.1.1.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.carouFredSel.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/cloud-zoom.1.0.2_mod.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.jqtransform.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.tipsy.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.colorbox-min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/plugins/jquery.jscrollpane.min.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/libs/infobox_packed.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/libs/markerwithlabel_packed.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/functions.js"></script>
    <script src="<?php echo $site_url; ?>out/leecom/src/js/distr_finder.js"></script>

    <xbasehref
    ="<?php echo $site_url; ?>">
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-10671386-1']);
        _gaq.push(['_setDomainName', <?php echo $site_url;?>]);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_gat._anonymizeIp']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www/') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
        if (jQuery.browser.msie && jQuery.browser.version == 6.0) {
            window.location = "<?php echo $site_url;?>ie6.php";
        }

        function goto_cn() {
            var _url = (this.location.href).replace('en', 'cn');
            this.location.href = _url.replace('lang=1', 'lang=2');
        }

        function goto_en() {
            var _url = (this.location.href).replace('cn', 'en');
            _url2 = _url.replace('lang=2', 'lang=1');
            if (this.location.href == _url2) {
                this.location.href = "<?php echo $site_url;?>" + "index.php-lang=1&.php";
            } else {
                this.location.href = _url2;
            }
        }
    </script>
</head>
<!-- OXID eShop Professional Edition, Version 4, Shopping Cart System (c) OXID eSales AG 2003 - 2015 - http://www.oxid-esales.com -->
<body>
<!-- Header-Area -->
<div class="clearfix" id="header">
    <div class="page_margins">
        <div id="logo">
            <a title="LEECOM" href="<?php echo $site_url; ?>index.php" class="ir">LEECOM</a>
        </div>
        <!-- panel -->
        <div id="panel-nav" class="" style="height: 32px;margin-right:230px;margin-top:10px;width:100px">
            <div style="padding-top:10px;"><a onclick="goto_cn()" style="display:inline;"><span
                        style="color:white;margin-left:10px;margin-right:7px;">中文</span></a>
                <a onclick="goto_en()" style="display:inline;"><span style="color:white;">English</span></a></div>
        </div>
        <div id="panel-nav" style="margin-top:19px">
            <img src="<?php echo $site_url . 'out/pictures/master/global/1/qr.png' ?>" style="width:95px;"/>
        </div>
        <!-- end panel -->
        <!-- main navigation -->
        <div class="main-nav nav clearfix">
            <ul>
                <li class="products has-drop">
                    <a href="<?php echo $site_url . 'cn/Products/'; ?>index.php"><span>产品展示</span></a>

                    <div class="drop flyout closed clearfix">
                        <div class="grid_5 left" style="height:360px;">
                            <ul>
                                <li class="head"><h4>水族箱</h4></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XP-Line/XP-300-black.php#!leecom-xp300b"
                                       id="00000000031">XP系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XC-Line/XC-300-black.php#!leecom-xc300b"
                                       id="00000000041">XC系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XT-Line/XT-300-black.php#!leecom-xt300b"
                                       id="00000000051">XT系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XE-Line/XE-300-black.php#!leecom-xe300"
                                       id="00000000061">XE系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XK-Line/XK-600-black-Int.php#!leecom-xk200"
                                       id="00000000071">XK系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XA-Line/XA-40-black-Int.php#!leecom-xa815"
                                       id="00000001289">XA系列</a></li>
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XF-Line/XF-40-black-Int.php#!leecom-xf060"
                                       id="00000001271">XF系列</a></li>
                                <!-- Aquarien -->
                                <li>
                                    <a href="<?php echo $site_url . 'cn/Products/Aquariums'; ?>/XQ-Line/XQ-Line-60-Int.php#!leecom-xq200"
                                       id="00000001281">XQ系列</a></li>
                            </ul>
                            <ul>
                                <li class="head"><h4>更多</h4></li>
                                <!-- Weiteres -->
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/AQ-202.php" id="00000000281">灯具系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/AQ-202.php" id="00000000281">气泵系列</a>
                                </li>
                                <!-- Weiteres -->
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/PF-120.php" id="00000000291">水泵系列</a>
                                </li>
                                <!-- Weiteres -->
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/CC1.php" id="00000000301">磁擦系列</a>
                                </li>
                                <!-- Weiteres -->
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/MT-100.php" id="00000000311">附件系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/KC-361.php" id="00000000312">保温棒系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/HI-330.php" id="00000000313">缸外过滤系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/PF-282.php" id="00000000314">缸内过滤系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/CF-600.php" id="00000000315">上部过滤系列</a>
                                </li>
                                <li><a href="<?php echo $site_url . 'cn/Products'; ?>/More/IF-730.php" id="00000000316">气动过滤系列</a>
                                </li>
                            </ul>
                            <ul>

                            </ul>
                        </div>
                        <div class="grid_7 right">
                            <div class="product-info clearfix" id="info-00000000031" style="display: none;">
                                <div class="image">

                                    <img alt="XP系列" src="<?php echo $site_url; ?>out/img/xp/xp300_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XP系列</span></h4>
                                    <h5>永久的经典</h5>

                                    <p>简洁而不失大方，现代而不失典雅。简约，时尚、优雅是我们的代名词</p>
                                    <ul class="decor fl">
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/1.png"></li>
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                    </ul>
                                    <ul class="sizes fl">
                                        <li><img src="<?php echo $site_url; ?>out/img/xp/xp300_35.jpg" alt="XP-300 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xp/xp360_35.jpg" alt="XP-360 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xp/xp400_35.jpg" alt="XP-400 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xp/xp600_35.jpg" alt="XP-600 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xp/xp800_35.jpg" alt="XP-800 "></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-info clearfix" id="info-00000000041" style="display: none;">
                                <div class="image">

                                    <img alt="XC系列" src="<?php echo $site_url; ?>out/img/xc/xc300_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XC系列</span></h4>
                                    <h5>用心制造</h5>

                                    <p>细节决定成败，关注每一处细节，用心自我体验。每一个产品都经过漫长的反复多次的测试与试验，从粗到精的漫长过程，以最完美的身姿呈现在您面前。</p>
                                    <ul class="decor fl">

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/1.png"></li>

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                    </ul>
                                    <ul class="sizes fl">
                                        <li><img src="<?php echo $site_url; ?>out/img/xc/xc300_35.jpg" alt="XC-300 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xc/xc360_35.jpg" alt="XC-360 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xc/xc400_35.jpg" alt="XC-400 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xc/xc460_35.jpg" alt="XC-460 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xc/xc600_35.jpg" alt="XC-600 "></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product-info clearfix" id="info-00000000051" style="display: none;">
                                <div class="image">

                                    <img alt="XT系列" src="<?php echo $site_url; ?>out/img/xt/xt300_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XT系列</span></h4>
                                    <h5>简约的美丽</h5>

                                    <p>高雅却不张扬，奢华却不累赘，不经意营造一种浪漫而独具魅力的气息。</p>
                                    <ul class="decor fl">

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/1.png"></li>

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                    </ul>
                                    <ul class="sizes fl">
                                        <li><img src="<?php echo $site_url; ?>out/img/xt/xt300_35.jpg" alt="XT-300 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xt/xt360_35.jpg" alt="XT-360 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xt/xt400_35.jpg" alt="XT-400 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xt/xt460_35.jpg" alt="XT-460 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xt/xt600_35.jpg" alt="XT-600 "></li>
                                        <!-- <li><img src="<?php echo $site_url; ?>out/img/xp/xt800.jpg" alt="XT-800 "></li>    -->
                                    </ul>
                                </div>
                            </div>

                            <div class="product-info clearfix" id="info-00000000061" style="display: none;">
                                <div class="image">

                                    <img alt="XE系列" src="<?php echo $site_url; ?>out/img/xe/xe300_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XE系列</span></h4>
                                    <h5>永恒的色调</h5>

                                    <p>黑白永远是主流的经典色调，正如我们的XE系列如此永恒、经久不衰。</p>
                                    <ul class="decor fl">

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/1.png"></li>

                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                    </ul>
                                    <ul class="sizes fl">
                                        <li><img src="<?php echo $site_url; ?>out/img/xe/xe300_35.jpg" alt="XE-300 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xe/xe360_35.jpg" alt="XE-360 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xe/xe400_35.jpg" alt="XE-400 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xe/xe460_35.jpg" alt="XE-460 "></li>
                                        <li><img src="<?php echo $site_url; ?>out/img/xe/xe600_35.jpg" alt="XE-600 "></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info clearfix" id="info-00000000071" style="display: none;">
                                <div class="image">

                                    <img alt="XK系列" src="<?php echo $site_url; ?>out/img/xk/xk200_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XK系列</span></h4>
                                    <h5>世界是洁净透明的</h5>

                                    <p>世界顶级浮法玻璃，通透大气，打造透明的世界，每一个棱角，每一道线条都追求完美。</p>
                                    <ul class="decor fl">
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                    </ul>
                                    <ul class="sizes fl">
                                        <li><img src="<?php echo $site_url; ?>out/img/xk/xk200_35.jpg" alt="XK-200 "></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info clearfix" id="info-00000001289" style="display: none;">
                                <div class="image">

                                    <img alt="XA系列" src="<?php echo $site_url; ?>out/img/xa/xa300_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XA系列</span></h4>
                                    <h5>带上你的宠宝，畅游吧</h5>

                                    <p>自由自在，轻松出行，享受自由，享受自在</p>
                                    <ul class="decor fl">
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                        <ul class="sizes fl">
                                            <li><img src="<?php echo $site_url; ?>out/img/xa/xa815_35.jpg" alt="XA-815 ">
                                            </li>
                                            <!-- <li><img src="<?php echo $site_url; ?>out/w/35/xa820.jpg" alt="XA-820 "></li>
			                    			<li><img src="<?php echo $site_url; ?>out/w/35/xa825.jpg" alt="XA-825 "></li> -->
                                        </ul>
                                </div>
                            </div>
                            <div class="product-info clearfix" id="info-00000001271" style="display: none;">
                                <div class="image">

                                    <img alt="XF系列" src="<?php echo $site_url; ?>out/img/xf/xf060_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XF系列</span></h4>
                                    <h5>桌面小精灵</h5>

                                    <p>节能、环保，轻松加水投饲，精巧、简约，尤其适合办公室、家居的桌面摆设。</p>
                                    <ul class="decor fl">
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/4.png"></li>
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/2.png"></li>
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/3.png"></li>
                                        <ul class="sizes fl">
                                            <li><img src="<?php echo $site_url; ?>out/img/xf/xf060_35.jpg" alt="XF-060"></li>
                                            <li><img src="<?php echo $site_url; ?>out/img/xf/xf120_35.jpg" alt="XF-120"></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="product-info clearfix" id="info-00000001281" style="display: none;">
                                <div class="image">

                                    <img alt="XQ系列" src="<?php echo $site_url; ?>out/img/xq/xq200_200.jpg">
                                </div>
                                <div class="descr clearfix">
                                    <h4 class="tk-myriad-pro tk-light"><span class="green">XQ系列</span></h4>
                                    <h5>带上你的宠宝，畅游吧</h5>

                                    <p>自由自在，轻松出行，享受自由，享受自在</p>
                                    <ul class="decor fl">
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/2.png"></li>
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/3.png"></li>
                                        <li><img alt=""
                                                 src="<?php echo $site_url; ?>out/pictures/master/global/1/5.png"></li>
                                        <ul class="sizes fl">
                                            <li><img src="<?php echo $site_url; ?>out/img/xq/xq200_35.jpg" alt="XQ-200"></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="product-info clearfix" id="info-00000000281" style="display: none;">
                                <img alt="QP" src="<?php echo $site_url; ?>out/b/545/qb.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000291" style="display: none;">
                                <img alt="Decoration" src="<?php echo $site_url; ?>out/b/545/sb.jpg"
                                     style="width:545px;">
                            </div>
                            <div class="product-info clearfix" id="info-00000000301" style="display: none;">
                                <img alt="Accessories" src="<?php echo $site_url; ?>out/b/545/cc.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000311" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/fj.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000312" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/bw.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000313" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/gw.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000314" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/gn.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000315" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/cf.jpg">
                            </div>
                            <div class="product-info clearfix" id="info-00000000316" style="display: none;">
                                <img alt="Marine" src="<?php echo $site_url; ?>out/b/545/qd.jpg">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="company has-drop">
                    <div class="drop">
                        <ul>
                            <li><a href="<?php echo $site_url . 'cn'; ?>/Company/index.php">关于我们</a></li>
                        </ul>
                        <div class="drop-btm"></div>
                    </div>
                    <a href="<?php echo $site_url . 'cn'; ?>/Company/index.php"><span>公司简介</span></a>
                </li>
                <li class="service has-drop">
                    <div class="drop">
                        <ul>
                            <li><a onclick="_gaq.push(['_trackEvent', 'FAQ Quelle', 'click', 'Servicecenter']);"
                                   href="<?php echo $site_url . 'cn'; ?>/Service/FAQ/index.php">常见问题</a></li>
                        </ul>
                        <div class="drop-btm"></div>
                    </div>
                    <a href="<?php echo $site_url . 'cn'; ?>/Service/FAQ/index.php"><span>服务中心</span></a>
                </li>
                <li class="contact">
                    <a href="<?php echo $site_url; ?>index.php-lang=2&amp;cl=contact.php"><span>联系我们</span></a>
                </li>
            </ul>
        </div>
        <!-- end main navigation-->
    </div>
</div>
<!-- /Header-Area -->

<script>
    $(function () {
        leecom.productFlyout();
    });

    /* Center Vimeo Videos */
    $(function () {
        /* Get all vimeo videos an backend uploaded videos on slider */
        var slider_vimeo_videos = $("iframe[src^='http://player.vimeo.com/']", '.home-stage-slider');
        var slider_videos_backend_upload = $('.video-js, video', '.home-stage-slider');

        if (slider_vimeo_videos.length || slider_videos_backend_upload.length) {
            /* Get the video default width */
            var slider_vimeo_video_width = $(slider_vimeo_videos.get(0)).width();
            var slider_videos_backend_width = $(slider_videos_backend_upload.get(0)).width();


            /* Loop all vimeo videos */
            function fitVimeoVideos() {

                slider_vimeo_videos.each(
                    function () {
                        $(this).css(
                            'margin-left',
                            ( $(window).width() - slider_vimeo_video_width ) / 2
                        );
                    }
                );


                /*center videos uploaded via oxid backend*/
                slider_videos_backend_upload.each(
                    function () {
                        $(this).css('margin-left', ($(window).width() - slider_videos_backend_width) / 2);
                    }
                );

            }

            /* Fit load view */
            fitVimeoVideos();

            /* Fit resized view */
            $(window).resize(fitVimeoVideos);
        }
    });

</script>