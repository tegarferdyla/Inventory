<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Penomoranmodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function idkategori()
	{
		$this->db->select("RIGHT(id_kategori,4) AS kode ");
		$this->db->order_by('id_kategori', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_kategori');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "KTG" . $kodemax;
		return $kodejadi;
	}
}
 ?>