<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/header-cn.php");?>

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
<?php include($_SERVER['DOCUMENT_ROOT']."/leecom/footer-cn.php");?>
            
	<div id="sroverlay" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999999999999999;display: none;"></div>
</body>
</html>