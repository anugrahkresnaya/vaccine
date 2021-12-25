<?php

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		// $this->load->helper('url');
	}

	public function index()
	{
		// echo password_hash('adminNgasal', PASSWORD_DEFAULT);
		// die;
		// $2y$10$.jjWex4fJT0S45T4lz9ko.ARrTpmxsn7WeXW6yPmcYyuK6z.c3BCa
		$data['title'] = 'Pendataan Vaksin';
		// $this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		// $this->load->view('templates/footer');
	}

	public function list()
	{
		$data['title'] = 'Pendataan Vaksin';
		$data['user'] = $this->M_data->getAllUser();
		$this->load->view('templates/header', $data);
		$this->load->view('list', $data);
		$this->load->view('templates/footer');
		
	}

	public function tambah()
	{
		if ($this->session->userdata('login') == '1') {
			$data['title'] = 'Pendataan Vaksin';
			$this->load->view('templates/header', $data);
			$this->load->view('tambah');
			$this->load->view('templates/footer');
		} else {
			redirect('', 'refresh');
		}
	}

	public function simpanData()
	{
		$this->M_data->inputData();
		redirect('home/list');
	}

	public function formEdit($id)
	{
		$data['user'] = $this->M_data->getUserById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('form_edit', $data);
		$this->load->view('templates/footer');
	}

	public function ubahData()
	{
		$this->M_data->updateData();
		redirect('home/list');
	}

	public function hapus($id)
	{
		$this->M_data->hapusData($id);
		redirect('home/list');
	}

	public function login()
	{
		$data['title'] = 'Pendataan Vaksin';
		$this->load->view('templates/header', $data);
		$this->load->view('login');
		$this->load->view('templates/footer');

		if (isset($_POST['login'])) {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user_data', ['username' => $username])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata('login', '1');
				$this->session->set_userdata('username', $user['username']);
				redirect('home/index', 'refresh');
			}
		} else {
			$this->session->set_flashdata('salah_login', '1');
			redirect('home/login', 'refresh');
		}
	}

	// public function sudahLogin() {
	// 	$data['title'] = 'Pendataan Vaksin';
	// 	// $this->load->view('templates/header', $data);
	// 	$this->load->view('home/sudahLogin', $data);
	// }

	public function logout()
	{
		session_destroy();
		redirect('home/index', 'refresh');
	}

	// public function register() {
	// 	$data['title'] = 'Pendataan Vaksin';
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('register');
	// 	$this->load->view('templates/footer');
	// }
}
