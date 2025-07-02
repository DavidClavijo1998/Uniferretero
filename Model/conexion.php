<?php

class Conexion {

private $con;


public function __contruct()
 {
 $this->con = new mysqli("localhost", "root", "", "facebookPeroRojo");
 }

public function getUsers() {
    $query = $this->con->query('SELECT * FROM users');

    $retorno = [];

    $i = 0;
    while ($fila = $query->fetch_assoc()){
        $retorno[$i] = $fila;
        $i++;
    }

    return $retorno;

}

 }

?>