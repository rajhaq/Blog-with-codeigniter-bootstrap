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
}