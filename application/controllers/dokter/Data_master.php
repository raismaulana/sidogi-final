<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dokter_model');
		$this->load->model('petugas_model');
		$this->security_model->getsqurity();
        $this->security_model->passdokter();
	}

	public function index()
	{
		$isi['content']=('dokter/v_content_data_master');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Data Master');
		$isi['anak_judul']=('dashboard');
		$isi['data_obat']= $this->petugas_model->select_table_orderby('obat', 'id_obat', 'desc')->result();
		$isi['data_perawatan']= $this->petugas_model->select_table_orderby('perawatan', 'id_perawatan', 'desc')->result();
		$isi['data_kodeicd10']= $this->petugas_model->select_table_orderby('kodeicd10', 'id_kodeicd10', 'desc')->result();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function insert_obat()
	{
		$data = array('nama_obat' => $this->input->post('nama_obat') );
		$res = $this->petugas_model->insert_table('obat', $data);
		if($res == true){
			redirect('dokter/data_master','refresh');
		} else {
			redirect('dokter/data_master','refresh');
		}
	}

	public function insert_perawatan()
	{
		$data = array('nama_perawatan' => $this->input->post('nama_perawatan') );
		$res = $this->petugas_model->insert_table('perawatan', $data);
		if($res == true){
			redirect('dokter/data_master','refresh');
		} else {
			redirect('dokter/data_master','refresh');
		}
	}

	public function insert_kodeicd10()
	{
		$data = array(
			'nama_kodeicd10' => $this->input->post('nama_kodeicd10'),
			'diagnosis_kodeicd10' => $this->input->post('diagnosis_kodeicd10')
		 );
		$res = $this->petugas_model->insert_table('kodeicd10', $data);
		if($res == true){
			redirect('dokter/data_master','refresh');
		} else {
			redirect('dokter/data_master','refresh');
		}
	}
}

/* End of file Data_master.php */
/* Location: ./application/controllers/dokter/Data_master.php */