<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include 'koneksi.php';


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

  public function lokasi()
  {
    $this->load->view('lokasi');
  }

  // menampilkan data
  public function akun()
  {
    $data['akun'] = $this->UserModel->profil()->result();
    $this->load->view('akun', $data);
  }

  // klik edit
  public function edit($id)
  {
    $where = array('id' => $id);
    $data['user'] = $this->UserModel->edit($where,'users')->result();
    $this->load->view('profil',$data);
  }

  public function update()
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

  public function laporan()
  {
    $data['data'] = $this->StatusModel->laporan()->result();
    // var_dump($data); exit();
    // var_dump($data);exit();
    $this->load->view('laporan',$data);
  }

  public function tanggal()
  {
    // var_dump($conn); exit();
    if (isset($_GET['tanggal'])) {
      $tgl = $_GET['tanggal'];
      $sql = $this->db->where('tanggal',$tgl);
      $this->load->view('laporan',$sql);
    }
  }

}