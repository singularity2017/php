<?php
class conexion {
	
	private $_conexion;
	private $_base_datos;
	private $_sql;
	private $_result;	
	
	public function __construct () {
        
        // Configuracion DigitalOcean WAPOSAT
        
       $this->_conexion = mysqli_connect("localhost", "root", "") or die('No pudo conectarse: ' . mysql_error());
	   $this->_base_datos = mysqli_select_db( $this->_conexion,"php1");
        
	}
	public function ejecutar_sentencia ($sql) {
		$this->_sql = $sql;
		return ($this->_result = mysqli_query($this->_conexion,$this->_sql ));
	}
	public function ejecutar_ultima_sentencia () {
		return ($this->_result = mysqli_query($this->_conexion,$this->_sql ));
	}
	public function retornar_array() {
		return mysqli_fetch_array($this->_result);
	}
	public function tam_respuesta() {
		return mysqli_num_rows($this->_result);
	}
}
?>