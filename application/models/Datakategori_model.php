<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Datakategori_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function Jumlahkategori ()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $query = $this->db->get();
        return $query->num_rows();
    }

	public function daftarkategori()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function GetWherekategori($where="")
	{
        $res=$this->db->query("SELECT * FROM tbl_kategori ".$where);
        return $res->result_array();
    }

    public function UpdateDatakategori ($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
        return $res;
	}

	public function hapuskategori($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function Tambahkategori ($data , $table)
    {
        return $this->db->insert($table, $data);
    }

}

 ?>