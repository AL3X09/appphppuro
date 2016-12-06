<?php
require_once './config/conexion.php';
/**
* 
*/
class Modelo extends Conexion
{
	
	function __construct()
	{
		parent:: __construct();
	}
	
	//traigo todos los usuarios
	public function getDatos()
	{
		$result = $this->_db->query('SELECT * FROM usuarios');
		$usuarios=$result->fetch_all(MYSQLI_ASSOC);
		return $usuarios;
	}
	public function putUsuario()
	{

		if(isset($_POST['nombre'])){
			$nombre=$_POST['nombre'];
			echo $nombre;
		}
		else {
			echo "no hay nada";
		}
	}
}



?>