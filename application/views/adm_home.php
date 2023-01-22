<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('adm_css'); ?>
</head>

<body>
  <!-- Side Navbar -->
  <?php $this->load->view('adm_sidebar'); ?>

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
              <li class="nav-item"><a href="<?php echo site_url('login/logout') ?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Header Section-->
    <section class="dashboard-header section-padding">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">
          <div class="col-sm-11">
            <h2 class="center m-4">DESA BATU AMPAR</h2>
          </div>
          <div class="col-sm-11 center mr-lg-5">
            <img src="assets/ft3.jpg" alt="Foto Kecamatan">
            <p class="center m-5">
              "Desa Batu Ampar adalah desa yang terletak di Kecamatan Batu Ampar
              Kabupaten Tanah Laut Provinsi Kalimantan Selatan. Desa ini memiliki nama
              yang sama dengan nama kecamatannya. Secara umum Desa Batu Ampar memiliki
              komoditi berupa perkebunan karet, sawit, dan jagung serta selalu menghasilkan
              komoditi baik barang mentah maupun barang jadi. Selain itu desa ini juga
              menghasilkan industri rumahan berupa produksi cemilan, makanan khas Tanah
              Laut. Kondisi ini menjadikan Desa Batu Ampar menjadi penunjang perekonomian
              bagi wilayah Kecamatan Batu Ampar serta menjadi desa transmigrasi yang
              menjadi contoh bagi desa lain di Kabupaten Tanah Laut."
            </p>
          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="footer">
            <div class="container p-lg-5">
              <h6 class="text-light">Copyright &copy; Sistem Informasi Profiling Desa</h6>
            </div>
          </div>
        </div>
    </footer>
  </div>
  <!-- JavaScript files-->
  <?php $this->load->view('adm_js'); ?>
</body>

</html>