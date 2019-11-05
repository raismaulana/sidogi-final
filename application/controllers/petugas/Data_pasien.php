<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_model');
		$this->security_model->getsqurity();
		$this->security_model->passpetugas();
	}

	public function index()
	{
		$isi['content']=('petugas/v_content_data_pasien');
		$isi['menu']=('petugas/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Data Pasien');
		$isi['anak_judul']=('dashboard');
		$tgl=date('d-m-Y');
		$isi['data_laporan_pasien']=$this->petugas_model->select_table('pasien')->result_array();
		$this->load->view('petugas/v_induk_petugas',$isi);
	}

	public function update_pasien()
	{
		$id = $this->input->post('reg_id_pasien');
		$data = array(
			'nama_pasien' => $this->input->post('reg_nama_pasien'), 
			'tempatlahir_pasien' => $this->input->post('reg_tempatlahir_pasien'), 
			'tanggallahir_pasien' => $this->input->post('reg_tanggallahir_pasien'), 
			'nik_pasien' => str_replace(' ','',$this->input->post('reg_noktp_pasien')), 
			'gender_pasien' => $this->input->post('reg_gender_pasien'), 
			'pekerjaan_pasien' => $this->input->post('reg_pekerjaan_pasien'), 
			'alamat_pasien' => $this->input->post('reg_alamat_pasien'), 
			'notelp_pasien' => str_replace(' ','',$this->input->post('reg_notelp_pasien')), 
			'golongandarah_pasien' => $this->input->post('reg_golongandarah_pasien'), 
			'tekanandarah_pasien' => $this->input->post('reg_tekanandarah_pasien'), 
			'penyakitjantung_pasien' => $this->input->post('reg_pjantung_pasien'), 
			'diabetes_pasien' => $this->input->post('reg_diabetes_pasien'), 
			'hemophilia_pasien' => $this->input->post('reg_hemophilia_pasien'), 
			'hepatitis_pasien' => $this->input->post('reg_hepatitis_pasien'), 
			'gastritis_pasien' => $this->input->post('reg_gastritis_pasien'), 
			'penyakitlain_pasien' => $this->input->post('reg_plain_pasien'), 
			'alergiobat_pasien' => $this->input->post('reg_alergiobat_pasien'), 
			'alergimakanan_pasien' => $this->input->post('reg_alergimakanan_pasien') 
		);
		$ss = $this->petugas_model->update_table_where('pasien', 'id_pasien', $id, $data);
		if ($ss == 1) {
			redirect('petugas/data_pasien','refresh');
		} else {
			redirect('salah','refresh');
		}
	}
}

/* End of file data_pasien.php */
/* Location: ./application/controllers/petugas/data_pasien.php */