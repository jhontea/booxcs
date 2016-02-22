<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    
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
            
            $data['title'] = 'Message';
            $data['user'] = $this->m_login->get_user(); 
            $data['message'] = $this->m_message->get_message(); 
            $data['message_member'] = $this->m_message->get_message_member(); 
            $data['message_admin'] = $this->m_message->get_message_admin(); 
            $data['message_total'] = $this->m_message->get_total_message(); 
            $data['reply_total'] = $this->m_message->get_total_reply(); 
            $this->load->view('head', $data);
            if($this->session->userdata('level') == 'admin'){  
                
                //tampilan halaman admin
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('v_m_admin', $data);
                $this->load->view('foot');
            }
            else if($this->session->userdata('level') == 'member'){  
                
                //tampilan halaman member
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('v_m_member', $data); 
                $this->load->view('foot'); 
            }
        }
    }
    
    public function search(){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } else {
            
            $data['title'] = 'Search Message';
            $data['message_search_admin'] = $this->m_message->get_message_search_admin(); 
            $data['message_search'] = $this->m_message->get_message_search(); 
            $this->load->view('head', $data);
            if($this->session->userdata('level') == 'admin'){  
                
                //tampilan halaman admin
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('v_s_admin', $data);
                $this->load->view('foot');
            }
            else if($this->session->userdata('level') == 'member'){  
                
                //tampilan halaman member
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('v_s_member', $data); 
                $this->load->view('foot'); 
            }
        }
    }
    
    public function view($id){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } else {
            
            $data['id'] = $id;
            $data['title'] = 'View Message';
            $data['user'] = $this->m_login->get_user(); 
            $data['message'] = $this->m_message->get_message();
            $data['one_message'] = $this->m_message->get_one_message($id);
            $data['one_message_admin'] = $this->m_message->get_one_message_admin($id);
            $data['reply'] = $this->m_message->get_reply($id); 
            $this->load->view('head', $data);
            if($this->session->userdata('level') == 'admin'){  
                
                $this->m_message->read_admin($id); 
                $this->m_message->read_comment($id); 
                //tampilan halaman admin
                $this->load->view('navbar', $data);
                $this->load->view('view_m_admin', $data);
                $this->load->view('foot');
            }
            else if($this->session->userdata('level') == 'member'){  
                
                $data['read'] = $this->m_message->read($id); 
                //tampilan halaman member
                $this->load->view('navbar', $data);
                $this->load->view('view_m_member', $data); 
                $this->load->view('foot'); 
            }
        }
    }
    
    public function status($stat, $id){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } else {
            
            $data['title'] = 'View Message';
            $data['user'] = $this->m_login->get_user(); 
            $data['message'] = $this->m_message->get_message();
            $data['one_message'] = $this->m_message->get_one_message($id);
            $data['one_message_admin'] = $this->m_message->get_one_message_admin($id);
            $data['reply'] = $this->m_message->get_reply($id); 
            $this->load->view('head', $data);
            if($this->session->userdata('level') == 'admin'){  
                $this->m_message->status($stat, $id);
                $this->m_message->read_admin($id); 
                $this->m_message->read_comment($id); 
                
                 $this->session->set_flashdata('msg', 'Status telah diubah');
                redirect(base_url().'message');
            }
            else if($this->session->userdata('level') == 'member'){  
                
                redirect(base_url().'dashboard');
            }
        }
    }
    
    public function compose(){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } else {
            
            $data['title'] = 'Message Compose';
            $this->load->view('head', $data);
            $this->load->view('navbar', $data);
            $this->load->view('message_compose', $data); 
            $this->load->view('foot'); 
            
        }
    }
    
    public function send() {
        
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
            //berhasil menambahkan data
            $this->m_message->send();
            redirect(base_url().'message');
    }
    
    public function comment($id) {
        
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
            //berhasil menambahkan data
            $this->m_message->comment($id);
            redirect(base_url().'message/view/'.$id);
    }
    
    public function delete($id) {
        
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        }
        
        $this->m_message->delete($id);
        $this->session->set_flashdata('msg', 'delete');
        redirect(base_url().'message');
    }
}
