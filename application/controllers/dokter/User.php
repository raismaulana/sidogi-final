<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$isi['content']=('dokter/v_content_user');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('User');
		$isi['anak_judul']=('dashboard');
		$isi['data_user']=$this->petugas_model->select_table_join('petugas', 'id_petugas', 'user', 'petugas_id_petugas')->result_array();
		$isi['data_pekerja']=$this->petugas_model->select_table('petugas')->result_array();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function insert_user_baru()
	{
		$data = array(
			'username' => $this->input->post('username_user_reg'),
			'password' => password_hash($this->input->post('password_user_reg'), PASSWORD_ARGON2ID),
			'hakakses' => $this->input->post('hakakses_user_reg'),
			'petugas_id_petugas' => $this->input->post('id_petugas_reg'),
			 );
		$sukses = $this->petugas_model->insert_table('user', $data);
		if($sukses){
			redirect('dokter/user','refresh');
		} else {
			redirect('salah','refresh');
		}
	}

	public function cekUsername()
	{
		$username = $this->input->post('username');
		$jml = $this->petugas_model->select_count_table_where('user', 'username', $username);
		if ($jml == 0) {
			$response = array('status' => true );
			header('Content-Type: application/json)');
			echo json_encode($response);
		} else {
			$response = array('status' => false );
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	}

	public function edit_user($id)
	{
		$isi['content']=('dokter/content_user/v_edit_user');
		$isi['menu']=('dokter/v_menu');
		$isi['judul']=('SIDOGI');
		$isi['sub_judul']=('User');
		$isi['anak_judul']=('edit user');
		$isi['data_user']=$this->petugas_model->select_table_join_where('petugas', 'id_petugas', 'user', 'petugas_id_petugas', 'id_user', $id)->result_array();
		
		$this->load->view('dokter/v_induk_dokter',$isi);
	}

	public function edit_data_user()
	{
		$id_user = $this->input->post('id_user_reg');
		$id_petugas = $this->input->post('id_petugas_reg');
		$data = array(
			'username' => $this->input->post('username_user_reg'),
			'password' => password_hash($this->input->post('password_user_reg'), PASSWORD_ARGON2ID),
			'hakakses' => $this->input->post('hakakses_user_reg'),
			 );
		$ss = $this->petugas_model->update_table_where2('user', 'id_user', $id_user, 'petugas_id_petugas', $id_petugas, $data);
		if ($ss == 1) {
			redirect('dokter/user','refresh');
		} else {
			redirect('salah','refresh');
		}
	}

	public function hapusUser()
	{
		$id = $this->input->post('id_user');
		$response = $this->petugas_model->delete_table_where('user', 'id_user', $id);
		header('Content-Type: application/json');
		echo json_encode($response);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/dokter/user.php */