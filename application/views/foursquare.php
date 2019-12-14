<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <?php $this->load->view('_partials/head.php');?>
    <!-- foursquare -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <style>
    html, body { border: 0; margin: 0; padding: 0; }
    #map {position:absolute; left:250px; top:0; bottom:0; width:1115px;  }
    #venues {font-size:8px}
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
    <ul id="results"></ul>
    <div id='foursquare-results'></div>
    <hr>
    <div id='venues'></div>
</body>
<?php $this->load->view('_partials/js.php');?>
<script src="<?php echo base_url();?>assets/js/foursquare.js"></script>
</html>