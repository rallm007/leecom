<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/header-ch.php");?>

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
	  // Schatten für Icon
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
                <li>Vous êtes ici:</li>
                <li>Contact</li>
            </ul>
        </div>
        <h1>Votre interlocuteur JUWEL Aquarium</h1>
    	<div class="grid_7 alpha">
        	<p class="introduction">
		    			    			    		Les questions et suggestions de nos clients sont toujours les bienvenues. C'est pourquoi les collaborateurs de notre service clients restent à votre disposition à tout moment. <br> Écrivez-nous simplement et nous nous efforcerons de répondre à votre demande dans un délai de deux jours.<br><br>S'il vous plaît noter que les demandes peuvent être répondu uniquement en anglais ou en allemand.
			    	            </p>
															
		    				           	

<form class="jqtransform" action="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="POST">
    <div>
        <input type="hidden" name="fnc" value="send"/>
        <input type="hidden" name="cl" value="contact"/>
                <input type="hidden" name="c_mach" value="rou1b734cce781ad9384068d4a486ad9"/>
    </div>
	<!-- Formularfelder -->
    <div class="clearfix">
        <label for="00Nb0000009Olwe" style="display:none; visibility:hidden">
            SR_FORM_CONTACT_HIDDEN_NOSPAM
            <input type="text" name="00Nb0000009Olwe" value="notspam" />
        </label>
        <div class="form-row form-text clear required">
			<label>Civilité:*</label>
            <select name="editval[oxuser__oxsal]">
	<option>Veuillez sélectionner</option>
    <option value="MR">M</option>
    <option value="MRS">Mme</option>
</select>        </div>
        <div class="form-row form-text fl required">
			<label>Prénom:*</label>
			<input type="text" class="w260" maxlength="255" name="editval[oxuser__oxfname]" size="20" value="">
        </div>
        <div class="form-row form-text fl required margin">
			<label>Nom:*</label>
			<input type="text" class="w260" maxlength="255" size="20" name="editval[oxuser__oxlname]" value="">
        </div>
        <div class="form-row form-text clear">
			<label class="clearfix">E-mail:*</label>
			<input type="text" class="w540" maxlength="80" size="20" name="editval[oxuser__oxusername]" value="">
        </div>
        <div class="form-row form-text clear">
			<label class="clearfix">Objet:*</label>
			<input type="text" class="w540" maxlength="80" size="20" name="c_subject" value="">
        </div>
        <div class="form-row form-text required">
            <label>Code de vérification:*</label>
                                        <label class="captcha-copy--contact">Code:</label>
                <img class="captcha-image--contact" id="verifyImageUrl" src="core/utils/verificationimg.php-e_mac=ox_DRNdXUULXEJE.png" tppabs="http://www.juwel-aquarium.de/core/utils/verificationimg.php?e_mac=ox_DRNdXUULXEJE" alt="">
                        <input type="text" field="verify" name="c_mac" value="">
        </div>
        <div class="form-row form-textarea required">
			<label>Message:*</label>
			<textarea rows="10" cols="34" name="c_message" placeholder="Veuillez formuler votre demande uniquement en allemand ou en anglais!"></textarea>
        </div>
    </div>
    <!-- ende-> Formularfelder -->
    <div class="form-bottom-buttons clearfix">
        <strong class="required-info-txt fl">* <br>Veuillez remplir tous les champs portant un *</strong>
        <button class="button green w130 fr">Envoyer</button>
    </div>
</form>

<script>
    $(function(){
        $('form.jqtransform').jqTransform();
    });
</script>		    		
		            </div>

    	<div class="grid_4 omega">
			<p class="address"><strong>JUWEL®Aquarium GmbH &amp; Co KG</strong>
        		Karl-Göx-Straße 1<br />

        		27356 Rotenburg / Wümme<br />
				Deutschland                </p>
<h4 class="tk-myriad-pro tk-semibold green">Service clients</h4>
<div class="tk-myriad-pro tk-semibold tel">
            	+49 (0)4261 9379 32*</div>
<div class="tk-myriad-pro tk-semibold fax">
            	+49 (0) 4261 9379 856</div>
