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
        </nav>
    </header>

    <div class="mt-lg-0">
        <div class="row">
            <!--<iframe width="425" height="425" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=114.81584072113039%2C-3.8873116746175334%2C114.82588291168214%2C-3.8798401431583094&amp;layer=mapnik" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/#map=17/-3.88358/114.82086">View Larger Map</a></small>-->
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254779.33781090338!2d114.76154091748913!3d-3.825790098784222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6f7e1a2208f77%3A0x60d4aa7ffde3b548!2sKec.%20Batu%20Ampar%2C%20Kabupaten%20Tanah%20Laut%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1650382967992!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250134.92279872543!2d114.76154091748913!3d-3.825790098784222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6f7e1a2208f77%3A0x60d4aa7ffde3b548!2sKec.%20Batu%20Ampar%2C%20Kabupaten%20Tanah%20Laut%2C%20Kalimantan%20Selatan!5e1!3m2!1sid!2sid!4v1650383803548!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            <iframe width="800" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=114.81532573699951%2C-3.891122344259774%2C114.83541011810304%2C-3.8761792826995887&amp;layer=mapnik" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/#map=16/-3.8836/114.8254&amp;layers=D">View Larger Map</a></small>
        </div>
    </div>


    <div class="container mt-lg-5 p-lg-2">
        <h3 style="text-align:center">Profil Desa</h3>
        <br>
        <div class="row p-lg-2 mb-lg-2 mb-5">
            <div class="col">
                <p class="center">
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

    <div class="footer bg-gradient-dark">
        <div class="container p-lg-5">
            <h6 class="text-light">Copyright &copy; Sistem Informasi Profiling Desa</h6>
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