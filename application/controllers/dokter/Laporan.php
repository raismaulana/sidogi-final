<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
		$isi['content']=('dokter/v_content_laporan');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Laporan');
		$isi['anak_judul']=('dashboard');
		$isi['jml_rekammedis']=($this->petugas_model->select_count_table('pasien'));
		$isi['jml_kunjungan']=($this->petugas_model->select_count_table('rekammedis'));
		$isi['jml_pekerja']=($this->petugas_model->select_count_table('petugas'));
		$isi['jml_user']=($this->petugas_model->select_count_table_where2('user', 'id_user', '1', 'id_user', '2'));
		$isi['grafik_kunjungan']=json_encode($this->petugas_model->select_table('v_kunjunganbulananpertahun')->result_array());
		$isi['grafik_rekammedis']=json_encode($this->petugas_model->select_table('v_rekammedisbulananpertahun')->result_array());
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}
//laporan kunjungan
	public function kunjungan()
	{
		$isi['content']=('dokter/content_laporan/v_content_kunjungan');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Laporan');
		$isi['anak_judul']=('kunjungan');
		$isi['data_laporan_rekammedis']=$this->dokter_model->get_laporan_kunjungan()->result_array();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function filterByDate()
	{
		$start = $this->input->post("start_date");
		$end = $this->input->post("end_date");
		// $start = '2018-12-18';
		// $end = '2018-12-20';
		$data['data'] = $this->dokter_model->search($start, $end)->result_array();
		header('Content-Type: application/json');
		echo json_encode($data);
	}


	public function clearFilterByDate()
	{
		$data['data']=$this->petugas_model->select_table_join_where_orderby('pasien', 'id_pasien', 'rekammedis', 'pasien_id_pasien', 'status_rekammedis', '1', 'tanggal_rekammedis', 'desc')->result_array();
		header('Content-Type: application/json');
		echo json_encode($data);	
	}
//end of laporan kunjungan

//laporan rekam medis
	public function rekammedis()
	{
		$isi['content']=('dokter/content_laporan/v_content_rekammedis');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Laporan');
		$isi['anak_judul']=('kunjungan');
		$isi['data_laporan_pasien']=$this->petugas_model->select_table('pasien')->result_array();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function riwayat($id)
	{
		$isi['content']=('dokter/content_laporan/content_rekammedis/v_content_riwayat');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Laporan');
		$isi['anak_judul']=('rekam medis');
		$isi['cucu_judul']=('riwayat');
		$isi['data_riwayat']=$this->dokter_model->get_laporan_riwayat($id)->result_array();
		$this->load->view('dokter/v_induk_dokter',$isi);
	}
//end of laporan rekam medis

}

/* End of file laporan.php */
/* Location: ./application/controllers/dokter/laporan.php */