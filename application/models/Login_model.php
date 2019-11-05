<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function getlogin($u,$p)
	{
		
		$pwd=($p);
		$this->db->where('username like binary', $u);
		$query=$this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $key) {
				$hashedPassword = $key->password;
			}
			if (password_verify($pwd, $hashedPassword)) {			
				foreach ($query->result() as $row) {
					$sess = array(
						'id_user' => $row->id_user,
						'user' => $row->username,
						'level' => $row->hakakses,
						'id_global' => $row->petugas_id_petugas
				 	);
					$this->session->set_userdata($sess);
				}

				$lvl = $this->session->userdata('level');
				$id_g = $this->session->userdata('id_global');

				if ($lvl == "dokter") {
					$this->db->where('id_petugas', $id_g);
					$identitas = $this->db->get('petugas');
					foreach ($identitas->result() as $row) {
						$se = array(
							'id_petugas' => $row->id_petugas,
							'nama_petugas' => $row->nama_petugas,
							'tanggallahir_petugas' => $row->tanggallahir_petugas,
							'alamat_petugas' => $row->alamat_petugas,
							'gender_petugas' => $row->gender_petugas,
							'notelp_petugas' => $row->notelp_petugas,
							'jabatan_petugas' => $row->jabatan_petugas,
							'foto' => $row->foto,
							'status_petugas' => $row->status_petugas
							);
						$this->session->set_userdata($se);	
					}
					return "dokter/home";
				} else if ($lvl == "petugas") {
					$this->db->where('id_petugas', $id_g);
					$identitas = $this->db->get('petugas');
					foreach ($identitas->result() as $row) {
						$se = array(
							'id_petugas' => $row->id_petugas,
							'nama_petugas' => $row->nama_petugas,
							'tanggallahir_petugas' => $row->tanggallahir_petugas,
							'alamat_petugas' => $row->alamat_petugas,
							'gender_petugas' => $row->gender_petugas,
							'notelp_petugas' => $row->notelp_petugas,
							'jabatan_petugas' => $row->jabatan_petugas,
							'foto' => $row->foto,
							'status_petugas' => $row->status_petugas
							);
						$this->session->set_userdata($se);	
					}
					return "petugas/home";
				}
			} else {
				$this->session->set_flashdata('info', 'Maaf Username atau Password Anda Salah');
				redirect ('login');	
			}
		} else {
			$this->session->set_flashdata('info', 'Maaf Username atau Password Anda Salah');
			redirect ('login');
		}
	}
	

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */