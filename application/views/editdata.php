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
              <hr>
              <h4 class="mb-0"> Data Detail Kerusakan </h4>
              <br>
            </div>
            <?php foreach($data as $dataMaps){?>
            <form role="form" action="<?php echo site_url('Data/updatedata');?>" method="post">
            <div style="margin-left: 15px ; margin-right: 15px ;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select name="id_wilayah" class="form-control id_wilayah">
                                    <option value="">--Pilih Wilayah--</option>
                                    <?php foreach ($wilayah as $rowWilayah) {?>
                                        <option value="<?php echo $rowWilayah->id_wilayah; ?>"<?php if($dataMaps->id_wilayah==$rowWilayah->id_wilayah) echo 'selected="selected"'; ?>><?php echo $rowWilayah->nama_wilayah; ?></option>
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
                                <select name="id_arus" class="form-control">
                                    <option value="">--Pilih Arus--</option>
                                    <?php foreach ($arus as $rowArus) {?>
                                        <option value="<?php echo $rowArus->id_arus; ?>"<?php if($dataMaps->id_arus==$rowArus->id_arus) echo 'selected="selected"'; ?>><?php echo $rowArus->nama_arus; ?></option>
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
                                <select name="id_jalan" class="form-control id_jalan2">
                                    <option value="">--Pilih Nama Jalan--</option>
                                    <?php foreach ($jalan as $rowJalan) {?>
                                        <option value="<?php echo $rowJalan->id_jalan; ?>"<?php if($dataMaps->id_jalan==$rowJalan->id_jalan) echo 'selected="selected"'; ?>><?php echo $rowJalan->nama_jalan; ?></option>
                                    <?php }?>
                                </select>
                                <select name="id_jalan" class="form-control id_jalan1"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-sound-wave"></i></span>
                                </div>
                                <select name="id_keramaian" class="form-control">
                                    <option value="">--Pilih Tingkat Keramaian--</option>
                                    <?php foreach ($keramaian as $rowKeramaian) {?>
                                        <option value="<?php echo $rowKeramaian->id_keramaian; ?>"<?php if($dataMaps->id_keramaian==$rowKeramaian->id_keramaian) echo 'selected="selected"'; ?>><?php echo $rowKeramaian->nama_keramaian; ?></option>
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
                                <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                </div>
                                <select name="id_type" class="form-control">
                                    <option value="">--Pilih Type Jalan--</option>
                                    <?php foreach ($type as $rowType) {?>
                                        <option value="<?php echo $rowType->id_type; ?>"<?php if($dataMaps->id_type==$rowType->id_type) echo 'selected="selected"'; ?>><?php echo $rowType->type_jalan; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-atom"></i></span>
                                </div>
                                <select name="id_material" class="form-control">
                                    <option value="">--Pilih Material Jalan--</option>
                                    <?php foreach ($material as $rowMaterial) {?>
                                        <option value="<?php echo $rowMaterial->id_material; ?>"<?php if($dataMaps->id_material==$rowMaterial->id_material) echo 'selected="selected"'; ?>><?php echo $rowMaterial->nama_material; ?></option>
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
                                <span class="input-group-text"><i class="ni ni-chart-pie-35"></i></span>
                                </div>
                                <select name="id_kerusakan" class="form-control">
                                    <option value="">--Pilih Kerusakan Jalan--</option>
                                    <?php foreach ($kerusakan as $rowKerusakan) {?>
                                        <option value="<?php echo $rowKerusakan->id_kerusakan; ?>"<?php if($dataMaps->id_kerusakan==$rowKerusakan->id_kerusakan) echo 'selected="selected"'; ?>><?php echo $rowKerusakan->nama_kerusakan; ?></option>
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
                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                </div>
                                <input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude" value="<?php echo $dataMaps->lattitude?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                </div>
                                <input type="text" class="form-control" name="long" id="long" placeholder="Longitude" value="<?php echo $dataMaps->longitude?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
                </div>
            </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      <!-- Footer -->
    </div>
    </div>
</body>
<?php $this->load->view('_partials/js.php');?>
<script>
  $(document).ready(function(){
    $(".id_jalan1").hide();
    $(".id_wilayah").change(function(){ 
      $(".id_jalan1").show();
      $(".id_jalan2").hide();  
      $.ajax({
        type: "POST",
        url: "<?php echo base_url("index.php/data/list_jalan"); ?>", 
        data: {id_wilayah : $(".id_wilayah").val()}, 
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){
          $(".id_jalan2").hide(); 
          $(".id_jalan1").html(response.list_jalan).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { 
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); 
        }
      });
    });
  });
  </script> 
</html>
