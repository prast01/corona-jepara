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
    $data['scrap'] = $model->getScrap();
    $data['risiko'] = $model->getRisiko();
    $this->load->view('home', $data);
    // var_dump($data);
  }

  public function maintenis()
  {
    $this->load->view('maintenis');
  }

  public function grabbing()
  {
    $this->load->view('grab');
  }

  public function scrap()
  {
    $this->load->view('scrap');
  }

  public function peta_risiko()
  {
    $this->load->view('risiko');
  }
}

/* End of file Controllername.php */