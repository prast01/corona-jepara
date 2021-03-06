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

    <link rel="shortcut icon" href="<?= site_url("../"); ?>assets/img/jepara.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="<?= site_url("../"); ?>assets/js/echarts.min.js"></script>

    <!-- SCRIPT -->
    <script>
        function myFunction(id) {
            document.getElementById(id).classList.toggle("show");
        }
    </script>
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

        .rounded-10 {
            border-radius: 10px;
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

        .cards {
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            height: 300px;
            padding: 10px 10px 10px 10px;
        }

        .card-bodi {
            height: 100px;
            padding: 10px 10px 10px 10px;
        }

        .card-bodi2 {
            height: 140px;
            padding: 10px 10px 10px 10px;
        }

        .card-foot {
            border-top: 1px solid #eee;
            padding-top: 5px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        .table-rs {
            font-size: 12pt;
            text-align: justify;
        }

        .table-rs2 {
            font-size: 10pt;
            text-align: justify;
        }

        .rounded-15 {
            border-radius: 15px;
        }

        .success {
            border-color: #4CAF50;
            color: green;
        }

        .success:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <!-- <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <img src="<?= site_url("../assets/img/jepara.png"); ?>" alt="LOGO" width="25px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="<?= site_url("../"); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-uppercase" href="<?= site_url("../data"); ?>">Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="site-wrap mt-5">



        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container">
                <div class="site-navbar gradient-banner">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="row mt-auto">
                                <div class="col-1">
                                    <img src="<?= site_url("../assets/img/jepara.png"); ?>" alt="LOGO" width="30px">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li><a href="<?= site_url("../"); ?>">Dashboard</a></li>
                                        <li class="active"><a href="<?= site_url("../data"); ?>">Data</a></li>
                                        <li><a href="<?= site_url("../kontak"); ?>">Kontak</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="slant-1"></div>

        <div class="site-section first-section pb-1 mb-2">
            <div class="container gradient-banner">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <img src="assets/img/logo_satgas.png" alt="" class="img-responsive" width="150px">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <div class="card shadow">
                            <div class="card-body">
                                <h2 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-danger">COVID-19</span> di Jepara</h2>
                                <p class="mb-0">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                        <path d="M15 0C6.72 0 0 6.72 0 15C0 23.28 6.72 30 15 30C23.28 30 30 23.28 30 15C30 6.72 23.28 0 15 0ZM16.5 22.5H13.5V13.5H16.5V22.5ZM16.5 10.5H13.5V7.5H16.5V10.5Z" fill="#FFA51F" />
                                    </svg>
                                    <b>Update Terakhir : </b><?= tgl_ind($updated_at); ?>
                                    <br>
                                    <b>Sumber : </b>Dinas Kesehatan Kabupaten Jepara
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <div class="card" style="background-color: <?= $risiko['warna']; ?>;">
                            <div class="card-body">
                                <p class="mb-2 text-white">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                        <path d="M15 0C6.72 0 0 6.72 0 15C0 23.28 6.72 30 15 30C23.28 30 30 23.28 30 15C30 6.72 23.28 0 15 0ZM16.5 22.5H13.5V13.5H16.5V22.5ZM16.5 10.5H13.5V7.5H16.5V10.5Z" fill="#FFFFFF" />
                                    </svg>
                                    <b>Update : </b> <span class='tgl_update'><?= $risiko['tgl_update']; ?></span>
                                    <br>
                                    <b>KABUPATEN <?= $risiko['kota']; ?>, PROVINSI <?= $risiko['prov']; ?></b>
                                    <br>
                                    <b>ZONA</b>
                                    <h3 class="text-white"><?= $risiko['hasil']; ?></h3>
                                    <b class="text-white">Sumber : https://covid19.go.id/peta-risiko</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="site-section section-counter pb-3" style="margin-top: -90px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
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
                </div>
            </div>
        </div> -->

        <!-- RUMAH SAKIT -->
        <!-- <div id="rs_rujukan" class="site-section section-counter mb-2 py-2">
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <h4 class="mb-4 font-secondary text-uppercase font-weight-bold">Rumah Sakit Rujukan <span class="text-danger">COVID-19</span> Jepara</h4>

                        <div class="row">
                            <?php
                            foreach ($faskes as $key => $val) :
                                $jml = count($val['telp']);
                            ?>
                                <?php if ($val['id_faskes'] == '99') : ?>
                                    <div class="col-lg-4 hidden-sm"></div>
                                <?php endif; ?>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="card bg-light border-danger">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><?= $val['nama_faskes']; ?></h5>
                                        </div>
                                        <div class="card-body p-3 text-justify">
                                            <?php if ($val['alamat'] != 'x') : ?>
                                                <div style="height: 70px;">
                                                    <h6 class="card-subtitle mb-2 text-muted"><?= $val['alamat']; ?></h6>
                                                </div>
                                            <?php endif; ?>
                                            <div class="table-responsive">
                                                <p class="mb-0">Informasi :</p>
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <?php foreach ($val['kasus'] as $key2 => $val2) : ?>
                                                            <tr>
                                                                <td class="py-0"><?= $val2['nama']; ?></td>
                                                                <td class="py-0" width="1%">:</td>
                                                                <td class="py-0" width="30%"><?= $val2['kasus']; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-5">
                                                    <?php if ($val['gmaps'] != 'x') : ?>
                                                        <a href="<?= $val['gmaps']; ?>" target="_blank" class="btn btn-outline-success rounded-15 btn-sm">
                                                            <i class="fa fa-map-marker"></i> Lokasi
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-7">
                                                    <?php if ($val['telp'][0]['l_telp'] != 'x') : ?>
                                                        <?php if ($jml > 1) { ?>
                                                            <div class="dropdown">
                                                                <button class="btn btn-success btn-sm dropdown-toggle rounded-15 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fa fa-phone"></i> Daftar Telepon
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <?php foreach ($val['telp'] as $key3 => $val3) : ?>
                                                                        <a class="dropdown-item" href="tel:<?= $val3['l_telp']; ?>"><?= $val3['v_telp']; ?></a>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <a href="tel:<?= $val['telp'][0]['l_telp']; ?>" class="btn btn-success btn-sm rounded-15 text-white">
                                                                <i class="fa fa-phone"></i> <?= $val['telp'][0]['v_telp']; ?>
                                                            </a>
                                                        <?php } ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>

                    </div>
                </div>

            </div>
        </div> -->
        <div id="rs_rujukan" class="site-section section-counter mb-2 py-1">
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="mb-1 font-secondary text-uppercase font-weight-bold">Rumah Sakit Rujukan <span class="text-danger">COVID-19</span> Jepara</h4>
                        <h6 class="mb-4 font-secondary text-uppercase font-weight-bold">update terkahir : <?= tgl_ind($faskes['tgl_update']); ?></h6>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="align-middle text-center">Nama Rumah Sakit</th>
                                                <th colspan="3" class="text-center">Informasi</th>
                                                <th rowspan="2" class="align-middle text-center">Lokasi</th>
                                                <th rowspan="2" class="align-middle text-center">Telepon</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center text-danger">Terkonfirmasi Dirawat</th>
                                                <th class="text-center" style="color: #ffaa00;">Probable Dirawat</th>
                                                <th class="text-center fc-green">Suspek Dirawat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $suspek2 = 0;
                                            $probable2 = 0;
                                            $konfirmasi2 = 0;
                                            ?>
                                            <?php foreach ($faskes['data'] as $key => $val) : ?>
                                                <?php
                                                $suspek2 = $suspek2 + $val['suspek'];
                                                $probable2 = $probable2 + $val['probable'];
                                                $konfirmasi2 = $konfirmasi2 + $val['konfirmasi'];
                                                ?>
                                                <?php $jml = count($val['telp']); ?>
                                                <tr>
                                                    <td class="text-left"><?= $val['nama_faskes']; ?></td>
                                                    <td class="text-center"><?= $val['konfirmasi']; ?></td>
                                                    <td class="text-center"><?= $val['probable']; ?></td>
                                                    <td class="text-center"><?= $val['suspek']; ?></td>
                                                    <td class="text-center">
                                                        <?php if ($val['gmaps'] != 'x') : ?>
                                                            <a href="<?= $val['gmaps']; ?>" target="_blank" class="btn btn-outline-success rounded-15 btn-sm">
                                                                <i class="fa fa-map-marker"></i> Lokasi
                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if ($val['telp'][0]['l_telp'] != 'x') : ?>
                                                            <?php if ($jml > 1) { ?>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-success btn-sm dropdown-toggle rounded-15 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fa fa-phone"></i> Daftar
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <?php foreach ($val['telp'] as $key3 => $val3) : ?>
                                                                            <a class="dropdown-item" href="tel:<?= $val3['l_telp']; ?>"><?= $val3['v_telp']; ?></a>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-success btn-sm dropdown-toggle rounded-15 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fa fa-phone"></i> Daftar
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="tel:<?= $val['telp'][0]['l_telp']; ?>"><?= $val['telp'][0]['v_telp']; ?></a>
                                                                    </div>
                                                                </div>
                                                                <!-- <a href="tel:<?= $val['telp'][0]['l_telp']; ?>" class="btn btn-success btn-sm rounded-15 text-white">
                                                                    <i class="fa fa-phone"></i> <?= $val['telp'][0]['v_telp']; ?>
                                                                </a> -->
                                                            <?php } ?>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <tr class="bg-primary">
                                                <td>JUMLAH</td>
                                                <td class="text-center"><?= $konfirmasi2; ?></td>
                                                <td class="text-center"><?= $probable2; ?></td>
                                                <td class="text-center"><?= $suspek2; ?></td>
                                                <td colspan="2"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KECAMATAN -->

        <div class="site-section section-counter mb-2 py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-outline-danger rounded-10 mx-1 my-1 active" id="pills-konfirmasi-tab" data-toggle="pill" href="#pills-konfirmasi" role="tab" aria-controls="pills-konfirmasi" aria-selected="true">Kasus Terkonfirmasi</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-outline-danger rounded-10 mx-1 my-1" id="pills-probable-tab" data-toggle="pill" href="#pills-probable" role="tab" aria-controls="pills-probable" aria-selected="false">Kasus Probable</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-outline-danger rounded-10 mx-1 my-1" id="pills-suspek-tab" data-toggle="pill" href="#pills-suspek" role="tab" aria-controls="pills-suspek" aria-selected="false">Kasus Suspek</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show text-center active" id="pills-konfirmasi" role="tabpanel" aria-labelledby="pills-konfirmasi-tab">
                                <h4 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-danger">Terkonfirmasi</span> per Kecamatan</h4>
                                <div class="table-responsive shadow px-2">
                                    <table class="table table-hovered table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th rowspan="3" class="text-left align-middle">Kecamatan</th>
                                                <th colspan="5" class="text-danger text-center">
                                                    Terkonfirmasi
                                                </th>
                                                <th rowspan="3" class="text-left align-middle">Detail</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2" class="text-right align-middle" style="color: #00a6ff;">
                                                    Total
                                                </th>
                                                <th colspan="2" class="text-danger text-center">
                                                    Saat Ini
                                                </th>
                                                <th rowspan="2" class="text-primary text-right align-middle">
                                                    Sembuh
                                                </th>
                                                <th rowspan="2" class="text-right align-middle">
                                                    Meninggal
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-danger text-right">
                                                    Dirawat
                                                </th>
                                                <th class="text-danger text-right">
                                                    Isolasi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $konfirmasi_total = 0;
                                            $konfirmasi_dirawat = 0;
                                            $konfirmasi_isolasi = 0;
                                            $konfirmasi_sembuh = 0;
                                            $konfirmasi_meninggal = 0;
                                            $suspek_dirawat = 0;
                                            $probable_dirawat = 0;
                                            $suspek_discard = 0;
                                            ?>
                                            <?php foreach ($kecamatan as $key) : ?>
                                                <?php
                                                $konfirmasi_total = $konfirmasi_total + $key['konfirmasi_total'];
                                                $konfirmasi_dirawat = $konfirmasi_dirawat + $key['konfirmasi_dirawat'];
                                                $konfirmasi_isolasi = $konfirmasi_isolasi + $key['konfirmasi_isolasi'];
                                                $konfirmasi_sembuh = $konfirmasi_sembuh + $key['konfirmasi_sembuh'];
                                                $konfirmasi_meninggal = $konfirmasi_meninggal + $key['konfirmasi_meninggal'];
                                                $suspek_dirawat = $suspek_dirawat + $key['suspek_dirawat'] + $key['suspek_isolasi'];
                                                $probable_dirawat = $probable_dirawat + $key['probable_dirawat'] + $key['probable_isolasi'];
                                                $suspek_discard = $suspek_discard + $key['suspek_discard'];
                                                ?>
                                                <tr>
                                                    <td class="text-left"><?= $key['nama_kecamatan']; ?></td>
                                                    <td class="text-right"><?= number_format($key['konfirmasi_total'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['konfirmasi_dirawat'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['konfirmasi_isolasi'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['konfirmasi_sembuh'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['konfirmasi_meninggal'], 0, ',', '.'); ?></td>
                                                    <td>
                                                        <a href="<?= site_url("../data/kecamatan/" . $key['kode'] . "/konfirmasi"); ?>">Lihat</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            <tr class="bg-primary">
                                                <td class="text-left">JUMLAH</td>
                                                <td class="text-right"><?= number_format($konfirmasi_total, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($konfirmasi_dirawat, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($konfirmasi_isolasi, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($konfirmasi_sembuh, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($konfirmasi_meninggal, 0, ',', '.'); ?></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade text-center" id="pills-probable" role="tabpanel" aria-labelledby="pills-probable-tab">
                                <h4 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-warning">Probable</span> per Kecamatan</h4>
                                <div class="table-responsive shadow px-2">
                                    <table class="table table-hovered table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th rowspan="3" class="text-left align-middle">Kecamatan</th>
                                                <th colspan="5" class="text-warning text-center">
                                                    Probable
                                                </th>
                                                <th rowspan="3" class="text-left align-middle">Detail</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2" class="text-right align-middle" style="color: #00a6ff;">
                                                    Total
                                                </th>
                                                <th colspan="2" class="text-warning text-center">
                                                    Saat Ini
                                                </th>
                                                <th rowspan="2" class="text-primary text-right align-middle">
                                                    Sembuh
                                                </th>
                                                <th rowspan="2" class="text-right align-middle">
                                                    Meninggal
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-warning text-right">
                                                    Dirawat
                                                </th>
                                                <th class="text-warning text-right">
                                                    Isolasi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $probable_total = 0;
                                            $probable_dirawat = 0;
                                            $probable_isolasi = 0;
                                            $probable_sembuh = 0;
                                            $probable_meninggal = 0;
                                            ?>
                                            <?php foreach ($kecamatan as $key) : ?>
                                                <?php
                                                $probable_total = $probable_total + $key['probable_total'];
                                                $probable_dirawat = $probable_dirawat + $key['probable_dirawat'];
                                                $probable_isolasi = $probable_isolasi + $key['probable_isolasi'];
                                                $probable_sembuh = $probable_sembuh + $key['probable_sembuh'];
                                                $probable_meninggal = $probable_meninggal + $key['probable_meninggal'];
                                                ?>
                                                <tr>
                                                    <td class="text-left"><?= $key['nama_kecamatan']; ?></td>
                                                    <td class="text-right"><?= number_format($key['probable_total'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['probable_dirawat'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['probable_isolasi'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['probable_sembuh'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['probable_meninggal'], 0, ',', '.'); ?></td>
                                                    <td>
                                                        <a href="<?= site_url("../data/kecamatan/" . $key['kode'] . "/probable"); ?>">Lihat</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            <tr class="bg-primary">
                                                <td class="text-left">JUMLAH</td>
                                                <td class="text-right"><?= number_format($probable_total, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($probable_dirawat, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($probable_isolasi, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($probable_sembuh, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($probable_meninggal, 0, ',', '.'); ?></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade text-center" id="pills-suspek" role="tabpanel" aria-labelledby="pills-suspek-tab">
                                <h4 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-primary">Suspek</span> per Kecamatan</h4>
                                <div class="table-responsive shadow px-2">
                                    <table class="table table-hovered table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th rowspan="3" class="text-left align-middle">Kecamatan</th>
                                                <th colspan="4" class="text-primary text-center">
                                                    Suspek
                                                </th>
                                                <th rowspan="3" class="text-left align-middle">Detail</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2" class="text-right align-middle" style="color: #00a6ff;">
                                                    Total
                                                </th>
                                                <th colspan="2" class="text-primary text-center">
                                                    Saat Ini
                                                </th>
                                                <th rowspan="2" class="text-right text-primary align-middle">
                                                    Discarded
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-primary text-right">
                                                    Dirawat
                                                </th>
                                                <th class="text-primary text-right">
                                                    Isolasi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $suspek_total = 0;
                                            $suspek_dirawat = 0;
                                            $suspek_isolasi = 0;
                                            $suspek_discard = 0;
                                            ?>
                                            <?php foreach ($kecamatan as $key) : ?>
                                                <?php
                                                $suspek_total = $suspek_total + $key['suspek_total'];
                                                $suspek_dirawat = $suspek_dirawat + $key['suspek_dirawat'];
                                                $suspek_isolasi = $suspek_isolasi + $key['suspek_isolasi'];
                                                $suspek_discard = $suspek_discard + $key['suspek_discard'];
                                                ?>
                                                <tr>
                                                    <td class="text-left"><?= $key['nama_kecamatan']; ?></td>
                                                    <td class="text-right"><?= number_format($key['suspek_total'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['suspek_dirawat'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['suspek_isolasi'], 0, ',', '.'); ?></td>
                                                    <td class="text-right"><?= number_format($key['suspek_discard'], 0, ',', '.'); ?></td>
                                                    <td>
                                                        <a href="<?= site_url("../data/kecamatan/" . $key['kode'] . "/suspek"); ?>">Lihat</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            <tr class="bg-primary">
                                                <td class="text-left">JUMLAH</td>
                                                <td class="text-right"><?= number_format($suspek_total, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($suspek_dirawat, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($suspek_isolasi, 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($suspek_discard, 0, ',', '.'); ?></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Grafik grafik -->
        <div class="site-section section-counter mb-3 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-3 font-secondary text-uppercase font-weight-bold text-center">Grafik Data Harian</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <!-- <li class="nav-item" role="presentation">
                                <a class="btn btn-outline-danger rounded-10 mx-1 my-1 active" id="pills-harian-sum" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Grafik Harian</a>
                            </li> -->
                            <!-- <li class="nav-item" role="presentation">
                                <a class="btn btn-outline-danger rounded-10 mx-1 my-1" id="pills-harian" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Grafik Harian</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-harian-sum">
                                <div class="row mb-3">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-covid-sum" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-sembuh-sum" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-meninggal-sum" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-probable-sum" style="width:90%; height:300px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-suspek-sum" style="width:90%; height:300px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-harian">
                                <div class="row mb-3">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-covid" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-sembuh" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-meninggal" style="width:90%; height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-probable" style="width:90%; height:300px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="rounded-10 shadow bg-white">
                                            <div class="row">
                                                <div class="col-md-12 mx-1 my-1">
                                                    <div id="chart-harian-suspek" style="width:90%; height:300px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section section-counter mb-3 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-5 font-secondary text-uppercase font-weight-bold text-center">Grafik Berdasarkan Gender</h4>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-lg">
                                <div class="rounded-10 shadow bg-white">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="chart-sex-covid" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-lg">
                                <div class="rounded-10 shadow bg-white">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="chart-sex-probable" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-lg">
                                <div class="rounded-10 shadow bg-white">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="chart-sex-suspek" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section section-counter mb-3 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-3 font-secondary text-uppercase font-weight-bold text-center">Grafik Penyakit Penyerta</h4>
                        <div class="row mb-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                <div class="rounded-10 shadow bg-white">
                                    <div class="row">
                                        <div class="col-md-12 mx-1 my-1">
                                            <div id="chart-penyakit" style="width:100%; height:400px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <a href="https://www.facebook.com/dinkeskabjepara" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                <a href="https://twitter.com/dinkeskabjepara" class="p-2"><span class="icon-twitter"></span></a>
                                <a href="https://www.instagram.com/dinkesjepara/" class="p-2"><span class="icon-instagram"></span></a>

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
    <script src="<?= site_url("../"); ?>assets/js/data.js"></script>


</body>

</html>