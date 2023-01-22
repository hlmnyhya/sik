<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		//$output->penduduk = $this->m_login->penduduk();
		$this->load->view('terminal_inputp',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function pendudukp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('penduduk');
		$crud->unset_texteditor('alamat');
		$crud->set_subject('Data Penduduk');
		
		$crud->unset_edit();
		$crud->unset_delete();
		
				$crud->unset_add();
				$crud->unset_export();
		$crud->unset_print();
			
		$output = $crud->render();
		$this->_example_output($output);
	}


	public function kelahiranp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kelahiran');
		$crud->set_subject('Data Kelahiran');	
		$crud->display_as('ayah_id','Nama Ayah');		
		$crud->display_as('ibu_id','Nama Ibu');		
		$crud->set_relation('ayah_id','penduduk','nama');
		$crud->set_relation('ibu_id','penduduk','nama');
		//$crud->callback_column('berat_bayi',array($this,'valueToEuro'));

		$crud->callback_add_field('berat_bayi',function () {
        return '<input type="text" maxlength="3" name="berat_bayi"> Gram';
    });
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('file','assets/uploads/kelahiran');

		$output = $crud->render();
		$this->_example_output($output);
	}

	public function kematianp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('kematian');
		$crud->set_subject('Data Kematian');
		//$crud->set_relation('penduduk_id','penduduk','nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('file','assets/uploads/kematian');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function pernikahanp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('pernikahan');
		$crud->set_subject('Data Pernikahan');	
		$crud->display_as('suami_id','Nama Suami');		
		$crud->unset_texteditor('keterangan');
		$crud->display_as('istri_id','Nama Istri');		
		$crud->set_relation('suami_id','penduduk','nama');
		$crud->set_relation('istri_id','penduduk','nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->set_field_upload('file','assets/uploads/pernikahan');
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
		$crud->set_relation('pemohon_id','penduduk','nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('file','assets/uploads/imb');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tidak_mampup()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_mampu');
		$crud->set_subject('Data Penduduk Tidak Mampu');
		$crud->set_relation('pemohon_id','penduduk','nama');
		$crud->set_relation('walipemohon_id','penduduk','nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('file','assets/uploads/tidak_mampu');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function tmrp()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tidak_memiliki_rumah');
		$crud->set_subject('Data Penduduk Tidak Memiliki Rumah');
		$crud->set_relation('pemohon_id','penduduk','nama');
		$crud->unset_edit();
		$crud->unset_delete();
		$crud->unset_export();
		$crud->unset_print();
		$crud->set_field_upload('file','assets/uploads/tmr');
		$output = $crud->render();
		$this->_example_output($output);
	}

}
