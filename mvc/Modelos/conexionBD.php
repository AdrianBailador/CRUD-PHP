<?php


class ConexionBD{
	public function cBD(){
		//host, nombre base de datos, usuario
		$bd = new PDO("mysql:host=localhost;dbname=crud","root","");

		return $bd;
	}
}
