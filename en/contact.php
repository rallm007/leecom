<?php include($_SERVER['DOCUMENT_ROOT'] . "/header-en.php"); ?>

<!-- Main-Area -->
<div id="main">
    <!-- Slider -->
    <!-- Stage mit Googel-Maps -->
    <div id="contact_map" class="simple-stage contact_map">

    </div>
    <!-- ende-> Stage mit Googel-Maps -->
    <script>
        $(function () {

            contact_map();

            // google maps
            function contact_map() {

                // settings
                var point = new google.maps.LatLng(53.125221, 9.356571); // Koordinaten
                var MapOptions = {
                    zoom: 12,
                    center: point,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    streetViewControl: false,
                    mapTypeControl: false,
                    panControl: false,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.SMALL,
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    }
                };
                // custom marker-icon
                var icon = new google.maps.MarkerImage(
                    'out/juwel/src/images/all/maps/juwel_map_marker.png',
                    new google.maps.Size(73, 82),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(37, 82)
                );
                // Schatten für Icon
                var shadow = new google.maps.MarkerImage(
                    'out/juwel/src/images/all/maps/shadow.png',
                    new google.maps.Size(122, 82),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(37, 82)
                );
                // klickbarer Bereich des Marker-Icons
                var shape = {
                    coord: [68, 0, 70, 1, 71, 2, 71, 3, 72, 4, 72, 5, 72, 6, 72, 7, 72, 8, 72, 9, 72, 10, 72, 11, 72, 12, 72, 13, 72, 14, 72, 15, 72, 16, 72, 17, 72, 18, 72, 19, 72, 20, 72, 21, 72, 22, 72, 23, 72, 24, 72, 25, 72, 26, 72, 27, 72, 28, 72, 29, 72, 30, 72, 31, 72, 32, 72, 33, 72, 34, 72, 35, 72, 36, 72, 37, 72, 38, 72, 39, 72, 40, 72, 41, 72, 42, 72, 43, 72, 44, 72, 45, 72, 46, 72, 47, 72, 48, 72, 49, 72, 50, 72, 51, 72, 52, 72, 53, 72, 54, 72, 55, 72, 56, 72, 57, 72, 58, 72, 59, 72, 60, 72, 61, 72, 62, 72, 63, 72, 64, 72, 65, 72, 66, 72, 67, 72, 68, 72, 69, 72, 70, 71, 71, 71, 72, 70, 73, 68, 74, 42, 75, 41, 76, 40, 77, 40, 78, 39, 79, 38, 80, 36, 81, 36, 81, 34, 80, 33, 79, 32, 78, 31, 77, 30, 76, 29, 75, 4, 74, 2, 73, 1, 72, 1, 71, 0, 70, 0, 69, 0, 68, 0, 67, 0, 66, 0, 65, 0, 64, 0, 63, 0, 62, 0, 61, 0, 60, 0, 59, 0, 58, 0, 57, 0, 56, 0, 55, 0, 54, 0, 53, 0, 52, 0, 51, 0, 50, 0, 49, 0, 48, 0, 47, 0, 46, 0, 45, 0, 44, 0, 43, 0, 42, 0, 41, 0, 40, 0, 39, 0, 38, 0, 37, 0, 36, 0, 35, 0, 34, 0, 33, 0, 32, 0, 31, 0, 30, 0, 29, 0, 28, 0, 27, 0, 26, 0, 25, 0, 24, 0, 23, 0, 22, 0, 21, 0, 20, 0, 19, 0, 18, 0, 17, 0, 16, 0, 15, 0, 14, 0, 13, 0, 12, 0, 11, 0, 10, 0, 9, 0, 8, 0, 7, 0, 6, 0, 5, 0, 4, 1, 3, 1, 2, 2, 1, 4, 0, 68, 0],
                    type: 'poly'
                };

                // map
                var map = new google.maps.Map(document.getElementById("contact_map"), MapOptions);
                // marker
                var marker = new google.maps.Marker({
                    icon: icon,
                    shadow: shadow,
                    shape: shape,
                    map: map,
                    position: point
                });

            }
        });
    </script>
    <div class="page_margins">
        <div class="content clearfix contact">
            <!-- Breadcrumb -->
            <div class="breadcrumb nav clearfix">
                <ul class="fl">
                    <li>You are here：</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <h1><strong>Welcome to Leecom</strong></h1>

            <div class="grid_7 alpha">
                <p class="introduction">
                    <strong>Warranty</strong><br/>
                    ☆Product warranty 12 months under normal use.<br/>
                    ☆The users need to sent the air pump back to the Leecom company for repairs if needed.<br/>
                    ☆More than the warranty period of the product, to provide maintenance services, please contact the service center at creating.
                </p>

                <script>
                    $(function () {
                        $('form.jqtransform').jqTransform();
                    });
                </script>
            </div>

            <div class="grid_4 omega">
                <p class="address"><strong>Guangzhou RiChuang rubber and plastic eletric appliance Co.,Ltd</strong><br/>
                    Address：No.7 Jiangnan Industrial Road <br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    Nancun town, Panyu District,<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    Guangzhou, Guangdong, China
                </p>
                <br/>
                <h4 class="tk-myriad-pro tk-semibold green">Customer Server</h4>

                <div class="tk-myriad-pro tk-semibold tel">
                    Tel：+86-20-34691002
                </div>
                <div class="tk-myriad-pro tk-semibold fax">
                    Fax：+86-20-3482 8538
                </div>
                <div class="tk-myriad-pro tk-semibold email">
                    Email：simon.lee@leecom.cn
                </div>
                <div class="tk-myriad-pro tk-semibold email">
                    Email：Sales02@leecom.cn
                </div>
                <!-- <div class="contact_faq">
<p class="lh20">Find quick answers to frequently asked questions in our question and answer (FAQ) section</p> <a class="arrow-link" href="<?php echo $site_url . 'en/Service/FAQ/index.php'; ?>" title="FAQ">FAQ</a>      </div>
</div> -->

            </div>
        </div>
    </div>


</div>
<!-- /Main-Area -->

<!-- Footer-Area -->


<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
            <li><a href="index.php-lang=2&cl=contact.php" title="Contact">Contact Us</a></li>
        </ul>
    </div>
</div>
<?php echo include($_SERVER['DOCUMENT_ROOT'] . '/footer-en.php'); ?>

<div id="sroverlay"
     style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>