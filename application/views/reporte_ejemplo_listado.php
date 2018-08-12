<?php
$this->load->database();


        $this->db->where("nombre",$_GET["nombre"]);
		$query = $this->db->get('Clientes');
        $datos=$query->result();	
        if($datos){
        echo var_dump($query->result());
        } else {echo "No se ha encontrado este cliente!";}

?>