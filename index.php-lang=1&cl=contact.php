<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/header-en.php");?>

<!-- Main-Area -->
<div id="main">
	
<!-- Main-Area -->
<div id="main">
   	<!-- Slider -->
   	<!-- Stage mit Googel-Maps -->
	<div id="contact_map" class="simple-stage contact_map">

	</div>
	<!-- ende-> Stage mit Googel-Maps -->
<script>
$(function(){

	contact_map();

	// google maps
	function contact_map(){

	  // settings
	  var point = new google.maps.LatLng(53.125221,9.356571); // Koordinaten
	  var MapOptions = {
		zoom: 12,
		center: point,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		streetViewControl : false,
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
		'out/juwel/src/images/all/maps/juwel_map_marker.png'/*tpa=http://www.juwel-aquarium.de/out/juwel/src/images/all/maps/juwel_map_marker.png*/,
		new google.maps.Size(73,82),
		new google.maps.Point(0,0),
		new google.maps.Point(37,82)
	  );
	  // Schatten f眉r Icon
	  var shadow = new google.maps.MarkerImage(
		'out/juwel/src/images/all/maps/shadow.png'/*tpa=http://www.juwel-aquarium.de/out/juwel/src/images/all/maps/shadow.png*/,
		 new google.maps.Size(122,82),
		 new google.maps.Point(0,0),
		 new google.maps.Point(37,82)
	  );
	  // klickbarer Bereich des Marker-Icons
	  var shape = {
    	coord: [68,0,70,1,71,2,71,3,72,4,72,5,72,6,72,7,72,8,72,9,72,10,72,11,72,12,72,13,72,14,72,15,72,16,72,17,72,18,72,19,72,20,72,21,72,22,72,23,72,24,72,25,72,26,72,27,72,28,72,29,72,30,72,31,72,32,72,33,72,34,72,35,72,36,72,37,72,38,72,39,72,40,72,41,72,42,72,43,72,44,72,45,72,46,72,47,72,48,72,49,72,50,72,51,72,52,72,53,72,54,72,55,72,56,72,57,72,58,72,59,72,60,72,61,72,62,72,63,72,64,72,65,72,66,72,67,72,68,72,69,72,70,71,71,71,72,70,73,68,74,42,75,41,76,40,77,40,78,39,79,38,80,36,81,36,81,34,80,33,79,32,78,31,77,30,76,29,75,4,74,2,73,1,72,1,71,0,70,0,69,0,68,0,67,0,66,0,65,0,64,0,63,0,62,0,61,0,60,0,59,0,58,0,57,0,56,0,55,0,54,0,53,0,52,0,51,0,50,0,49,0,48,0,47,0,46,0,45,0,44,0,43,0,42,0,41,0,40,0,39,0,38,0,37,0,36,0,35,0,34,0,33,0,32,0,31,0,30,0,29,0,28,0,27,0,26,0,25,0,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,0,16,0,15,0,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,0,5,0,4,1,3,1,2,2,1,4,0,68,0],
		type: 'poly'
	  };

	  // map
	  var map = new google.maps.Map(document.getElementById("contact_map"),MapOptions);
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
                <li>You are here:</li>
                <li>Contact</li>
            </ul>
        </div>
        <h1>Your contact to Juwel Aquarium</h1>
    	<div class="grid_7 alpha">
        	<p class="introduction">
		    			    			    		Questions and suggestions from our customers are always welcome. That's why our Service team are always on hand to help you. Write and tell us what is on your mind. We will endeavour to process your enquiry within two working days.<br><br>Please note that inquiries can be answered only in English or German.
			    	            </p>
															
		    				           	

<form class="jqtransform" action="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="POST">
    <div>
        <input type="hidden" name="fnc" value="send"/>
        <input type="hidden" name="cl" value="contact"/>
                <input type="hidden" name="c_mach" value="rou1a1cedce7bcf61ef3b33f01ce452e"/>
    </div>
	<!-- Formularfelder -->
    <div class="clearfix">
        <label for="00Nb0000009Olwe" style="display:none; visibility:hidden">
            Don't change the value of this field or it won't be processed!
            <input type="text" name="00Nb0000009Olwe" value="notspam" />
        </label>
        <div class="form-row form-text clear required">
			<label>Title:*</label>
            <select name="editval[oxuser__oxsal]">
	<option>Please choose</option>
    <option value="MR">Mr</option>
    <option value="MRS">Mrs</option>
</select>        </div>
        <div class="form-row form-text fl required">
			<label>First name:*</label>
			<input type="text" class="w260" maxlength="255" name="editval[oxuser__oxfname]" size="20" value="">
        </div>
        <div class="form-row form-text fl required margin">
			<label>Last name:*</label>
			<input type="text" class="w260" maxlength="255" size="20" name="editval[oxuser__oxlname]" value="">
        </div>
        <div class="form-row form-text clear">
			<label class="clearfix">eMail:*</label>
			<input type="text" class="w540" maxlength="80" size="20" name="editval[oxuser__oxusername]" value="">
        </div>
        <div class="form-row form-text clear">
			<label class="clearfix">Subject:*</label>
			<input type="text" class="w540" maxlength="80" size="20" name="c_subject" value="">
        </div>
        <div class="form-row form-text required">
            <label>Enter Verification code:*</label>
                                        <label class="captcha-copy--contact">Code:</label>
                <img class="captcha-image--contact" id="verifyImageUrl" src="core/utils/verificationimg.php-e_mac=ox_DRMBF0UHS0JE.png" tppabs="http://www.juwel-aquarium.de/core/utils/verificationimg.php?e_mac=ox_DRMBF0UHS0JE" alt="">
                        <input type="text" field="verify" name="c_mac" value="">
        </div>
        <div class="form-row form-textarea required">
			<label>Message:*</label>
			<textarea rows="10" cols="34" name="c_message" placeholder="Please make your request exclusively in German or English!"></textarea>
        </div>
    </div>
    <!-- ende-> Formularfelder -->
    <div class="form-bottom-buttons clearfix">
        <strong class="required-info-txt fl">* <br>Please sign in all fields marked by *</strong>
        <button class="button green w130 fr">Send</button>
    </div>
</form>

<script>
    $(function(){
        $('form.jqtransform').jqTransform();
    });
</script>		    		
		            </div>

    	<div class="grid_4 omega">
			<p class="address"><strong>JUWEL庐Aquarium GmbH &amp; Co KG</strong>
        		Karl-G枚x-Stra脽e 1<br />

        		27356 Rotenburg / W眉mme<br />
				Deutschland                </p>
<h4 class="tk-myriad-pro tk-semibold green">Customer service</h4>
<div class="tk-myriad-pro tk-semibold tel">
+49 (0)4261 9379 32*            </div>
<div class="tk-myriad-pro tk-semibold fax">
+49 (0) 4261 9379 856</div>
<div class="tk-myriad-pro tk-semibold email">
            	service@juwel-aquarium.de <!-- service@juwel-aquarium.de  -->           </div>
<div class="contact_faq">
<p class="lh20">Find quick answers to frequently asked questions in our question and answer (FAQ) section</p> <a class="arrow-link" href="index.php-lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=alist&cnid=deservice1.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=alist&cnid=deservice1" title="FAQ">FAQ</a>      </div>
<div class="contact_newsletter">
<p class="lh20">Register for our newsletter now and keep up-to-date at all times.</p><a class="arrow-link" href="index.php-lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter" title="Subscribe Nesletter">Subscribe Nesletter</a>      </div>
<div class="footnote"><span class="star">*

(Monday - Thursday: 8:00 a.m. - 17:00 p.m., Friday: 8:00 a.m. - 16:00 p.m.)</span> </div>
			
        </div>
    </div>
</div>



</div>
<!-- /Main-Area -->

<!-- Footer-Area -->
																								


	<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
						    <li><a href="index.php-lang=1&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=contact" title="Contact">Contact</a></li>
			    			        </ul>                        
    </div>
</div>
<div id="footer">
    <div class="page_margins bg">
      	  	  
			<div class="col products">
        	<h4>Products</h4>		
										
										<ul>
																							<li><a href="en/Products/Aquariums/Rio-Line/Rio-125-black.php#!juwel-000000000000001300" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Rio-Line/Rio-125-black.php#!juwel-000000000000001300">Rio Line</a></li>
																							<li><a href="en/Products/Aquariums/Vision-Line/Vision-180-black.php#!juwel-000000000000009300" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Vision-Line/Vision-180-black.php#!juwel-000000000000009300">Vision Line</a></li>
																							<li><a href="en/Products/Aquariums/Trigon-Line/Trigon-190-black.php#!juwel-000000000000016300" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Trigon-Line/Trigon-190-black.php#!juwel-000000000000016300">Trigon Line</a></li>
																							<li><a href="en/Products/Aquariums/Lido-Line/Lido-120-black.php#!juwel-000000000000011300" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Lido-Line/Lido-120-black.php#!juwel-000000000000011300">Lido Line</a></li>
																							<li><a href="en/Products/Aquariums/Rekord-Line/Rekord-600-black-Int.php#!juwel-000000000000021600" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Rekord-Line/Rekord-600-black-Int.php#!juwel-000000000000021600">Rekord Line</a></li>
																							<li><a href="en/Products/Aquariums/Vio-Line/Vio-40-black-Int.php#!juwel-000000000000020040" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Vio-Line/Vio-40-black-Int.php#!juwel-000000000000020040">Vio Line</a></li>
																							<li><a href="en/Products/Aquariums/Korall/Korall-60-Int.php#!juwel-000000000000023860" tppabs="http://www.juwel-aquarium.de/en/Products/Aquariums/Korall/Korall-60-Int.php#!juwel-000000000000023860">Korall</a></li>
										</ul>
							
										<ul>
																							<li><a href="en/Products/More/Lighting/Lighting-Tubes/HiLite-T5-Lighting-Tubes/HiLite-Day-438-mm-24-W-Tube-T5-24-W-T5-438-mm.php" tppabs="http://www.juwel-aquarium.de/en/Products/More/Lighting/Lighting-Tubes/HiLite-T5-Lighting-Tubes/HiLite-Day-438-mm-24-W-Tube-T5-24-W-T5-438-mm.php">Lighting</a></li>
																							<li><a href="en/Products/More/Filtration/Filter-Media/bioPad-S-Super-Comp-S-Poly-Pad-Bioflow-Super-Compact-Super.php" tppabs="http://www.juwel-aquarium.de/en/Products/More/Filtration/Filter-Media/bioPad-S-Super-Comp-S-Poly-Pad-Bioflow-Super-Compact-Super.php">Filtration</a></li>
																							<li><a href="en/Products/More/Decoration/Cliff-Dark/Background-Cliff-Dark-oxid.php" tppabs="http://www.juwel-aquarium.de/en/Products/More/Decoration/Cliff-Dark/Background-Cliff-Dark-oxid.php">Decoration</a></li>
																							<li><a href="en/Products/More/Accessories/Automatic-Feeder/EasyFeed-Automatic-Feeder.php" tppabs="http://www.juwel-aquarium.de/en/Products/More/Accessories/Automatic-Feeder/EasyFeed-Automatic-Feeder.php">Accessories</a></li>
																							<li><a href="en/Products/More/Marine/Skimmer/Juwel-SeaSkim-INT.php" tppabs="http://www.juwel-aquarium.de/en/Products/More/Marine/Skimmer/Juwel-SeaSkim-INT.php">Marine</a></li>
										</ul>
									</div>
					        
                <div class="col">
        	<h4>Company</h4>
        			
				<ul>
                                   	                   		<li><a href="en/Company/Chronicle/index.php" tppabs="http://www.juwel-aquarium.de/en/Company/Chronicle/" >Chronicle</a></li>
                   	                                   	                   		<li><a href="en/Company/Safety-and-Quality/index.php" tppabs="http://www.juwel-aquarium.de/en/Company/Safety-and-Quality/" >Safety and Quality</a></li>
                   	                                   	                   		<li><a href="en/Company/Production-and-Logistics/index.php" tppabs="http://www.juwel-aquarium.de/en/Company/Production-and-Logistics/" >Production and Logistics</a></li>
                   	                                   	                   		<li><a href="en/Company/News/index.php" tppabs="http://www.juwel-aquarium.de/en/Company/News/" >News</a></li>
                   	                	            </ul>
					</div>
							                        		        
                <div class="col">
        	<h4>Service</h4>
        			
				<ul>
                                   	                   		<li><a href="en/Service/FAQ/index.php" tppabs="http://www.juwel-aquarium.de/en/Service/FAQ/" onclick="_gaq.push(['_trackEvent', 'FAQ Quelle', 'click', 'Servicecenter']);">FAQ</a></li>
                   	                                   	                   		<li><a href="en/Service/Downloadcenter/index.php" tppabs="http://www.juwel-aquarium.de/en/Service/Downloadcenter/" onclick="_gaq.push(['_trackEvent', 'Downloadquelle', 'click', 'Downloadcenter']);">Downloadcenter</a></li>
                   	                                   	                   		<li><a href="index.php-lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter">Newsletter</a></li>
                   	                	            </ul>
					</div>
							        
        		                                                                                                                                                                                                                                                                                                                                                                                                              <div class="col right">
        	<h4>Subscribe Newsletter</h4>
            <div class="newsletter">
				<form action="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="post">
				    <input type="hidden" name="stoken" value="A274D479"><input type="hidden" name="force_sid" value="rourg7mdqqqm5ppt19cs5hlfm7">
<input type="hidden" name="lang" value="1">
				    <input type="hidden" name="fnc" value="fill">
				    <input type="hidden" name="cl" value="newsletter">
				                    	<fieldset>
                    	<input type="text" name="editval[oxuser__oxusername]" title="Subscribe Newsletter" value="Your E-Mail">
                        <button type="submit">Send</button>
                    </fieldset>
                </form>
            </div>
            <div class="facebook clearfix">
                <h4 class="ir"><a href="javascript:if(confirm('http://www.facebook.com/Juwel.Aquarium  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.facebook.com/Juwel.Aquarium'" tppabs="http://www.facebook.com/Juwel.Aquarium">Juwel on Facebook</a></h4>
            </div>
        </div>
        <div class="bottom-col clearfix">

        	<ul class="payment display-none">
			            	
                <li class="ir mastercard">MasterCard</li>
                <li class="ir visa">Visa</li>
                <li class="ir elv">ELV</li>
                        </ul>
            <ul class="inline-nav clearfix">
            	<li><a href="index.php-lang=1&cl=alist&cnid=destatic2.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=alist&cnid=destatic2">Cancellation</a></li>
                <li><a href="index.php-lang=1&cl=alist&cnid=destatic3.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=alist&cnid=destatic3">Privacy policy</a></li>
                <li><a href="index.php-lang=1&cl=alist&cnid=destatic4.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=alist&cnid=destatic4">Guarantee policy</a></li>
            </ul>
            <ul class="inline-nav clearfix left-separator">
                <li>
                    <a class="flag-gb" href="javascript:if(confirm('http://www.juwel-aquarium.co.uk/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.juwel-aquarium.co.uk/'" tppabs="http://www.juwel-aquarium.co.uk/">
                        UK assortment
                    </a>
                </li>
                        </ul>
        </div>
    </div>
    <div id="footer-bottom">
        <div class="page_margins">
        	<div class="ir"></div>
            <span>2012 JUWEL Aquarium GmbH &amp; Co. KG - All rights reserved</span>
            <ul class="inline-nav">
            	<li><a href="#" id="handler-finder-footer">Store finder</a></li>
                <li><a href="index.php-lang=1&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=contact">Contact</a></li>
                <li><a href="index.php-lang=1&cl=alist&cnid=destatic1.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=alist&cnid=destatic1">Imprint</a></li>
                <li><a href="index.php-lang=1&cl=alist&cnid=destatic5.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=alist&cnid=destatic5">Businessterms</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="hidden">
	<!-- AGB (Lightbox-Content) - wird in light-box eingef眉gt (Aufruf 眉ber: juwel.contentLightBox('#agb-box') - siehe unten -->
	<div class="gen-content-lightbox" id="agb-box">
	    <div class="box-head">
	        <h2 class="tk-myriad-pro tk-regular">General Terms and Conditions</h2>
	    </div>
	    <div class="scrollcontent tinyscroll">
	        <div class="inner_content">
	        	<div>
<table style="border-collapse: collapse" summary="" border="0" bordercolor="#000000" cellpadding="3" cellspacing="0" height="2802" width="496">
<tbody>
<tr valign="top">
<td width="100%">
<p>Internet Terms and Conditions for retail traders</p>
<p><strong>1. Scope, Delivery area</strong></p>
<p>These terms and conditions shall apply to the ordering of
replacement parts and accessories by retail traders executed by us.</p>
<p>The exclusive object of the agreement shall be the sold Juwel庐
brand product with the properties and characteristics as well as
the intended use as detailed in our product specification. Other or
additional characteristics and/or properties or additional intended
uses shall be included in this agreement only if we explicitly
confirmed them in writing.</p>
<p>&nbsp;</p>
<p><strong>2. Orders/Conclusion of the Agreement</strong></p>
<p>The sale of replacement parts and accessories shall exclusively
take place in accordance with the prices indicated in the
respectively valid price list and shall be subject to additional
VAT as provided by law. The ordering party is required to pay a
shipping and handling charge for the delivery of the ordered
merchandise.</p>
<p>The ordering party may pay by direct debit or credit card unless a
differing agreement has been reached or these terms and conditions
contain other provisions.</p>
<p>If technically feasible and practical, it may also be possible to
directly pay by credit card or by direct debit while placing online
orders on our Internet website. However, the ordering party shall
not be entitled to payments in this manner. We shall provide
state-of-the-art measures that are reasonable for transmitting data
both without errors and in a confidential manner. We would like to
point out that it is impossible to ensure the uninterrupted
availability of the credit card or direct debit payment option for
the online ordering procedure for technical reasons. For that
reason, claims of the ordering party against us that are due to the
interrupted availability of the credit card or direct debit payment
option for the online ordering procedure shall be excluded in their
entirety. The delivery of the ordered merchandise shall be
performed upon receipt of the payment.</p>
<p>The shipment occurs exclusively by direct debit or via credit card
payment unless a differing agreement has been reached or these
terms and conditions contain other provisions.</p>
<p>All delivered merchandise shall remain our property until the
delivered merchandise has been paid for in full and all other
claims have been settled. The above retention of title shall also
apply to other still not settled claims from a set-up customer
account, for as long as this remains unsettled.</p>
<p>&nbsp;</p>
<p>
The agreement shall be concluded upon our confirmation of the order
by means of telecommunication in accordance with Art. 312b German
Civil Code (acceptance) or by means of delivery within two weeks
after the date the order was received on.</p>
<p>&nbsp;</p>
<p><strong>&nbsp;3. Delivery, Passing of Risk, Guarantee</strong></p>
<p>The delivery in the delivery area shall be performed by a company
we commission. In that context, the risk shall pass to the ordering
party as soon as the merchandise has been provided to the company
for delivery, even if the delivery is performed free of charge. If
the ordering party provided special instructions with regard to the
shipping method, and if we deviated from that instructions</p>
<p>If we or our vicarious agents breached our obligations in a solely
negligent manner, our liability would be limited to the predictable
damage that is typical for this agreement.</p>
<p>We shall provide a warranty period of one year for new items unless
we made separate warranty promises for particular items. Any
warranty for used items shall be excluded.</p>
<p>The recipient of the merchandise shall be required to immediately
inspect the merchandise for completeness and obvious damage upon
receiving the delivery. Incomplete deliveries and/or obvious damage
shall be brought to our attention in written or textual form within
five working days after receiving the merchandise. Otherwise our
liability shall be excluded.</p>
<p>In case of obvious complaints that have been submitted as specified
in the above paragraph and in case of defects that were not obvious
and have been brought to our attention within the legal warranty
period, the claim of the ordering party shall initially be limited</p>
<p>If the replacement were to also exhibit a defect, or if the
rectification of the defect were to fail, or if we were to default
with regard to the rectification of the defect after a notice of at
least two weeks had been given in textual form, the ordering party
would be entitled to choose at its convenience to either cancel the
agreement or demand an appropriate reduction of the purchase price.</p>
<p>Additional claims of the ordering party shall be excluded unless we
acted in a grossly negligent or deliberate manner. The same shall
apply to an annulment of an agreement if we were to be responsible
for the inability to execute all or a part of the agreement, the
lack of which would cause the ordering party to lose its interest
in the agreement.</p>
<p>All cases of force majeure and all mobilisations, wars, riots,
strikes, business disruptions and business limitations as well as
any lack of raw, auxiliary and operating materials etc. shall
result in a reasonable extension of our delivery time by the length
of the delivery problems caused by these situations.</p>
<p>In this context, claims of the ordering party for damages shall be
excluded unless we caused the delay in a grossly negligent or
deliberate manner.</p>
<p>Ordered and delivered merchandise may be returned only if there is
proof that we delivered the wrong merchandise and shall be limited
to the legal warranty framework.</p>
<p>&nbsp;</p>
<p><strong>4. Privacy</strong></p>
<p>We may store the customer data that is required for executing
orders. With regard to processing orders, we shall only share
information as may be necessary. In this context, we shall adhere
to the legal privacy provisions. The ordering party shall provide
the name, the e-mail address, the shipping address, the bank
information including the sort code and the account number or the
credit card number and the expiration date as well as the VAT ID
number issued by the responsible inland revenue office and other
information arising from the changing legal framework for the
purpose of executing the order. The aforementioned information is
required before any order may be processed.</p>
<p>Saving of account information or credit card information does not
occur.</p>
<p>The customer hereby explicitly approves the above. We shall utilise
encryption software in order to protect this data during
transmission.</p>
<p>&nbsp;</p>
<p><strong>5. Miscellaneous</strong></p>
<p>German law shall apply exclusively.</p>
<p>The place of delivery and the court of jurisdiction shall be
Rotenburg/W眉mme (County Court Rotenburg/W眉mme or -
depending on the value of a claim - District Court Verden).</p>
<p>If any of the above provisions were to be ineffective or invalid,
this would not affect the validity of the remaining provisions.</p>
<p>Juwel Aquarium GmbH & Co. KG, Karl-G枚x-Stra脽e 1, D -
27356 Rotenburg/W眉mme, County Court Rotenburg HRA 1382</p>
<p>General partners: Juwel Aquarium GmbH, County Court Rotenburg, HRB
413, Annemarie K枚hlmoos, Rosengarten</p>
<p>Managing Directors of Juwel Aquarium GmbH: Gerd K枚hlmoos,
Annemarie K枚hlmoos, Lars Larsen, Wolfgang D眉rmeyer</p></td></tr></tbody></table></div>
	        </div>
	    </div>
	</div>

<!-- Login -->
<div id="login-box">
    <div class="box-head"><h2>Dealer Area</h2></div>
        <div class="clearfix login-form">
        <div class="grid_4 alpha register-teaser">
            <div class="inner">
                <h3>I am already a customer</h3>
                <form class="jqtransformx login-form" id="login" name="login" action="https://www.juwel-aquarium.de/index.php?lang=1&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="post">
		            <input type="hidden" name="stoken" value="A274D479"><input type="hidden" name="force_sid" value="rourg7mdqqqm5ppt19cs5hlfm7">
<input type="hidden" name="lang" value="1">
		            <input type="hidden" name="ldtype" value="infogrid">

		            <input type="hidden" name="fnc" value="login_noredirect">
		            <input type="hidden" name="cl" value="contact">
		            <input type="hidden" name="pgNr" value="0">
		            <input type="hidden" name="CustomError" value="loginBoxErrors">
		                                <div class="form-row form-text required">
                        <label>Username/E-mail*</label>
						<input id="loginEmail" type="text" name="lgn_usr" value="" class="textbox">
                    </div>
                    <div class="form-row form-text required">
                        <label>Password*</label>
                        <input id="loginPasword" type="password" name="lgn_pwd" class="textbox passwordbox" value="">
                    </div>
                    <div class="form-row form-checkbox">
                        <input type="checkbox"><label>Stay logged in</label>

                    </div>
                    <button type="submit" class="button green-right w180">Log In</button>
                </form>
                <span class="forgot-pass">
                    <span>Forgotten your password?</span>
                    <a href="index.php-lang=1&cl=forgotpwd.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=forgotpwd" class="green">Request a new password</a>
                </span>

            </div>
        </div>
        <div class="grid_4 omega register-teaser">
            <div class="inner">
            	                <div class="distr-register">
                    <p>You are a dealer and would like to order from JUWEL Aquarium?</p>

                    <a href="index.php-lang=1&cl=register&srb2b=1.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=register&srb2b=1" class="button green-right w240">Register as a dealer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Login -->

	
	

<script type="text/javascript">
<!--
$(function(){

    //coordinates for handlerfinder
    $('#distr_finder').data('lat', '53.125221').data('lng', '9.356571');

	searchHandler = function( oLocation, distance, iOfficial, iSeawater ) {

		var sData = "cl=srajax&fnc=findHandler&tpl=srfindhandler.tpl&lat="+oLocation.lat()+"&lon="+oLocation.lng()+"&distance="+distance+"&iofficial="+iOfficial+"&iseawater="+iSeawater;
		if( 'https:' == document.location.protocol ) {
			var sUrl = "https://www.juwel-aquarium.de/index.php?lang=1&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
		} else {
			var sUrl = "index.php-lang=1&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=1&*/;
		}
		if( oLocation != null && distance > 0 ) {
		    $.ajax({
		        url: sUrl,
		        type: "POST",
				dataType: "html",
		        cache: false,
		        data: sData,
				success: function(result){
					$('#handler_results').empty();
					$('#handler_results').append(result);
					showLeftContainer('.results');
					$('#results').show();
					var global_parent = $('#distr_finder');
					global_parent.find('.results .tabs .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100});
				}
		    });
		}
	};

    getCountryInfoPage = function( country ){

        if( 'https:' == document.location.protocol ) {
            var sUrl = "https://www.juwel-aquarium.de/index.php?lang=1&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
        } else {
            var sUrl = "index.php-lang=1&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=1&*/;
        }
        var data = '';
        if( oAddress != null ) {
            $.ajax({
                url: sUrl,
                type: "POST",
                async: false,
                dataType: "html",
                cache: false,
                data: {
                    cl: "srajax",
                    fnc:"getcountryinfopage",
                    countryData: country
                },
                success: function(result){
                    data = result;
                }
            });
        }

        return data;
    };

    getNoMapCountriesOxid = function(){

        if( 'https:' == document.location.protocol ) {
            var sUrl = "https://www.juwel-aquarium.de/index.php?lang=1&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
        } else {
            var sUrl = "index.php-lang=1&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=1&*/;
        }
        var data = '';

            $.ajax({
                url: sUrl,
                type: "POST",
                async: false,
                dataType: "html",
                cache: false,
                data: {
                    cl: "srajax",
                    fnc:"getnomapcountries"
                },
                success: function(result){
                    data = result;
                }
            });

        return data;
    };

});

//Init direction service
function initializeRouteService() {

  // Reinit Map
  showResult( oActLocation );
  oCircle.setVisible(false);

  // Instantiate a directions service.
  directionsService = new google.maps.DirectionsService();

  // Create a renderer for directions and bind it to the map.
  var rendererOptions = {
    map: oMap
  }
  directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)
}

// Calculate route with google direction service
function calcRoute( sDistance ) {

  initializeRouteService();

  // First, clear out any existing markerArray
  closeAllInfoBoxes();

  // Reinit scroll pane
  //var global_parent = $('#distr_finder');
  //global_parent.find('.results .tabs .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100});

  // Retrieve the start and end locations and create
  // a DirectionsRequest using WALKING directions.
  //var start = document.getElementById("start").value;
  //var end = document.getElementById("end").value;
  var start = new google.maps.LatLng(oActLocation.lat(), oActLocation.lng());
  var end = new google.maps.LatLng(fSelectedLat, fSelectedLon);
  var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.DirectionsTravelMode.DRIVING,
      provideRouteAlternatives: false
  };

  // Route the directions and pass the response to a
  // function to create markers for each step.
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {

      var warnings = document.getElementById("route_result");
      warnings.innerHTML = "" + response.routes[0].warnings + "";
      directionsDisplay.setDirections(response);
      showSteps(response, sDistance);
    }
  });
}

// Activate route tab
function activateRouteTab( sDistance ) {
	selectTabRoute( sDistance );
}

// List all steps on route
function showSteps(directionResult, sDistance) {
    // For each step, place a marker, and add the text to the marker's
    // info window. Also attach the marker to an array so we
    // can keep track of it and remove it when calculating new
    // routes.
    var myRoute = directionResult.routes[0].legs[0];
    var sSelectedAddressTxt = $('#sraddress').val();
    var iCnt = 1;
    var sResult = "";
    sResult += '<li class="first"><span class="top"><strong>'+ sYouAreHereTxt +'</strong><br>'+ sSelectedAddressTxt +'</span><span class="distance-total">'+ sDistance +'</span></li>';

    for (var i = 1; i < myRoute.steps.length; i++) {
	    if( myRoute.steps[i].instructions != "" ) {
		    sResult += '<li><span class="left">' + iCnt + '.</span><span class="right">'+ myRoute.steps[i].instructions +'</span></li>';
		    iCnt++;
	    }

        //var marker = new google.maps.Marker({
        //  position: myRoute.steps[i].start_point,
        //  map: oMap
        //});
        //attachInstructionText(marker, myRoute.steps[i].instructions);
        //markerArray[i] = marker;
  }
  var routeResultTxt = document.getElementById("route_result");
  routeResultTxt.innerHTML = sResult;
  //console.log(sResult);
}

// Attach text to marker
function attachInstructionText(marker, text) {
	//console.log(text);
}


//-->
</script>

<div id="distr_finder" class="clearfix">
	<!-- Head-Bereich mit Box-脺berschrift -->
    <div class="box-head">
    	<h2 class="tk-myriad-pro tk-regular">Find your dealer</h2>

        <!-- zum testen  - Aufrufen der unterschiedlichen Ansichten -->
        <div style="position: absolute; right: 150px; top: 33px; color: white !important">
        	        </div>
        <!-- ende-> zum testen -->
    </div>
    <!-- ende-> Head-Bereich mit Box-脺berschrift -->

    <!-- Haupt-Bereich -->
    <div class="distr_finder_main clearfix">
    	<!-- linker Bereich -->
        <div class="left_col fl">
        	<!-- linke Spalte oben -->
        	<div class="left_top">
            	<!-- Suche -->
            	<div class="left_search">
                	<p>Your location</p>
					<form onSubmit="onSearch(); return false;" action="#">
																																	<input id="srlanguage" type="hidden" value="en" name="lang">
																																																																	                        <input id="sraddress" type="text" value="">
                        <button class="button green">Search</button>
                    </form>
                </div>
            	<!-- ende-> Suche -->

                <!-- linker Main-Bereich der die Unterschiedlichen DIVs enth盲lt - je nach Zustand austauschbar -->
                <div class="left_main">
                	<!-- Start Message  -->

                    <div class="start">
                    	<p class="tk-myriad-pro tk-bold">
                    		Please choose above your location
                        </p>
                    </div>

                    <!-- ende-> Start Message  -->

                    <!-- Ergebnis-Optionen -->
                    <div class="result_options" id="result_options">
                    	<p>Do you mean:</p>
                        <ul id="more_results">
                        </ul>
                    </div>
                    <!-- ende-> Ergebnis-Optionen -->

                    <!-- Ergebnis-Optionen -->
                    <div class="result_options" id="zero_result">
                    	<p>No results</p>
                        <ul id="more_results">
                        </ul>
                    </div>
                    <!-- ende-> Ergebnis-Optionen -->

                    <!-- Ergebnisse und Routenplaner -->
                    <div class="results" id="results">
                    	<!-- Entfernungs-Slider -->
                    	<div class="distance-slider-area clearfix">
                        	<span class="title fl">Search radius:</span>
                            <div class="distance-slider fl" data-max-range="50"></div>
                        </div>
                        <!-- ende-> Entfernungs-Slider -->

                        <!-- Tab-Container -->
                    	<div class="tabs">
                        	<!-- Navigation der Tab-Container -->
                        	<ul class="clearfix">
                                <li><a href="#tab-distr" onClick="onSearch();">Dealer</a></li>
                                <li><a href="#tab-route" onClick="calcRoute( sSelectedDistance );">Route</a></li>
                            </ul>
                            <!-- ende-> Navigation der Tab-Container -->

                            <!-- Tab mit Auflistung der verschiedenen H盲ndler als Suchergebnis -->
                            <div id="tab-distr" class="scrollcontent">
                                	<ul class="result-list" id="handler_results">
										                                    </ul>
                            </div>
                            <!-- ende-> Tab mit Auflistung der verschiedenen H盲ndler als Suchergebnis -->

                            <!-- Tab mit Ergebnis der Routenplanung -->
                            <div id="tab-route" class="scrollcontent">
                                <ul class="result-list" id="route_result">
                                									</ul>
                            </div>
                            <!-- ende-> Ergebnisse und Routenplaner -->

                        </div>
                        <!-- ende-> Tab-Container -->
                    </div>
                    <!-- ende-> Ergebnisse und Routenplaner -->

                </div>
               	<!-- ende-> linker Main-Bereich -->

                <!-- Toggle-Box (H盲ndler-Registrieren) -->
                <div class="distr_register">
                    <span class="close_register"></span>
                    <h5>Let your customers find you!</h5>
                    <p>Are you an existing retailer of JUWEL products and want to be shown in the dealer finder? If so, then contact us.</p>
                                            <a class="button green" href="index.php-lang=1&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=1&cl=contact">Contact Us</a>
                                    </div>
                <!-- ende-> Toggle-Box (H盲ndler-Registrieren) -->

            </div>
            <!-- ende-> linke Spalte oben -->

            <div class="left_bottom">
            	You are a dealer?
            </div>

        </div>
        <!-- ende-> linker Bereich -->

        <!-- rechter Bereich -->
        <div class="right_col fl">

        	<!-- Div mit Karte -->
        	<div id="distr_map"></div>
            <!-- ende Div mit Karte -->

            <!-- rechts unten (unter Karte) Filter -->
            <div class="right_bottom clearfix">

                <form class="distr_filter_form">
                	<span class="title">Filter these results:</span>
                                            <input id="srofficial" type="hidden" name="authorized">
                    
                    <div class="seawater de clearfix" id="srdivseawater">
                        <input id="srseawater" type="checkbox" name="seawater">
                        <label for="seawater">Marine Department</label>
                    </div>

                </form>

            </div>
             <!-- ende rechts unten (unter Karte) Filter -->
        </div>
    </div>
    <!-- ende-> Main-Breich -->
</div></div><!-- Footer-Area -->

            
	<div id="sroverlay" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>