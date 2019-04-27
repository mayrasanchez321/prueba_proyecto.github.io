<html>

    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" href="css/stilo_final.css">
	<style type="text/css">
        body {
		background: url(img/foto_aerea.jpg) no-repeat center;
		

		}
     </style>
	
	
<body>	 
	 <div class="contenedor">
		<header>
			<div class="logo">
				<img src="img/logo.png" width="150" alt="">
				<a href="#">Gestion de Usuarios</a>
			</div>
 
			
		</header>
 
		<section class="main">
			
			    <center>
				<table class="table table-dark table-responsive table-hover">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Tipo Usuario</th>
                        
                    </tr>
				</thead>
                </table>
				</center>
				
			
		
 
			
		</section>
 <?php
                        header('Content-Type: application/json');
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
                            echo "<td>$row[6]</td>";
                            echo "<td><button data-id='$row[0]' class='rol btn btn-warning'>Rol</button><button data-id='$row[0]' class='borrar btn btn-danger'>Borrar</button></td>";
                            echo "</tr>";
                        }
?>
		
 
		
	</div>


</body>
</html>