<div class="tk-myriad-pro tk-semibold email">
            	service@juwel-aquarium.de <!-- service@juwel-aquarium.de  -->           </div>
<div class="contact_faq">
<p class="lh20">Trouvez rapidement la réponse aux questions les plus fréquemment posées dans notre section FAQ</p> <a class="arrow-link" href="index.php-lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=alist&cnid=deservice1.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=alist&cnid=deservice1" title="Questions et réponses">Questions et réponses</a>      </div>
<div class="contact_newsletter">
<p class="lh20">Abonnez-vous maintenant à notre newsletter pour rester informé sur les dernières nouveautés.</p><a class="arrow-link" href="index.php-lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter" title="Accès à l'abonnement à la newsletter">Accès à l'abonnement à la newsletter</a>      </div>
<div class="footnote"><font size="1"><span class="star"> <font size="2">*(du lundi au jeudi, 8:00-17:00, vendredi, 8:00-16:00) </font></span></font><!--
<p><(du lundi au jeudi, 8:00-17:00, vendredi, 8:00-16:00) 14 ct/min depuis un téléphone fixe en Allemagne, les prix depuis un portable peuvent varier</p><span class="star"> **</span>
<p>  gratuit --> </div>
			
        </div>
    </div>
</div>



</div>
<!-- /Main-Area -->

<!-- Footer-Area -->
																								


	<div id="breadcrumb-bottom" class="nav">
    <div class="page_margins">
        <ul>
						    <li><a href="index.php-lang=2&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=contact" title="contact">contact</a></li>
			    			        </ul>                        
    </div>
