<?php

date_default_timezone_set('Asia/Jakarta');
function tgl_ind($date)
{

    /** ARRAY HARI DAN BULAN**/
    $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $Bulan = array("Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    /** MEMISAHKAN FORMAT TANGGAL, BULAN, TAHUN, DENGAN SUBSTRING**/
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    $waktu = substr($date, 11, 8);
    $hari = date("w", strtotime($date));
    $jam = date("H:i", strtotime($date));

    $result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " | " . $jam . " WIB";
    return $result;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= SITE_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/animate.css">

    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?= site_url("../"); ?>assets/css/style.css">

    <link rel="shortcut icon" href="<?= site_url("../"); ?>assets/img/jepara.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MY CSS -->
    <style>
        .list-header-red {
            padding: .5rem .5rem;
            background: #FADFDF;
            border-radius: 10px 10px 0px 0px;
            border-color: #fff !important;
        }

        .list-header-yellow {
            padding: .5rem .5rem;
            background: #fffdcf;
            border-radius: 10px 10px 0px 0px;
            border-color: #fff !important;
        }

        .list-header-green {
            padding: .5rem .5rem;
            background: #ccffd8;
            border-radius: 10px 10px 0px 0px;
            border-color: #fff !important;
        }

        .font-status {
            font-family: 'Karla', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            color: #333333;
        }

        .fc-red {
            color: #f82649;
        }

        .fc-yellow {
            color: #ffdc2b;
        }

        .fc-black {
            color: #000 !important;
        }

        .fc-green {
            color: #27AE60;
        }

        .font-counter {
            font-size: 55px;
        }

        .font-counter2 {
            font-size: 25px;
        }

        .rounded-8 {
            border-radius: 8px;
        }

        .gradient-banner::before {
            position: absolute;
            content: '';
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            width: 200%;
            height: 200%;
            background-image: linear-gradient(344.09deg, #D62255 0%, #FF4D4A 100%);
        }
    </style>
</head>

<body>

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap">



        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container">
                <!-- <div class="site-navbar bg-light"> -->
                <div class="site-navbar gradient-banner">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="row mt-auto">
                                <div class="col-1">
                                    <img src="<?= site_url("../assets/img/jepara.png"); ?>" alt="LOGO" width="30px">
                                </div>
                                <!-- <div class="col-11">
                                    <h2 class="mb-0 site-logo"><a href="<?= site_url("../"); ?>" class="font-weight-bold text-uppercase"><?= SITE_NAME; ?></a></h2>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li class="active"><a href="<?= site_url("../"); ?>">Dashboard</a></li>
                                        <li><a href="<?= site_url("../data"); ?>">Data</a></li>
                                        <li><a href="<?= site_url("../kontak"); ?>">Kontak</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slant-1"></div>

        <div class="site-section first-section pb-3">
            <div class="container gradient-banner">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <img src="assets/img/logo_satgas.png" alt="" class="img-responsive" width="100px">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <span class="caption d-block mb-2 font-secondary font-weight-bold">SATUAN TUGAS PENANGANAN</span>
                        <h2 class="text-uppercase text-center font-secondary">COVID-19</h2>
                        <h2 class="site-section-heading text-uppercase text-center font-secondary">KABUPATEN JEPARA</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section section-counter pt-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <h2 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus COVID-19 di Jepara</h2>
                        <p class="mb-5"><b>Update Terakhir : </b><?= tgl_ind($updated_at); ?> | <b>Sumber : </b>Dinas Kesehatan Kabupaten Jepara</p>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-2">

                                <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-center list-header-red font-status">
                                            <i class="fa fa-circle fc-red"></i> Terkonfirmasi COVID-19
                                        </li>
                                        <li class="list-group-item text-center counter">
                                            <h3 class="font-counter fc-red number" data-number="<?= $konfirmasi['total']; ?>">0</h3>
                                        </li>
                                        <li class="list-group-item list-group-last text-center">
                                            <ul class="list-unstyled list-kasus row">
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 fc-red counter">
                                                        <span class="number" data-number="<?= $konfirmasi['dirawat']['total'] + $konfirmasi['isolasi']['total']; ?>">0</span><br>
                                                        <?php
                                                        $konfirmasi_saat_ini = ($konfirmasi['dirawat']['total'] + $konfirmasi['isolasi']['total']) / $konfirmasi['total'] * 100;
                                                        ?>
                                                        <span class="badge badge-danger font-13"><?= number_format($konfirmasi_saat_ini, 2, ',', '.'); ?> % </span><br>
                                                        <i class="fa fa-angle-double-up fc-red"></i> <span class="fc-red font-13 number" data-number="<?= $konfirmasi['dirawat']['baru'] + $konfirmasi['isolasi']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Saat Ini</h6>
                                                    </div>
                                                </li>
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 fc-green counter">
                                                        <span class="number" data-number="<?= $konfirmasi['sembuh']['total']; ?>">0</span><br>
                                                        <?php
                                                        $konfirmasi_sembuh = $konfirmasi['sembuh']['total'] / $konfirmasi['total'] * 100;
                                                        ?>
                                                        <span class="badge badge-success font-13"><?= number_format($konfirmasi_sembuh, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $konfirmasi['sembuh']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Sembuh</h6>
                                                    </div>
                                                </li>
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 text-black counter">
                                                        <span class="number" data-number="<?= $konfirmasi['meninggal']['total']; ?>">0</span><br>
                                                        <?php
                                                        $konfirmasi_meninggal = $konfirmasi['meninggal']['total'] / $konfirmasi['total'] * 100;
                                                        ?>
                                                        <span class="d-inline d-lg-none d-md-none text-white"><br /></span>
                                                        <span class="badge badge-default bg-black text-white font-13"><?= number_format($konfirmasi_meninggal, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $konfirmasi['meninggal']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Meninggal</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item list-group-last text-center counter">
                                            <p class="font-14" style="margin-bottom: 0;">Total Kasus Luar Jepara</p>
                                            <h4 class="font-counter2 fc-red number pb-0" data-number="<?= $konfirmasi['luar']['total']; ?>">0</h4>
                                            <i class="fa fa-angle-double-up fc-red"></i> <span class="fc-red font-13 number" data-number="<?= $konfirmasi['luar']['baru']; ?>">0</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-2">

                                <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-center list-header-yellow font-status">
                                            <i class="fa fa-circle fc-yellow"></i> Probable
                                        </li>
                                        <li class="list-group-item text-center counter">
                                            <h3 class="font-counter fc-yellow number" data-number="<?= $probable['total']; ?>">0</h3>
                                        </li>
                                        <li class="list-group-item list-group-last text-center">
                                            <ul class="list-unstyled list-kasus row">
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 fc-yellow counter">
                                                        <span class="number" data-number="<?= $probable['dirawat']['total'] + $probable['isolasi']['total']; ?>">0</span><br>
                                                        <?php
                                                        $probable_saat_ini = ($probable['dirawat']['total'] + $probable['isolasi']['total']) / $probable['total'] * 100;
                                                        ?>
                                                        <span class="badge badge-warning font-13"><?= number_format($probable_saat_ini, 2, ',', '.'); ?> % </span><br>
                                                        <i class="fa fa-angle-double-up fc-yellow"></i> <span class="fc-yellow font-13 number" data-number="<?= $probable['dirawat']['baru'] + $probable['isolasi']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Saat Ini</h6>
                                                    </div>
                                                </li>
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 fc-green counter">
                                                        <span class="number" data-number="<?= $probable['sembuh']['total']; ?>">0</span><br>
                                                        <?php
                                                        $probable_sembuh = $probable['sembuh']['total'] / $probable['total'] * 100;
                                                        ?>
                                                        <span class="badge badge-success font-13"><?= number_format($probable_sembuh, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $probable['sembuh']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Sembuh</h6>
                                                    </div>
                                                </li>
                                                <li class="list-item col-lg-4 col-md-4 col-sm-4 col-4 text-center list-header-default font-status">
                                                    <div class="font-counter-2 text-black counter">
                                                        <span class="number" data-number="<?= $probable['meninggal']['total']; ?>">0</span><br>
                                                        <?php
                                                        $probable_meninggal = $probable['meninggal']['total'] / $probable['total'] * 100;
                                                        ?>
                                                        <span class="d-inline d-lg-none d-md-none text-white"><br /></span>
                                                        <span class="badge badge-default bg-black text-white font-13"><?= number_format($probable_meninggal, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $probable['meninggal']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Meninggal</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-2">

                                <div class="card shadow card-extend">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-center list-header-green font-status">
                                            <i class="fa fa-circle fc-green"></i> Suspek
                                        </li>
                                        <li class="list-group-item text-center counter">
                                            <h3 class="font-counter fc-green number" data-number="<?= $suspek['total']; ?>">0</h3>
                                        </li>
                                        <li class="list-group-item list-group-last text-center">
                                            <ul class="list-unstyled list-kasus row">
                                                <li class="list-item col-lg-6 col-md-6 col-sm-6 col-6 text-center list-header-default font-status">
                                                    <div class="font-counter-2 fc-green counter">
                                                        <span class="number" data-number="<?= $suspek['dirawat']['total'] + $suspek['isolasi']['total']; ?>">0</span><br>
                                                        <?php
                                                        $suspek_saat_ini = ($suspek['dirawat']['total'] + $suspek['isolasi']['total']) / $suspek['total'] * 100;
                                                        ?>
                                                        <span class="badge badge-success font-13"><?= number_format($suspek_saat_ini, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $suspek['dirawat']['baru'] + $suspek['isolasi']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Saat ini</h6>
                                                    </div>
                                                </li>
                                                <li class="list-item col-lg-6 col-md-6 col-sm-6 col-6 text-center list-header-default font-status">
                                                    <div class="font-counter-2 text-black counter">
                                                        <span class="number" data-number="<?= $suspek['discard']['total']; ?>">0</span><br>
                                                        <?php
                                                        $suspek_discard = $suspek['discard']['total'] / $suspek['total'] * 100;
                                                        ?>
                                                        <span class="d-inline d-lg-none d-md-none text-white"><br /></span>
                                                        <span class="badge badge-default bg-black text-white font-13"><?= number_format($suspek_discard, 2, ',', '.'); ?> %</span><br>
                                                        <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $suspek['discard']['baru']; ?>">0</span>
                                                        <h6 class="font-kasus font-14 pt-1">Discard</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 text-center">
                        <a href="<?= site_url("../data"); ?>" class="btn btn-outline-danger rounded-8 btn-lg">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section first-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <span class="caption d-block mb-2 font-secondary font-weight-bold">Ayo ! Lindungi Diri Dari</span>
                        <h2 class="site-section-heading text-uppercase text-center font-secondary">COVID-19</h2>
                    </div>
                </div>
                <div class="row border-responsive">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <img src="assets/img/pic_batuk.png" alt="" width="120px">
                            <p>Terapkan etika batuk atau bersin (dengan menutup mulut dan hidung), dan jangan meludah sembarangan</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <img src="assets/img/hp_bersih.png" alt="" width="120px">
                            <p>Bersihkan benda yang sering disentuh</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <img src="assets/img/masker.png" alt="" width="120px">
                            <p>Gunakan masker jika Anda sakit dan segera periksakan diri ke fasilitas kesehatan terdekat</p>
                        </div>
                    </div>
                </div>
                <div class="row border-responsive mt-3">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <img src="assets/img/cuci_tangan.png" alt="" width="120px">
                            <p>Cuci tangan dengan sabun</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <img src="assets/img/ngucek.png" alt="" width="120px">
                            <p>Hindari menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <img src="assets/img/olahraga.png" alt="" width="120px">
                            <p>Konsumsi makanan bergizi dan berolahraga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-half">
            <div class="img-bg-1" style="background-image: url('assets/img/covid.png');" data-aos="fade"></div>
            <div class="container">
                <div class="row no-gutters align-items-stretch">
                    <div class="col-lg-5 ml-lg-auto py-5">
                        <span class="caption d-block mb-2 font-secondary font-weight-bold">Bagaimana Gejala</span>
                        <h2 class="site-section-heading text-uppercase font-secondary mb-5">COVID-19</h2>
                        <p>Orang yang terinfeksi memiliki gejala seperti demam, batuk, dan kesulitan bernafas. Gejala dapat berkembang menjadi pneumonia berat.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3 class="footer-heading mb-4 text-white">Kontak</h3>
                        <ul>
                            <li>Jl. Kartini No.44, Panggang, Kec. Jepara, Kabupaten Jepara</li>
                            <li>(0291) 591427, 591743</li>
                            <li>dinkes@jepara.go.id</li>
                        </ul>
                    </div>
                    <div class="col-md-5 mb-4 mb-md-0 ml-auto">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h3 class="footer-heading mb-4 text-white">Website Terkait</h3>
                                <ul class="list-unstyled">
                                    <li><a href="https://corona.jatengprov.go.id">Website Corona Jawa Tengah</a></li>
                                    <li><a href="https://covid19.go.id">Website Corona Indonesia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-2">

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4 text-white">Sosial Media</h3>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="icon-instagram"></span></a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> <br>Pemerintah Kabupaten Jepara <br>Versi 2.0.0
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>


                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="<?= site_url("../"); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/jquery-ui.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/popper.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/jquery.stellar.min.js"></script>

    <script src="<?= site_url("../"); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?= site_url("../"); ?>assets/js/aos.js"></script>

    <script src="<?= site_url("../"); ?>assets/js/main.js"></script>


</body>

</html>