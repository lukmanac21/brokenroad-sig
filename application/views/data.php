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
              <a href="createdata" type="button" style="margin-bottom : 10px ;" type="button" class="btn btn-default">
                Tambah Data
              </a> 
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Wilayah</th>
                    <th scope="col">Arus Jalan</th>
                    <th scope="col">Kondisi Jalan</th>
                    <th scope="col">Keramaian Jalan</th>
                    <th scope="col">Panjang</th>
                    <th scope="col">Lebar</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <?php $i = 1 ; 
                foreach ($maps as $resultMaps) 
                { ?>
                <tbody>
                  <td> <?php echo $i ; ?></td>
                  <td><?php echo $resultMaps->nama_wilayah; ?></td>
                  <td><?php echo $resultMaps->nama_arus; ?></td>
                  <td><?php echo $resultMaps->nama_jalan; ?></td>
                  <td><?php echo $resultMaps->nama_keramaian; ?></td>
                  <td><?php echo $resultMaps->panjang_lubang; ?></td>
                  <td><?php echo $resultMaps->lebar_lubang; ?></td> 
                  <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="<?php echo site_url('Data/editdata/')?><?php echo $resultMaps->id_maps; ?>">Edit</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#delete<?php echo $resultMaps->id_maps; ?>" class="btn btn-primary btn-sm">Delete</a>
                        </div>
                      </div>
                    </td>
                </tbody>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php 
      foreach ($maps as $resultMaps) 
      { ?>
      <div class="modal fade" id="delete<?php echo $resultMaps->id_maps;?>">
        <div class="modal-dialog">
          <form class="form-horizontal" action="<?php echo site_url('Data/deleteData');?>" method="post">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <h3>Apakah anda yakin menghapus data ke <?php echo $resultMaps->id_maps ; ?> ?</h3>
                      <input type="hidden" value="<?php echo $resultMaps->id_maps ; ?>" name="id" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Hapus</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php } ?>
  </div>
</div>
</body>
<?php $this->load->view('_partials/js.php');?>
</html>
