<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller
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
		$this->load->view('beranda');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('loginp/if');
	}
}
