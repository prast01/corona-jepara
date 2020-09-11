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
                        <a class="nav-link text-uppercase" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#definisi">Definisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#rs_rujukan">RS Rujukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#data">Data</a>
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


        <!-- <div class="site-navbar-wrap js-site-navbar bg-white fixed-top">

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
                                        <li class="active"><a href="<?= site_url("../"); ?>">Dashboard</a></li>
                                        <li><a href="#definisi">Data</a></li>
                                        <li><a href="<?= site_url("../data"); ?>">Data</a></li>
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

        <div class="site-section first-section pb-3">
            <div class="container gradient-banner">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <img src="assets/img/logo_satgas.png" alt="" class="img-responsive" width="100px">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <div class="card">
                            <div class="card-body">
                                <span class="caption d-block mb-2 font-secondary font-weight-bold">SATUAN TUGAS PENANGANAN</span>
                                <h2 class="text-uppercase text-center font-secondary text-danger">COVID-19</h2>
                                <h2 class="site-section-heading text-uppercase text-center font-secondary">KABUPATEN JEPARA</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DEFINISI -->
        <div id="definisi" class="site-section first-section my-2 py-2">
            <div class="container pt-5">
                <div class="row mb-5">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <span class="caption d-block mb-2 font-secondary font-weight-bold">Ayo ! Kenali Istilah Dalam</span>
                        <h2 class="site-section-heading text-uppercase text-center font-secondary">COVID-19</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="mb-0 text-danger">
                                            Kasus Suspek
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang memiliki salah satu dari kriteria berikut :</p>
                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                            <li>Orang dengan Infeksi Saluran Pernafasan Akut (ISPA)* DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah Indonesia yang melaporkan transmisi lokal**.</li>
                                            <li>Orang dengan salah satu gejala/tanda ISPA* DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi/probable COVID-19.</li>
                                            <li>Orang dengan ISPA berat/pneumonia berat*** yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <h4 class="mb-0 text-danger">
                                            Kasus Probable
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus suspek dengan ISPA Berat/ARDS***/meninggal dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <h4 class="mb-0 text-danger">
                                            Kasus Konfirmasi
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR.</p>
                                        <p class="mb-0">Kasus konfirmasi dibagi menjadi 2 :</p>
                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                            <li>Kasus konfirmasi dengan gejala (simptomatik)</li>
                                            <li>Kasus konfirmasi tanpa gejala (asimptomatik)</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <h4 class="mb-0 text-danger">
                                            Kontak Erat
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi COVID-19. Riwayat kontak yang dimaksud antara lain:</p>
                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                            <li>Kontak tatap muka/berdekatan dengan kasus probable atau kasus konfirmasi dalam radius 1 meter dan dalam jangka waktu 15 menit atau lebih</li>
                                            <li>Sentuhan fisik langsung dengan kasus probable atau konfirmasi (seperti bersalaman, berpegangan tangan, dan lain-lain)</li>
                                            <li>Orang yang memberikan perawatan langsung terhadap kasus probable atau konfirmasi tanpa menggunakan APD yang standar</li>
                                            <li>Situasi lainnya yang mengindikasi adanya kontak berdasarkan penilaian risiko lokal yang ditetapkan oleh tim penyelidikan epidemiologi setempat.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <h4 class="mb-0 text-danger">
                                            Discarded
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang memiliki salah satu dari kriteria berikut :</p>
                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                            <li>Kasus suspek dengan hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu >24 jam, atau</li>
                                            <li>Seseorang dengan status kontak erat yang telah menyelesaikan masa karantina selama 14 hari).</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <h4 class="mb-0 text-danger">
                                            Suspek Dirawat
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 yang sedang dalam perawatan di fasilitas pelayanan kesehatan (di Kabupaten Jepara dan luar Kab. Jepara)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <h4 class="mb-0 text-danger">
                                            Suspek Isolasi
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 yang sedang dalam masa isolasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        <h4 class="mb-0 text-danger">
                                            Suspek Discarded
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 dengan hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu >24 jam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        <h4 class="mb-0 text-danger">
                                            Probable Dirawat
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR DAN sedang dirawat di Fasyankes (dalam ataupun luar daerah). ATAU</p>
                                        <p class="mb-0">Kasus Probable COVID-19 yang sedang dirawat di Fasyankes.(dalam ataupun luar daerah).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        <h4 class="mb-0 text-danger">
                                            Probable Isolasi
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR yang sedang menjalankan isolasi mandiri. ATAU</p>
                                        <p class="mb-0">Kasus Probable COVID-19 yang sedang menjalankan isolasi mandiri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEleven">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                        <h4 class="mb-0 text-danger">
                                            Probable Sembuh
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                            <li>Kasus probable COVID-19 yang tidak dilakukan pemeriksaan follow up RT-PCR dihitung 10 hari sejak tanggal onset dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan;</li>
                                            <li>Kasus probable COVID-19 yang mendapatkan hasil pemeriksaan follow up RT-PCR 1 kali negatif, dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwelve">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                        <h4 class="mb-0 text-danger">
                                            Probable Meninggal
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR yang telah dinyatakan meninggal dunia. ATAU</p>
                                        <p class="mb-0">Kasus probable COVID-19 yang meninggal dunia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFourteen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                        <h4 class="mb-0 text-danger">
                                            Terkonfirmasi Dirawat
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang sedang dirawat di Fasyankes (dalam wilayah dan luar wilayah)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveteen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFiveteen" aria-expanded="true" aria-controls="collapseFiveteen">
                                        <h4 class="mb-0 text-danger">
                                            Terkonfirmasi Isolasi
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseFiveteen" class="collapse" aria-labelledby="headingFiveteen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang sedang menjalani isolasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSixteen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                        <h4 class="mb-0 text-danger">
                                            Terkonfirmasi Sembuh
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <ol class="mb-0" style="list-style: circle;">
                                            <li>Kasus konfirmasi tanpa gejala (asimptomatik) yang tidak dilakukan pemeriksaan follow up RT-PCR dengan ditambah 10 hari isolasi mandiri sejak pengambilan specimen diagnosis konfirmasi;</li>
                                            <li>Kasus konfirmasi dengan gejala (simptomatik) yang tidak dilakukan pemeriksaan follow up RT-PCR dihitung 10 hari sejak tanggal onset dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan;</li>
                                            <li>Kasus konfirmasi dengan gejala (simptomatik) yang mendapatkan hasil pemeriksaan follow up RT-PCR 1 kali negatif, dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeventeen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                                        <h4 class="mb-0 text-danger">
                                            Terkonfirmasi Meninggal
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang telah dinyatakan meninggal dunia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEighteen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                                        <h4 class="mb-0 text-danger">
                                            Kontak Erat Karantina
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi COVID-19 dan orang tersebut sedang menjalan karantina.</p>
                                        <p class="mb-0">Riwayat kontak yang dimaksud antara lain :</p>
                                        <ol class="mb-0" style="list-style: circle;">
                                            <li>Kontak tatap muka/berdekatan dengan kasus probable atau kasus konfirmasi dalam radius 1 meter dan dalam jangka waktu 15 menit atau lebih;</li>
                                            <li>Sentuhan fisik langsung dengan kasus probable atau konfirmasi (seperti bersalaman, berpegangan tangan, dan lain-lain);</li>
                                            <li>Orang yang memberikan perawatan langsung terhadap kasus probable atau konfirmasi tanpa menggunakan APD yang standar;</li>
                                            <li>Situasi lainnya yang mengindikasi adanya kontak berdasarkan penilaian risiko lokal yang ditetapkan oleh tim penyelidikan epidemiologi setempat.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNineteen">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
                                        <h4 class="mb-0 text-danger">
                                            Kontak Erat Discarded
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <p class="mb-0">Seseorang dengan status kontak erat yang telah menyelesaikan masa karantina selama 14 hari.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="site-half">
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

        <div class="site-section first-section my-3 py-3">
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
        </div> -->

        <!-- DATA -->
        <!-- RUMAH SAKIT -->
        <div id="rs_rujukan" class="site-section section-counter mb-2 py-2">
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <h4 class="mb-4 font-secondary text-uppercase font-weight-bold">Rumah Sakit Rujukan <span class="text-danger">COVID-19</span> Jepara</h4>

                        <div class="row">
                            <?php
                            foreach ($faskes as $key => $val) :
                                $jml = count($val['telp']);
                            ?>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="card bg-light border-danger">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><?= $val['nama_faskes']; ?></h5>
                                        </div>
                                        <div class="card-body p-3 text-justify">
                                            <div style="height: 70px;">
                                                <h6 class="card-subtitle mb-2 text-muted"><?= $val['alamat']; ?></h6>
                                            </div>
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
                                                    <a href="<?= $val['gmaps']; ?>" target="_blank" class="btn btn-outline-success rounded-15 btn-sm">
                                                        <i class="fa fa-map-marker"></i> Lokasi
                                                    </a>
                                                </div>
                                                <div class="col-7">
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
        </div>

        <!-- REKAP HARIAN -->
        <div id="data" class="site-section section-counter mt-1 py-3">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <h2 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus COVID-19 di Jepara</h2>
                        <p class="mb-0">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                <path d="M15 0C6.72 0 0 6.72 0 15C0 23.28 6.72 30 15 30C23.28 30 30 23.28 30 15C30 6.72 23.28 0 15 0ZM16.5 22.5H13.5V13.5H16.5V22.5ZM16.5 10.5H13.5V7.5H16.5V10.5Z" fill="#FFA51F" />
                            </svg>
                            <b>Update Terakhir : </b><?= tgl_ind($updated_at); ?>
                            <br>
                            <b>Sumber : </b>Dinas Kesehatan Kabupaten Jepara
                        </p>
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
                                                        <!-- <i class="fa fa-angle-double-up fc-red"></i> <span class="fc-red font-13 number" data-number="<?= $konfirmasi['dirawat']['baru'] + $konfirmasi['isolasi']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $konfirmasi['sembuh']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $konfirmasi['meninggal']['baru']; ?>">0</span> -->
                                                        <h6 class="font-kasus font-14 pt-1">Meninggal</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li class="list-group-item list-group-last text-center counter">
                                            <p class="font-14" style="margin-bottom: 0;">Total Kasus Luar Jepara</p>
                                            <h4 class="font-counter2 fc-red number pb-0" data-number="<?= $konfirmasi['luar']['total']; ?>">0</h4>
                                            <i class="fa fa-angle-double-up fc-red"></i> <span class="fc-red font-13 number" data-number="<?= $konfirmasi['luar']['baru']; ?>">0</span>
                                        </li> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-yellow"></i> <span class="fc-yellow font-13 number" data-number="<?= $probable['dirawat']['baru'] + $probable['isolasi']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $probable['sembuh']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $probable['meninggal']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-green"></i> <span class="fc-green font-13 number" data-number="<?= $suspek['dirawat']['baru'] + $suspek['isolasi']['baru']; ?>">0</span> -->
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
                                                        <!-- <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $suspek['discard']['baru']; ?>">0</span> -->
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

        <div class="site-section section-counter mb-1 py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <h4 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-danger">COVID-19</span> Per Kecamatan</h4>

                        <div class="row mb-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                <div class="rounded-10 shadow bg-white">
                                    <div class="row">
                                        <div class="col-md-12 mx-1 my-1">
                                            <div class="table-responsive table-kabkot px-2">
                                                <table class="table table-hovered table-bordered table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" class="text-left">Kecamatan</th>
                                                            <th rowspan="2" class="text-right" style="color: #00a6ff;">Terkonfirmasi Total</th>
                                                            <th colspan="2" class="text-danger text-right">
                                                                Konfirmasi
                                                            </th>
                                                            <th rowspan="2" class="text-primary text-right">
                                                                Sembuh
                                                            </th>
                                                            <th rowspan="2" class="text-right">
                                                                Meninggal
                                                            </th>
                                                            <th rowspan="2" class="text-right" style="color: #ae00ff;">
                                                                Suspek
                                                            </th>
                                                            <th rowspan="2" class="text-right" style="color: #ffaa00;">
                                                                Probable
                                                            </th>
                                                            <th rowspan="2" class="text-right">
                                                                Suspek Discarded
                                                            </th>
                                                            <th rowspan="2" class="text-left">Detail</th>
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
                                                            $suspek_dirawat = $suspek_dirawat + $key['suspek_dirawat'];
                                                            $probable_dirawat = $probable_dirawat + $key['probable_dirawat'];
                                                            $suspek_discard = $suspek_discard + $key['suspek_discard'];
                                                            ?>
                                                            <tr>
                                                                <td class="text-left"><?= $key['nama_kecamatan']; ?></td>
                                                                <td class="text-right"><?= $key['konfirmasi_total']; ?></td>
                                                                <td class="text-right"><?= $key['konfirmasi_dirawat']; ?></td>
                                                                <td class="text-right"><?= $key['konfirmasi_isolasi']; ?></td>
                                                                <td class="text-right"><?= $key['konfirmasi_sembuh']; ?></td>
                                                                <td class="text-right"><?= $key['konfirmasi_meninggal']; ?></td>
                                                                <td class="text-right"><?= $key['suspek_dirawat']; ?></td>
                                                                <td class="text-right"><?= $key['probable_dirawat']; ?></td>
                                                                <td class="text-right"><?= $key['suspek_discard']; ?></td>
                                                                <td>
                                                                    <a href="<?= site_url("../data/kecamatan/" . $key['kode']); ?>">Lihat</a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>

                                                        <tr class="bg-primary">
                                                            <td class="text-left">JUMLAH</td>
                                                            <td class="text-right"><?= $konfirmasi_total; ?></td>
                                                            <td class="text-right"><?= $konfirmasi_dirawat; ?></td>
                                                            <td class="text-right"><?= $konfirmasi_isolasi; ?></td>
                                                            <td class="text-right"><?= $konfirmasi_sembuh; ?></td>
                                                            <td class="text-right"><?= $konfirmasi_meninggal; ?></td>
                                                            <td class="text-right"><?= $suspek_dirawat; ?></td>
                                                            <td class="text-right"><?= $probable_dirawat; ?></td>
                                                            <td class="text-right"><?= $suspek_discard; ?></td>
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