<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		$this->load->helper('url');
		$this->load->view(__CLASS__ . '/' . __FUNCTION__);
	}
}
