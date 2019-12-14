<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="<?php echo site_url('Data/index')?>">
        <i class="ni ni-bullet-list-67 text-red"></i> Data Kerusakan Jalan
      </a>
    </li>
    <li class="nav-item">
      <div class="ui dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="ni ni-pin-3 text-black"></i> Maps
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdown" style="margin-left:30px;">
          <li>
              <a class="dropdown-item" href="<?php echo site_url('Maps/mapbox');?>">
                Mapbox
              </a>
          </li>
          <li>
              <a class="dropdown-item" href="<?php echo site_url('Maps/heredev');?>">
                Here Dev
              </a>
          </li>
          <li>
              <a class="dropdown-item" href="<?php echo site_url('Maps/tgbaru');?>">
                Think Geo
              </a>
          </li>
          <li>
              <a class="dropdown-item" href="<?php echo site_url('Maps/mazemap');?>">
                Maze Map
              </a>
          </li>
      </ul>
      </div>
    </li>
  </ul>
</div>  