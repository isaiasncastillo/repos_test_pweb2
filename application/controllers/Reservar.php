<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
   Puedes crear un nuevo archivo y copiar este codigo en el para realizar el
   mantenimiento de la entrega del 2do. parcial...
   En tu archivo, reemplaza el nombre de la tabla llamada ejemplo por el nombre
   de la tabla que creaste y eso seria suficiente para que todo funcione!

   Para ver este controlador en ejecucion puedes escribir la siguiente url, colocando al final 
   el nombre del metodo que desees, por ejemplo:

   https://isaiasncastillo.com/pweb2/workspace/pweb218/repos_test_pweb2/index.php/ejemplo_pweb2/ejemplo

   o por ejemplo:

   https://isaiasncastillo.com/pweb2/workspace/pweb218/repos_test_pweb2/index.php/ejemplo_pweb2/prueba
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