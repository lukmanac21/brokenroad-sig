<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view('_partials/head.php');?>
    <!-- Mapbox -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.0/mapbox-gl.css' rel='stylesheet'/>
    <style>
    body { margin:1; padding:0; }
    #map { position:absolute; left:250px; top:0; bottom:0; width:1115px; }

    .marker {
    background-image: url('<?php echo base_url()?>assets/img/background/mapbox-icon.png');
    background-size: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    }
    .mapboxgl-popup {
    max-width: 200px;
    }
    .mapboxgl-popup-content {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    }
    </style>
    </head>
<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <?php $this->load->view('_partials/navbar.php');?>
            <?php $this->load->view('_partials/sidebar.php');?>
        </div>
    </nav>
        <div id='map' class='map'></div>
          <!--Mapbox-->
 
    <script>
    <?php foreach($data as $dataMap){?>
    mapboxgl.accessToken = 'pk.eyJ1IjoibHVrbWFuYXJpZWYyMSIsImEiOiJjazN6cnM3c2IxeWQxM3RtcjUzcnBicjk3In0.3Kf5nnsmGVfbEwkpJk6_vA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v10',
    center: [112.607716 , -7.965929 ],
    zoom: 10
    });
    var geojson = {
    type: 'FeatureCollection',
    features: [{
        type: 'Feature',
        geometry: {
        type: 'Point',
        coordinates: [<?php echo $dataMap->longitude ; ?>, <?php echo $dataMap->lattitude ; ?>]
        },
        properties: {
        title: '<?php echo $dataMap->nama_jalan ; ?>',
        description: 'Tingkat Kerusakan <?php echo $dataMap->nama_kerusakan ;?>'
        }
    }]
    };
    // add markers to map
    geojson.features.forEach(function(marker) {

    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker';

    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
    .addTo(map);
    });
    <?php }?>
    </script>

</body>
<?php $this->load->view('_partials/js.php');?>
</html>