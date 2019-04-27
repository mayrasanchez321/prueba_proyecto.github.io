<html>

    <meta charset="utf-8">
    <title>Gestión </title>
    <link rel="stylesheet" href="css/stilo_final.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	<style type="text/css">
        body {
		background: url(img/foto_aerea.jpg) no-repeat center;
		

		}
     </style>
	
	
<body>	 
	 <div class="contenedor">
		<header>
		
			<div class="logo">
				
				<img src="img/mapa2.gif" width="50" alt=""  >
				<a href="#">GESTIÓN DE USUARIOS</a>
			</div>
 
			
		</header>
 
		<section class="main">
			
				<center><h1>Tabla Ingreso</h1></center>
				
				<br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Nombre  </th>
                        <th>Usuario  </th>
                        <th>Password   </th>
                        <th>Tipo Usuario  </th>
						
                        
                    </tr>
                </thead>
                <tbody>
				
				
				
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
$dbcon= conexion();
                        $sql="SELECT * FROM ingreso";
                        $resultado = pg_query($sql);
                        while ($row = pg_fetch_row($resultado)) {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td>$row[5]</td>";
                            echo "</tr>";
                        }
                    ?>
 
			 </tbody>
            </table>
        </div>
		<br />
<br />
			 <div class="formulario">
	
				
<center><h1>Registrar</h1></center>
<br />
<form action="registro_user.php" method="post">
<b>Nombre:</b><input type="text" placeholder="Nombres y Apellidos" name="nombre" size="50" maxlength="50" />
<br />
<br />
<b>Correo:</b><input type="text" placeholder="ejemplo@hotmail" name="usuario" size="50" maxlength="100" />
<br />
<br />
<b>Clave:</b><input type="password" placeholder="Digite su clave" name="password" size="50" maxlength="100" />
<br />
<br />
<b>Confirmar clave:</b><input type="password" placeholder="confirmar" name="comfir_clave" size="50" maxlength="100" />
<br />
<br />


<label for="text">Tipo de Usuario: </label>
<p>
<select name="tipouser">
<option selected value="texto"> Elige una opción </option>
<option>admin</option>
<option>usuario</option>
     
</select>

</p>
<br />
<br />
   
        
		
		<!-- BOTON -->
        <input type="submit" value="Registrar">
		
          
</form>
<br />
<br />
				
				
</div>
		
		<center><h1>Borrar Usuario</h1></center>
		<br />
<form action="borrar_user.php" method="post">
<b>Nombre de Usuario:</b>
<input type="text" placeholder="Nombre " name="nombre" size="50" maxlength="50" />
<br />

     


</p>
<br />
<br />
   
        
		
		<!-- BOTON -->
        <input type="submit" value="Borrar">
		
          
</form>
<br />
<br />
	<nav>
				<a href="mapa_admin.php">Volver al mapa</a>
				
			</nav>			
				
</div>
		
		
		
		
		
	</div>


</body>
<script>



  
	
            
            
        
</script>
</html>