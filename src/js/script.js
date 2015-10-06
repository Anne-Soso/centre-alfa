( function( $ ) {
    "user strict";

    $( function() {

        var defaultPosition,
        mapOptions,
        gMap,
        Geocoder,
        gMarker,
        image;
        var addressRdv="Rue de la Madeleine, 17 4000 Liège";
        var stylesArray=[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7fa2aa"},{"visibility":"on"}]}];

        function generateGoogleMap() {
            //Set position to Bruxelle
            defaultPosition = new google.maps.LatLng( 50.8504500, 4.3487800 );
            //Init mapOptions
            mapOptions = {
                center: defaultPosition,
                zoom: 17,
                disableDefaultUI: true,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAPx,
                styles : stylesArray
            };
            imageRdv = {
                url: 'img/marker-map.svg',
                size: new google.maps.Size( 100,100 ),
                origin: new google.maps.Point( 0,0 ),
                anchor: new google.maps.Point( 50, 100 )
            };

            //Init Geocoder
            Geocoder = new google.maps.Geocoder();
            selectedAdress();
            //Set defaultGmap
            gMap = new google.maps.Map( document.getElementById( "contactMap" ), mapOptions );
        }
        function selectedAdress() {
           Geocoder.geocode( { 'address': addressRdv}, function(results, status) {
               if (status == google.maps.GeocoderStatus.OK) {
                   gMap.setCenter(results[0].geometry.location);
                   gMarker = new google.maps.Marker( {
                       map: gMap,
                       position: results[0].geometry.location,
                       icon: imageRdv
                   } );
               }
           } );
       }
       generateGoogleMap();

    } );



} ) (jQuery);
