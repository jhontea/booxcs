<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_message');

    }
    
    public function index() {
        
       //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
        
        else if($this->session->userdata('level') != 'admin'){
            
            redirect(base_url().'dashboard');
            
        } 
        
        else {
            
            $data['title'] = 'User';
            $data['member'] = $this->m_login->get_member();
            
            $this->load->view('head', $data);
            $this->load->view('navbar', $data);
            $this->load->view('v_user', $data);
            $this->load->view('foot');
        }
    }
    
    public function update() {
        
       //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
        else {
            
            $this->m_login->update();
            redirect(base_url().'user/profile');
        }
    }
    
    public function profile() {
        
       //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
        else {
            
            $data['title'] = 'User Profile';
            $data['member'] = $this->m_login->get_user();
            
            $this->load->view('head', $data);
            $this->load->view('navbar', $data);
            $this->load->view('v_profile', $data);
            $this->load->view('foot');
        }
    }
    
}