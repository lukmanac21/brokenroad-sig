<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('_partials/head.php');?>
<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <?php $this->load->view('_partials/navbar.php');?>
            <?php $this->load->view('_partials/sidebar.php');?>
        </div>
    </nav>
    <div class="main-content">
    </div>
</body>
<?php $this->load->view('_partials/js.php');?>
</html>