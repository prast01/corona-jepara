<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
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

    public function getFaskes()
    {
        $url = LOKAL_URL_LAPOR . "servicesV2/get_data_faskes";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    public function getScrap()
    {
        $url = LOKAL_URL_CORONA . "home/scrap";
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
}

/* End of file M_home.php */
