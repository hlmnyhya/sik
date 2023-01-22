<?php 

class Penduduk extends CI_Controller
{

	public function index()
	{
			$this->load->view('adm_penduduk');
		}

	public function daftar()
	{
		
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$tempat_lahir= $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$agama = $this->input->post('agama');
			$pekerjaan = $this->input->post('pekerjaan');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$postdata= array(
				'nik'=>$nik,
				'nama'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'jenis_kelamin'=>$jenis_kelamin,
				'alamat'=>$alamat,
				'agama'=>$agama,
				'pekerjaan'=>$pekerjaan,
				'username'=>$username,
				'password'=>md5($password),
				);

			if($this->m_login->penduduk($postdata))
			{
				redirect('loginp');
			} else
			{
				redirect('penduduk');
			}


			}
	}

?>