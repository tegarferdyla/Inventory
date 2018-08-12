<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Stok extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		} else if ($this->session->userdata('bagian') == 'admin') {
			redirect('admin');
		}
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);

		$this->load->view('admin_stok/sidebar');
		$data['jmlkategori'] = $this->Datakategori_model->Jumlahkategori();
		$this->load->view('admin_stok/dashboard',$data);
		$this->load->view('admin_stok/footer');
	}
		
	// Fungis Untuk Profile
	public function editprofile()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);

		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/profile',$data);
		$this->load->view('admin_stok/footer');
	}

	public function changeprofile()
	{
		$id_user = $this->session->userdata('id_user');
		$config['upload_path'] = './app-assets/images/portrait/small/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 100000;
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('myfiles')) {
			// $this->upload->do_upload('myfiles');
			$result = $this->upload->data();
			$data_update = array(
				// 'foto'  => $result['file_name'],
				'nama_user' => $this->input->post('nama_user')
			);

			$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil', 'true');
				redirect('Stok/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Stok/editprofile');
			}
		} else {
			$result = $this->upload->data();
			$data_update = array(
				'foto_user' => $result['file_name'],
				'nama_user' => $this->input->post('nama_user')
			);

			$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil', 'true');
				redirect('Stok/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Stok/editprofile');
			}
		}
	}

	//Fungsi untuk kategori
	public function daftarkategori()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);

		$data['kategori'] = $this->Datakategori_model->daftarkategori();
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/daftarkategori',$data);
		$this->load->view('admin_stok/footer');
	}

	public function editkategori ($id_kategori)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);

		$this->load->view('admin_stok/sidebar');

		$data = array ('kategori' => $this->Datakategori_model->daftarkategori());
		$kategori = $this->Datakategori_model->GetWherekategori("where id_kategori ='$id_kategori'");
		$data = array (
			"id_kategori" => $kategori[0]['id_kategori'],
			"kategori" => $kategori[0]['kategori'],
			"deskripsi" => $kategori[0]['deskripsi'],
		);
		$this->load->view('admin_stok/editkategori',$data);

		$this->load->view('admin_stok/footer');
	}

	public function updatekategori ()
	{
		$id_kategori 	= $this->input->post('id_kategori');
		$kategori    	= $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');

		$data_update = array (
			'id_kategori' 	 => $id_kategori,
			'kategori' 	 	 => $kategori,
			'deskripsi'      => $deskripsi
		);
		$where = array ('id_kategori' => $id_kategori);
		$result = $this->Datakategori_model->UpdateDatakategori('tbl_kategori', $data_update, $where);

		if ($result > 0) {
			$this->session->set_flashdata('updateberhasil','true');
			redirect('Stok/daftarkategori');
		}
		else {
			$this->session->set_flashdata('updategagal','true');
			redirect('Stok/daftarkategori');
		}
	}

	public function hapuskategori ($id_kategori)
	{
		$where = array ('id_kategori' =>$id_kategori);
		$result = $this->Datakategori_model->hapuskategori($where, 'tbl_kategori');
		$this->session->set_flashdata('hapusberhasil','true');
		redirect(base_url('Stok/daftarkategori'));
		
	}

	public function inputkategori()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/inputkategori');
		$this->load->view('admin_stok/footer');
	}

	public function tambahkategori()
	{
		$kategori  = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$data = array (
			'id_kategori' => $this->Penomoranmodel->idkategori(),
			'kategori'    => $kategori,
			'deskripsi'	  => $deskripsi
		);

		$input = $this->Datakategori_model->Tambahkategori($data , 'tbl_kategori');
		if ($input > 0) 
		{
			$this->session->set_flashdata('berhasil','true');
			redirect(base_url('stok/daftarkategori'));
		}
		else{
			$this->session->set_flashdata('gagal','true');
			redirect(base_url('stok/daftarkategori'));
		}
	}

	//Ganti Password
	public function gantipassword()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/gantipassword');
		$this->load->view('admin_stok/footer');
	}

	//Data Barang 
	public function daftarbarang()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/daftarbarang');
		$this->load->view('admin_stok/footer');
	}

	public function detailbarang()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/detailbarang');
		$this->load->view('admin_stok/footer');
	}

	public function inputbarang()
	{

		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('admin_stok/header',$data);
		$this->load->view('admin_stok/sidebar');
		$this->load->view('admin_stok/inputbarang');
		$this->load->view('admin_stok/footer');
	}
}

?>