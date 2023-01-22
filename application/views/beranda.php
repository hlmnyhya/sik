<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPRODES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontastic.css') ?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?php echo base_url('assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700') ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css') ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/logot1.svg') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: dimgray;
            color: white;
            text-align: center;
        }

        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }
    </style>
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!-- navbar-->
    <!-- Image and text -->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-gradient-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/logotl.svg'); ?>" width="40px" height="66px">
                    <h5 class="d-inline-block align-top mt-lg-2 m-lg-2" style="text-align: left;"><span>SISTEM INFORMASI KEPENDUDUKAN<br>
                            <h5 class="mt-lg-1"><strong class="text-success">DESA BATU AMPAR</strong></h5>
                        </span></h5>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link active" style="font-size: 17px;" href="<?php echo site_url('beranda') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="font-size: 17px;" href="<?php echo site_url('profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="font-size: 17px;" href="<?php echo site_url('desa') ?>">Data Desa</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="font-size: 17px;" href="<?php echo site_url('ekonomi') ?>">Data Ekonomi</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" style="font-size: 17px;" href="<?php echo site_url('loginp/if') ?>"><i class="fa fa-sign-in mr-1"> </i> Login</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="active" aria-current="true" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner mt-lg-0">
            <div class="carousel-item">
                <img src="assets/slide1.jpg" class="d-block w-100" alt="..." width="150px" height="600px">
            </div>
            <div class="carousel-item">
                <img src="assets/slide2.jpg" class="d-block w-100" alt="..." width="150px" height="600px">
            </div>
            <div class="carousel-item active">
                <img src="assets/img4.jpg" class="d-block w-100" alt="..." width="150px" height="600px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="Visually">Next</span>
        </button>
    </div>

    <div class="container mt-lg-5 p-lg-2">
        <h3 style="text-align:center">Berita Terkini</h3>
        <br>
        <div class="row m-lg-4 p-lg-2">
            <div class="col">
                <img src="assets/ft1.jpg" class="d-block w-100" alt="..." width="40px" height="300px">
                <h3 class="center m-3">Peresmian Puskesmas Durian Bungkuk</h3>
                <p class="justify">Warga di Kecamatan Batu Ampar, Kabupaten Tanah Laut (Tala), Kalimantan Selatan (Kalsel),kini kian mudah mendapatkan pelayanan kesehatan. Itu menyusul telah hadirnya Puskesmas Durian Bungkuk. Selain kemudahan akses pelayanan kesehatan secara umum, Yuliana mengatakan, pihaknya siap memberikan pelayanan untuk membantu persalinan selama 24 jam untuk masyarakat dari tujuh desa tersebut. "Insya Allah masyarakat dari tujuh desa ini bisa mendapatkan pelayanan lebih mudah dan cepat," tegasnya. Peresmian Puskesmas Durian Bungkuk langsung dilakukan Bupati Tala HM Sukamta, didampingi Kepala Dinas Kesehatan, Hj Nina Sandra, Kepala Dinas Pekerjaan Umum dan dan Perumahan Rakyat (PUPR), H Agus Sektyaji. Hadir pula, Ketua TP PKK Tanahlaut HJ Nurul Hikmah, Wakil Ketua I Tim Penggerak PKK, Yati Oktoviana Abdi Rahman dan Kepala Puskesmas Durian Bungkuk , Yuliana. Bupati Tala HM Sukamta mengapresiasi atas terbangunnya Puskesmas Durian Bungkuk.</p>

            </div>
            <div class="col">
                <img src="assets/ft3.jpg" class="d-block w-100" alt="..." width="40px" height="300px">
                <h3 class="center m-3">Pembangunan Kantor Kecamatan</h3>
                <p class="justify">
                    Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan (PUPRP) Kabupaten Tanah Laut tahun ini 2021 akan membangun tiga kantor Kecamatan. "Ada tiga Kantor Kecamatan yang akan dibangun tahun ini, pertama Kantor Kecamatan Batu Ampar, Kantor Kecamatan Tambangan Ulang dan Kantor Kecamatan Panyipatan," kata H Agus Sektyaji Kepala Dinas PUPRP Tanah Laut kepada Pelaihari Post , Selasa (05/01/2021) H Agus Sektyaji berharap, dalam pembangunan nantinya bisa lancar, supaya para pekerja di Kantor Kecamatan bisa lebih nyaman melayani masyarakat. "Pembangunan Kantor Kecamatan ini merupakan prioritas utama selama kepemimpinan Bupati Tanah Laut H Sukamta di 11 Kecamatan supaya bisa terbangun semua," katanya Sementara, yang sudah dilakukan pembanguan Kecamatan Pelaihari, Kecamatan Bati-Bati, Kecamatan Jorong dan Kecamatan Takisung. Sisanya menyusul setelah tiga kecamatan rampung dibangun baru ke Kecamatan Kintap, Kecamatan Kurau, Kecamatan Bumi Makmur dan Kecamatan Bajuin.
                </p>
            </div>
            <div class="col">
                <img src="assets/ft2.jpg" class="d-block w-100" alt="..." width="40px" height="300px">
                <h3 class="center m-3">Perpustakaan Batu Ampar Menjadi Juara Lomba Perpustakaan se-Kalsel</h3>
                <p class="justify">
                    Selamat dan sukses
                    Perpustakaan Cahaya Hati Desa Batu Ampar Kecamatan Batu Ampar Kabupaten Tanah Laut, Juara II Lomba Perpustakaan Umum(Desa/ Kelurahan) Terbaik Tahun 2020 Tingkat Provinsi Kalimantan Selatan. Hal ini menjadi tolak ukur bagi desa yang ada di Kabupaten Tanah Laut untuk dapat menoreh prestasi dalam aspek meningkatkan kualitas pendidikan, sehingga perpustakaan yang dibangun dapat bermanfaat bagi warga sekitar dan dapat menjadi penunjang dalam mencapai desa mandiri dikarenakan memenuhi aspek kemudahan untuk menuju fasilitas publik dan peningkatan sumber daya manusia yang diharapkan membawa pengaruh bagi desa di masa mendatang.
                </p>
            </div>
        </div>
    </div>

    <div class="footer bg-gradient-dark">
        <div class="container p-lg-5">
            <h6 class="text-light">Copyright &copy; Sistem Informasi Profiling Desa</h6>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- JavaScript files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper.js/umd/popper.min.js') ?>"> </script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <!-- Main File-->
    <script src="<?php echo base_url('assets/js/front.js') ?>"></script>
</body>

</html>