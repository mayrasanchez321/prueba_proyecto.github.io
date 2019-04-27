<?php
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$confirmar=$_POST['confirmar'];
$tipouser=$_POST['tipouser'];

	
$cadena = "host=localhost port=5432 password=1234 user=postgres dbname=proy_mayra";
$con = pg_connect($cadena) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}




$resultado = pg_query("insert into ingreso(nombre,usuario,password,tipo_usuario) values('$nombre','$usuario','$password','$tipouser')");
echo '<script language="javascript">'; 
echo 'location.href = "inicio_se1.php";'; //se define el redireccionamiento de la pagina de inicio en javascript
echo '</script>';	
?>