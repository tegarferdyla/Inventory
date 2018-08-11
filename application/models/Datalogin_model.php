<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Datalogin_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function cekloginuser($table, $where)
	{
		return $this->db->get_where($table,$where);
	}

}
?>