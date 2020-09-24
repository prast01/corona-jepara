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
    $data['faskes'] = $model->getFaskes();
    $data['risiko'] = $model->getRisiko();
    $this->load->view('home', $data);
  }

  public function kecamatan($kode, $status)
  {
    $model = $this->M_data;
    $data = $model->getApi();
    $data['kelurahan'] = $model->getApi3($kode);
    $data['status'] = $status;
    $this->load->view('kecamatan', $data);
  }

  public function chart_harian()
  {
    $model = $this->M_data;
    $data = $model->getChartHarian();

    echo $data;
  }

  public function chart_gender()
  {
    $model = $this->M_data;
    $data = $model->getChartGender();

    echo $data;
  }

  public function chart_penyakit()
  {
    $model = $this->M_data;
    $data = $model->getChartPenyakit();

    echo $data;
  }

  public function data_kelurahan()
  {
    $model = $this->M_data;
    $data = $model->get_kelurahan();

    echo $data;
  }
}

/* End of file Controllername.php */