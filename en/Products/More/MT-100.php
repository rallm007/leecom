<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/header-en.php"); ?>

<!-- Main-Area -->
<div id="main">

    <div class="simple-stage">
        <div class="page_margins inner_stage"
             style="background-image:url(<?php echo $site_url ?>out/pictures/master/category/subheader/00000000281.png)">
            <h1 class="tk-myriad-pro tk-light">Accessories series</h1>

            <p>您不可或缺的鱼缸伴侣</p>
        </div>
    </div>

    <div class="page_margins">
        <div class="content clearfix accessories_detail">
            <div class="breadcrumb accessories-detail nav clearfix">
                <ul class="fl">
                    <li>You are here:</li>
                    <li><a href="../index.php" title="PRODUCTS">PRODUCTS</a></li>
                    <li><a href="../index.php" title="Accessories series">Accessories series</a></li>
                    <li>MT-100 止逆阀</li>
                </ul>
            </div>
            <!-- Links - Navigation und Teaser-Content -->
            <div class="grid_3 nav">


                <ul class="sub-nav">

                    <li class="active">
                        <span>Accessories series</span>


                        <ul>
                            <li class="active">
                                <ul>
                                    <li class="active">
                                        <a href="MT-100.php">MT-100 止逆阀 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="MR-201.php">MR-201生化球 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="MR-202.php">MR-202生化球 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="MR-301.php">MR-301生化球 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="MR-302.php">MR-302生化球 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="ME-001.php">ME-001 L型气管接头 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="ME-002.php">ME-002 Y型气管三通 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="ME-003.php">ME-003 气管接头直通 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="MQ-100.php">MQ-100气管调节阀 </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="QPS.php">气泡石 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- ende -> Links - Navigation und Teaser-Content -->

            <!-- rechte Hauptspalte -->
            <div class="grid_8 push_1">
                <!-- oberer Bereich-->
                <div class="clearfix accessories_detail_top">
                    <div class="grid_4 alpha accessories_detail_images">

                        <div class="tabs product-images">
                            <div id="image-1">
                                <a href="<?php echo $site_url; ?>out/img/detail/6/MT100_863.jpg"
                                   class="cloud-zoom">
                                    <img src="<?php echo $site_url; ?>out/img/detail/6/MT100_278.png" alt=""
                                         width="278">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid_4 omega accessories_detail_right" style="margin-top: 100px;">

                       <h2 class="tk-myriad-pro tk-light">MT-100 止逆阀 </h2>

                        <p class="desc"></p>
                    </div>
                </div>
                <!-- ende -> oberer Bereich-->
                <!-- Tab-Content Bereich -->
                <div class="tab-content">
                    <div class="tabs content-tabs">
                        <!-- Tab-Navigations-Laschen -->
                        <ul class="clearfix">
                            <li><a href="#tabs-1">Product details</a></li>
                            <li><a href="#tabs-2">Technical data</a></li>
                        </ul>
                        <div id="tabs-1">


                            <div class="tab-teaser accessories_detail-prod_detail">
                                <h3>MT-100 止逆阀</h3>

                                <p>
                                    当气泵摆放的位置低于鱼缸水位时，由于突然停电或其他原因导致气泵停止工作时，可能会导致鱼缸内的水倒流入气泵，致使气泵进水损坏或烧坏，甚至会水漫地板。而配套使用止逆阀即可轻松解决此问题，令您无后顾之忧，尽享美景。</p>

                                <p><br/><br/>Black、White、橙色、红色满足您对色彩不同的需求
                                    100个的大包装，单个独立包装或是2个包装应对您不同的包装需要。<br/>
                                </p>

                                <p><br/>
                            </div>


                        </div>
                        <div id="tabs-2">
                            <div class="tab-teaser tab-teaser-technical">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="icon produkt">&nbsp;</td>
                                        <td class="topic">Product name</td>
                                        <td>MT-100 止逆阀</td>
                                    </tr>
                                    <tr>
                                        <td class="icon dekore">&nbsp;</td>
                                        <td class="topic">颜色</td>
                                        <td>Black/White/橙色/红色</td>
                                    </tr>
                                    <tr>
                                        <td class="icon lieferumfang">&nbsp;</td>
                                        <td class="topic">每包数量</td>
                                        <td>100 PCS</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- ende -> Tab-Content Bereich -->
                <!-- CROSSSELLING / ACCESSORIES -->
                <!-- /CROSSSELLING / ACCESSORIES -->
            </div>
            <!-- ende -> rechte Hauptspalte -->     </div>
    </div>

    <script>
        $(function () {
            leecom.accessoriesDetail();
            $("select.transform").jqTransSelect();
        });

    </script>

    <script>
        $(window).load(function () {
            $('.sub-nav li > span').click(function () {
                $(this).next('ul').slideToggle('slow', function () {
                    $(this).parent().toggleClass('active');
                });

            });
        });
    </script>

</div>
<!-- /Main-Area -->

<!-- Footer-Area -->


<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
            <li><a href="../index.php" title="PRODUCTS">PRODUCTS</a></li>
            <li><a href="../index.php" title="Accessories series">Accessories series</a></li>
            <li><a href="#">MT-100 止逆阀 </a></li>
        </ul>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/leecom/footer-en.php"); ?>
<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>