<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StatusModel extends CI_Model {
    
    public function tampil_status(){
        $this->db->order_by('id','desc');
        return $this->db->get('smart_trash');
    }
}