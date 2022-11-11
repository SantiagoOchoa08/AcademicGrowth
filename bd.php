<?php
$host="localhost";
$bd="academic"; //nombre de su base de datos
$usuario="root";
$contrasena="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario,$contrasena);
    //if($conexion){echo "Conectado... a sistema ";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>