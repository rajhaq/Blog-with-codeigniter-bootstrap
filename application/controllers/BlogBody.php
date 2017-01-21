<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogBody extends CI_Controller {
        public function index($page = 'blog') {
		$this->load->helper('url');
            	$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('templates/header', $data);
		$this->load->view('blog/topimage', $data);
		$this->load->view('blog/body', $data);
		$this->load->view('templates/footer', $data);
            
        }
}