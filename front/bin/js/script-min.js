!function(a){"user strict";a(function(){function b(){d=new google.maps.LatLng(50.85045,4.34878),e={center:d,zoom:17,disableDefaultUI:!0,scrollwheel:!1,draggable:!0,mapTypeId:google.maps.MapTypeId.ROADMAPx,styles:i},imageRdv={url:markerMap,size:new google.maps.Size(100,100),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(50,100)},g=new google.maps.Geocoder,c(),f=new google.maps.Map(document.getElementById("contactMap"),e)}function c(){g.geocode({address:addressRdv},function(a,b){b==google.maps.GeocoderStatus.OK&&(f.setCenter(a[0].geometry.location),h=new google.maps.Marker({map:f,position:a[0].geometry.location,icon:imageRdv}))})}if(document.getElementById("contactMap")){var d,e,f,g,h,i=[{featureType:"administrative",elementType:"labels.text.fill",stylers:[{color:"#444444"}]},{featureType:"landscape",elementType:"all",stylers:[{color:"#f2f2f2"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"all",stylers:[{saturation:-100},{lightness:45}]},{featureType:"road.highway",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"road.arterial",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"all",stylers:[{color:"#7fa2aa"},{visibility:"on"}]}];b()}var j=!1;a(window).scroll(function(){var b=a(".page-head").outerHeight(!0);console.log(b);var c=a(this).scrollTop();c>b&&!j?(a(".site-nav").addClass("fixed"),a("body").css("padding-top","100px"),a(".page-head").css("display","none").addClass("fixed").fadeIn(),j=!0):a("#subnav").css({position:"static",top:"0px"})})})}(jQuery);