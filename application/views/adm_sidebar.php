 <nav class="side-navbar">
   <div class="side-navbar-wrapper">
     <!-- Sidebar Header    -->
     <div class="sidenav-header d-flex align-items-center justify-content-center">
       <!-- User Info-->
       <div class="sidenav-header-inner text-center"><img src="<?php echo base_url('assets/logotl.svg'); ?>" alt="person">
         <h2 class="h5">SIK</h2><span>DESA BATU AMPAR</span>
       </div>
       <!-- Small Brand information, appears on minimized sidebar-->
       <div class="sidenav-header-logo"><a class="brand-small text-center"> <img src="<?php echo base_url('assets/logotl.svg'); ?>"><strong></strong><strong class="text-primary"></strong></a></div>
     </div>
     <!-- Sidebar Navigation Menus-->
     <div class="main-menu">
       <h5 class="sidenav-heading">Main</h5>
       <ul id="side-main-menu" class="side-menu list-unstyled">
         <li><a href="<?php echo site_url('home') ?>"> <i class="icon-home"></i>Home </a></li>

         <li><a href="<?php echo site_url('admin/penduduk') ?>"> <i class="icon-home"></i>Penduduk </a></li>

         <li><a href="<?php echo site_url('admin/kelahiran') ?>"> <i class="icon-home"></i>Kelahiran </a></li>

         <li><a href="<?php echo site_url('admin/kematian') ?>"> <i class="icon-home"></i>Kematian </a></li>

         <li><a href="<?php echo site_url('admin/pernikahan') ?>"> <i class="icon-home"></i>Pernikahan </a></li>

         <li><a href="<?php echo site_url('admin/pegawai') ?>"> <i class="icon-home"></i>Pegawai </a></li>
         <li><a href="<?php echo site_url('admin/imb') ?>"> <i class="icon-home"></i>IMB </a></li>
         <li><a href="<?php echo site_url('admin/tmr') ?>"> <i class="icon-home"></i>Penduduk Tidak Memiliki Rumah </a></li>
         <li><a href="<?php echo site_url('admin/tidak_mampu') ?>"> <i class="icon-home"></i>Pendudk Tidak Mampu </a></li>
         <li><a href="<?php echo site_url('admin/rab') ?>"> <i class="icon-home"></i>Rancangan Anggaran Biaya </a></li>
         <li><a href="<?php echo site_url('admin/users') ?>"> <i class="icon-home"></i>Users </a></li>

         <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Laporan</a>
           <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
             <li><a href="<?php echo site_url('admin/penduduks') ?>">Penduduk</a></li>
             <li><a href="<?php echo site_url('admin/imbs') ?>">IMB</a></li>
             <li><a href="<?php echo site_url('admin/kelahirans') ?>">Kelahiran</a></li>
             <li><a href="<?php echo site_url('admin/kematians') ?>">Kematian</a></li>
             <li><a href="<?php echo site_url('admin/pernikahans') ?>">Pernikahan</a></li>
             <li><a href="<?php echo site_url('admin/pegawais') ?>">Pegawai</a></li>
             <li><a href="<?php echo site_url('admin/rabs') ?>">RAB</a></li>

           </ul>
         </li>

     </div>
   </div>
 </nav>