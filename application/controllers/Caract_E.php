<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caract_E extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('Carac_E.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function caracteristicas_entidades()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('Caract_E');
			$crud->columns('id_CE','descripcion','ubicacion','costo');

			$output = $crud->render();

			$this->_example_output($output);
	}
}
