<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{


    public function getApi()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_cut_off";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getApi2()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_kecamatan";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getApi3($kode)
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_kelurahan/" . $kode;
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }


    public function getChartHarian()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_harian";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }

    public function getChartGender()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_gender";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }

    public function getChartPenyakit()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_penyakit";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }


    public function getFaskes()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_faskes";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getRisiko()
    {
        $url = LOKAL_URL_CORONA . "home/peta_risiko";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function get_kelurahan()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_kelurahan_all";
        $data = file_get_contents($url);
        // $data = json_decode($result, true);

        return $data;
    }
}

/* End of file M_data.php */
