<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('signup_model');
            $this->load->helper('url_helper');
        }


        public function index($page = 'blog') 
        {
            $this->load->helper('url');
            if($this->signup_model->set_user())
            {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('blog/topimage', $data);
                $this->load->view('user/success', $data);
                $this->load->view('templates/footer', $data);
            }
            else
            {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('blog/topimage', $data);
                $this->load->view('user/unsuccess', $data);
                $this->load->view('templates/footer', $data);
            }
        }
        public function signin($page = 'blog') 
        {
            $this->load->helper('url');
            if($this->signup_model->set_user())
            {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('blog/topimage', $data);
                $this->load->view('user/success', $data);
                $this->load->view('templates/footer', $data);
            }
            else
            {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('blog/topimage', $data);
                $this->load->view('user/unsuccess', $data);
                $this->load->view('templates/footer', $data);
            }
        }
}