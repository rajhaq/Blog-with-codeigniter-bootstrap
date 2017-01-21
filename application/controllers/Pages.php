<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index() {
		$this->load->view(__CLASS__ . '/' . __FUNCTION__);
	}
	
	public function someName($one, $two){
		echo $one;
		echo '<br />';
		echo $two;
	}
}