</div>
<div id="footer">
    <div class="page_margins bg">
      	  	  
			<div class="col products">
        	<h4>Produits</h4>		
										
										<ul>
																							<li><a href="fr/Produits/Aquariums/Rio-Line/Rio-125-noir.php#!juwel-000000000000001300" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Rio-Line/Rio-125-noir.php#!juwel-000000000000001300">Rio Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Vision-Line/Vision-180-noir.php#!juwel-000000000000009300" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Vision-Line/Vision-180-noir.php#!juwel-000000000000009300">Vision Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Trigon-Line/Trigon-190-noir.php#!juwel-000000000000016300" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Trigon-Line/Trigon-190-noir.php#!juwel-000000000000016300">Trigon Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Lido-Line/Lido-120-noir.php#!juwel-000000000000011300" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Lido-Line/Lido-120-noir.php#!juwel-000000000000011300">Lido Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Rekord-Line/Rekord-600-noir-Int.php#!juwel-000000000000021600" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Rekord-Line/Rekord-600-noir-Int.php#!juwel-000000000000021600">Rekord Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Vio-Line/Vio-40-noir-Int.php#!juwel-000000000000020040" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Vio-Line/Vio-40-noir-Int.php#!juwel-000000000000020040">Vio Line</a></li>
																							<li><a href="fr/Produits/Aquariums/Korall/Korall-60-Int.php#!juwel-000000000000023860" tppabs="http://www.juwel-aquarium.de/fr/Produits/Aquariums/Korall/Korall-60-Int.php#!juwel-000000000000023860">Korall</a></li>
										</ul>
							
										<ul>
																							<li><a href="fr/Produits/Autres/clairage/Tubes/Tubes-HiLite-T5/HiLite-Day-438-mm-24-W-Tube-fluor-T5-24-W-T5-438-mm.php" tppabs="http://www.juwel-aquarium.de/fr/Produits/Autres/clairage/Tubes/Tubes-HiLite-T5/HiLite-Day-438-mm-24-W-Tube-fluor-T5-24-W-T5-438-mm.php">Éclairage</a></li>
																							<li><a href="fr/Produits/Autres/Filtration/Masses-filtrantes/bioPad-S-Super-Comp-S-Ouate-filtrante-Bioflow-Super-Compact-Super.php" tppabs="http://www.juwel-aquarium.de/fr/Produits/Autres/Filtration/Masses-filtrantes/bioPad-S-Super-Comp-S-Ouate-filtrante-Bioflow-Super-Compact-Super.php">Filtration</a></li>
																							<li><a href="fr/Produits/Autres/Decoration/Cliff-Dark/Background-Cliff-Dark-Fond-en-relief.php" tppabs="http://www.juwel-aquarium.de/fr/Produits/Autres/Decoration/Cliff-Dark/Background-Cliff-Dark-Fond-en-relief.php">Décoration</a></li>
																							<li><a href="fr/Produits/Autres/Accessoires/Distributeur-de-nourriture/EasyFeed-Distributeur-automatique.php" tppabs="http://www.juwel-aquarium.de/fr/Produits/Autres/Accessoires/Distributeur-de-nourriture/EasyFeed-Distributeur-automatique.php">Accessoires</a></li>
																							<li><a href="fr/Produits/Autres/Eau-de-mer/Skimmer/Juwel-SeaSkim-INT.php" tppabs="http://www.juwel-aquarium.de/fr/Produits/Autres/Eau-de-mer/Skimmer/Juwel-SeaSkim-INT.php">Eau de mer</a></li>
										</ul>
									</div>
					        
                <div class="col">
        	<h4>Société</h4>
        			
				<ul>
                                   	                   		<li><a href="fr/Societe/Chronique/index.php" tppabs="http://www.juwel-aquarium.de/fr/Societe/Chronique/" >Chronique</a></li>
                   	                                   	                   		<li><a href="fr/Societe/Securite-et-qualite/index.php" tppabs="http://www.juwel-aquarium.de/fr/Societe/Securite-et-qualite/" >Sécurité et qualité</a></li>
                   	                                   	                   		<li><a href="fr/Societe/Production-et-logistique/index.php" tppabs="http://www.juwel-aquarium.de/fr/Societe/Production-et-logistique/" >Production et logistique</a></li>
                   	                                   	                   		<li><a href="fr/Societe/News/index.php" tppabs="http://www.juwel-aquarium.de/fr/Societe/News/" >News</a></li>
                   	                	            </ul>
					</div>
							                        		        
                <div class="col">
        	<h4>Services</h4>
        			
				<ul>
                                   	                   		<li><a href="fr/Services/Questions-et-reponses/index.php" tppabs="http://www.juwel-aquarium.de/fr/Services/Questions-et-reponses/" onclick="_gaq.push(['_trackEvent', 'FAQ Quelle', 'click', 'Servicecenter']);">Questions et réponses</a></li>
                   	                                   	                   		<li><a href="fr/Services/Downloadcenter/index.php" tppabs="http://www.juwel-aquarium.de/fr/Services/Downloadcenter/" onclick="_gaq.push(['_trackEvent', 'Downloadquelle', 'click', 'Downloadcenter']);">Downloadcenter</a></li>
                   	                                   	                   		<li><a href="index.php-lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter.php" tppabs="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&cl=newsletter">Newsletter</a></li>
                   	                	            </ul>
					</div>
							        
        		                                                                                                                                                                                                                                                                                                                                                                                                              <div class="col right">
        	<h4>S'abonner à la newsletter</h4>
            <div class="newsletter">
				<form action="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="post">
				    <input type="hidden" name="stoken" value="A274D479"><input type="hidden" name="force_sid" value="rourg7mdqqqm5ppt19cs5hlfm7">
