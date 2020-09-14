<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{


    public function getApi()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_cut_off";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getApi2()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_kecamatan";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getApi3($kode)
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_kelurahan/" . $kode;
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }


    public function getChartHarian()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_harian";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }

    public function getChartGender()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_gender";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }

    public function getChartPenyakit()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_penyakit";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }


    public function getFaskes()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_faskes";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }
}

/* End of file M_data.php */
