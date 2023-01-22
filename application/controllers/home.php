<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('m_login');
		$this->load->library(array('form_validation','session'));
	}
	
	public function index()
	{
	 if($this->session->userdata('isLogin') == FALSE)
	{
		redirect('login/if');
	
	}else{
		$user = $this->session->userdata('data_user');
		$data['pengguna'] = $user;
		$this->load->view('adm_home', $data);
	}	
}
}
