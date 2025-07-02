<?php

require ('Model/conexion.php');

$conexion = new Conexion();

$usuarios = $con->getUsers();

require('views/V_verUsuarios.php');
?>