<input type="hidden" name="lang" value="2">
				    <input type="hidden" name="fnc" value="fill">
				    <input type="hidden" name="cl" value="newsletter">
				                    	<fieldset>
                    	<input type="text" name="editval[oxuser__oxusername]" title="S'abonner" value="Votre adresse électronique">
                        <button type="submit">Envoyer</button>
                    </fieldset>
                </form>
            </div>
            <div class="facebook clearfix">
                <h4 class="ir"><a href="javascript:if(confirm('http://www.facebook.com/Juwel.Aquarium  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='http://www.facebook.com/Juwel.Aquarium'" tppabs="http://www.facebook.com/Juwel.Aquarium">JUWEL sur facebook</a></h4>
            </div>
        </div>
        <div class="bottom-col clearfix">

        	<ul class="payment display-none">
			            	
                <li class="ir mastercard">MasterCard</li>
                <li class="ir visa">Visa</li>
                <li class="ir elv">ELV</li>
                        </ul>
            <ul class="inline-nav clearfix">
            	<li><a href="index.php-lang=2&cl=alist&cnid=destatic2.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=alist&cnid=destatic2">Droit de rétractation</a></li>
                <li><a href="index.php-lang=2&cl=alist&cnid=destatic3.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=alist&cnid=destatic3">Déclaration de protection des données</a></li>
                <li><a href="index.php-lang=2&cl=alist&cnid=destatic4.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=alist&cnid=destatic4">Déclaration de garantie</a></li>
            </ul>
            <ul class="inline-nav clearfix left-separator">
                <li>
                    <a class="flag-gb" href="javascript:if(confirm('http://www.juwel-aquarium.co.uk/  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='http://www.juwel-aquarium.co.uk/'" tppabs="http://www.juwel-aquarium.co.uk/">
                        UK assortment
                    </a>
                </li>
                        </ul>
        </div>
    </div>
    <div id="footer-bottom">
        <div class="page_margins">
        	<div class="ir"></div>
            <span>2012 JUWEL Aquarium GmbH &amp Co. KG - Tous droits réservés.</span>
            <ul class="inline-nav">
            	<li><a href="#" id="handler-finder-footer">Rechercher un distributeur</a></li>
                <li><a href="index.php-lang=2&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=contact">Contact</a></li>
                <li><a href="index.php-lang=2&cl=alist&cnid=destatic1.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=alist&cnid=destatic1">Mentions légales</a></li>
                <li><a href="index.php-lang=2&cl=alist&cnid=destatic5.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=alist&cnid=destatic5">CGV</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="hidden">
	<!-- AGB (Lightbox-Content) - wird in light-box eingefügt (Aufruf über: juwel.contentLightBox('#agb-box') - siehe unten -->
	<div class="gen-content-lightbox" id="agb-box">
	    <div class="box-head">
	        <h2 class="tk-myriad-pro tk-regular">CGV</h2>
	    </div>
	    <div class="scrollcontent tinyscroll">
	        <div class="inner_content">
	        	


<!--<div>
<table style="border-collapse: collapse" summary="" border="0" bordercolor="#000000" cellpadding="3" cellspacing="0" height="2802" width="496">
<tbody>
<tr valign="top">
<td width="100%">
<p>Internet Terms and Conditions for retail traders</p>
<p><strong>1. Scope, Delivery area</strong></p>
<p>These terms and conditions shall apply to the ordering of
replacement parts and accessories by retail traders executed by us.</p>
<p>The exclusive object of the agreement shall be the sold Juwel®
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
Rotenburg/Wümme (County Court Rotenburg/Wümme or -
depending on the value of a claim - District Court Verden).</p>
<p>If any of the above provisions were to be ineffective or invalid,
this would not affect the validity of the remaining provisions.</p>
<p>Juwel Aquarium GmbH & Co. KG, Karl-Göx-Straße 1, D -
27356 Rotenburg/Wümme, County Court Rotenburg HRA 1382</p>
<p>General partners: Juwel Aquarium GmbH, County Court Rotenburg, HRB
413, Annemarie Köhlmoos, Rosengarten</p>
<p>Managing Directors of Juwel Aquarium GmbH: Gerd Köhlmoos,
Annemarie Köhlmoos, Lars Larsen, Wolfgang Dürmeyer</p></td></tr></tbody></table></div>
-->




<div><table style="border-collapse: collapse" summary="" border="0" bordercolor="#000000" cellpadding="3" cellspacing="0" height="2802" width="496"><tbody><tr valign="top">
<td width="100%">         
        		
	
<p><strong><span lang="FR">CGV sur Internet pour les
détaillants</span></strong><span lang="FR"></span></p>
<p><strong><span lang="FR">1. Domaine d'application et
zone de livraison</span></strong><span lang="FR"></span></p>
<p><span lang="FR"><br>
Les présentes conditions générales de vente s'appliquent à la commande de
pièces de rechange et d'accessoires par des détaillants auprès de notre
société.</span></p>
<p><span lang="FR">L'objet du contrat est
exclusivement le produit de marque Juwel® acheté, avec les propriétés et les
caractéristiques ainsi que l'usage prévu selon la description fournie par nos
soins. Des propriétés et/ou caractéristiques autres ou supplémentaires, ou un
usage dépassant celui défini ne valent que si nous avons confirmé ces derniers
expressément par écrit.</span></p>
<p><span lang="FR">&nbsp;</span></p>
<p><strong><span lang="FR">&nbsp;2. Commandes/conclusion
du contrat</span></strong><span lang="FR"><br>
La vente de pièces de rechange ou d'accessoires s'effectue exclusivement
conformément aux prix indiqués dans la liste de prix en vigueur, majorés de la
TVA légale. Pour la livraison de la marchandise commandée, le commettant doit
s'acquitter des frais de livraison forfaitaires.</span></p>
<p><span lang="FR">Le commettant peut, dans la
mesure où aucun autre accord n'a été conclu ou que ce n'est pas contraire aux
présentes conditions de vente, choisir de régler l'achat par autorisation de
prélèvement ou par carte de crédit.</span></p>
<p><span lang="FR">En outre, si cela est
techniquement possible et réalisable, le règlement peut être effectué
directement lors de la commande en ligne, par autorisation de prélèvement ou
par carte de crédit, sans toutefois que le commettant doive disposer d'un droit
à payer de cette manière. Pour ce faire, nous mettrons en œuvre toutes les
meilleures techniques disponibles pour la transmission en toute confidentialité
et sans erreurs des données. Nous attirons également votre attention sur le
fait que, pour des raisons techniques, il nous est impossible de garantir que
le paiement par autorisation de prélèvement ou par carte de crédit sera
disponible en ligne sans interruption. Toute réclamation du commettant à notre
encontre en raison de l'impossibilité de payer en ligne par carte de crédit ou
autorisation de prélèvement est ainsi entièrement exclue. Les marchandises
commandées sont ensuite livrées dès réception du paiement.</span></p>
<p><span lang="FR">À moins qu'un accord différent
ait été conclu ou que d'autres dispositions soient prévues dans les présentes
conditions de vente, l'envoi est déclenché exclusivement sur autorisation de
prélèvement ou par le paiement via une carte de crédit.</span></p>
<p><span lang="FR">Toutes les marchandises livrées
restent notre propriété jusqu'à leur paiement total, ainsi que jusqu'au
règlement de toute autre créance. Cette réserve de propriété vaut également
pour toute créance encore en souffrance émise depuis un compte paramétré du
client et jusqu'à son paiement dans sa totalité.</span></p>
<p><span lang="FR">Le contrat est formé par notre
confirmation de la commande via un moyen de communication à distance au sens du
§ 312b du code civil allemand BGB (réception) ou par la livraison dans les deux
semaines à compter de la date d'accès à la commande.</span></p>
<p><span lang="FR">&nbsp;</span></p>
<p><strong><span lang="FR">3. Livraison, transfert des
risques, garantie</span></strong><span lang="FR"></span></p>
<p><span lang="FR">Une entreprise mandatée par nos
soins sera chargée de procéder à la livraison dans la zone de livraison. Ce
faisant, le risque est transféré au commettant dès l'instant où nous
transmettons l'objet du contrat à l'entreprise chargée de la livraison. Si le
commettant nous a donné une instruction spéciale relative au type d'expédition
et que, sans raison impérieuse, nous sommes dans l'impossibilité de nous y
tenir, la responsabilité pour tout dommage en découlant incomberait au
commettant.</span></p>
<p><span lang="FR">En cas de faute commise par pure
négligence de notre part ou de notre auxiliaire de l'exécution, notre
responsabilité est limitée aux dommages prévisibles et contractuels typiques.</span></p>
<p><span lang="FR">Pour les produits neufs, nous
proposons une garantie d'un an, à moins que nous n'ayons fait d'autres
promesses de garantie indépendantes pour certains articles. Toute garantie pour
des articles d'occasion est exclue.</span></p>
<p><span lang="FR">La personne réceptionnant la
marchandise est tenue de contrôler dès la réception que le contenu de la
livraison est complet et ne présente aucun dommage apparent. Les éléments
manquants et/ou les dommages visibles doivent être signalés par écrit dans les
cinq jours suivants la livraison de la marchandise. Si tel n'est pas le cas,
notre responsabilité est exclue.</span></p>
<p><span lang="FR">En cas de vices apparents et de
réclamation déposée dans le délai indiqué au paragraphe précédent, ou de vices
cachés et signalés dans le délai de garantie légal, le droit du commettant se limite
dans un premier temps à l'élimination des vices ou à une livraison de
remplacement gratuite. Cette clause n'affecte pas la répartition du fardeau de
la preuve de la présence d'un vice.</span></p>
<p><span lang="FR">Si la livraison de remplacement
présente également un vice ou que l'élimination du vice a échoué, ou si nous
étions dans l'impossibilité de corriger le défaut après un avis de délai d'au
moins deux semaines sous forme écrite, le commettant serait en droit, à sa
discrétion, de résilier le contrat ou d'exiger une diminution appropriée du
prix de vente.</span></p>
<p><span lang="FR">Toute autre réclamation du
commettant est exclue, à moins que ne soit fait la preuve d'une négligence
grave ou d'un acte délibéré de notre part. Ceci vaut également pour
l'annulation d'un contrat, dans la mesure où l'impossibilité de réaliser tout
ou partie de la prestation, sans laquelle le contrat ne présente pas d'intérêt
pour le commettant, puisse nous être imputée.</span></p>
<p><span lang="FR">Tous les cas de force majeure
ainsi que les cas de mobilisation, de guerre, de grève, d'accidents d'exploitation,
de restrictions d'exploitation et de manque de matières premières ou
auxiliaires, de carburants, etc. entraînent un allongement approprié de nos
délais de livraison correspondant à la durée des perturbations dues à ces
circonstances.</span></p>
<p><span lang="FR">Toute demande de
dommages-intérêts de la part du commettant est alors exclue, dans la mesure où
aucune négligence grave ou aucun acte délibéré causant ce retard ne peut nous
être imputé.</span></p>
<p><span lang="FR">Les marchandises commandées et
livrées ne sont reprises qu'en cas d'erreur de livraison de notre part étayée
de preuves, et dans le cadre de la garantie légale.</span></p>
<p><span lang="FR">&nbsp;</span></p>
<p><strong><span lang="FR">4. Protection des données</span></strong><span lang="FR"></span></p>
<p><span lang="FR">Les données personnelles requises
pour le déroulement de la vente sont enregistrées par nos soins et ne sont
transmises à des tiers dans le cadre du contrat que dans la mesure où cela est
indispensable, et toujours dans le respect des réglementations légales en
vigueur dans le domaine des données personnelles. Pour l'exécution de la
commande, le commettant doit fournir son nom, son adresse e-mail, l'adresse
d'expédition, le nom et le code de sa banque ainsi que le numéro de compte, ou
ses numéros de carte de crédit et la date d'expiration, mais également son
numéro d'identification fiscale fourni par l'administration fiscale et d'autres
informations liées aux conditions légales variables. Sans ces données, la
commande ne sera pas traitée.</span></p>
<p><span lang="FR"><br>
Les informations sur le compte et celles concernant la carte de crédit ne sont
pas enregistrées.</span></p>
<p><span lang="FR">Par la présente, le client
exprime expressément son accord. Nous utilisons un logiciel de cryptage pour la
protection des données lors de la transmission.</span></p>
<p><span lang="FR">&nbsp;</span></p>
<p><strong><span lang="FR">5. Autres</span></strong><span lang="FR"></span></p>Seul le droit allemand s'applique.<br>
<br>Le lieu d'exécution et la juridiction compétente se trouvent à Rotenburg/Wümme (tribunal d'instance "Amtsgericht" de Rotenburg/Wümme ou selon la valeur du litige, tribunal régional "Landgericht" de Verden).<br>
<br>Si l'une des dispositions des présentes CGV était nulle ou inapplicable, cela n'entamerait en rien la validité des autres dispositions.<br>
<br>Juwel Aquarium GmbH & Co. KG, Karl-Göx-Straße 1, D - 27356 Rotenburg/Wümme, tribunal d'instance "Amtsgericht" de Rotenburg HRA 1382<br>
<br>Associé commandité : Juwel Aquarium GmbH, tribunal d'instance "Amtsgericht" de Rotenburg, HRB 413, Annemarie Köhlmoos, Rosengarten<br>
<br>Gérants de la société Juwel Aquarium GmbH : Gerd Köhlmoos, Annemarie Köhlmoos, Lars Larsen, Wolfgang Dürmeyer<br>
</td></tr></tbody></table></div>
	        </div>
	    </div>
	</div>

