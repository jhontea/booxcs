<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_message extends CI_Model{
    
    public function get_message() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('comment', 'comment.message_id = message.id_message', 'right');
        $this->db->where('id_user', $uid);
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_message_member() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('id_user', $uid);
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_message_search() {
        
        $uid = $this->session->userdata('uid');
        $message    = $this->input->post('search');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('comment', 'comment.message_id = message.id_message', 'right');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
        $this->db->where('id_user', $uid);
        $this->db->where('message', $message);
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        $cari=$this->db->query("select * from message where message like '%$message%'  and id_user = '$uid'");
        
        return $cari->result_array();
    }
    
    public function get_message_search_admin() {
        
        $message    = $this->input->post('search');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('comment', 'comment.message_id = message.id_message', 'right');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
        $this->db->where('message', $message);
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        
        $cari=$this->db->query("select * from message LEFT JOIN `login_session` ON `login_session`.`uid` = `message`.`id_user` where message like '%$message%' ");
        
        return $cari->result_array();
    }
    
    public function get_message_admin() {
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_message_admin_unread() {
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
        $this->db->where('unread', '1');
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_message_member_unread() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
         $this->db->join('comment', 'comment.message_id = message.id_message', 'right');
        $this->db->where('uid', $uid);
        $this->db->where('read', '0');
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_comment_admin_unread() {
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('login_session', 'login_session.uid = message.id_user', 'left');
        $this->db->join('comment', 'comment.message_id = message.id_message', 'right');
        $this->db->where('unread_c', '1');
        $this->db->order_by('date DESC');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_one_message($id) {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('id_message', $id);
        $this->db->where('id_user', $uid);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_one_message_admin($id) {
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('id_message', $id);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
        
    public function get_total_message() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('id_user', $uid);
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function get_total_message_admin() {
                
        $this->db->select('*');
        $this->db->from('message');
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function get_message_unread() {
                
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('unread', '1');
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function get_reply($id) {
                
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->join('message', 'message.id_message = comment.message_id', 'right');
        $this->db->join('login_session', 'login_session.uid = comment.user_id', 'left');
        $this->db->where('id_message', $id);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function get_total_reply() {
        
        $uid = $this->session->userdata('uid');
        
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->join('message', 'message.id_message = comment.message_id', 'inner');
        $this->db->where('read', '0');
        $this->db->where('id_user', $uid);
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function get_total_reply_admin() {
        
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->join('message', 'message.id_message = comment.message_id', 'inner');
        $this->db->where('unread_c', '1');
        
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    public function send() {
        
        $uid = $this->session->userdata('uid');
        
        //input message
        $subject    = $this->input->post('subject');
        $message    = $this->input->post('message');
            
        $data = array(
        'subject'  => $subject,
        'message'  => $message, 
        'status'   => 'open', 
        'unread'   => 1, 
        'id_user'  => $uid,
        'date'     => date('Y-m-d'));        
        $this->db->insert('message', $data);
        $this->session->set_flashdata('msg', 'Message baru telah dikirim');
        
    }
    
    public function comment($id) {
        
        $uid = $this->session->userdata('uid');
        
        //input message
        $comment    = $this->input->post('comment');
        
        if($uid == 1) {
           $data = array(
            'comment'   => $comment,
            'message_id'=> $id,
            'user_id'   => $uid,
            'unread_c'  => 0,
            'created'   => date('Y-m-d')); 
        }
        else{
            $data = array(
            'comment'   => $comment,
            'message_id'=> $id,
            'user_id'   => $uid,
            'unread_c'  => 1,
            'created'   => date('Y-m-d'));
        }
        
        $this->db->insert('comment', $data);
        $this->session->set_flashdata('msg', 'Comment baru telah dikirim');
        
    }
    
    public function read_admin($id) {
        
        $data = array(
        'unread'   => 0);
        
        $this->db->where('id_message', $id);
        $this->db->update('message', $data);
        
    }
    
    public function read_comment($id) {
        
        $data = array(
        'unread_c'   => 0);
        
        $this->db->where('message_id', $id);
        $this->db->update('comment', $data);
        
    }
    
    public function status($stat, $id) {
        
        $data = array(
        'status'   => $stat);
        
        $this->db->where('id_message', $id);
        $this->db->update('message', $data);
        
    }
    
    public function read($id) {
        
        $data = array(
        'read'   => 1);
        
        $this->db->where('message_id', $id);
        $this->db->update('comment', $data);
        
    }
    
    public function delete($id) {
        
        $this->db->where('id_message', $id);
        $this->db->delete('message');
    }
}