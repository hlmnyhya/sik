<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_laporan extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	// 	public function rujukan()
	// {
	// 	    $this->db->select('*');
 //            $this->db->from('rujukan');
 //            $this->db->join('dokter','rujukan.dokter_pemeriksa=dokter.dokter_id');
 //            $this->db->join('pasien_umum','rujukan.umum_id=pasien_umum.pasien_umum_id');
 //            $this->db->where('status','Umum');
 //            $query = $this->db->get();
 //            return $query->result();
	// }
	// public function rujukan2()
	// {
	// 	    $this->db->select('*');
 //            $this->db->from('rujukan');
 //            $this->db->join('dokter','rujukan.dokter_pemeriksa=dokter.dokter_id','left');
 //            $this->db->join('pasien_bpjs','rujukan.bpjs_id=pasien_bpjs.pasien_umum_id','left');
 //            $this->db->where('status','BPJS');

 //            $query = $this->db->get();
 //            return $query->result();
	// }
	// public function rujuk()
	// {
	// 	    $this->db->select('*');
 //            $this->db->from('rujukan2');
 //            $this->db->join('dokter','rujukan2.namadokterid=dokter.dokter_id');
 //            $query = $this->db->get();
 //            return $query->result();
	// }
	// public function surat()
	// {
	// 	    $this->db->select('*');
 //            $this->db->from('tb_surat');
 //            $this->db->join('tb_dokter','tb_surat.nama_dokter=tb_dokter.id_dokter');
 //            $query = $this->db->get();
 //            return $query->result();
	// }
	public function gets1($id)
	{
		$data = array();
		$options = array('no_surat' => $id);
		$this->db->select('*');
        $this->db->from('tb_surat_sehat');
        $this->db->join('tb_dokter','tb_surat_sehat.nama_dokter=tb_dokter.id_dokter');
        $this->db->join('tb_pasien','tb_surat_sehat.no_rm=tb_pasien.no_rm');
        $this->db->join('tb_kunjungan','tb_surat_sehat.kunjungan_id=tb_kunjungan.id_kunjungan');
        $this->db->where('no_surat',$id,1);
        $q = $this->db->get();
        if($q->num_rows()>0){
        	$data = $q->row_array();

        }
        $q->free_result();
        return $data;
	}

    public function gets2($id)
    {
        $data = array();
        $options = array('no_surat' => $id);
        $this->db->select('*');
        $this->db->from('tb_surat_sakit');
        $this->db->join('tb_dokter','tb_surat_sakit.nama_dokter=tb_dokter.id_dokter');
        $this->db->join('tb_pasien','tb_surat_sakit.no_rm=tb_pasien.no_rm');
        $this->db->join('tb_kunjungan','tb_surat_sakit.kunjungan_id=tb_kunjungan.id_kunjungan');
        $this->db->where('no_surat',$id,1);
        $q = $this->db->get();
        if($q->num_rows()>0){
            $data = $q->row_array();

        }
        $q->free_result();
        return $data;
    }

    public function gets3($id)
    {
        $data = array();
        $options = array('no_surat' => $id);
        $this->db->select('*');
        $this->db->from('tb_surat_buta_warna');
        $this->db->join('tb_dokter','tb_surat_buta_warna.nama_dokter=tb_dokter.id_dokter');
        $this->db->join('tb_pasien','tb_surat_buta_warna.no_rm=tb_pasien.no_rm');
        $this->db->join('tb_kunjungan','tb_surat_buta_warna.kunjungan_id=tb_kunjungan.id_kunjungan');
        $this->db->where('no_surat',$id,1);
        $q = $this->db->get();
        if($q->num_rows()>0){
            $data = $q->row_array();

        }
        $q->free_result();
        return $data;
    }

	public function gets4($id)
	{
		$data = array();
		$options = array('no_surat' => $id);
		$this->db->select('*');
        $this->db->from('tb_rujukan');
        $this->db->join('tb_dokter','tb_rujukan.dokter=tb_dokter.id_dokter');
         $this->db->join('tb_pasien','tb_rujukan.no_rm=tb_pasien.no_rm');
         $this->db->join('tb_kunjungan','tb_rujukan.kunjungan_id=tb_kunjungan.id_kunjungan');
        $this->db->where('tb_rujukan.no_surat',$id,1);
        $q = $this->db->get();
        if($q->num_rows()>0){
        	$data = $q->row_array();

        }
        $q->free_result();
        return $data;
	}

    public function gets5($id)
    {
        $data = array();
        $options = array('no_surat' => $id);
        $this->db->select('*');
        $this->db->from('tb_jumlah_surat');
        $this->db->where('tb_jumlah_surat.id',$id,1);
        $q = $this->db->get();
        if($q->num_rows()>0){
            $data = $q->row_array();

        }
        $q->free_result();
        return $data;
    }
}