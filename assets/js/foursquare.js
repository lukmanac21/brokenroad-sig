       var map;
       var items, markers_data = [];
       $.getJSON('https://api.foursquare.com/v2/venues/search?ll=-7.965929,112.607716&limit=14&radius=1000&client_id=LOZP1WQCGRFC2OZZCHW4X3IICCLDCDNNQ11EHB0MBLZIWH3S&client_secret=101LDQKYQWTS3KKKGUSQMSKX42RD5QNCPHCD3XJKH5PY30BB&v=20120101',
       function (data) {
           $.each(data.response.venues, function (i, venues) {
               content = '<p>Name: ' + venues.name +
                   ' Address: ' + venues.location.address +
                   ' Lat/long: ' + venues.location.lat + ', ' + venues.location.lng + '</p>';
               $(content).appendTo("#venues");
               //map
               markers_data.push({
                   lat: venues.location.lat,
                   lng: venues.location.lng,
                   title: venues.name,
                   icon: {
                       size: new google.maps.Size(32, 32),
                       url: 'https://foursquare.com/img/categories/food/default.png'
                   },
                   infoWindow: {
                       content: '<p>' + content + '</p>'
                   }
               });
           });
           map.addMarkers(markers_data);
       });
       function printResults(data) {
           $('#foursquare-results').text(JSON.stringify(data));
       }
       $(document).on('click', '.pan-to-marker', function (e) {
           e.preventDefault();
           var position, lat, lng, $index;
           $index = $(this).data('marker-index');
           position = map.markers[$index].getPosition();

           lat = position.lat();
           lng = position.lng();

           map.setCenter(lat, lng);
       });
       $(document).ready(function () {

           map = new GMaps({
               div: '#map',
               lat: 32.71533,
               lng: -117.15726,
               zoom: 15,
               scrollwheel: false,
               zoomControl: true,
               zoomControlOpt: {
                   style: 'SMALL',
                   position: 'TOP_LEFT'
               },
               panControl: false,
           });
           
  map.addMapType("osm", {
  getTileUrl: function(coord, zoom) {
    return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
  },
  tileSize: new google.maps.Size(256, 256),
  name: "OpenStreetMap",
  maxZoom: 18
});

           map.on('marker_added', function (marker) {
               var index = map.markers.indexOf(marker);
               $('#results').append('<li><a href="#" class="pan-to-marker" data-marker-index="' + index + '">' + marker.title + '</a></li>');

               if (index == map.markers.length - 1) {
                   map.fitZoom();
               }
           });

           var xhr = $.getJSON('https://api.foursquare.com/v2/venues/search?ll=32.7153,-117.1564&limit=14&radius=1000&client_id=LOZP1WQCGRFC2OZZCHW4X3IICCLDCDNNQ11EHB0MBLZIWH3S&client_secret=101LDQKYQWTS3KKKGUSQMSKX42RD5QNCPHCD3XJKH5PY30BB&v=20120101');

           xhr.done(printResults);
       });