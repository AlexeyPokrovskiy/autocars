/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 12);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/theme/maps.js":
/*!************************************!*\
  !*** ./resources/js/theme/maps.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict";

  var markerIcon = {
    anchor: new google.maps.Point(22, 16),
    url: 'assets/images/icon/marker/luxury-car.png'
  };

  function mainMap() {
    function locationData(pageURL, carCategory, carImg, carTitle, cardescription, carkm, carModel, carLocation, carType) {
      return '<div class="map-popup-wrap"><div class="map-popup"><div class="infoBox-close"><i class="fa-times"></i></div><div class="map-popup-category">' + carCategory + '</div><a href="' + pageURL + '" class="listing-img-content fl-wrap"><img src="' + carImg + '" alt=""></a> <div class="listing-content fl-wrap"><div class="listing-title fl-wrap"><h4 class="mb-2"><a href=' + pageURL + ' class="text-light-black">' + carTitle + '</a><span class="text-orange float-right custom-tooltip" data-tip="Add to compare"><i class="flaticon-add"></i></span></h4><p class="text-dark-grey fs-16">' + cardescription + '</p><div class="car-grid-layout-details"><span class="text-dark-white"><i class="flaticon-dashboard text-orange mr-2"></i>' + carkm + '</span><span class="text-dark-white p-relative"><i class="icon-car"></i>' + carModel + '</span></div><div class="car-grid-layout-location"><span class="text-dark-white"><i class="fas fa-map-marker-alt mr-2"></i>' + carLocation + '</span><span class="text-dark-white"><i class="fas fa-cog mr-2"></i>' + carType + '</span></div></div></div></div></div>';
    }

    var locations = [[locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.72956781, -73.99726866, 0, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.76221766, -73.96511769, 1, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.88496706, -73.88191222, 2, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.72228267, -73.99246214, 3, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.94982541, -73.84357452, 4, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.90261483, -74.15737152, 5, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.79145927, -74.08252716, 6, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.58423508, -73.96099091, 7, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.58110616, -73.97678375, 8, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX  ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.73112881, -74.07897948, 9, markerIcon], [locationData('#', 'Luxury Car', 'https://via.placeholder.com/300x200', 'Acura TLX ', 'A masterful combination of style, power, sporty handling and comfort.', "20,000 Km", "2010 Modal", "New York", "Manual"), 40.67386831, -74.10438536, 10, markerIcon]];
    var map = new google.maps.Map(document.getElementById('map-main'), {
      zoom: 9,
      scrollwheel: false,
      center: new google.maps.LatLng(40.7, -73.87),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoomControl: false,
      mapTypeControl: false,
      scaleControl: false,
      panControl: false,
      fullscreenControl: true,
      navigationControl: false,
      streetViewControl: false,
      animation: google.maps.Animation.BOUNCE,
      gestureHandling: 'cooperative',
      styles: [{
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#444444"
        }]
      }]
    });
    var boxText = document.createElement("div");
    boxText.className = 'map-box';
    var currentInfobox;
    var boxOptions = {
      content: boxText,
      disableAutoPan: true,
      alignBottom: true,
      maxWidth: 0,
      pixelOffset: new google.maps.Size(-145, -45),
      zIndex: null,
      boxStyle: {
        width: "260px"
      },
      closeBoxMargin: "0",
      closeBoxURL: "",
      infoBoxClearance: new google.maps.Size(1, 1),
      isHidden: false,
      pane: "floatPane",
      enableEventPropagation: false
    };
    var markerCluster, marker, i;
    var allMarkers = [];
    var clusterStyles = [{
      textColor: 'white',
      url: '',
      height: 50,
      width: 50
    }];

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        icon: locations[i][4],
        id: i
      });
      allMarkers.push(marker);
      var ib = new InfoBox();
      google.maps.event.addListener(marker, 'click', function (marker, i) {
        return function () {
          ib.setOptions(boxOptions);
          boxText.innerHTML = locations[i][0];
          ib.close();
          ib.open(map, marker);
          currentInfobox = marker.id;
          var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
          map.panTo(latLng);
          map.panBy(0, -180);
          google.maps.event.addListener(ib, 'domready', function () {
            $('.infoBox-close').click(function (e) {
              e.preventDefault();
              ib.close();
            });
          });
        };
      }(marker, i));
    }

    var options = {
      imagePath: 'assets/images/icon/marker/luxury-car.png',
      styles: clusterStyles,
      minClusterSize: 2
    };
    markerCluster = new MarkerClusterer(map, allMarkers, options);
    google.maps.event.addDomListener(window, "resize", function () {
      var center = map.getCenter();
      google.maps.event.trigger(map, "resize");
      map.setCenter(center);
    });
    $('.nextmap-nav').click(function (e) {
      e.preventDefault();
      map.setZoom(15);
      var index = currentInfobox;

      if (index + 1 < allMarkers.length) {
        google.maps.event.trigger(allMarkers[index + 1], 'click');
      } else {
        google.maps.event.trigger(allMarkers[0], 'click');
      }
    });
    $('.prevmap-nav').click(function (e) {
      e.preventDefault();
      map.setZoom(15);

      if (typeof currentInfobox == "undefined") {
        google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
      } else {
        var index = currentInfobox;

        if (index - 1 < 0) {
          google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
        } else {
          google.maps.event.trigger(allMarkers[index - 1], 'click');
        }
      }
    });
    $('.map-item').click(function (e) {
      e.preventDefault();
      map.setZoom(15);
      var index = currentInfobox;
      var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
      google.maps.event.trigger(allMarkers[marker_index], "click");

      if ($(this).hasClass("scroll-top-map")) {
        $('html, body').animate({
          scrollTop: $(".map-container").offset().top + "-80px"
        }, 500);
      } else if ($(window).width() < 1064) {
        $('html, body').animate({
          scrollTop: $(".map-container").offset().top + "-80px"
        }, 500);
      }
    }); // Scroll enabling button

    var scrollEnabling = $('.scrollContorl');
    $(scrollEnabling).click(function (e) {
      e.preventDefault();
      $(this).toggleClass("enabledsroll");

      if ($(this).is(".enabledsroll")) {
        map.setOptions({
          'scrollwheel': true
        });
      } else {
        map.setOptions({
          'scrollwheel': false
        });
      }
    });
    var zoomControlDiv = document.createElement('div');
    var zoomControl = new ZoomControl(zoomControlDiv, map);

    function ZoomControl(controlDiv, map) {
      zoomControlDiv.index = 1;
      map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
      controlDiv.style.padding = '5px';
      var controlWrapper = document.createElement('div');
      controlDiv.appendChild(controlWrapper);
      var zoomInButton = document.createElement('div');
      zoomInButton.className = "mapzoom-in";
      controlWrapper.appendChild(zoomInButton);
      var zoomOutButton = document.createElement('div');
      zoomOutButton.className = "mapzoom-out";
      controlWrapper.appendChild(zoomOutButton);
      google.maps.event.addDomListener(zoomInButton, 'click', function () {
        map.setZoom(map.getZoom() + 1);
      });
      google.maps.event.addDomListener(zoomOutButton, 'click', function () {
        map.setZoom(map.getZoom() - 1);
      });
    }
  }

  var map = document.getElementById('map-main');

  if (typeof map != 'undefined' && map != null) {
    google.maps.event.addDomListener(window, 'load', mainMap);
  } // contactmap


  $(function () {
    if ($('body').is('.contact-page')) {
      var contactMap = function contactMap() {
        function locationData(pageURL, carImg, carTitle, cardescription) {
          return '<div class="map-popup-wrap"><div class="map-popup"><div class="infoBox-close"><i class="fa-times"></i></div><a href="' + pageURL + '" class="listing-img-content fl-wrap"><img src="' + carImg + '" alt=""></a> <div class="listing-content fl-wrap"><div class="listing-title fl-wrap"><h4 class="mb-2"><a href=' + pageURL + ' class="text-light-black">' + carTitle + '</a></h4><p class="text-dark-grey fs-16">' + cardescription + '</p></div></div></div></div>';
        }

        var locations = [[locationData('#', 'https://via.placeholder.com/300x200', 'New York', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'), 40.72956781, -73.99726866, 0, markerIcon], [locationData('#', 'https://via.placeholder.com/300x200', 'New York', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'), 40.67386831, -74.10438536, 10, markerIcon]];
        var map = new google.maps.Map(document.getElementById('contact-map'), {
          zoom: 9,
          scrollwheel: false,
          center: new google.maps.LatLng(40.7, -73.87),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoomControl: false,
          mapTypeControl: false,
          scaleControl: false,
          panControl: false,
          fullscreenControl: true,
          navigationControl: false,
          streetViewControl: false,
          animation: google.maps.Animation.BOUNCE,
          gestureHandling: 'cooperative',
          styles: [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
              "color": "#444444"
            }]
          }]
        });
        var boxText = document.createElement("div");
        boxText.className = 'map-box';
        var currentInfobox;
        var boxOptions = {
          content: boxText,
          disableAutoPan: true,
          alignBottom: true,
          maxWidth: 0,
          pixelOffset: new google.maps.Size(-145, -45),
          zIndex: null,
          boxStyle: {
            width: "260px"
          },
          closeBoxMargin: "0",
          closeBoxURL: "",
          infoBoxClearance: new google.maps.Size(1, 1),
          isHidden: false,
          pane: "floatPane",
          enableEventPropagation: false
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
          textColor: 'white',
          url: '',
          height: 50,
          width: 50
        }];

        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            icon: locations[i][4],
            id: i
          });
          allMarkers.push(marker);
          var ib = new InfoBox();
          google.maps.event.addListener(marker, 'click', function (marker, i) {
            return function () {
              ib.setOptions(boxOptions);
              boxText.innerHTML = locations[i][0];
              ib.close();
              ib.open(map, marker);
              currentInfobox = marker.id;
              var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
              map.panTo(latLng);
              map.panBy(0, -180);
              google.maps.event.addListener(ib, 'domready', function () {
                $('.infoBox-close').click(function (e) {
                  e.preventDefault();
                  ib.close();
                });
              });
            };
          }(marker, i));
        }

        var options = {
          imagePath: 'assets/images/icon/marker/location.png',
          styles: clusterStyles,
          minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function () {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
        });
        $('.nextmap-nav').click(function (e) {
          e.preventDefault();
          map.setZoom(15);
          var index = currentInfobox;

          if (index + 1 < allMarkers.length) {
            google.maps.event.trigger(allMarkers[index + 1], 'click');
          } else {
            google.maps.event.trigger(allMarkers[0], 'click');
          }
        });
        $('.prevmap-nav').click(function (e) {
          e.preventDefault();
          map.setZoom(15);

          if (typeof currentInfobox == "undefined") {
            google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
          } else {
            var index = currentInfobox;

            if (index - 1 < 0) {
              google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
              google.maps.event.trigger(allMarkers[index - 1], 'click');
            }
          }
        });
        $('.map-item').click(function (e) {
          e.preventDefault();
          map.setZoom(15);
          var index = currentInfobox;
          var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
          google.maps.event.trigger(allMarkers[marker_index], "click");

          if ($(this).hasClass("scroll-top-map")) {
            $('html, body').animate({
              scrollTop: $(".map-container").offset().top + "-80px"
            }, 500);
          } else if ($(window).width() < 1064) {
            $('html, body').animate({
              scrollTop: $(".map-container").offset().top + "-80px"
            }, 500);
          }
        }); // Scroll enabling button

        var scrollEnabling = $('.scrollContorl');
        $(scrollEnabling).click(function (e) {
          e.preventDefault();
          $(this).toggleClass("enabledsroll");

          if ($(this).is(".enabledsroll")) {
            map.setOptions({
              'scrollwheel': true
            });
          } else {
            map.setOptions({
              'scrollwheel': false
            });
          }
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);

        function ZoomControl(controlDiv, map) {
          zoomControlDiv.index = 1;
          map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
          controlDiv.style.padding = '5px';
          var controlWrapper = document.createElement('div');
          controlDiv.appendChild(controlWrapper);
          var zoomInButton = document.createElement('div');
          zoomInButton.className = "mapzoom-in";
          controlWrapper.appendChild(zoomInButton);
          var zoomOutButton = document.createElement('div');
          zoomOutButton.className = "mapzoom-out";
          controlWrapper.appendChild(zoomOutButton);
          google.maps.event.addDomListener(zoomInButton, 'click', function () {
            map.setZoom(map.getZoom() + 1);
          });
          google.maps.event.addDomListener(zoomOutButton, 'click', function () {
            map.setZoom(map.getZoom() - 1);
          });
        }
      };

      var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'assets/images/icon/marker/location.png'
      };
      var map = document.getElementById('contact-map');

      if (typeof map != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', contactMap);
      }
    }
  });
})(this.jQuery);

/***/ }),

/***/ 12:
/*!******************************************!*\
  !*** multi ./resources/js/theme/maps.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\OSPanel\domains\autocar\resources\js\theme\maps.js */"./resources/js/theme/maps.js");


/***/ })

/******/ });