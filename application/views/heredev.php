<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <?php $this->load->view('_partials/head.php');?>
    <!-- Here -->
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <style>
    html, body { border: 0; margin: 0; padding: 0; }
      #map {position:absolute; left:250px; top:0; bottom:0; width:1115px;  }
    </style>
    </head>
<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <?php $this->load->view('_partials/navbar.php');?>
            <?php $this->load->view('_partials/sidebar.php');?>
        </div>
    </nav>
    <div id='map'></div>
    <!--Heredev-->
    <script>
      const platform = new H.service.Platform({ apikey: 'jXDuWYoxHCQoYvcNNc_b-1mn_BsEaE4y4DIXIt2zjwo' });
      const defaultLayers = platform.createDefaultLayers();
      const map = new H.Map(document.getElementById('map'),
         defaultLayers.vector.normal.map, {
         center: { lat: -7.965929, lng: 112.607716 },
         zoom: 10,
         pixelRatio: window.devicePixelRatio || 1
      });
      window.addEventListener('resize', () => map.getViewPort().resize());
      const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
      const ui = H.ui.UI.createDefault(map, defaultLayers);

      //Begin routing
      //Configure transportation mode, start, end points
      //Initialize routing service
      const router = platform.getRoutingService();
   </script>
</body>
<?php $this->load->view('_partials/js.php');?>
</html>