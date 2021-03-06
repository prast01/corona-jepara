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

    <meta http-equiv="refresh" content="600" />

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

    <script src="<?= site_url("../"); ?>assets/js/jquery-3.3.1.min.js"></script>

    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $(".nav-link2").on('click', function(event) {
                // Prevent default anchor click behavior
                event.preventDefault();
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Store hash
                    var hash = this.hash;
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        // window.location.hash = hash;
                    });
                } // End if
            });

            $('.navbar-nav li').click(function() {
                $(this).addClass('active').siblings('li').removeClass('active');
            });

        });

        function bukas(id) {
            $('.baris-data .datas').siblings('.datas').removeClass('buka').addClass('tutup');
            $('#' + id).addClass('buka').removeClass('tutup');
            console.log(id);
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

        .rounded-10 {
            border-radius: 10px;
        }

        .success {
            border-color: #4CAF50;
            color: green;
        }

        .success:hover {
            background-color: #4CAF50;
            color: white;
        }

        .buka {
            display: block;
        }

        .tutup {
            display: none;
        }

        .card-footer:last-child {
            border-radius: 0 !important;
        }

        .card-footer {
            padding: 0 !important;
            background-color: unset !important;
            border-top: unset !important;
        }

        .img-title {
            color: white;
            margin: 0;
        }

        /* .text-center {
            color: #fff;
        } */

        .card-img-overlay {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
        }

        #map {
            position: relative;
            border: 1px solid black;
            border-radius: 8px;
            height: 600px;
            /* or as desired */
            width: 100%;
        }

        .info-peta {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: left;
        }

        .info-peta h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            text-align: left;
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
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
                    <li class="nav-item active">
                        <a class="nav-link nav-link2 text-uppercase" href="#dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link2 text-uppercase" href="#definisi">Definisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link2 text-uppercase" href="#rs_rujukan">RS Rujukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link2 text-uppercase" href="#data">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link2 text-uppercase" href="#berita">berita</a>
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


        <div class="slant-1"></div>

        <div id="dashboard" class="site-section first-section pb-3">
            <div class="container gradient-banner">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <img src="assets/img/logo_satgas.png" alt="" class="img-responsive" width="150px">
                    </div>
                </div>
                <div class="row mb-1">
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

                <div class="row">
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-2">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h2 class="text-uppercase text-center font-secondary">HOTLINE TANGGAP <span class="text-danger">COVID-19</span></h2>
                                        <h2 class="text-uppercase text-center font-secondary">KABUPATEN JEPARA</h2>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1">
                                                <a href="tel:+628112716119">
                                                    <button class="btn btn-danger btn-block border-0 mb-1 hotline rounded-8" type="submit">
                                                        <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i>
                                                        <span class="align-middle float-left">Hotline</span>
                                                        <span class="align-middle float-right mt-2">+6281 127 16 119</span><br />
                                                        <small class="sub-text float-left">Layanan Kegawatdaruratan dan Info COVID-19</small>
                                                    </button>
                                                </a>
                                                <a href="https://wa.me/628112716119">
                                                    <button class="btn btn-primary text-white btn-block border-0 mb-1 hotline rounded-8" type="submit">
                                                        <i class="fa fa-2x fa-whatsapp float-left align-middle mr-2 mt-1" aria-hidden="true"></i>
                                                        <span class="align-middle float-left">Whatsapp</span>
                                                        <span class="align-middle float-right mt-2">+6281 127 16 119</span><br />
                                                        <small class="sub-text float-left">Layanan Kegawatdaruratan dan Info COVID-19</small>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-2">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h2 class="text-uppercase text-center font-secondary">CEK KONDISI ANDA !</h2>
                                        <p class="text-center font-secondary">Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk mengetahi apakah Anda memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19 atau tidak.</p>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1">
                                                <a href="https://corona.jatengprov.go.id/screening">
                                                    <button class="btn btn-danger btn-block border-0 mb-1 hotline rounded-8" type="submit">
                                                        CEK DISINI
                                                    </button>
                                                </a>
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

        <!-- DEFINISI -->
        <div id="definisi" class="site-section first-section mt-1 py-3">
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
                                <div class="card-header" id="headingKopSatu">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKopSatu" aria-expanded="true" aria-controls="collapseKopSatu">
                                        <h4 class="mb-0 text-danger">
                                            Definisi Operasional Menurut KEPMENKES HK.01.07/MENKES/413/2020
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseKopSatu" class="collapse" aria-labelledby="headingKopSatu" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <div class="accordion" id="accordionExample2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <h4 class="mb-0 text-info">
                                                            Kasus Suspek
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
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
                                                        <h4 class="mb-0 text-info">
                                                            Kasus Probable
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus suspek dengan ISPA Berat/ARDS***/meninggal dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                        <h4 class="mb-0 text-info">
                                                            Kasus Konfirmasi
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample2">
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
                                                        <h4 class="mb-0 text-info">
                                                            Kontak Erat
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample2">
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
                                                        <h4 class="mb-0 text-info">
                                                            Discarded
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample2">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Seseorang yang memiliki salah satu dari kriteria berikut :</p>
                                                        <ol class="mb-0" style="list-style: lower-alpha;">
                                                            <li>Kasus suspek dengan hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu >24 jam, atau</li>
                                                            <li>Seseorang dengan status kontak erat yang telah menyelesaikan masa karantina selama 14 hari.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingKopDua">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKopDua" aria-expanded="true" aria-controls="collapseKopDua">
                                        <h4 class="mb-0 text-danger">
                                            Istilah dalam Website https://corona.jepara.go.id/
                                        </h4>
                                    </button>
                                </div>

                                <div id="collapseKopDua" class="collapse" aria-labelledby="headingKopDua" data-parent="#accordionExample">
                                    <div class="card-body text-justify">
                                        <div class="accordion" id="accordionExample3">
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                        <h4 class="mb-0 text-info">
                                                            Suspek Dirawat
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 yang sedang dalam perawatan di fasilitas pelayanan kesehatan (di Kabupaten Jepara dan luar Kab. Jepara)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                        <h4 class="mb-0 text-info">
                                                            Suspek Isolasi
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 yang sedang dalam masa isolasi</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingEight">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                        <h4 class="mb-0 text-info">
                                                            Suspek Discarded
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 dengan hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu >24 jam.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingNine">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                        <h4 class="mb-0 text-info">
                                                            Probable Dirawat
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR DAN sedang dirawat di Fasyankes (dalam ataupun luar daerah). ATAU</p>
                                                        <p class="mb-0">Kasus Probable COVID-19 yang sedang dirawat di Fasyankes (dalam ataupun luar daerah).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTen">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                                        <h4 class="mb-0 text-info">
                                                            Probable Isolasi
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR yang sedang menjalankan isolasi mandiri. ATAU</p>
                                                        <p class="mb-0">Kasus Probable COVID-19 yang sedang menjalankan isolasi mandiri</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingEleven">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                                        <h4 class="mb-0 text-info">
                                                            Probable Sembuh
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample3">
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
                                                        <h4 class="mb-0 text-info">
                                                            Probable Meninggal
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Kasus Suspek COVID-19 dengan ISPA Berat/ARDS (Acute Respiratoy Distress Syndrome) dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR yang telah dinyatakan meninggal dunia. ATAU</p>
                                                        <p class="mb-0">Kasus probable COVID-19 yang meninggal dunia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFourteen">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                                        <h4 class="mb-0 text-info">
                                                            Terkonfirmasi Dirawat
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang sedang dirawat di Fasyankes (dalam wilayah dan luar wilayah)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFiveteen">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFiveteen" aria-expanded="true" aria-controls="collapseFiveteen">
                                                        <h4 class="mb-0 text-info">
                                                            Terkonfirmasi Isolasi
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseFiveteen" class="collapse" aria-labelledby="headingFiveteen" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang sedang menjalani isolasi.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingSixteen">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                        <h4 class="mb-0 text-info">
                                                            Terkonfirmasi Sembuh
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample3">
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
                                                        <h4 class="mb-0 text-info">
                                                            Terkonfirmasi Meninggal
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Seseorang yang dinyatakan positif terinfeksi virus COVID-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR yang telah dinyatakan meninggal dunia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingEighteen">
                                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                                                        <h4 class="mb-0 text-info">
                                                            Kontak Erat Karantina
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample3">
                                                    <div class="card-body text-justify">
                                                        <p class="mb-0">Orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi COVID-19 dan orang tersebut sedang menjalani karantina mandiri.</p>
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
                                                        <h4 class="mb-0 text-info">
                                                            Kontak Erat Discarded
                                                        </h4>
                                                    </button>
                                                </div>

                                                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample3">
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
                    </div>
                </div>
            </div>
        </div>

        <!-- DATA -->
        <!-- RUMAH SAKIT -->
        <div id="rs_rujukan" class="site-section section-counter mt-1 py-3">
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

        <!-- REKAP HARIAN -->
        <div id="data" class="site-section section-counter mt-1 py-3">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-12 ml-auto mb-4 text-center">
                        <h4 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus <span class="text-danger">COVID-19</span> di Jepara</h4>
                        <p class="mb-2">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -5px;">
                                <path d="M15 0C6.72 0 0 6.72 0 15C0 23.28 6.72 30 15 30C23.28 30 30 23.28 30 15C30 6.72 23.28 0 15 0ZM16.5 22.5H13.5V13.5H16.5V22.5ZM16.5 10.5H13.5V7.5H16.5V10.5Z" fill="#FFA51F" />
                            </svg>
                            <b>Update Terakhir : </b><?= tgl_ind($updated_at); ?>
                            <br>
                            <b>Sumber : </b>Dinas Kesehatan Kabupaten Jepara
                        </p>
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-3" onclick="bukas('data-1')" style="cursor: pointer;">
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
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mb-3" onclick="bukas('data-2')" style="cursor: pointer;">
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
                            <div class="col-lg-4 col-12 mb-3" onclick="bukas('data-3')" style="cursor: pointer;">
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
                                                    <div class="font-counter-2 fc-green counter">
                                                        <span class="number" data-number="<?= $suspek['discard']['total']; ?>">0</span><br>
                                                        <?php
                                                        $suspek_discard = $suspek['discard']['total'] / $suspek['total'] * 100;
                                                        ?>
                                                        <span class="d-inline d-lg-none d-md-none text-white"><br /></span>
                                                        <span class="badge badge-success font-13"><?= number_format($suspek_discard, 2, ',', '.'); ?> %</span><br>
                                                        <!-- <i class="fa fa-angle-double-up fc-black"></i> <span class="fc-black font-13 number" data-number="<?= $suspek['discard']['baru']; ?>">0</span> -->
                                                        <h6 class="font-kasus font-14 pt-1">Discarded</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
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
                        <div class="row">
                            <div class="col-12 text-justify">
                                <p class="text-black">
                                    <b>
                                        Catatan : <span class="text-danger">Klik</span> salah satu kotak dibawah untuk <span class="text-danger">melihat detail</span> persebaran per Kecamatan.
                                    </b>
                                </p>
                            </div>
                        </div>
                        <div class="row baris-data shadow py-2">
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
                        <div class="row mt-5">
                            <div class="col-12">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-2">
                        <a href="<?= site_url("../data"); ?>" class="btn btn-outline-danger rounded-8 btn-lg">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- berita -->
        <div id="berita" class="site-section first-section mt-1 py-3 mb-5">
            <div class="container pt-5">
                <div class="row mb-2">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <h2 class="site-section-heading text-uppercase text-center font-secondary">Berita <span class="text-danger">Jepara</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-4">
                            <?php foreach ($scrap['atas'] as $key => $val) :
                            ?>
                                <div class="col-lg-3 col-6">
                                    <a href="<?= $val['url']; ?>">
                                        <div class="card text-center">
                                            <img src="<?= $val['img']; ?>" class="card-img-top" alt="..." width="100px">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title"></h5>
                                                <div class="card-footer text-left">
                                                    <h5 class="img-title">
                                                        <?= $val['judul']; ?>
                                                    </h5>
                                                    <p class="img-title">
                                                        <?= $val['jam']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;
                            ?>
                        </div>
                        <?php foreach ($scrap['bawah'] as $key => $val) :
                        ?>
                            <div class="row px-5">
                                <div class="col-lg-3 col-12 text-center">
                                    <a href="<?= $val['url']; ?>">
                                        <img src="<?= $val['img']; ?>" alt="" class="rounded" width="150px">
                                    </a>
                                </div>
                                <div class="col-lg-9 col-12 text-justify">
                                    <h4 class="text-uppercase mb-0">
                                        <a href="<?= $val['url']; ?>" class="text-reset"><?= $val['judul']; ?></a>
                                    </h4>
                                    <small class="text-muted mb-0"><?= $val['jam']; ?></small>
                                    <p class="text-muted mb-0"><?= $val['konten']; ?></p>
                                </div>
                            </div>
                            <hr>

                        <?php endforeach;
                        ?>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="https://jepara.go.id/category/covid-19/" class="btn btn-outline-danger rounded-8 btn-lg">Lihat Berita Lainnya</a>
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
    <script src="<?= site_url("../"); ?>assets/js/peta.js"></script>

</body>

</html>