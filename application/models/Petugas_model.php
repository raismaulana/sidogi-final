<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	/*--------------------------------------
		BEGIN SELECT
	*/
	//SELECT * FROM $table
	public function select_table($table)
	{
		return $this->db->get($table);
	}
	//SELECT * FROM $table Order by $by $order
	public function select_table_orderby($table, $by, $order)
	{
		$this->db->order_by($by, $order);
		return $this->db->get($table);
	}

	//SELECT * FROM $table
	//return count(row)
	public function select_count_table($table)
	{
		return $this->db->count_all_results($table);
	}

	//SELECT * FROM $table WHERE $where = $valwhere
	//return count(row)
	public function select_count_table_where($table, $where, $valwhere)
	{
		$this->db->where($where, $valwhere);
		return $this->db->count_all_results($table);
	}

	//SELECT * FROM $table WHERE $where = $valwhere AND $where2 = $valwhere2
	//return count(row)
	public function select_count_table_where2($table, $where, $valwhere, $where2, $valwhere2)
	{
		$this->db->where($where, $valwhere);
		$this->db->where($where2, $valwhere2);
		return $this->db->count_all_results($table);
	}

	//SELECT * FROM $table WHERE $where = $valwhere
	public function select_table_where($table, $where, $valwhere)
	{
		$this->db->where($where, $valwhere);
		return $this->db->get($table);
	}

	//SELECT * FROM $table WHERE $where = $valwhere AND $where2 = $valwhere2
	public function select_table_where2($table, $where, $valwhere, $where2, $valwhere2)
	{
		$this->db->where($where, $valwhere);
		$this->db->where($where2, $valwhere2);
		return $this->db->get($table);
	}

	//SELECT * FROM $table JOIN $jtable ON $table.$pktable = $jtable.$fktable WHERE $jtable.$colwhere = $valcolwhere
	public function select_table_join($table, $pktable, $jtable, $fkjtable)
	{
		return $this->db->from($table)
				->join($jtable, "$table.$pktable = $jtable.$fkjtable")
				->get();
	}

	//SELECT * FROM $table JOIN $jtable ON $table.$pktable = $jtable.$fktable WHERE $jtable.$colwhere = $valcolwhere
	public function select_table_join_where($table, $pktable, $jtable, $fkjtable, $where, $valwhere)
	{
		return $this->db->from($table)
				->join($jtable, "$table.$pktable = $jtable.$fkjtable")
				->where("$jtable.$where", $valwhere)
				->get();
	}

	//SELECT * FROM $table JOIN $jtable ON $table.$pktable = $jtable.$fktable WHERE $jtable.$colwhere = $valcolwhere ORDER BY $orderby
	public function select_table_join_where_orderby($table, $pktable, $jtable, $fkjtable, $where, $valwhere, $orderby, $valorderby)
	{
		return $this->db->from($table)
				->join($jtable, "$table.$pktable = $jtable.$fkjtable")
				->where("$jtable.$where", $valwhere)
				->order_by($orderby, $valorderby)
				->get();
	}

	//SELECT 
	public function select_like_limit($table, $like1, $vallike1, $like2, $vallike2, $limit)
	{
		$this->db->like($like1, $vallike1);
		$this->db->or_like($like2, $vallike2);
		return $this->db->get($table,$limit);
	}
	/*
		END SELECT
	--------------------------------------*/



	/*--------------------------------------
		BEGIN INSERT
	*/
	//INSERT INTO $table VALUES $data
	//return inserted id
	public function insert_table_insert_id($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	//INSERT INTO $table VALUES $data
	public function insert_table($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	/*
		END INSERT
	--------------------------------------*/



	/*--------------------------------------
		BEGIN UPDATE
	*/
	public function update_table_where($table, $where, $valwhere, $data)
	{
		$this->db->where($where, $valwhere);
		return $this->db->update($table, $data);
	}

	public function update_table_where2($table, $where, $valwhere, $where2, $valwhere2, $data)
	{
		$this->db->where($where, $valwhere);
		$this->db->where($where2, $valwhere2);
		return $this->db->update($table, $data);
	}
	/*
		END UPDATE
	--------------------------------------*/



	/*--------------------------------------
		BEGIN DELETE
	*/
	public function delete_table_where($table, $where, $valwhere)
	{
		return $this->db->delete($table, array($where=>$valwhere));
	}
	/*
		END DELETE
	--------------------------------------*/

}

/* End of file petugas_model.php */
/* Location: ./application/models/petugas_model.php */