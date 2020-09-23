<?php
// get / mengambil content berdasarkan url yang akan di curi datanya
$url = "https://data.covid19.go.id/public/api/skor.json";
$content = file_get_contents($url);

$data = json_decode($content, true);

$d['tgl_update'] = $data['tanggal'];

foreach ($data['data'] as $key => $val) {
    if ($val['kode_prov'] == "33" && $val['kode_kota'] == "3320") {
        $d['prov'] = $val['prov'];
        $d['kota'] = $val['kota'];
        $d['hasil'] = $val['hasil'];
        $hasil = $val['hasil'];
        if ($hasil == "RESIKO TINGGI") {
            $warna = "#bd1900";
        } else if ($hasil == "RESIKO SEDANG") {
            $warna = "#fc8403";
        } else if ($hasil == "RESIKO RENDAH") {
            $warna = "#ded716";
        } else if ($hasil == "TIDAK ADA KASUS") {
            $warna = "green";
        } else {
            $warna = "green";
        }
        $d['warna'] = $warna;
    }
}


echo json_encode($d);
