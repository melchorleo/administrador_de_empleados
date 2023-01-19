<?php
$servidor = "localhost"; //127.0.0.1
$baseDeDatos = "app_empleados";
$usuario = "root";
$pass = "";


try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$pass);
}catch(Exception $ex){
    echo $ex->getMessage();
}
?>