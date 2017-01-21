<?php
class Category_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function add_cat()
    {
        $data = array(
            'name' => $this->input->post('catName'),
        );
        return $this->db->insert('blog_category', $data);
    }
}