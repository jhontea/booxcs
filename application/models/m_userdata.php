<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_userdata extends CI_Model{
    
    public function get_user() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('login_session');
        $this->db->where('uid', $uid);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
}