<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    
    public function getApi()
    {
        $url = "http://dinkes.mi-kes.net/laporkan-v2/servicesV2/get_data_cut_off";
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }


}

/* End of file M_home.php */
