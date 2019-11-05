<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getLastID()
	{
		$this->db->select('koderekammedis_pasien');
		$this->db->order_by('koderekammedis_pasien', 'desc');
		$this->db->limit('1');
		return $this->db->get('pasien')->row();
	}

	public function insert_rm_gigi($rmId, $array_data)
	{
		foreach($array_data as $a){
        	$data = array(
				'gigi_id_gigi' => $a, 
				'rekammedis_id_rekammedis' =>  $rmId
            );

            $this->db->insert('gigi_has_rekammedis', $data); 
    	}
    	return true;
	}

	public function insert_rm_perawatan($rmId, $array_data)
	{
		foreach($array_data as $a){
        	$data = array(
				'perawatan_id_perawatan' => $a, 
				'rekammedis_id_rekammedis' =>  $rmId
            );

            $this->db->insert('perawatan_has_rekammedis', $data); 
    	}
    	return true;
	}

	public function insert_rm_obat($rmId, $array_data)
	{
		foreach($array_data as $a){
        	$data = array(
				'obat_id_obat' => $a, 
				'rekammedis_id_rekammedis' =>  $rmId
            );

            $this->db->insert('obat_has_rekammedis', $data); 
    	}
    	return true;
	}

	public function insert_rm_kodeicd10($rmId, $array_data)
	{
		foreach($array_data as $a){
        	$data = array(
				'kodeicd10_id_kodeicd10' => $a, 
				'rekammedis_id_rekammedis' =>  $rmId
            );

            $this->db->insert('kodeicd10_has_rekammedis', $data); 
    	}
    	return true;
	}

	public function search($start, $end)
	{
		$sql = "SELECT rekammedis.id_rekammedis, 
rekammedis.kodekunjungan_rekammedis,
rekammedis.tanggal_rekammedis, 
rekammedis.keterangan_rekammedis, 
rekammedis.status_rekammedis,
pasien.nama_pasien, 
GROUP_CONCAT(DISTINCT(perawatan.nama_perawatan) SEPARATOR ', ') AS nama_perawatan, 
GROUP_CONCAT(DISTINCT(obat.nama_obat) SEPARATOR ', ') AS nama_obat, 
GROUP_CONCAT(DISTINCT(kodeicd10.nama_kodeicd10) SEPARATOR ', ') as nama_kodeicd10, 
GROUP_CONCAT(DISTINCT(kodeicd10.diagnosis_kodeicd10) SEPARATOR ', ') as nama_diagnosis, 
GROUP_CONCAT(DISTINCT(gigi.nama_gigi) SEPARATOR ', ') AS nama_gigi 
FROM rekammedis 
JOIN perawatan_has_rekammedis ON perawatan_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN perawatan ON perawatan.id_perawatan = perawatan_has_rekammedis.perawatan_id_perawatan 
JOIN obat_has_rekammedis ON obat_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN obat ON obat.id_obat = obat_has_rekammedis.obat_id_obat 
JOIN kodeicd10_has_rekammedis ON kodeicd10_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN kodeicd10 ON kodeicd10.id_kodeicd10 = kodeicd10_has_rekammedis.kodeicd10_id_kodeicd10 
JOIN gigi_has_rekammedis ON gigi_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN gigi ON gigi.id_gigi = gigi_has_rekammedis.gigi_id_gigi
JOIN pasien ON pasien.id_pasien = rekammedis.pasien_id_pasien
WHERE rekammedis.status_rekammedis = 1 AND (rekammedis.tanggal_rekammedis BETWEEN '$start' AND '$end')
GROUP BY rekammedis.id_rekammedis
ORDER BY rekammedis.tanggal_rekammedis DESC;";

		return $this->db->query($sql);
		// $this->db->from('pasien');
		// $this->db->join('rekammedis','pasien.id_pasien = rekammedis.pasien_id_pasien');
		// $this->db->where("`tanggal_rekammedis` BETWEEN '$start' AND '$end'");
		// $this->db->where('status_rekammedis', '1');
		// $this->db->order_by('tanggal_rekammedis', 'desc');
		// return $data = $this->db->get()->result_array();
	}

	public function get_rekammedis_1orang($id)
	{
		$sql = "SELECT rekammedis.id_rekammedis, 
rekammedis.kodekunjungan_rekammedis,
rekammedis.tanggal_rekammedis, 
rekammedis.keterangan_rekammedis, 
rekammedis.status_rekammedis, 
GROUP_CONCAT(DISTINCT(perawatan.nama_perawatan) SEPARATOR ', ') AS nama_perawatan, 
GROUP_CONCAT(DISTINCT(obat.nama_obat) SEPARATOR ', ') AS nama_obat, 
GROUP_CONCAT(DISTINCT(kodeicd10.nama_kodeicd10) SEPARATOR ', ') as nama_kodeicd10, 
GROUP_CONCAT(DISTINCT(kodeicd10.diagnosis_kodeicd10) SEPARATOR ', ') as nama_diagnosis, 
GROUP_CONCAT(DISTINCT(gigi.nama_gigi) SEPARATOR ', ') AS nama_gigi 
FROM rekammedis 
JOIN perawatan_has_rekammedis ON perawatan_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN perawatan ON perawatan.id_perawatan = perawatan_has_rekammedis.perawatan_id_perawatan 
JOIN obat_has_rekammedis ON obat_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN obat ON obat.id_obat = obat_has_rekammedis.obat_id_obat 
JOIN kodeicd10_has_rekammedis ON kodeicd10_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN kodeicd10 ON kodeicd10.id_kodeicd10 = kodeicd10_has_rekammedis.kodeicd10_id_kodeicd10 
JOIN gigi_has_rekammedis ON gigi_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN gigi ON gigi.id_gigi = gigi_has_rekammedis.gigi_id_gigi 
WHERE rekammedis.`pasien_id_pasien` = $id AND rekammedis.status_rekammedis = 1 
GROUP BY rekammedis.id_rekammedis;";

		return $this->db->query($sql);
	}

		public function get_laporan_kunjungan()
	{
		$sql = "SELECT rekammedis.id_rekammedis, 
rekammedis.kodekunjungan_rekammedis,
rekammedis.tanggal_rekammedis, 
rekammedis.keterangan_rekammedis, 
rekammedis.status_rekammedis,
pasien.nama_pasien, 
GROUP_CONCAT(DISTINCT(perawatan.nama_perawatan) SEPARATOR ', ') AS nama_perawatan, 
GROUP_CONCAT(DISTINCT(obat.nama_obat) SEPARATOR ', ') AS nama_obat, 
GROUP_CONCAT(DISTINCT(kodeicd10.nama_kodeicd10) SEPARATOR ', ') as nama_kodeicd10, 
GROUP_CONCAT(DISTINCT(kodeicd10.diagnosis_kodeicd10) SEPARATOR ', ') as nama_diagnosis, 
GROUP_CONCAT(DISTINCT(gigi.nama_gigi) SEPARATOR ', ') AS nama_gigi 
FROM rekammedis 
JOIN perawatan_has_rekammedis ON perawatan_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN perawatan ON perawatan.id_perawatan = perawatan_has_rekammedis.perawatan_id_perawatan 
JOIN obat_has_rekammedis ON obat_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN obat ON obat.id_obat = obat_has_rekammedis.obat_id_obat 
JOIN kodeicd10_has_rekammedis ON kodeicd10_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN kodeicd10 ON kodeicd10.id_kodeicd10 = kodeicd10_has_rekammedis.kodeicd10_id_kodeicd10 
JOIN gigi_has_rekammedis ON gigi_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN gigi ON gigi.id_gigi = gigi_has_rekammedis.gigi_id_gigi
JOIN pasien ON pasien.id_pasien = rekammedis.pasien_id_pasien
WHERE rekammedis.status_rekammedis = 1 
GROUP BY rekammedis.id_rekammedis
ORDER BY rekammedis.tanggal_rekammedis DESC;";

		return $this->db->query($sql);
	}

		public function get_laporan_riwayat($id)
	{
		$sql = "SELECT rekammedis.id_rekammedis, 
rekammedis.kodekunjungan_rekammedis,
rekammedis.tanggal_rekammedis, 
rekammedis.keterangan_rekammedis, 
rekammedis.status_rekammedis,
pasien.nama_pasien,
pasien.koderekammedis_pasien,
GROUP_CONCAT(DISTINCT(perawatan.nama_perawatan) SEPARATOR ', ') AS nama_perawatan, 
GROUP_CONCAT(DISTINCT(obat.nama_obat) SEPARATOR ', ') AS nama_obat, 
GROUP_CONCAT(DISTINCT(kodeicd10.nama_kodeicd10) SEPARATOR ', ') as nama_kodeicd10, 
GROUP_CONCAT(DISTINCT(kodeicd10.diagnosis_kodeicd10) SEPARATOR ', ') as nama_diagnosis, 
GROUP_CONCAT(DISTINCT(gigi.nama_gigi) SEPARATOR ', ') AS nama_gigi 
FROM rekammedis 
JOIN perawatan_has_rekammedis ON perawatan_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN perawatan ON perawatan.id_perawatan = perawatan_has_rekammedis.perawatan_id_perawatan 
JOIN obat_has_rekammedis ON obat_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN obat ON obat.id_obat = obat_has_rekammedis.obat_id_obat 
JOIN kodeicd10_has_rekammedis ON kodeicd10_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN kodeicd10 ON kodeicd10.id_kodeicd10 = kodeicd10_has_rekammedis.kodeicd10_id_kodeicd10 
JOIN gigi_has_rekammedis ON gigi_has_rekammedis.rekammedis_id_rekammedis = rekammedis.id_rekammedis 
JOIN gigi ON gigi.id_gigi = gigi_has_rekammedis.gigi_id_gigi
JOIN pasien ON pasien.id_pasien = rekammedis.pasien_id_pasien
WHERE rekammedis.status_rekammedis = '1' AND rekammedis.`pasien_id_pasien` = '$id'
GROUP BY rekammedis.id_rekammedis
ORDER BY rekammedis.tanggal_rekammedis DESC;";

		return $this->db->query($sql);
	}
}

/* End of file dokter_model.php */
/* Location: ./application/models/dokter_model.php */