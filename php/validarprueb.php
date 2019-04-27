

<?php

//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
$conex = "host=localhost port=5432 password=1234 user=postgres dbname=proy_mayra";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
 // Puedes utilizar la funcion para eliminar algun caracter en especifico
 //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
 //$password = $HTTP_POST_VARS["password"];
 // o puedes convertir los a su entidad HTML aplicable con htmlentities
 $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
 $password = $_POST["password"];
 $result = pg_query('SELECT password, usuario, nombre, tipo_usuario FROM ingreso WHERE usuario=\''.$usuario.'\'');
 $rol = $row['tipo_usuario'];
 $nombre = $row['nombre'];
 if($row = pg_fetch_array($result)){
  if($row["password"] == $password){
     $_SESSION["k_username"] = $row['usuario'];
     $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
	 $_SESSION['nombre'] = $row['nombre'];
     
     
       if ($_SESSION['tipo_usuario']== "admin"){
		   
		   
		   echo '<script language="javascript">'; 
		   echo 'location.href = "mapa_admin.php";'; //se define el redireccionamiento de la pagina de inicio en javascript
		   echo '</script>';
	   
		   
        }else{
			
		   echo '<script language="javascript">'; 
		   echo 'location.href = "mapa_usuario.php";'; //se define el redireccionamiento de la pagina de inicio en javascript
		   echo '</script>';
			
			
		}
		
	
	}else{
   echo '<h1>Password incorrecto</h1>'.' <p>';
   echo '<a href="index.php">Volver al inicio</a></p>';
  }
 }else{
  echo '<h1>Usuario no existente en la base de datos</h1>'.' <p>';
  echo '<a href="index.php">Volver al inicio</a></p>';
 }
 pg_free_result($result);
}else{
 echo '<h1>Debe especificar un usuario y password</h1>'.' <p>';
 echo '<a href="index.php">Volver al inicio</a></p>';
}
pg_close();
?>

