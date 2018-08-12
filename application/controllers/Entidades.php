<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

Ivan de Jesus Valentin Tejada
Mat: 1-15-8112

Ronny Liriano
Mat:
*/
class Entidades extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('entidad.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function entidades_management()
	{
			$crud = new grocery_CRUD();

			
			$crud->set_table('Entidades');
			$crud->columns('Descripcion','id_EA','id_EN');
			
			$crud->set_field_upload('file_url');

			$output = $crud->render();
 
$this->_example_output($output);
	}
}
