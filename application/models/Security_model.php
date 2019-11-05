<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_model extends CI_Model {
	
	public function getsqurity()
	{
		$user = $this->session->userdata('user');
		if(empty($user))
		{  
			$this->session->sess_destroy();
		   redirect ('login');
		} 
		
	}

	public function preventlogin()
	{
		$level = $this->session->userdata('level');
		if (!empty($level)) {
			if ($level == 'petugas') {
				redirect('petugas/home','refresh');
			} else if ($level == 'dokter') {
				redirect('dokter/home','refresh');
			} else {
				$this->session->sess_destroy();
				redirect('login','refresh');
			}
		}
	}

	public function passpetugas()
	{
		$level = $this->session->userdata('level');
		if($level != "petugas")
		{  
		   redirect ('salah');
		}
			
	}
	public function passdokter()
	{
		$level = $this->session->userdata('level');
		if($level != "dokter")
		{  
		   redirect ('salah');
		}
			
	}	

}

/* End of file security_model.php */
/* Location: ./application/models/security_model.php */