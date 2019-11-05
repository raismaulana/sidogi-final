<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$isi['content']=('dokter/v_content_home');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Home');
		$isi['anak_judul']=('dashboard');
		$isi['data_antri']=$this->petugas_model->select_table_join_where('pasien', 'id_pasien', 'rekammedis', 'pasien_id_pasien', 'status_rekammedis', '0')->result_array();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function periksa_pasien($id)
	{
		$isi['content']=('dokter/content_home/v_periksa_pasien');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('Home');
		$isi['anak_judul']=('periksa pasien');
		$isi['cek_rekammedis0']=$this->petugas_model->select_count_table_where2('rekammedis', 'pasien_id_pasien', $id, 'status_rekammedis', '0');
		$isi['cek_jumlahrekammedis']=$this->petugas_model->select_count_table_where2('rekammedis', 'pasien_id_pasien', $id, 'status_rekammedis', '1');
		$isi['data']=$this->petugas_model->select_table_join_where('pasien', 'id_pasien', 'odontogram', 'id_odontogram', 'pasien_id_pasien', $id)->result_array();
		$isi['data_riwayat']=$this->dokter_model->get_rekammedis_1orang($id)->result_array();
		$isi['rm_sekarang']=$this->petugas_model->select_table_where2('rekammedis', 'pasien_id_pasien', $id, 'status_rekammedis', '0')->result_array();
		$isi['gigi'] = $this->petugas_model->select_table('gigi')->result();
		$isi['obat'] = $this->petugas_model->select_table('obat')->result();
		$isi['perawatan'] = $this->petugas_model->select_table('perawatan')->result();
		$isi['kodeicd10'] = $this->petugas_model->select_table('kodeicd10')->result();

		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function insert_data_odontogram()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d');
		$id = $this->input->post('id_pasien');
		$data = array(
			'a11[51]' => $this->input->post('1151'),
			'a12[52]' => $this->input->post('1252'),
			'a13[53]' => $this->input->post('1353'),
			'a14[54]' => $this->input->post('1454'),
			'a15[55]' => $this->input->post('1555'),
			'a16' => $this->input->post('16'),
			'a17' => $this->input->post('17'),
			'a18' => $this->input->post('18'),
			'a[61]21' => $this->input->post('2161'),
			'a[62]22' => $this->input->post('2262'),
			'a[63]23' => $this->input->post('2363'),
			'a[64]24' => $this->input->post('2464'),
			'a[65]25' => $this->input->post('2565'),
			'a26' => $this->input->post('26'),
			'a27' => $this->input->post('27'),
			'a28' => $this->input->post('28'),
			'a[71]31' => $this->input->post('3171'),
			'a[72]32' => $this->input->post('3272'),
			'a[73]33' => $this->input->post('3373'),
			'a[74]34' => $this->input->post('3474'),
			'a[75]35' => $this->input->post('3575'),
			'a36' => $this->input->post('36'),
			'a37' => $this->input->post('37'),
			'a38' => $this->input->post('38'),
			'a41[81]' => $this->input->post('4181'),
			'a42[82]' => $this->input->post('4282'),
			'a43[83]' => $this->input->post('4383'),
			'a44[84]' => $this->input->post('4484'),
			'a45[85]' => $this->input->post('4585'),
			'a46' => $this->input->post('46'),
			'a47' => $this->input->post('47'),
			'a48' => $this->input->post('48'),
			'tanggalperiksa_odontogram' => $date,
			'occlusi_odontogram' => $this->input->post('og_occlusi'),
			'toruspalatinus_odontogram' => $this->input->post('og_toruspalatinus'),
			'torusmandibularis_odontogram' => $this->input->post('og_torusmandibularis'),
			'palatum_odontogram' => $this->input->post('og_palatum'),
			'diastema_odontogram' => $this->input->post('og_diastema'),
			'gigianomali_odontogram' => $this->input->post('og_gigianomali'),
			'lainlain_odontogram' => $this->input->post('og_lainlain'),
			'd_odontogram' => $this->input->post('og_d'),
			'm_odontogram' => $this->input->post('og_m'),
			'f_odontogram' => $this->input->post('og_f'),
			'user_id_user' => $this->session->userdata('id_user')
			 );
		$result = $this->petugas_model->update_table_where('odontogram', 'pasien_id_pasien', $id, $data);
		// header('Content-Type: application/json');
		// echo json_encode(array('status' => $result));
		if ($result) {
		// 	$id_og = $this->adm_model->get_id_odontogram($id);
			$pas = $this->petugas_model->select_table_where('pasien', 'id_pasien', $id)->row();
			if($pas->status_pasien){
				//nothing
			} else {
				$datas = array('status_pasien' => 1);
				$this->petugas_model->update_table_where('pasien', 'id_pasien', $id, $datas);
			}
			redirect("dokter/home/periksa_pasien/$id",'refresh');
		} else {
			redirect('Salah','refresh');
		}
	}

	public function insert_rekam_medis()
	{
		// $gigi = $this->input->post('rm_gigi');
		$rmId= $this->input->post('rm_id');
		$id = $this->input->post('id_pasien');
		$id_user = $this->session->userdata('id_user');
		// $perawatan = $this->input->post('rm_perawatan');	
		date_default_timezone_set('Asia/Jakarta');
		$idKunjungan = date('YmdHis');
		//$urut = $this->adm_model->generate_kode($date, $id);
		//$kode_rekammedis = "RM".$id."N".$urut;
		$datarm = array(
			'kodekunjungan_rekammedis' => $idKunjungan,
			'tanggal_rekammedis' => date('Y-m-d'),
			'keterangan_rekammedis' => $this->input->post('rm_keterangan'),
			'status_rekammedis' => '1',
			'user_id_user' => $id_user
			 );
		$rmGigi = $this->input->post('rm_gigi');
		$rmPerawatan = $this->input->post('rm_perawatan');
		$rmObat = $this->input->post('rm_obat');
		$rmKodeicd10 = $this->input->post('rm_kodeicd10');
		$sukses = $this->petugas_model->update_table_where2('rekammedis', 'id_rekammedis', $rmId, 'status_rekammedis', '0', $datarm);
		if ($sukses == true) {
			$this->dokter_model->insert_rm_gigi($rmId, $rmGigi);
			$this->dokter_model->insert_rm_perawatan($rmId, $rmPerawatan);
			$this->dokter_model->insert_rm_obat($rmId, $rmObat);
			$this->dokter_model->insert_rm_kodeicd10($rmId, $rmKodeicd10);
			redirect("dokter/home/periksa_pasien/$id",'refresh');
		} else {
			redirect('salah','refresh');
		}
	}

	public function edit_dmedik()
	{
		$id = $this->input->post('reg_id_pasien');
		$nik = $this->input->post('reg_noktp_pasien');
		if (empty($nik)) {
			$nik = null;
		}
		$data = array(
			'nama_pasien' => $this->input->post('reg_nama_pasien'), 
			'tempatlahir_pasien' => $this->input->post('reg_tempatlahir_pasien'), 
			'tanggallahir_pasien' => $this->input->post('reg_tanggallahir_pasien'), 
			'nik_pasien' => $nik, 
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
			redirect("dokter/home/periksa_pasien/$id",'refresh');
		} else {
			redirect('salah','refresh');
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/dokter/home.php */