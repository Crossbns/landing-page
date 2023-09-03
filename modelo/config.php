<?php

$server="localhost";
$user="root";
$pass="";
$database="Ev05";

$conn = mysqli_connect($server, $user, $pass, $database);
$conn->set_charset("utf8");

if (!$conn) {
    die("Conexion Fallida");
}

?>


