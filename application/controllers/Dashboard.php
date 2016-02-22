<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        //load user data
        $this->load->model('m_login');
        $this->load->model('m_message');
    }
    
    public function index(){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } else {
            
            $data['title'] = 'Dashboard';
            $data['user'] = $this->m_login->get_user(); 
            $data['member_total'] = $this->m_login->get_total_member(); 
            $data['message_total'] = $this->m_message->get_total_message(); 
            $data['message_unread'] = $this->m_message->get_message_unread(); 
            $data['reply_total'] = $this->m_message->get_total_reply(); 
            $this->load->view('head', $data);
            if($this->session->userdata('level') == 'admin'){  
                
                $data['message_total_admin'] = $this->m_message->get_total_message_admin(); 
                $data['reply_total_admin'] = $this->m_message->get_total_reply_admin(); 
                //tampilan halaman admin
                $this->load->view('navbar', $data);
                $this->load->view('v_admin', $data);
                $this->load->view('foot');
            }
            else if($this->session->userdata('level') == 'member'){  
                
                //tampilan halaman member
                $this->load->view('navbar', $data);
                $this->load->view('v_member', $data); 
                $this->load->view('foot'); 
            }
        }
    }
}
