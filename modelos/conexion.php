<?php

class Conexion
{
        //Cadena de conexiuon a la bd.
    static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pruebamisalud",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}
}
