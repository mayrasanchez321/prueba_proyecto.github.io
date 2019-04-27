<?php
function conexion(){
$host = 'localhost';
$port = '5432';
$base_datos = 'proy_mayra';
$usuario = 'postgres';
$pass = '1234';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario password=$pass");
return($conexion);
}
?>