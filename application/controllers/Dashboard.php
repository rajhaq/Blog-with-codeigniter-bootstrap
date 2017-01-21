<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index($page = 'dashboard') {
            $this->load->helper('url');
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/index', $data);
            $this->load->view('templates/footer', $data);

    }
    public function category($page = 'category') {
            $this->load->helper('url');
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/category', $data);
            $this->load->view('templates/footer', $data);

    }
    public function add($page = 'category') {
        
            $this->load->helper('url');
            $this->form_validation->set_rules('catName', 'Category Name', 'required');
            $data['title'] = ucfirst($page); 
            if ($this->form_validation->run() === FALSE)
            {
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/category', $data);
            $this->load->view('templates/footer', $data);
            }
            else
            {
                
            $this->category_model->add_cat();
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/category', $data);
            $this->load->view('templates/footer', $data);
            }



    }
    function createSlug($slug) {
        $lettersNumbersSpacesHyphens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';
        $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
        $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
        $slug = trim($slug, '-');
        return mb_strtolower($slug, 'UTF-8');
    }
}