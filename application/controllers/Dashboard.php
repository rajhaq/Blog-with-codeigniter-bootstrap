<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->helper('url_helper');
        $this->load->helper('common_helper');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $data['flag'] = false;   
    }
    public function index($page = 'dashboard') {
        $data['category'] = $this->category_model->allCat();           
        $data['flag'] = false;  
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function category($page = 'category') {
        $data['category'] = $this->category_model->allCat();
        $data['flag'] = false;  
        $this->load->helper('url');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/category', $data);
        $this->load->view('templates/footer', $data);
    }
    public function add($page = 'category') {        
    
        $this->load->helper('url');
        $data['flag'] = false;  
        $data['flag2'] = false;  
        $this->form_validation->set_rules('catName', 'Category Name', 'required|is_unique[blog_category.name] ');
        $data['title'] = ucfirst($page); 
        if ($this->form_validation->run() === FALSE)
        {   
            
            if($data['category'] = $this->category_model->allCat())
            {
                $data['flag2'] = true;  
            }
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/category', $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $data['flag'] = true;     
            $this->category_model->add_cat($this->input->post('catName'));
            $data['category'] = $this->category_model->allCat();
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/category', $data);
            $this->load->view('templates/footer', $data);
        }
        
    }

}