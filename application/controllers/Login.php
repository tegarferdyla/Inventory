<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	// function __construct()
	// {
	// 	parent::__construct();
	// 	if (isset($_GET['logout']) == 'signout') {
	// 		$this->session->sess_destroy();
	// 		redirect('');
	// 	}

	// }

	public function index()
	{
		$this->load->view('login');
	}
}

?>