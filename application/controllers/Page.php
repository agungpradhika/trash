<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('StatusModel');
    $this->load->model('UserModel');
    $this->load->helper('url');
  }


  public function home()
  {
    $data['smart_trash'] = $this->StatusModel->tampil_status()->row();
    // var_dump($data); exit();
    $this->load->view('home',$data);
  }

  public function thanks()
  {
    $this->load->view('thanks');
  }

  public function dashboard()
  {
    $data['smart_trash'] = $this->StatusModel->tampil_status()->row();
    // var_dump($data);exit();
  	$this->load->view('home',$data);
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
    $data['akun'] = $this->UserModel->profil()->row();
    $this->load->view('akun', $data);
  }

  public function edit_akun()
  {
    $data['profil'] = $this->UserModel->profil()->row();
    // var_dump($data); exit();
    $this->load->view('profil', $data);
  }

  public function update($id)
  {
      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $jabatan = $this->input->post('jabatan');
      $email = $this->input->post('email');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'jabatan' => $jabatan,
        'email' => $email,
        'username' => $username,
        'password' => $password
      );

      $where = array(
        'id' => $id
      );

      $this->UserModel->update($where,$data,'users');
      redirect ('page/akun');
  }

  // public function laporan()
  // {
  //   $data['data'] = $this->StatusModel->laporan()->row();
  //   var_dump($data); exit();
  //   // var_dump($data);exit();
  //   $this->load->view('laporan',$data);
  // }

}