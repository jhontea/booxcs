<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct(){
        
        parent::__construct();
        //load login data
        $this->load->model('m_login');
    }
    
    public function index(){
                
            $data['title'] = 'Register';
            $this->load->view('head', $data);
            $this->load->view('v_register');
    }
    
    public function process() {
        
        $this->m_login->register();
        redirect(base_url().'register');
    }
}


