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
         <li><a href="<?php echo site_url('homep') ?>"> <i class="icon-home"></i>Home </a></li>

         <li><a href="<?php echo site_url('adminp/pendudukp') ?>"> <i class="icon-user"></i>Penduduk </a></li>

         <li><a href="<?php echo site_url('adminp/kelahiranp') ?>"> <i class="icon-mail"></i>Kelahiran </a></li>

         <li><a href="<?php echo site_url('adminp/kematianp') ?>"> <i class="icon-mail"></i>Kematian </a></li>

         <li><a href="<?php echo site_url('adminp/pernikahanp') ?>"> <i class="icon-picture"></i>Pernikahan </a></li>

         <li><a href="<?php echo site_url('adminp/imbp') ?>"> <i class="icon-page"></i>IMB </a></li>
         <li><a href="<?php echo site_url('adminp/tmrp') ?>"> <i class="icon-padnote"></i>Penduduk Tidak Memiliki Rumah </a></li>
         <li><a href="<?php echo site_url('adminp/tidak_mampup') ?>"> <i class="icon-padnote"></i>Pendudk Tidak Mampu </a></li>

     </div>
   </div>
 </nav>