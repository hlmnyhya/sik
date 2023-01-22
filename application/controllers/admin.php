<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		$this->datauser = $this->session->userdata('tb_user');
	}

	public function tidak_memiliki_rumahs2()
	{
		$data['data'] = $this->m_login->tidak_memiliki_rumahs($this->uri->segment(3));
		$this->load->view('laporan/tidak_memiliki_rumah2', $data);
	}

	public function tidak_mampus2()
	{
		$data['data'] = $this->m_login->tidak_mampus($this->uri->segment(3));
		$this->load->view('laporan/tidak_mampu2', $data);
	}

	public function penduduks()
	{
		$data['data'] = $this->m_login->penduduks();
		$this->load->view('laporan/penduduk', $data);
	}

	public function penduduks2()
	{
		$data['data'] = $this->m_login->pendudukss($this->uri->segment(3));
		$this->load->view('laporan/penduduk2', $data);
	}

	public function imbs()
	{
		$data['data'] = $this->m_login->imb();
		$this->load->view('laporan/imb', $data);
	}

	public function imbs2()
	{
		$data['data'] = $this->m_login->imbs($this->uri->segment(3));
		$this->load->view('laporan/imb2', $data);
	}

	public function kelahirans()
	{
		$data['data'] = $this->m_login->kelahiran();
		$this->load->view('laporan/kelahiran', $data);
	}

	public function kelahirans2()
	{
		$data['data'] = $this->m_login->kelahirans($this->uri->segment(3));
		$this->load->view('laporan/kelahiran2', $data);
	}

	public function kematians()
	{
		$data['data'] = $this->m_login->kematian();
		$this->load->view('laporan/kematian', $data);
	}

	public function kematians2()
	{
		$data['data'] = $this->m_login->kematians($this->uri->segment(3));
		$this->load->view('laporan/kematian2', $data);
	}

	public function pernikahans()
	{
		$data['data'] = $this->m_login->pernikahan();
		$this->load->view('laporan/pernikahan', $data);
	}

	public function pernikahans2()
	{
		$data['data'] = $this->m_login->pernikahans($this->uri->segment(3));
		$this->load->view('laporan/pernikahan2', $data);
	}

	public function pegawais()
	{
		$data['data'] = $this->m_login->pegawai();
		$this->load->view('laporan/pegawai', $data);
	}

	public function pegawais2()
	{
		$data['data'] = $this->m_login->pegawais($this->uri->segment(3));
		$this->load->view('laporan/pegawai2', $data);
	}


	public function rabs()
	{
		$data['data'] = $this->m_login->rab();
		$this->load->view('laporan/rab', $data);
	}

	public function rabs2()
	{
		$data['data'] = $this->m_login->rabs($this->uri->segment(3));
		$this->load->view('laporan/rab2', $data);
	}

	public function batas_wilayahs()
	{
		$data['data'] = $this->m_login->batas_wilayahs();
		$this->load->view('laporan/kelahiran', $data);
	}

	public function batas_wilayahs2()
	{
		$data['data'] = $this->m_login->batas_wilayahs($this->uri->segment(3));
		$this->load->view('laporan/kelahiran', $data);
	}

	public function luas_wilayahs()
	{
		$data['data'] = $this->m_login->luas_wilayahs();
		$this->load->view('laporan/kelahiran', $data);
	}

	public function luas_wilayahs2()
	{
		$data['data'] = $this->m_login->luas_wilayahs($this->uri->segment(3));
		$this->load->view('laporan/kelahiran', $data);
	}

	public function tanah_sawahs()
	{
		$data['data'] = $this->m_login->tanah_sawahs();
		$this->load->view('laporan/kelahiran', $data);
	}

	public function tanah_sawahs2()
	{
		$data['data'] = $this->m_login->tanah_sawahs($this->uri->segment(3));
		$this->load->view('laporan/kelahiran', $data);
	}

	public function _example_output($output = null)
	{
		//$output->penduduk = $this->m_login->penduduk();
		$this->load->view('terminal_input', (array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '', 'js_files' => array(), 'css_files' => array()));
	}

	public function batas_wilayah()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('batas_wilayah');
		$crud->set_subject('Data Batas Wilayah');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->callback_column('berat_bayi', array($this, 'valueToEuro'));
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function luas_wilayah()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('luas_wilayah');
		$crud->set_subject('Data Luas Wilayah');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tanah_sawah()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tanah_sawah');
		$crud->set_subject('Data Tanah Sawah');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tanah_kering()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tanah_kering');
		$crud->set_subject('Data Tanah Kering');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tanah_basah()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tanah_basah');
		$crud->set_subject('Data Tanah Basah');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function pertanian()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tanah_basah');
		$crud->set_subject('Data Tanah Basah');
		$crud->display_as('id', 'id');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function kelahiran()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kelahiran');
		$crud->set_subject('Data Kelahiran');
		$crud->display_as('ayah_id', 'Nama Ayah');
		$crud->display_as('ibu_id', 'Nama Ibu');
		$crud->set_relation('ayah_id', 'penduduk', 'nama');
		$crud->set_relation('ibu_id', 'penduduk', 'nama');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kelahirans2');
		$crud->callback_column('berat_bayi', array($this, 'valueToEuro'));
		$_SESSION['CustomHeader']   = "LAPORAN DATA KELAHIRAN";
		$crud->callback_add_field('berat_bayi', function () {
			return '<input type="text" maxlength="3" name="berat_bayi"> Gram';
		});

		$crud->set_field_upload('file', 'assets/uploads/kelahiran');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value . 'Gram';
	}

	public function kematian()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kematian');
		$crud->set_subject('Data Kematian');
		$_SESSION['CustomHeader']   = "LAPORAN DATA KEMATIAN";
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/kematians2');
		$crud->set_field_upload('file', 'assets/uploads/kematian');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function pegawai()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('pegawai');
		$crud->set_subject('Data Pegawai');
		$crud->unset_texteditor('alamat');
		$_SESSION['CustomHeader']   = "LAPORAN DATA PEGAWAI";
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/pegawas2');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}


	public function users()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('users');
		$crud->set_subject('Data Users');
		$crud->change_field_type('password', 'password');
		$_SESSION['CustomHeader']   = "LAPORAN DATA USERS";
		$crud->callback_before_insert(array($this, 'encrypt_password'));
		$crud->callback_before_update(array($this, 'encrypt_password'));
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function encrypt_password($post_array, $primary_key = null)
	{
		$this->load->helper('security');
		$post_array['password'] = do_hash($post_array['password'], 'md5');
		return $post_array;
	}

	public function artikel()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('artikel');
		$crud->unset_texteditor('content');
		$crud->set_subject('Artikel');
		$_SESSION['CustomHeader']   = "LAPORAN DATA ARTIKEL";
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/penduduks2');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function penduduk()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('penduduk');
		$crud->unset_texteditor('alamat');
		$crud->set_subject('Data Penduduk');
		$_SESSION['CustomHeader']   = "LAPORAN DATA PENDUDUK";
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/penduduks2');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function pernikahan()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('pernikahan');
		$crud->set_subject('Data Pernikahan');
		$crud->display_as('suami_id', 'Biodata Suami');
		$crud->unset_texteditor('keterangan');
		$_SESSION['CustomHeader']   = "LAPORAN DATA PERNIKAHAN";
		$crud->display_as('istri_id', 'Biodata Istri');
		$crud->set_relation('suami_id', 'penduduk', 'NIK :{nik} Nama :{nama}');
		$crud->set_relation('istri_id', 'penduduk', 'NIK :{nik} Nama :{nama}');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/pernikahans2');
		$crud->set_field_upload('file', 'assets/uploads/pernikahan');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}


	public function imb()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('imb');
		$crud->set_subject('Data IMB');
		$_SESSION['CustomHeader']   = "LAPORAN DATA IMB";
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/imbs2');
		$crud->set_field_upload('file', 'assets/uploads/imb');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tidak_mampu()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_mampu');
		$crud->set_subject('Data Penduduk Tidak Mampu');
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/tidak_mampus2');
		$_SESSION['CustomHeader']   = "LAPORAN DATA PENDUDUK TIDAK MAMPU";
		$crud->set_relation('walipemohon_id', 'penduduk', 'nama');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$crud->set_field_upload('file', 'assets/uploads/tidak_mampu');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tmr()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_memiliki_rumah');
		$crud->set_subject('Data Penduduk Tidak Memiliki Rumah');
		$_SESSION['CustomHeader']   = "LAPORAN DATA PENDUDUK TIDAK MEMILIKI RUMAH";
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/tidak_memiliki_rumahs2');
		$crud->set_field_upload('file', 'assets/uploads/tmr');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$output = $crud->render();
		$this->_example_output($output);
	}


	public function rab()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('rab');
		$_SESSION['CustomHeader']   = "LAPORAN DATA RANCANGAN ANGGARAN BIAYA";
		$crud->set_subject('Rancangan Anggaran Biaya');
		$crud->add_action('Cetak', 'http://localhost/kelurahan2/assets/grocery_crud/themes/flexigrid/css/images/print.png', 'admin/rabs2');
		if ($this->datauser->level == "pimpinan") {
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
		}
		$crud->set_field_upload('file', 'assets/uploads/rab');
		$output = $crud->render();
		$this->_example_output($output);
	}



	public function kelahiranp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kelahiran');
		$crud->set_subject('Data Kelahiran');
		$crud->display_as('ayah_id', 'Nama Ayah');
		$crud->display_as('ibu_id', 'Nama Ibu');
		$crud->set_relation('ayah_id', 'penduduk', 'nama');
		$crud->set_relation('ibu_id', 'penduduk', 'nama');
		$crud->callback_column('berat_bayi', array($this, 'valueToEuro'));

		$crud->callback_add_field('berat_bayi', function () {
			return '<input type="text" maxlength="3" name="berat_bayi"> Gram';
		});
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function kematianp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kematian');
		$crud->set_subject('Data Kematian');
		$crud->set_relation('penduduk_id', 'penduduk', 'nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function pernikahanp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('pernikahan');
		$crud->set_subject('Data Pernikahan');
		$crud->display_as('suami_id', 'Nama Suami');
		$crud->unset_texteditor('keterangan');
		$crud->display_as('istri_id', 'Nama Istri');
		$crud->set_relation('suami_id', 'penduduk', 'nama');
		$crud->set_relation('istri_id', 'penduduk', 'nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->_example_output($output);
	}


	public function imbp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('imb');
		$crud->set_subject('Data IMB');
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tidak_mampup()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_mampu');
		$crud->set_subject('Data Penduduk Tidak Mampu');
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->set_relation('walipemohon_id', 'penduduk', 'nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tmrp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_memiliki_rumah');
		$crud->set_subject('Data Penduduk Tidak Memiliki Rumah');
		$crud->set_relation('pemohon_id', 'penduduk', 'nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$output = $crud->render();
		$this->_example_output($output);
	}
}
