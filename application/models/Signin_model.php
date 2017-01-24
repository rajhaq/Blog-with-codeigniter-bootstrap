<?php
class Signin_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_pass()
    {
        $pass=$this->db->select('user_password')->from('blog_user')->where('user_email', $this->input->post('email'));
        return $pass;
    }
    // Read data using username and password
    public function login($data) {
 //       $condition = "user_email ='".$email."' , user_password='".$password."'";
        $this->db->select('*');
        $this->db->from('blog_user');
        $this->db->where('blog_user.user_email', $data['email']);
        $this->db->where('blog_user.user_password', $data['password']);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function read_user_information($email) {
        $condition = "user_email ='".$email."'";
        $this->db->select('*');
        $this->db->from('blog_user');
        $this->db->where($condition);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
        else {
            return false;
        }
    }
}