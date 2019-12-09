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
    <div class="main-content" style="margin-top : 100px ;">
    <div class="container-fluid mt--5">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Data Jalan</h3>
              <br>
            </div>
            <?php foreach($data as $rowMaps){?>
            <form role="form" action="<?php echo site_url('Data/inputdata');?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select name="wilayah" class="form-control">
                                    <option value="">--Pilih Wilayah--</option>
                                    <?php foreach ($wilayah as $rowWilayah) {?>
                                        <option value="<?php echo $rowWilayah->nama_wilayah; ?>"><?php echo $rowWilayah->nama_wilayah; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                                </div>
                                <select name="arus" class="form-control">
                                    <option value="">--Pilih Arus--</option>
                                    <?php foreach ($arus as $rowArus) {?>
                                        <option value="<?php echo $rowArus->nama_arus; ?>"><?php echo $rowArus->nama_arus; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-vector"></i></span>
                                </div>
                                <select name="kondisi"class="form-control">
                                    <option value="">--Pilih Kondisi Jalan--</option>
                                    <?php foreach ($jalan as $rowJalan) {?>
                                        <option value="<?php echo $rowJalan->nama_jalan; ?>"><?php echo $rowJalan->nama_jalan; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-sound-wave"></i></span>
                                </div>
                                <select name="keramaian" class="form-control">
                                    <option value="">--Pilih Tingkat Keramaian--</option>
                                    <?php foreach ($keramaian as $rowKeramaian) {?>
                                        <option value="<?php echo $rowKeramaian->nama_keramaian; ?>"><?php echo $rowKeramaian->nama_keramaian; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                                </div>
                                <input type="text" class="form-control" name="panjang" id="panjang" placeholder="Panjang Lubang" value="<?php echo $rowMaps->panjang_lubang ;?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-button-pause"></i></span>
                                </div>
                                <input type="text" class="form-control" name="lebar" id="lebar" placeholder="Lebar Lubang" value="<?php echo $rowMaps->lebar_lubang ;?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                </div>
                                <input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude"  value="<?php echo $rowMaps->lattitude ;?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                </div>
                                <input type="text" class="form-control" name="long" id="long" placeholder="Longitude" value="<?php echo $rowMaps->longitude ;?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
                </div>
              </form>
                                    <?php }?>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      <!-- Footer -->
    </div>
    </div>
</body>
<?php $this->load->view('_partials/js.php');?>
</html>
