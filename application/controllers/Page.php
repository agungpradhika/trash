<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('StatusModel');
    $this->load->helper('url');
  }


  public function home()
  {
    $data['smart_trash'] = $this->StatusModel->tampil_status()->row();

    $this->load->view('dashboard');
  }

  public function thanks()
  {
    $this->load->view('thanks');
  }

  public function dashboard()
  {
    $data['smart_trash'] = $this->StatusModel->tampil_status()->row();
    // var_dump($data);exit();
  	$this->load->view('dashboard',$data);
  }

  public function laporan()
  {
    $this->load->view('laporan');
  }

  public function lokasi()
  {
    $this->load->view('lokasi');
  }

  public function akun()
  {
    $this->load->view('akun');
  }

}