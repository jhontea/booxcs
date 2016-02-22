<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model{
    
    public function validate() {
        // ambil data dari input form
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
        
        $query = $this->db->get('login_session');
        //cek user pada database
        if($query->num_rows() > 0) {
            
            $row = $query->row();
            $data = array(
                    'uid' => $row->uid,
                    'username' => $row->username,
                    'level' => $row->level,
                    'nama' => $row->nama,
                    'email' => $row->email,
                    'status' => TRUE
                    );
            //buat session dari data user
            $this->session->set_userdata($data);
            
            return TRUE;
            
        } 
        //pesan apabila data user tidak ada
        else {
            
            $this->session->set_flashdata('msg', 'Username atau Password salah');
            return FALSE;
        }
    }
    
    public function get_user() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('login_session');
        $this->db->where('uid', $uid);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_member() {
        
        $this->db->select('*');
        $this->db->from('login_session');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_total_member() {
        
        
        $this->db->select('*');
        $this->db->from('login_session');
        $this->db->where('level','member');
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function register() {
        
        //input message
        $username   = $this->input->post('username');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));
        
        $this->db->select('*');
        $this->db->from('login_session');
        $this->db->where('username', $username);
        $cekusername = $this->db->get();
        
        if($cekusername -> num_rows() > 0){
            
            $this->session->set_flashdata('msg', 'duplicate');
        }
        else {
            
            $data = array(
            'username'  => $username,
            'nama'  => $nama, 
            'email'   => $email, 
            'password'   => $password, 
            'level'  => 'member');       
            $this->db->insert('login_session', $data);
            $this->session->set_flashdata('msg', 'Pendaftaran berhasil');
        }
        
    }
    
    public function update() {
        
        $uid = $this->session->userdata('uid');
        
        //input message
        $username   = $this->input->post('username');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        
        $this->db->select('*');
        $this->db->from('login_session');
        $this->db->where('username', $username);
        $cekusername = $this->db->get();
        
        if($cekusername -> num_rows() > 0){
            
            $this->session->set_flashdata('msg', 'duplicate');
        }
        else {
            
            $data = array(
            'username'  => $username,
            'nama'  => $nama, 
            'email'   => $email);       
            
            $this->db->where('uid', $uid);
            $this->db->update('login_session', $data);
            $this->session->set_flashdata('msg', 'Profil berhasil diubah');
        }
        
    }
}