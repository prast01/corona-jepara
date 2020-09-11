<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
  }


  public function index()
  {
    $model = $this->M_home;
    $data = $model->getApi();
    $data['kecamatan'] = $model->getApi2();
    $data['faskes'] = $model->getFaskes();
    $this->load->view('home', $data);
    // var_dump($data);
  }

  public function maintenis()
  {
    $this->load->view('maintenis');
  }
}

/* End of file Controllername.php */