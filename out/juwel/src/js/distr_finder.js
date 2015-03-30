/**
 * Handler finder
 *
 * @link http://www.superreal.de
 * @package src/js
 * @version $Id$
 *
 * @see out/juwel/tpl/page/inc/srhandlerfinder.tpl ( box content )
 * @see out/juwel/tpl/ajax/srfindhandler.tpl ( ajax results )
 */

// Map Services
var oMap;
var oGeocoder;
var oStartMarker;
var oCircle;
var oActLocation;

// Route Service
var directionDisplay;
var directionsService;
var stepDisplay;
var markerArray = [];

// Current Address
var oAddress;
var aNoMapCountries = [];
var NoMapCountryInfoLoaded;
var NoMapCountryInfoLoadedData = [];

$(function(){

		// Javascript für die InfoBox-Funktion <script src="out/juwel/src/js/libs/infobox_packed.js"/*tpa=http://www.juwel-aquarium.de/out/juwel/src/js/out/juwel/src/js/libs/infobox_packed.js*/></script>
		// Javascript für die Labels innerhalb der Marker <script src="out/juwel/src/js/libs/markerwithlabel_packed.js"/*tpa=http://www.juwel-aquarium.de/out/juwel/src/js/out/juwel/src/js/libs/markerwithlabel_packed.js*/></script>

		var global_parent = $('#distr_finder');
		var left_main = global_parent.find('.left_col .left_main'); // dieser Div enthält alle austauschbaren Divs auf der linken Seite (z.B. mit den Tab-Containern)
		var right_main = global_parent.find('.right_col');

		// Lightbox
		var box = '#distr_finder' // Element, dass das gesamte HTML für die Lightbox enthält
		var boxOpener = $('#panel-nav .distributor .ir, .product-act-nav .distributor a, .open_distr_finder, #handler-finder-footer') // onClick auf diese Elemente wird die Händlersuche geöffnet

		boxOpener.on('click', function(){
			openStoreFinder();
			return false;
		})

		//Der Handler finder kann auch direkt aufgerufen werden über <a href="javascript: openStoreFinder();"></a>

		openStoreFinder = function(){
			$.colorbox({transition:'elastic', speed:300, opacity: 0.5, overlayClose: false, scrolling: false, width: 880, height: 650, inline:true, href: box,

								onComplete:function(){ $('#colorbox').addClass('standard');

														// fix für ie7 (falsche Höhe)
														if($('html').hasClass('ie7')){
															$.fn.colorbox.resize({
																	innerHeight:(650)
															});
														};
													   // custom scroll-bar im Tab-Container (diese function muss unbedingt zuerst aufgerufen werden!!!)
													   global_parent.find('.results .tabs .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100});

													   // auf der Linken Seite werden alles Divs ausgeblendet und hier der Div mit "Bitte wählen Sie oben Ihren Standort" ausgewählt
													   showLeftContainer('.start');

													   // Tabs
													   global_parent.find('http://www.juwel-aquarium.de/out/juwel/src/js/.results .tabs').tabs();

													   // form replacement (für Checkboxen im Filter)
													   global_parent.find('.distr_filter_form').jqTransform();

													   // Map starten
													   distr_map();

													   // Slider
													   distanceSlider();

													 },
								onClosed:function(){
														$('#colorbox').removeClass('standard');
														// beim schließen alle linken DIVs wieder sichtbar machen und Tab-Box resetten um Bugs bei custom scroll-bar zu verhindern
														left_main.children('div').show()
														global_parent.find('http://www.juwel-aquarium.de/out/juwel/src/js/.results .tabs').tabs( "destroy" )
														left_main.find('.result-list li').removeClass('active');

												   }
			});
			// ende -> Lightbox
		};

		// get url parameter
		function getParam(variable){
		    var query = window.location.search.substring(1);    
		    var vars = query.split("&");    
		    for (var i=0;i<vars.length;i++) {      
		        var pair = vars[i].split("=");    
		        if(pair[0] == variable){return pair[1];}  
		    }
			return(false);  
		}

		//trigger storefinder by urlparameter
		if (getParam('sropenstorefinder') == 1){
			openStoreFinder();
		}

		// Toggle Fenster mit Händler-Registrierung (links unten)
		global_parent.on('click', '.close_register, .left_bottom', function() {

			global_parent.find('.left_bottom').toggleClass('active');
			global_parent.find('.distr_register').slideToggle()

		});

		// links einen bestimmten container einblenden
		showLeftContainer = function(el){
			left_main.children('div').hide() // links alle Inhalte ausblenden
			left_main.find(el).show() // Box einblenden
		}

		// Entfernungs-Slider auf der linken Seite über Tabs
		function distanceSlider(){
			var slider_sel = global_parent.find('.distance-slider'),
                max_value = slider_sel.data('max-range');
			var slider = slider_sel.slider({
				value: 10, // Start-Wert des Sliders
				min: 0, // Minimum-Wert (Km)
				max: max_value, // Maximum-Wert (Km)
				slide: function( event, ui ) {
					$( "#distance-slider-no" ).text( ui.value + '.0 km') // km-wert updaten (unter dem slider)
				},
				stop: function( event, ui ) {
					showResult( oActLocation );

					if(ui.value > 50){
                        oMap.setZoom(8);
					}

                    if(ui.value > 100){
                          oMap.setZoom(7);
                    }
				}
			});
			// beim ersten Start span für die km-Anzeige (unter dem slider) einfügen und Wert setzen, wenn nicht erster Aufruf, dann den Wert resetten auf den start-value
			if (slider_sel.find('.ui-slider-handle #distance-slider-no').length == 0){
				slider_sel.find('.ui-slider-handle').append('<span id="distance-slider-no">' + slider_sel.slider('value') + '.0 km' + ' </span>');
			}else{
				$( "#distance-slider-no" ).text( slider_sel.slider('value') + 'km')
			}
		}

		// Google Maps
		function distr_map(){

			//default coordinates
			var lat = 53.125221;
			var lng = 9.356571;

			//get coordinates from template
			if ($('#distr_finder').data('lat') != null && $('#distr_finder').data('lng') != null){
				lat = $('#distr_finder').data('lat');
				lng = $('#distr_finder').data('lng');
			}

			initMap(lat,lng);
		}

		// Init map
		initMap = function(lat,lng) {
			  // Map-Settings
			  var point = new google.maps.LatLng(lat,lng); // Koordinaten zum testen (Händler-Marker)
			  var MapOptions = {
				zoom: 9,
				center: point,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				streetViewControl : true,
				mapTypeControl: true,
				mapTypeControlOptions: {
				  style: google.maps.MapTypeControlStyle.DEFAULT,
				  position: google.maps.ControlPosition.RIGHT_TOP
				},
				panControl: false,
				zoomControl: true,
				zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.LARGE,
				  position: google.maps.ControlPosition.LEFT_TOP
				}
			  };

			   // map erstellen
			  oMap = new google.maps.Map(document.getElementById("distr_map"),MapOptions);
		}

		// Search handler
		onSearch = function(e){
			//showProgress();
			var sLocation = $('#sraddress').val();
			var sLanguage = $('#srlanguage').val();
			oGeocoder = new google.maps.Geocoder();
			oGeocoder.geocode({ 'address': sLocation, 'language': sLanguage, 'region': 'de' },function(results,status) {
				  //hideProgress();
				  switch( status ) {
				  	case google.maps.GeocoderStatus.ZERO_RESULTS:
				    	showZeroResult();
				  	break;

				  	case google.maps.GeocoderStatus.OK:
				  		if( results.length > 1 ) {
				  			// Get more result options
				  			showResults( results );
				  		} else {
				  			// Get single result
				  			/*
				  			var country;
				  			if(results[0].address_components.length>0) {
				  				for(var c=0;c<results[0].address_components.length;c++) {
				  					if(results[0].address_components[c].types.length>0) {
				  						for(var t=0;t<results[0].address_components[c].types.length;t++) {
				  							if(results[0].address_components[c].types[t]=='country') {
				  								country=results[0].address_components[c].short_name;
				  								console.log( ">0" + results[0].address_components[c].short_name );
				  								console.log( results[0].formatted_address );
				  								break;
				  							}
				  						}
				  						if(country!=null) break;
				  					}
				  				}
				  			}
				  			//funcCallback(results[0].geometry.location,country);
				  			console.log( "Formated address: " + results[0].formatted_address );
				  			//left_main.children('div').hide();
				  			//$('#more_results').html('');
				  			*/
                            oAddress = results[0];
				  			showResult(results[0].geometry.location);
				  		}
				  	break;

				  	default:
				  		// Something is going wrong.
				  		console.log( "Get one of these results: ERROR INVALID_REQUEST OVER_QUERY_LIMIT REQUEST_DENIED UNKNOWN_ERROR" );
				  	break;
				  }
				});

			return false;
		};

		// Search against google for given address
		searchOnMap = function( sFormatedAddress ) {
			$('#sraddress').val(sFormatedAddress);
			onSearch();
		};

		// Hide all divs in sidebar
		clearSideBar = function() {
			var left_main = global_parent.find('.left_col .left_main');
			left_main.children('div').hide();
			$('#zero_result').hide();
			$('#result_options').hide();
			$('#results').hide();
		};

		// Show - nothing found
		showZeroResult = function() {
			clearSideBar();
        	//showLeftContainer('.result_options');
        	$('#zero_result').show();
		};

		// Show addresses as text in list
		showResults = function( aAddresses ) {
			var sResult = "";
  			var iMax = 5;
  			if( aAddresses.length < iMax )
  				iMax = aAddresses.length;
  			for(var i=0;i<iMax;i++ ) {
                sResult += "<li><a rel='" + i + "' class='more_result'>" + aAddresses[i].formatted_address + "</a></li>";
            }
            clearSideBar();
            $('#more_results').html( sResult );
            $('#more_results').show();
            $('#result_options').show();

            $('#more_results').on('click', '.more_result', function(e) {
                var addressKey = $(this).attr('rel');
                $('#sraddress').val(aAddresses[addressKey].formatted_address);
                oAddress = aAddresses[addressKey];
                showResult(aAddresses[addressKey].geometry.location);
            });

            //global_parent.find('.results .tabs .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100});
        };

        // get country name and two symbols
        getCountryFromAddressComponent = function (address_component) {
            var data;
            $.each(address_component.address_components, function (index, addr_comp) {
                $.each(addr_comp.types, function (typeindex, typename) {
                    if (typename == 'country') {
                        data = addr_comp.short_name;
                    }
                });
            });
            return data;
        };

		// Navigate map to location - show start marker
		showResult = function( oLocation ) {
            // Get nomap countries
            getNoMapCountries();
            var country = getCountryFromAddressComponent(oAddress);
            // Show infopage instead of map
            if (aNoMapCountries.indexOf(country) !== -1) {
                // To avoid unneeded additional ajax calls
                if (NoMapCountryInfoLoaded !== country) {
                    $('#distr_map').empty();
                    var response = getCountryInfoPage(country);
                    // JSON to array
                    response = JSON.parse(response);
                    $('#distr_map').html("<div class=\"infopage_style\">"+response.data+"</div>");
                    NoMapCountryInfoLoaded = country;
                    NoMapCountryInfoLoadedData[country] = response.data;
                }else{
                    $('#distr_map').empty();
                    $('#distr_map').html("<div class=\"infopage_style\">"+NoMapCountryInfoLoadedData[country]+"</div>");
                }
                return false;
            }

			// Clear map
			initMap(oLocation.lat(),oLocation.lng());
  			oMap.setCenter(oLocation);
			// Start marker-icon (für den Standort des Users)
			var start_icon = new google.maps.MarkerImage(
				'out/juwel/src/images/all/distr_finder-start_marker.png'/*tpa=http://www.juwel-aquarium.de/out/juwel/src/js/out/juwel/src/images/all/distr_finder-start_marker.png*/,
				new google.maps.Size(33,33),
				new google.maps.Point(0,0),
				new google.maps.Point(16,16)
			);
			// Start-Marker (Standort des Users)
			oStartMarker = new google.maps.Marker({
			  icon: start_icon,
			  map: oMap,
			  position: oLocation
			});
            // Distanz ermitteln
            distance = global_parent.find('.distance-slider').slider('value');
            //Circle Objekt erstellen
            oCircle = new google.maps.Circle({
                map: oMap,
                radius: distance*1000,
                fillColor: '#2d97e6',
                fillOpacity: 0.1,
                strokeColor: '1a618a',
                strokeOpacity : 0.3,
                strokeWeight: 2
            });
            // Circle Objekt an Marker binden
            oCircle.bindTo('center', oStartMarker, 'position');

			oActLocation = oLocation;
			searchOnOxid();
		};

		// Checkbox handler - official filter
		$('#srofficial').live( 'change',
			function() {
                var actualZoom = oMap.getZoom();
				if( oActLocation != null ) {
					showResult( oActLocation );
				}
                oMap.setZoom(actualZoom);
			}
		);

		// Checkbox handler - official filter
		$('#srseawater').live( 'change',
			function() {
                var actualZoom = oMap.getZoom();
				if( oActLocation != null ) {
					showResult( oActLocation );
				}
                oMap.setZoom(actualZoom);
			}
		);

        // Checkbox handler - bronze filter
        $('#bronze').live( 'change',
            function() {
                var actualZoom = oMap.getZoom();
                if( oActLocation != null ) {
                    showResult( oActLocation );
                }
                oMap.setZoom(actualZoom);
            }
        );

        // Checkbox handler - silver filter
        $('#silver').live( 'change',
            function() {
                var actualZoom = oMap.getZoom();
                if( oActLocation != null ) {
                    showResult( oActLocation );
                }
                oMap.setZoom(actualZoom);
            }
        );

        // Checkbox handler - gold filter
        $('#gold').live( 'change',
            function() {
                var actualZoom = oMap.getZoom();
                if( oActLocation != null ) {
                    showResult( oActLocation );
                }
                oMap.setZoom(actualZoom);
            }
        );

        // Checkbox handler - platinum filter
        $('#platinum').live( 'change',
            function() {
                var actualZoom = oMap.getZoom();
                if( oActLocation != null ) {
                    showResult( oActLocation,distance );
                }
                oMap.setZoom(actualZoom);
            }
        );

        // Search against db with given location
        searchOnOxid = function( ) {
            var slider_sel = global_parent.find('.distance-slider');
            distance = slider_sel.slider('value');
            var iOfficial = checkSelected('srofficial'),
                iSeawater = checkSelected('srseawater'),
                iBronze = checkSelected('bronze'),
                iSilver = checkSelected('silver'),
                iGold = checkSelected('gold'),
                iPlatinum = checkSelected('platinum');

            //console.log( " official: " + iOfficial + " saewater: " +  iSeawater);
            //global_parent.find('.results .tabs .scrollcontent').jScrollPane({verticalDragMinHeight: 100, verticalDragMaxHeight: 100});
            searchHandler( oActLocation, distance, iOfficial, iSeawater, iBronze, iSilver, iGold, iPlatinum );
        };

        checkSelected = function(sId) {
            if( $("#"+sId).prop('checked') ) {
                var iValue = 1;
            } else {
                var iValue = 0;
            }
            return iValue;
        };

		// Activate route tab
		selectTabRoute = function() {
		  // Activate route tab
		  var global_parent = $('#distr_finder');
		  global_parent.find('http://www.juwel-aquarium.de/out/juwel/src/js/.results .tabs').tabs("select", 1);
		};

        // Get Country list with infopages
        getNoMapCountries = function(){
            if ( aNoMapCountries.length === 0 ){
                aNoMapCountries = getNoMapCountriesOxid();
            }
            return aNoMapCountries;
        };
});

