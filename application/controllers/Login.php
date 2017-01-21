<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
            public function __construct()
        {
            parent::__construct();
            $this->load->model('signup_model');
            $this->load->model('signin_model');
            $this->load->helper('url_helper');
            $pass="null";
        }
    
    public function index($page = 'login') {    
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('user/signin', $data);
        $this->load->view('templates/footer', $data);

    }

    public function signup($page = 'signup') {      
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');  
        $this->load->helper('url');
        $this->load->library('session');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('user/signup', $data);
        $this->load->view('templates/footer', $data);

    }
    public function create($page = 'signup') {      
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[blog_user.user_email]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[8]');  
        $this->form_validation->set_rules('pwd2', 'Password Confirmation', 'required|matches[pwd]');  
        $this->load->helper('url');
        $this->load->library('session');
        $data['title'] = ucfirst($page); // Capitalize the first letter
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('user/signup');
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $this->signup_model->set_user();
            $this->load->view('templates/header', $data);
            $this->load->view('blog/topimage', $data);
            $this->load->view('user/success', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function login($page = 'login') {
        $this->load->model('signin_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pwd', 'Password', 'required');  
        $this->load->helper('url');
        $this->load->library('session');
        
        $data['title'] = ucfirst($page);
        // Capitalize the first letter
        if ($this->form_validation->run() === FALSE|| $this->input->post('pwd')!= $this->signin_model->get_pass())
        {
            $this->load->view('templates/header', $data);
            $this->load->view('user/signin');
            $this->load->view('templates/footer', $data);
        }
        else
        {
            $this->load->view('templates/header', $data);
            $this->load->view('blog/topimage', $data);
            $this->load->view('user/success', $data);
            $this->load->view('templates/footer', $data);
        }
    }
}