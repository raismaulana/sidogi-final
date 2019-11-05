<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_model');
		$this->load->model('dokter_model');
		$this->security_model->getsqurity();
		$this->security_model->passpetugas();
	}

	public function index()
	{
		$isi['content']=('petugas/v_content_home');
		$isi['menu']=('petugas/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Home');
		$isi['anak_judul']=('dashboard');
		$isi['data1']=$this->petugas_model->select_table('pasien')->result();
		$isi['data_antri']=$this->petugas_model->select_table_join_where('pasien', 'id_pasien', 'rekammedis', 'pasien_id_pasien', 'status_rekammedis', '0')->result_array();
		$this->load->view('petugas/v_induk_petugas',$isi);
	}

	public function registrasi_pasien_baru()
	{
		$isi['content']=('petugas/content_home/v_registrasi_pasien_baru');
		$isi['menu']=('petugas/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Home');
		$isi['anak_judul']=('registrasi pasien baru');
		$tgl=date('d-m-Y');
		$isi['data_kota']=json_decode(file_get_contents(base_url('assets/json_kota')));
	
		$this->load->view('petugas/v_induk_petugas',$isi);
	}

	private function _generateIDPasien()
	{
		$data = $this->dokter_model->getLastID();
		$lastID = $data->koderekammedis_pasien;
		if (is_null($lastID) ) {
			return 'A00001';
		} else {
			$panjang = strlen($lastID);
			$p_huruf = (int)$panjang-5;
			$p_angka = 5;
			$angka = substr($lastID, $p_huruf);
			$huruf = substr($lastID,0, $p_huruf);
			if ($angka == 10000) {
				$hurufBaru = ++$huruf;
				$hurufBaru .= '00001';
				return $hurufBaru;
			} else {
				$huruf .= str_pad(++$angka,5,"0",STR_PAD_LEFT);
				return $huruf;	
			}
		}

	}

	public function insert_pasien_baru()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d');
		$kodeRekamMedis = $this->_generateIDPasien();
		$data = array(
			// 'id_pasien' => $id_pasien,
			'koderekammedis_pasien' => $kodeRekamMedis,
			'nama_pasien' => $this->input->post('reg_nama_pasien'), 
			'tempatlahir_pasien' => $this->input->post('reg_tempatlahir_pasien'), 
			'tanggallahir_pasien' => $this->input->post('reg_tanggallahir_pasien'), 
			'nik_pasien' => $this->input->post('reg_noktp_pasien'), 
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
			'alergimakanan_pasien' => $this->input->post('reg_alergimakanan_pasien'),
			'tanggaldaftar_pasien' => $date,
			'user_id_user' => $this->session->userdata('id_user') 
		);
			
			$id = $this->petugas_model->insert_table_insert_id('pasien',$data);
			// print_r(json_encode($id));
			$data2 = array(
			'pasien_id_pasien' => $id,
			'user_id_user' => $this->session->userdata('id_user')
			 );
		
			$this->petugas_model->insert_table('odontogram', $data2);
			// echo $id_pasien;
			$this->session->set_flashdata('info', "ID Pasien terbaru adalah <b> $kodeRekamMedis. </b>");
			redirect('petugas/home','refresh');

	}

	public function inputAntriPeriksa()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal_rekammedis'] = date('Y-m-d');
		$data['pasien_id_pasien'] = $this->input->post('id');
		$data['status_rekammedis'] = "0";
		$data['user_id_user'] = $this->session->userdata('id_global');

		if ($this->petugas_model->select_count_table_where2('rekammedis', 'pasien_id_pasien', $data['pasien_id_pasien'], 'status_rekammedis', $data['status_rekammedis'])==0) {
			if ($this->petugas_model->insert_table('rekammedis', $data)) {
				$res = array(
					'response' =>  true
				);
				$json = json_encode($res);
				header('Content-Type: application/json');
				print_r($json);
			} else {
				$res = array(
					'response' =>  false
				);
				$json = json_encode($res);
				header('Content-Type: application/json');
				print_r($json);
			}
		} else {
			$res = array(
				'response' =>  false,
				'msg' => 'pasien sedang mengantri!'
			);
			$json = json_encode($res);
			header('Content-Type: application/json');
			print_r($json);
		}
		
	}

	public function hapusAntrian()
	{
		$id = $this->input->post('id_rekammedis');
		$response = $this->petugas_model->delete_table_where('rekammedis', 'id_rekammedis', $id);
		if ($response) {
			header('Content-Type: application/json');
			echo json_encode($response);
		} else {
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		
	}

	public function getPasienById()
	{
		$id = $this->input->post('id');
		$data = $this->petugas_model->select_table_where('pasien', 'koderekammedis_pasien', $id)->row();
		$json = json_encode($data);
		header('Content-Type: application/json');
		print_r($json);
	}

	public function cekNik()
	{
		$nik = $this->input->post('nik');
		$jml = $this->petugas_model->select_count_table_where('pasien', 'nik_pasien', $nik);
		if ($jml > 0) {
			header('Content-Type: application/json');
			echo json_encode($jml);
		} else {
			header('Content-Type: application/json');
			echo json_encode($jml);
		}
	}

	public function listPasien()
	{
		$val = $this->input->post('val');
		$response = $this->petugas_model->select_like_limit('pasien', 'koderekammedis_pasien', $val, 'nama_pasien', $val, '10')->result_array();
		header('Content-Type: application/json');
		echo json_encode($response);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/petugas/home.php */