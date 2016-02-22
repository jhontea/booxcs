<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller{

    public function __construct(){
        
        parent::__construct();
        //load login data
        $this->load->model('m_login');
    }
    
    public function index(){
        //cek session
        if($this->session->userdata('status') == TRUE){
            
            $this->session->set_flashdata('msg', 'Anda telah login');
            redirect(base_url());
            
        } 
        //login page jika belum login
        else {
            
            $data['title'] = 'Login';
            $this->load->view('head', $data);
            $this->load->view('welcome_message');
        }
    }
    
    public function process() {
        
        //cek login 
        $result = $this->m_login->validate();
        
        if($result) {
            //berhasil login
            redirect(base_url());
            
        } 
        else {
            
            //gagal login
            $this->index();
        }
    }
    
    public function logout() {
        
        //logout
        $this->session->sess_destroy();
        redirect(base_url().'c_login');
    }
}


