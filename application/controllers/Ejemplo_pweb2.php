<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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


class Ejemplo_pweb2 extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->helper('url');
                $this->load->library('grocery_CRUD');
        }

        public function _plantilla_salida($output = null)
        {
                $this->load->view('menu_pweb2.php',(array)$output);
        }

        public function ejemplo()
        {
                $output = $this->grocery_crud->render();
                $this->_plantilla_salida($output);
        }

	public function prueba()
	{
	echo "Gracias a Dios!!!";
	}

}
