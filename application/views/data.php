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
                  <td><?php echo $resultMaps->arus_jalan; ?></td>
                  <td><?php echo $resultMaps->kondisi_jalan; ?></td>
                  <td><?php echo $resultMaps->keramaian_jalan; ?></td>
                  <td><?php echo $resultMaps->panjang_lubang; ?></td>
                  <td><?php echo $resultMaps->lebar_lubang; ?></td> 
                  <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="<?php echo site_url('Data/editdata/')?><?php echo $resultMaps->id_maps?>">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                </tbody>
                <?php $i++; } ?>
              </table>
            </div>
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
