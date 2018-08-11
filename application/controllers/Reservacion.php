<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/*
   Modulo de Reservaciones.
   Objetivo:
   
   Permitir crear reservaciones de habitaciones y llevar el 
   control de los costos.
   
   Salidas: Listado de clientes.
            Habitaciones.
            Reservaciones por rango de costos y fechas.
*/


class Reservacion extends CI_Controller {

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


	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function habitaciones()
	{

		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('Reservacion');
			$crud->set_subject('Reservaciones');
			//$crud->required_fields('id_CL')->required_fields('id_RE')->required_fields('id_EN');
			//$crud->columns('duracion','fecha','id_CL','id_RE','id_EN','pagado');
			$crud->columns('id_RE','id_CL','id_EN','fecha','CostoHabitacion','pagado');
			//callback
			$crud->set_relation('id_EN','Entidades','Descripcion');			
			$crud->set_relation('id_CL','Clientes','Nombre');			
			
			$crud->callback_column('CostoHabitacion',array($this,'BuscarCosto'));
			
			
			$crud->fields('id_EN', 'id_CL', 'fecha','duracion', 'pagado','CostoHabitacion');
			$crud->display_as('id_EN','Habitacion');
			$crud->display_as('id_CL','Cliente');
			$crud->display_as('id_RE','No. Reservacion');
			$crud->display_as('pagado','Total a Pagar');
			
			$output = $crud->render();

			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	
	
function BuscarCosto($value,$row)	
	{
		return '100'.' &euro;';
	}
}