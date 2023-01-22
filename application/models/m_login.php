<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function ambildata($username,$password)
	{
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('username', $username);
				$this->db->where('password', $password);
				$query = $this->db->get();
				return $query;
	}


public function ambildata2($username,$password)
	{
				$this->db->select('*');
				$this->db->from('penduduk');
				$this->db->where('username', $username);
				$this->db->where('password', $password);
				$query = $this->db->get();
				return $query;
	}
	public function penduduk($postdata)
	{
		return $this->db->insert('penduduk',$postdata);
	}

	public function penduduks()
	{
		return $this->db->query("SELECT * from penduduk")->result();
	}

	public function pendudukss($id)
	{
		return $this->db->query("SELECT * from penduduk where id='$id'")->row_array();
	}

	public function imb()
	{
		return $this->db->query("SELECT penduduk.nik,penduduk.nama, imb.* from imb join penduduk on imb.pemohon_id=penduduk.id")->result();
	}

	public function imbs($id)
	{
		return $this->db->query("SELECT penduduk.nik,penduduk.nama, imb.* from imb join penduduk on imb.pemohon_id=penduduk.id where imb.id='$id'")->row_array();
	}

	public function kelahiran()
	{
		return $this->db->query("SELECT penduduk.nik as n,penduduk.nama as na, kelahiran.nik as n, kelahiran.* from kelahiran join penduduk on kelahiran.ayah_id=penduduk.id")->result();
	}

	public function kelahirans($id)
	{
		return $this->db->query("SELECT penduduk.nik as n,penduduk.nama as na, kelahiran.nik as n, kelahiran.* from kelahiran join penduduk on kelahiran.ayah_id=penduduk.id where kelahiran.id='$id'")->row_array();
	}

	public function kematian()
	{
		return $this->db->query("SELECT * from kematian")->result();
	}

	public function kematians($id)
	{
		return $this->db->query("SELECT * from kematian where id='$id'")->row_array();
	}

	public function pernikahan()
	{
		return $this->db->query("SELECT toD.nama as suami, fromD.nama as istri, rvw.* FROM pernikahan AS rvw LEFT JOIN penduduk AS toD ON toD.id = rvw.suami_id LEFT JOIN penduduk AS fromD ON fromD.id = rvw.istri_id")->result();
	}

	public function pernikahans($id)
	{
		return $this->db->query("SELECT toD.nama as suami, fromD.nama as istri, rvw.* FROM pernikahan AS rvw LEFT JOIN penduduk AS toD ON toD.id = rvw.suami_id LEFT JOIN penduduk AS fromD ON fromD.id = rvw.istri_id where rvw.id='$id'")->row_array();
	}

	public function pegawai()
	{
		return $this->db->query("SELECT * from pegawai")->result();
	}

	public function pegawais($id)
	{
		return $this->db->query("SELECT * from pegawai where id='$id'")->row_array();
	}

	public function rab()
	{
		return $this->db->query("SELECT proker from rab")->result();
	}

	public function rabs($id)
	{
		return $this->db->query("SELECT * from rab where id='$id'")->row_array();
	}

	public function tidak_memiliki_rumahs($id)
	{
		return $this->db->query("SELECT penduduk.nik,penduduk.nama, tidak_memiliki_rumah.* from tidak_memiliki_rumah join penduduk on tidak_memiliki_rumah.pemohon_id=penduduk.id where tidak_memiliki_rumah.id='$id'")->row_array();
	}

	public function tidak_mampus($id)
	{
		return $this->db->query("SELECT toD.nama as suami, fromD.nama as istri, rvw.* FROM tidak_mampu AS rvw LEFT JOIN penduduk AS toD ON toD.id = rvw.pemohon_id LEFT JOIN penduduk AS fromD ON fromD.id = rvw.walipemohon_id where rvw.id='$id'")->row_array();
	}

	
	

}