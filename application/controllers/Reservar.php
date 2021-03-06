<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/*
						Ángel de Jesús Pérez Rojas    Juan José Sánchez Taveras
								1-15-8357           		1-15-8300
*/


class Reservar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('Reservar.php',(array)$output);
	}

	public function ejemplo()
	{
		$output = $this->grocery_crud->render();
        $this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function reservacion()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('Reservacion');
			$crud->set_subject('Reservaciones');
			$crud->required_fields('id_CL')->required_fields('id_RE')->required_fields('id_EN');
			$crud->columns('duracion','fecha','id_CL','id_RE','id_EN','pagado');
			
			$crud->fields('duracion', 'fecha', 'id_CL', 'id_RE', 'id_EN','pagado');
			
			$output = $crud->render();

			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}