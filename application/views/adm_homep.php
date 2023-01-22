<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('adm_css'); ?>
</head>

<body>
  <!-- Side Navbar -->
  <?php $this->load->view('adm_sidebarp'); ?>

  <div class="page">
    <!-- navbar-->
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><span></span> <span class="text-primary"></span></div>
              </a></div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

              <!-- Log out-->
              <li class="nav-item"><a href="<?php echo site_url('loginp/logout') ?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Header Section-->
    <section class="dashboard-header section-padding">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">

          <div class="col-sm-12">
            <h2>Dashboard</h2>
          </div>

          <div class="col-sm-6">

          </div>


          <div class="col-sm-6">
            <p><b>Visi :</b></p>
            <p>Visi dari Kelurahan Angsau Kecamatan Pelaihari adalah Terwujudnya pelayanan prima kepada masyarakat yang didasari nilai-nilai agama.</p>
            <p><b>Misi :</b></p>
            <p>1) Meningkatkan kualitas pelayanan pembangunantingkat Kelurahan.</p>
            <p>2) Meningkatkan Partisipasi Masyarakat dalam Perencanaan dan Pelaksanaan Pembangunan.</p>
            <p>3) Mewujudkan Lingkungan Kelurahan yang Bersih, Sehat, Nyaman, Tertib dan Aman.</p>
          </div>

        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="footer bg-gradient-dark">
            <div class="container p-lg-5">
              <h6 class="text-light">Copyright &copy; Sistem Informasi Profiling Desa</h6>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- JavaScript files-->
  <?php $this->load->view('adm_js'); ?>
</body>

</html>