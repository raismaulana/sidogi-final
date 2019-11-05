<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json_kota extends CI_Controller {

	public function index()
	{
		header('Content-Type: application/json');
		$this->load->view('assets/json_kota');
		
	}

}

/* End of file json_kota.php */
/* Location: ./application/controllers/assets/json_kota.php */