<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
 * 
 */
class Datauser_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function GetWhereUser($id_user)
	{
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();
        return $query->row_array();
     }
    public function UpdateDataUser ($data_update,$id_user)
    {
        $this->db->where('id_user',$id_user);
        return $this->db->update('tbl_user',$data_update);
    }
}
 ?>