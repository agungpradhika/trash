<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('StatusModel');
    $this->load->helper('url');
  }

  public function status()
  {
    $data['smart_trash'] = $this->StatusModel->tampil_status()->result();
    // var_dump($data); exit();
    $tampil = $this->load->view('dashboard',$data);
    // var_dump($tampil); exit();
  }

}