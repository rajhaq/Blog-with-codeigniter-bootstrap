<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Login extends CI_Controller {
    
    public $variable = "";


    public function __construct() {
        parent::__construct();
    }
                
    public function index($page = 'login') {  
        $data['title']= ucfirst($page);
        if($this->input->post('trigger') == 'do_login'){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('pwd', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('notification', errormessage(validation_errors()));
                $this->viewLoader(__CLASS__, __FUNCTION__, $data); 
                redirect(__CLASS__ . '/' . __FUNCTION__, 'refresh');
            } else {
                $data_session = array( 'email' => $this->input->post('email'), 'password' => $this->input->post('pwd') );
                $result = $this->signin_model->login($data_session);
                if($result !== FALSE){
                $session_data = array(
                    'username' => $result[0]->user_name,
                    'email' => $result[0]->user_email,
                    'status' => $result[0]->user_status,
                );
                    $this->session->set_userdata('logged_in', $session_data);
                    
//                    print_r($this->session->userdata('logged_in'));
                    if($result[0]->user_status == 1) {
                        redirect('dashboard', 'refresh');
                    } else {
                        redirect('homepage', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('notification', errormessage('Incorrect Username & Password'));
                    redirect(__CLASS__ . '/' . __FUNCTION__, 'refresh');
                } 
            }
        } else {
            $this->viewLoader(__CLASS__, __FUNCTION__, $data);
        }

        
    }
        
    public function signup($page = 'signup') {    
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');  
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->viewLoader(__CLASS__, __FUNCTION__, $data);    
    }
    public function create($page = 'signup') {      
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[blog_user.user_email]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[8]');  
        $this->form_validation->set_rules('pwd2', 'Password Confirmation', 'required|matches[pwd]');  
        $data['title'] = ucfirst($page); // Capitalize the first letter
        if ($this->form_validation->run() === FALSE)
        {
            $this->viewLoader(__CLASS__, 'signup', $data);
        }
        else
        {
            $this->signup_model->set_user();
            $this->viewLoader(__CLASS__, 'success', $data);
        }
    }
    public function logout($page = 'login') {
//        $this->session->sess_destroy();        
        $data['title'] = ucfirst($page);
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->viewLoader('homepage','index', $data);

    }
        
}
//ref: https://www.formget.com/form-login-codeigniter/