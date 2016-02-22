<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unread extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        //load user data
        $this->load->model('m_login');
        $this->load->model('m_message');
    }
    
    public function message(){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } 
        
        else {
            
            $data['title'] = 'Unread Message';
            $data['user'] = $this->m_login->get_user(); 
            $data['message_admin_unread'] = $this->m_message->get_message_admin_unread(); 
            $data['message_member_unread'] = $this->m_message->get_message_member_unread(); 
            
            if($this->session->userdata('level') == 'admin'){ 
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('unread_message', $data);
                $this->load->view('foot');
            }
            else if($this->session->userdata('level') == 'member'){ 
                $this->load->view('head', $data);
                $this->load->view('navbar', $data);
                $this->load->view('unread_message_member', $data);
                $this->load->view('foot');
            }
        }
    }
    
    public function comment(){
        //cek session sudah terbentuk atau belum
        if($this->session->userdata('status') == FALSE){
            
            $this->session->set_flashdata('msg', 'Anda harus login terlebih dahulu');
            redirect(base_url().'c_login');
            
        } 
        
        else {
            
            $data['title'] = 'Unread Comment';
            $data['user'] = $this->m_login->get_user(); 
            $data['comment_admin_unread'] = $this->m_message->get_comment_admin_unread(); 
            $this->load->view('head', $data);
            $this->load->view('navbar', $data);
            $this->load->view('unread_comment', $data);
            $this->load->view('foot');
        }
    }
}
