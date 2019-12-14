<!DOCTYPE html>
<head>
    <?php $this->load->view('_partials/head.php');?>
    <link rel="stylesheet" href="https://api.mazemap.com/js/v2.0.19/mazemap.min.css">
    <script type='text/javascript' src='https://api.mazemap.com/js/v2.0.19/mazemap.min.js'></script>

    <style>
    body { margin:1; padding:0; }
    #map { position:absolute; left:250px; top:0; bottom:0; width:1115px; }
    </style>
</head>
<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <?php $this->load->view('_partials/navbar.php');?>
            <?php $this->load->view('_partials/sidebar.php');?>
        </div>
    </nav>
    <div id="map" class="mazemap"></div>

    <script>
        var map = new Mazemap.Map({
            // container id specified in the HTML
            container: 'map',

            campuses: 121,

            // initial position in lngLat format
            center: {lng: 112.607716, lat: -7.965929},

            // initial zoom
            zoom: 9,

            zLevel: 3
        });

        // Add zoom and rotation controls to the map.
        map.addControl(new Mazemap.mapboxgl.NavigationControl());
    </script>
</body>
<?php $this->load->view('_partials/js.php');?>
</html>