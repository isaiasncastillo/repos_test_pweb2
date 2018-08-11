
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$conn=mysqli_connect("localhost","pweb2","pweb2pweb2","reservaciones");
	if (mysqli_connect_errno()){
  		echo"Ha ocurrrido un error de conexion: " . mysqli_connect_error();
  	}else { 
	mysqli_select_db($conn,"reservaciones"); 

}

class Iniciar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('Login.php',(array)$output);
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

	public function entrar()
	{
		try{
			if (isset($_POST['submit'])) {
echo "FUNCIONANDO!!";
			}
				echo "FUNCIONANDO!!";	
		}catch(Exception $e){
			echo "no funcionando";
		}
	}
}