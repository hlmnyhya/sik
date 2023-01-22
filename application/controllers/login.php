<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_login');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$session = $this->session->userdata('isLogin');
		if ($session == FALSE) {
			redirect('login/if');
		} else {
			redirect('home');
		}
	}

	public function if()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form_login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$passwordx = md5($password);

			$cek = $this->m_login->ambildata($username, $passwordx);

			if ($cek->num_rows() <> 0) {
				$this->session->set_userdata('isLogin', TRUE);
				$this->session->set_userdata('tb_user', $cek->row());

				echo "<script> 
			alert('Login Berhasil');
			</script>";

				redirect('home', 'refresh');
			} else {
				echo "<script>
					alert('Gagal Login: Kombinasi Username Salah Atau Akun Belum Di Verivikasi!');
					history.go(-1);
					</script>";
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda');
	}
}
