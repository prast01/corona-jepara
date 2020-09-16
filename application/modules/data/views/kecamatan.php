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
                    <li class="nav-item">
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

        <div class="site-section first-section pb-3">
            <div class="container gradient-banner">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <img src="<?= site_url("../"); ?>assets/img/logo_satgas.png" alt="" class="img-responsive" width="100px">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12 text-center" data-aos="fade">
                        <div class="card shadow">
                            <div class="card-body">
                                <h2 class="mb-3 font-secondary text-uppercase font-weight-bold">Sebaran Kasus Per Kelurahan/Desa</h2>
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
            </div>
        </div>

        <div class="site-section section-counter mb-5 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <!-- <a href="<?= site_url("../data"); ?>" class="btn btn-outline-warning rounded-8"><i class="fa fa-arrow-left"></i> Kembali</a> -->
                        <a href="javascript:history.back()" class="btn btn-outline-warning rounded-8"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="col-lg-12 ml-auto mb-5 text-center">
                        <?php
                        if ($status == 'konfirmasi') {
                        ?>
                            <div class="table-responsive table-kabkot px-3">
                                <table class="table table-hovered table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th rowspan="3" class="text-left align-middle">Kelurahan/Desa</th>
                                            <th colspan="5" class="text-danger text-center">
                                                Terkonfirmasi
                                            </th>
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
                                        <?php foreach ($kelurahan as $key) : ?>
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
                                                <td class="text-left"><?= $key['nama_kelurahan']; ?></td>
                                                <td class="text-right"><?= number_format($key['konfirmasi_total'], 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($key['konfirmasi_dirawat'], 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($key['konfirmasi_isolasi'], 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($key['konfirmasi_sembuh'], 0, ',', '.'); ?></td>
                                                <td class="text-right"><?= number_format($key['konfirmasi_meninggal'], 0, ',', '.'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>

                                        <tr class="bg-primary">
                                            <td class="text-left">JUMLAH</td>
                                            <td class="text-right"><?= number_format($konfirmasi_total, 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($konfirmasi_dirawat, 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($konfirmasi_isolasi, 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($konfirmasi_sembuh, 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($konfirmasi_meninggal, 0, ',', '.'); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php
                        } elseif ($status == 'probable') {
                        ?>
                            <table class="table table-hovered table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th rowspan="3" class="text-left align-middle">Kelurahan/Desa</th>
                                        <th colspan="5" class="text-warning text-center">
                                            Probable
                                        </th>
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
                                    <?php foreach ($kelurahan as $key) : ?>
                                        <?php
                                        $probable_total = $probable_total + $key['probable_total'];
                                        $probable_dirawat = $probable_dirawat + $key['probable_dirawat'];
                                        $probable_isolasi = $probable_isolasi + $key['probable_isolasi'];
                                        $probable_sembuh = $probable_sembuh + $key['probable_sembuh'];
                                        $probable_meninggal = $probable_meninggal + $key['probable_meninggal'];
                                        ?>
                                        <tr>
                                            <td class="text-left"><?= $key['nama_kelurahan']; ?></td>
                                            <td class="text-right"><?= number_format($key['probable_total'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['probable_dirawat'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['probable_isolasi'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['probable_sembuh'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['probable_meninggal'], 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <tr class="bg-primary">
                                        <td class="text-left">JUMLAH</td>
                                        <td class="text-right"><?= number_format($probable_total, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($probable_dirawat, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($probable_isolasi, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($probable_sembuh, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($probable_meninggal, 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        } elseif ($status == 'suspek') {
                        ?>
                            <table class="table table-hovered table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th rowspan="3" class="text-left align-middle">Kelurahan/Desa</th>
                                        <th colspan="4" class="text-primary text-center">
                                            Suspek
                                        </th>
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
                                    <?php foreach ($kelurahan as $key) : ?>
                                        <?php
                                        $suspek_total = $suspek_total + $key['suspek_total'];
                                        $suspek_dirawat = $suspek_dirawat + $key['suspek_dirawat'];
                                        $suspek_isolasi = $suspek_isolasi + $key['suspek_isolasi'];
                                        $suspek_discard = $suspek_discard + $key['suspek_discard'];
                                        ?>
                                        <tr>
                                            <td class="text-left"><?= $key['nama_kelurahan']; ?></td>
                                            <td class="text-right"><?= number_format($key['suspek_total'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['suspek_dirawat'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['suspek_isolasi'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($key['suspek_discard'], 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <tr class="bg-primary">
                                        <td class="text-left">JUMLAH</td>
                                        <td class="text-right"><?= number_format($suspek_total, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($suspek_dirawat, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($suspek_isolasi, 0, ',', '.'); ?></td>
                                        <td class="text-right"><?= number_format($suspek_discard, 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
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


</body>

</html>