$(document).ready(function(){


 // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 15,
                    

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(50.0902495, 14.4461928), 


                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    //styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('mapa');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

var infowindowOptions = {
      position: new google.maps.LatLng(50.052640, 14.289837),
      content: '<div style="padding:5px 0px 5px 20px;"><h3 style="color: #e76d66; margin-top:12px;">Prodejna Helveti s.r.o.</h3></div>'
    };
    var infowindow = new google.maps.InfoWindow(infowindowOptions);


     var options = {
          position: new google.maps.LatLng(50.0902495, 14.4461928), icon: "http://www.helveti.cz/themes/leodig/img/helveti/marker.png"
        };
    var marker = new google.maps.Marker(options);
    marker.setMap(map);


    addListenerToMarker(marker, map, infowindow);
                 
            }


// Opens info window when marker is clicked.
    function addListenerToMarker(marker, map, infowindow) {
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });

}

})