<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function profil()
    {
    	return $this->db->get('users');
    	// var_dump($result); exit();
    }

    function edit($where,$table){      
    return $this->db->get_where($table,$where);
}

    public function update($where,$data,$table)
    {
    	$this->db->where($where);
        $this->db->update($table,$data);
    }
}