<!-- Login -->
<div id="login-box">
    <div class="box-head"><h2>Commerçants</h2></div>
        <div class="clearfix login-form">
        <div class="grid_4 alpha register-teaser">
            <div class="inner">
                <h3>Je suis déjà client</h3>
                <form class="jqtransformx login-form" id="login" name="login" action="https://www.juwel-aquarium.de/index.php?lang=2&force_sid=rourg7mdqqqm5ppt19cs5hlfm7&" method="post">
		            <input type="hidden" name="stoken" value="A274D479"><input type="hidden" name="force_sid" value="rourg7mdqqqm5ppt19cs5hlfm7">
<input type="hidden" name="lang" value="2">
		            <input type="hidden" name="ldtype" value="infogrid">

		            <input type="hidden" name="fnc" value="login_noredirect">
		            <input type="hidden" name="cl" value="contact">
		            <input type="hidden" name="pgNr" value="0">
		            <input type="hidden" name="CustomError" value="loginBoxErrors">
		                                <div class="form-row form-text required">
                        <label>Nom d'utilisateur/adresse électronique*</label>
						<input id="loginEmail" type="text" name="lgn_usr" value="" class="textbox">
                    </div>
                    <div class="form-row form-text required">
                        <label>Mot de passe*</label>
                        <input id="loginPasword" type="password" name="lgn_pwd" class="textbox passwordbox" value="">
                    </div>
                    <div class="form-row form-checkbox">
                        <input type="checkbox"><label>Rester connecté</label>

                    </div>
                    <button type="submit" class="button green-right w180">Se connecter</button>
                </form>
                <span class="forgot-pass">
                    <span>Vous avez perdu votre mot de passe ?</span>
                    <a href="index.php-lang=2&cl=forgotpwd.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=forgotpwd" class="green">Demander un nouveau mot de passe</a>
                </span>

            </div>
        </div>
        <div class="grid_4 omega register-teaser">
            <div class="inner">
            	                <div class="distr-register">
                    <p>Vous êtes commerçant et vous souhaitez commander des articles JUWEL Aquarium ?</p>

                    <a href="index.php-lang=2&cl=register&srb2b=1.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=register&srb2b=1" class="button green-right w240">Obtenez un concessionnaire</a>
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
			var sUrl = "https://www.juwel-aquarium.de/index.php?lang=2&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
		} else {
			var sUrl = "index.php-lang=2&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=2&*/;
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
            var sUrl = "https://www.juwel-aquarium.de/index.php?lang=2&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
        } else {
            var sUrl = "index.php-lang=2&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=2&*/;
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
            var sUrl = "https://www.juwel-aquarium.de/index.php?lang=2&amp;force_sid=rourg7mdqqqm5ppt19cs5hlfm7&amp;";
        } else {
            var sUrl = "index.php-lang=2&.php"/*tpa=http://www.juwel-aquarium.de/index.php?lang=2&*/;
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
	<!-- Head-Bereich mit Box-Überschrift -->
    <div class="box-head">
    	<h2 class="tk-myriad-pro tk-regular">Rechercher un distributeur</h2>

        <!-- zum testen  - Aufrufen der unterschiedlichen Ansichten -->
        <div style="position: absolute; right: 150px; top: 33px; color: white !important">
        	        </div>
        <!-- ende-> zum testen -->
    </div>
    <!-- ende-> Head-Bereich mit Box-Überschrift -->

    <!-- Haupt-Bereich -->
    <div class="distr_finder_main clearfix">
    	<!-- linker Bereich -->
        <div class="left_col fl">
        	<!-- linke Spalte oben -->
        	<div class="left_top">
            	<!-- Suche -->
            	<div class="left_search">
                	<p>Votre ville</p>
					<form onSubmit="onSearch(); return false;" action="#">
																																														<input id="srlanguage" type="hidden" value="fr" name="lang">
																																																				                        <input id="sraddress" type="text" value="">
                        <button class="button green">Rechercher</button>
                    </form>
                </div>
            	<!-- ende-> Suche -->

                <!-- linker Main-Bereich der die Unterschiedlichen DIVs enthält - je nach Zustand austauschbar -->
                <div class="left_main">
                	<!-- Start Message  -->

                    <div class="start">
                    	<p class="tk-myriad-pro tk-bold">
                    		Veuillez indiquer ci-dessus votre ville
                        </p>
                    </div>

                    <!-- ende-> Start Message  -->

                    <!-- Ergebnis-Optionen -->
                    <div class="result_options" id="result_options">
                    	<p>Vouliez-vous dire :</p>
                        <ul id="more_results">
                        </ul>
                    </div>
                    <!-- ende-> Ergebnis-Optionen -->

                    <!-- Ergebnis-Optionen -->
                    <div class="result_options" id="zero_result">
                    	<p>Nous n'avons trouvé aucun résultat</p>
                        <ul id="more_results">
                        </ul>
                    </div>
                    <!-- ende-> Ergebnis-Optionen -->

                    <!-- Ergebnisse und Routenplaner -->
                    <div class="results" id="results">
                    	<!-- Entfernungs-Slider -->
                    	<div class="distance-slider-area clearfix">
                        	<span class="title fl">Rayon de recherche:</span>
                            <div class="distance-slider fl" data-max-range="50"></div>
                        </div>
                        <!-- ende-> Entfernungs-Slider -->

                        <!-- Tab-Container -->
                    	<div class="tabs">
                        	<!-- Navigation der Tab-Container -->
                        	<ul class="clearfix">
                                <li><a href="#tab-distr" onClick="onSearch();">Commerçants</a></li>
                                <li><a href="#tab-route" onClick="calcRoute( sSelectedDistance );">Itinéraire</a></li>
                            </ul>
                            <!-- ende-> Navigation der Tab-Container -->

                            <!-- Tab mit Auflistung der verschiedenen Händler als Suchergebnis -->
                            <div id="tab-distr" class="scrollcontent">
                                	<ul class="result-list" id="handler_results">
										                                    </ul>
                            </div>
                            <!-- ende-> Tab mit Auflistung der verschiedenen Händler als Suchergebnis -->

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

                <!-- Toggle-Box (Händler-Registrieren) -->
                <div class="distr_register">
                    <span class="close_register"></span>
                    <h5>Permettez à vos clients à vous trouver!</h5>
                    <p>Vous êtes un détaillant de produits existants JUWEL et que vous voulez être montré dans le viseur revendeur? Si c'est le cas, contactez-nous.</p>
                                            <a class="button green" href="index.php-lang=2&cl=contact.php" tppabs="http://www.juwel-aquarium.de/index.php?lang=2&cl=contact">Contactez-nous</a>
                                    </div>
                <!-- ende-> Toggle-Box (Händler-Registrieren) -->

            </div>
            <!-- ende-> linke Spalte oben -->

            <div class="left_bottom">
            	Vous être commerçant ?
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
                	<span class="title">Filtrer les résultats:</span>
                                            <input id="srofficial" type="hidden" name="authorized">
                    
                    <div class="seawater de clearfix" id="srdivseawater">
                        <input id="srseawater" type="checkbox" name="seawater">
                        <label for="seawater">Rayon eau de mer</label>
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