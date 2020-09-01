<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data extends MY_Controller
{


  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    $this->load->model('M_data');
  }

  public function index()
  {
    $model = $this->M_data;
    $data = $model->getApi();
    $data['kecamatan'] = $model->getApi2();
    $this->load->view('home', $data);
  }

  public function kecamatan($kode)
  {
    $model = $this->M_data;
    $data = $model->getApi();
    $data['kelurahan'] = $model->getApi3($kode);
    $this->load->view('kecamatan', $data);
  }
}

/* End of file Controllername.php */