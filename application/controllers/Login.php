<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->security_model->preventlogin();
		$this->load->view('v_login');
	}

	public function proses()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$page = $this->login_model->getlogin($u,$p);   
		redirect($page,'refresh'); 
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */