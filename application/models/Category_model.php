<?php
class Category_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function add_cat()
    {
        $slug=url_title($this->input->post('catName'), 'dash', TRUE);
        $data = array(
                    'name' => $this->input->post('catName'),
                    'slug' => $slug
                );
        return $this->db->insert('blog_category', $data);
    }
     public function allCat() {
        $this->db->select('*');
        $this->db->from('blog_category');
        $query = $this->db->get();
        if (!$query->num_rows()) {
            return false;
        }
        else {
            return $query->result_array();
        }
    }
    function isExist($name) {
        $this->db->select('id');
        $this->db->where('name', $name);
        $query = $this->db->get('blog_category');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
}
}