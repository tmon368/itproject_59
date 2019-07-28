<?php
class Csv_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('tbl_user');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function select_1($id)
	{
		// select ของตารางจริงในตาราง users
		$query = $this->db->query("SELECT * FROM users WHERE id = $id");
		$row = $query->row();

		if ($row != NULL){
			return TRUE;
		}
		else {
			return FALSE;
		}
		//print_r ($row);
		/*
		if (isset($row)) {
			echo $row->id;
			echo $row->first_name;
			echo $row->last_name;
		}
		*/
	}


	function insert($data)
	{
		//cr table temp 
		$this->db->insert_batch('tbl_user', $data);
	}

	function insert_to_users($data)
	{
		$this->db->empty_table('tbl_user');
		$this->db->query("TRUNCATE TABLE tbl_user");
		$this->db->insert_batch('users', $data);
	}

	function update_data($id, $data)
	{
		//อัพเดตเมื่อมี id ซ้ำกัน
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
