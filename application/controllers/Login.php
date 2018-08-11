<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('');
		}
		else {
			if ($this->session->has_userdata('status')) {
				if ($this->session->userdata('role') == "admin") {
					redirect('admin');
				}else if ($this->session->userdata('bagian')=='stok') {
					redirect('stok');
				}
			}
		}

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function ceklogin ()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array (
			'username' => $username,
			'password' => md5($password) 
		);
		$cekuser = $this->Datalogin_model->cekloginuser('tbl_user',$where)->num_rows();

		if ($cekuser > 0){
			$result=$this->db->get_where('tbl_user',$where)->row_array();
			$data_session = array
			(
				'id_user' => $result['id_user'],
				'nama_user' => $result['nama_user'],
				'status' => "login",
				'bagian' => $result['bagian'],
			);
			$this->session->set_userdata($data_session);
			if ($this->session->userdata('bagian')=='stok') {
				redirect(base_url('stok'));
			}
		}
		else{
			$this->session->set_flashdata('gagallogin', 'true');
			redirect('login');
		}
	}
}

?>