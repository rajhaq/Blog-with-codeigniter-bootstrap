<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index($page = 'catregory') {
        $data['category'] = $this->category_model->allCat();
        $data['flag'] = false;  
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->viewLoader(__CLASS__, __FUNCTION__, $data);
    }
    public function add($page = 'category') {  
        $data['category'] = $this->category_model->allCat();
        $this->form_validation->set_rules('catName', 'Category Name', 'required|is_unique[blog_category.name] ');
        $data['title'] = ucfirst($page); 
        if ($this->form_validation->run() === FALSE)
        {
        $this->session->set_flashdata('notification', errormessage(validation_errors()));
        $this->viewLoader(__CLASS__,'index', $data);
        }
        else
        {
            $this->session->set_flashdata('notification', successmessage($this->input->post('catName')));
            $this->category_model->add_cat($this->input->post('catName'));
            $this->viewLoader(__CLASS__,'index', $data);
        }
        
    }
    public function edit($page = 'edit category', $edit) {
        $data['category'] = $this->category_model->allCat();
        $data['flag'] = false;  
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/category', $data);
        $this->load->view('templates/footer', $data);
    }

}