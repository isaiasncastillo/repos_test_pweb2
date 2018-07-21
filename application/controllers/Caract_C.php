<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caract_C extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('Carac_C.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function caracteristicas_clientes()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('Caract_C');
			$crud->columns('id_CA','descripcion');

			$output = $crud->render();

			$this->_example_output($output);
	}
}
