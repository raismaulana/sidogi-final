<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_model');
		$this->load->model('dokter_model');
	}
	public function index()
	{
		$this->db->like('koderekammedis_pasien', 'B');
		$this->db->or_like('nama_pasien', 'B');
		$a = $this->db->get('pasien','10')->result_array();
		
		echo json_encode($a);

	}

}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */