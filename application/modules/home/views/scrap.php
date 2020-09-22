<?php
include('simple_html_dom.php');

// get DOM from URL or file
$html = file_get_html('https://jepara.go.id/category/covid-19/');

$i = 0;
foreach ($html->find('.td_module_mx15.td-animation-stack') as $e) {
    // echo $e->innertext . 'BATAS <br>';
    $data['atas'][$i]['img'] = $e->find('img.entry-thumb[height="364"]', 0)->src;
    $data['atas'][$i]['url'] = $e->find('h3.entry-title.td-module-title a[rel="bookmark"]', 0)->href;
    $data['atas'][$i]['judul'] = $e->find('h3.entry-title.td-module-title a[rel="bookmark"]', 0)->innertext;
    $data['atas'][$i]['jam'] = $e->find('time.entry-date.updated.td-module-date', 0)->innertext;

    $i++;
}
$i = 0;
foreach ($html->find('.td_module_16.td_module_wrap.td-animation-stack') as $e) {
    // echo $e->innertext . 'BATAS <br>';
    if ($i < 3) {
        $data['bawah'][$i]['img'] = $e->find('img.entry-thumb[height="150"]', 0)->src;
        $data['bawah'][$i]['url'] = $e->find('h3.entry-title.td-module-title a[rel="bookmark"]', 0)->href;
        $data['bawah'][$i]['judul'] = $e->find('h3.entry-title.td-module-title a[rel="bookmark"]', 0)->innertext;
        $data['bawah'][$i]['jam'] = $e->find('time.entry-date.updated.td-module-date', 0)->innertext;
        $konten = str_replace("                      JEPARA", "JEPARA", $e->find('.td-excerpt', 0)->innertext);
        $data['bawah'][$i]['konten'] = $konten;
        # code...
    }

    $i++;
}

// echo "<pre>";
// print_r($data['bawah']);
// echo "</pre>";

echo json_encode($data);
