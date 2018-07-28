<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Andres de jesus Torres   1-15-7998
	Starlin Valdez 1-15-7856
*/

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('cliente.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function clientes_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('Clientes');
			$crud->columns('Direccion','id_CA','id_CL','Nombre');

			$output = $crud->render();

			$this->_example_output($output);
	}
}
