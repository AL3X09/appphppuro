<?php
require_once 'datosBD.php';
/**
* 
*/
class Conexion 
{
	protected $_db; 

	function __construct()
	{
		$this->_db=new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
		if ($this->_db->connect_errno) {
			echo "eror al conectar al BD";
			return;
		}
		$this->_db->set_charset(DB_CHARSET);
	}
} 
?>