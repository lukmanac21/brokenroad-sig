<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Vector Tiles</title>
  <link rel='stylesheet' href='https://cdn.thinkgeo.com/vectormap-js/3.0.0/vectormap.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <?php $this->load->view('_partials/head.php');?>
  <style>
    body { margin:1; padding:0; }
    #map { position:absolute; left:250px; top:0; bottom:0; width:1115px; }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Vector Tiles </title>
</head>

<body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <?php $this->load->view('_partials/navbar.php');?>
            <?php $this->load->view('_partials/sidebar.php');?>
        </div>
    </nav>
     <!-- This <div> is the container into which our map control will be loaded. -->
    <div id="map">
        <!-- Set up contorl panels for the different styles of maps.-->
        <div id="wrap">
            <div class="thumb thumb-light" value="light">
            </div>
            <div class="thumb thumb-dark" value="dark">
            </div>
        </div>

        <!-- Set up error message panel. -->
        <div id="error-modal" class="hide">
            <div class="modal-content">
                <p>We're having trouble communicating with the ThinkGeo Cloud. Please check the API key being used in
                    this
                    sample's JavaScript source code, and ensure it has access to the ThinkGeo Cloud services you are
                    requesting. You can create and manage your API keys at <a href="https://cloud.thinkgeo.com"
                        target="_blank" rel="noopener">https://cloud.thinkgeo.com</a>.</p>
                <button>OK</button>
            </div>
        </div>
    </div>
</body>

</html>
<!-- partial -->
<script src='https://cdn.thinkgeo.com/vectormap-js/3.0.0/vectormap.js'></script>
<script src='https://cdn.thinkgeo.com/vectormap-icons/3.0.0/webfontloader.js'></script>
<script  src="<?php echo base_url();?>assets/js/script.js"></script>
<?php $this->load->view('_partials/js.php');?>

</body>
</html>