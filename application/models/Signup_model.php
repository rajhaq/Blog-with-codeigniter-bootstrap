<?php
class Signup_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function set_user()
    {
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_password' => $this->input->post('pwd'),
            'user_email' => $this->input->post('email'),
            'user_sex' => $this->input->post('sex'),
            'user_bio' => $this->input->post('bio'),
        );
        return $this->db->insert('blog_user', $data);
    }
}