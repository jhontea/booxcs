<?php
class Admin_model extends CI_Model {
    
    public function get_admin($id = FALSE) {
        
        if($id === FALSE) {
            
            $this->db->order_by('username ASC');
            $query = $this->db->get('admin');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('admin', array('id_admin' => $id));
        return $query->row_array();
    }
    
    public function get_admin_by_username($user) {
        
        $query = $this->db->get_where('admin', array('username' => $user));
        return $query->row_array();
    }
    
    public function insert() {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        
        if($this->get_admin_by_username($username) > 0) {
            
            $this->session->set_flashdata('msg', 'Username telah digunakan');
            redirect(base_url().'user');
            
        } else {
            
            $data = array(
                'username'  => $username,
                'password'  => md5($password),
                'level'     => $level);
            
            $this->db->insert('admin', $data);
            
            $this->session->set_flashdata('msg', 'User/Admin baru telah ditambahkan');
            redirect(base_url().'user');
        }
        
    }
    
    public function destroy($id) {
        
        $this->db->where('id_admin', $id);
        $this->db->delete('user');
    }
    
    public function update($id) {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'username'  => $username,
            'password'  => md5($password),
            'level'     => $level);
        
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
        
        $this->session->set_flashdata('msg', 'Data User/Admin telah diubah');
        redirect(base_url().'user');
    }
    
}