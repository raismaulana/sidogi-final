<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerja extends CI_Controller {

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
		$isi['content']=('dokter/v_content_pekerja');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Pekerja');
		$isi['anak_judul']=('dashboard');
		$isi['data_pekerja']=$this->petugas_model->select_table('petugas')->result_array();
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function insert_petugas_baru()
	{
		$data = array(
			'nama_petugas' => $this->input->post('nama_petugas_reg'), 
			'tanggallahir_petugas' => $this->input->post('tanggallahir_petugas_reg'), 
			'alamat_petugas' => $this->input->post('alamat_petugas_reg'), 
			'gender_petugas' => $this->input->post('gender_petugas_reg'), 
			'notelp_petugas' => $this->input->post('notelp_petugas_reg'), 
			'jabatan_petugas' => $this->input->post('jabatan_petugas_reg'), 
			'foto' => 'logo_sidogi.png',  
			'tanggaldaftar_petugas' => $this->input->post('tanggaldaftar_petugas_reg'),
			'status_petugas' => $this->input->post('status_petugas_reg')
		);
		$sukses = $this->petugas_model->insert_table('petugas', $data);
		if($sukses){
			redirect('dokter/pekerja','refresh');
		} else {
			redirect('salah','refresh');
		}
	}

	public function edit_pekerja($id)
	{
		$isi['content']=('dokter/content_pekerja/v_edit_pekerja');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Pekerja');
		$isi['anak_judul']=('edit');
		$isi['data_pekerja']=$this->petugas_model->select_table_where('petugas', 'id_petugas', $id)->result_array();
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function insert_edit_petugas()
	{
		$id = $this->input->post('id_petugas_reg');
		$data = array(
			'nama_petugas' => $this->input->post('nama_petugas_reg'), 
			'tanggallahir_petugas' => $this->input->post('tanggallahir_petugas_reg'), 
			'alamat_petugas' => $this->input->post('alamat_petugas_reg'), 
			'gender_petugas' => $this->input->post('gender_petugas_reg'), 
			'notelp_petugas' => str_replace(' ','',$this->input->post('notelp_petugas_reg')), 
			'jabatan_petugas' => $this->input->post('jabatan_petugas_reg'),
			'status_petugas' => $this->input->post('status_petugas_reg')
		);
		$ss = $this->petugas_model->update_table_where('petugas', 'id_petugas', $id, $data);
		if ($ss == 1) {
			redirect('dokter/pekerja','refresh');
		} else {
			redirect('salah','refresh');
		}
	}

	public function hapusPekerja()
	{
		$id = $this->input->post('id_petugas');
		$response = $this->petugas_model->delete_table_where('petugas', 'id_petugas', $id);
		header('Content-Type: application/json');
		echo json_encode($response);
	}
}

/* End of file pekerja.php */
/* Location: ./application/controllers/dokter/pekerja.php */