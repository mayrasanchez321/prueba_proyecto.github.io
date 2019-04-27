<html>

    <meta charset="utf-8">
    <title>Registro </title>
	<link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/stilo_final.css">
	<link rel="stylesheet" href="css/master.css">
	

	<style type="text/css">
        body {
		background: url(img/foto_aerea.jpg) no-repeat center;
		

		}
     </style>
	
	
<body>	




<br />

	 <div class="formulario">
	 <nav>
				
<h1>FORMULARIO DE REGISTRO</h1>
<form action="registro1.php" method="post">
<b>Nombre:</b><input type="text" placeholder="Nombres y Apellidos" name="nombre" size="100" maxlength="100" />
<br />
<b>Correo:</b><input type="text" placeholder="ejemplo@hotmail" name="usuario" size="100" maxlength="100" />
<br />
<b>Clave:</b><input type="password" placeholder="Digite su clave" name="password" size="100" maxlength="100" />
<br />
<b>Confirmar clave:</b><input type="password" placeholder="confirmar" name="comfir_clave" size="100" maxlength="100" />
<br />


<label for="text">Tipo de Usuario: </label>
<p>
<select name="tipouser">
<option selected value="texto"> Elige una opción </option>

<option>usuario</option>
     
</select>

</p>
<br />
<br />
   
        
		
		<!-- BOTON -->
        <input type="submit" value="Registrar">
		
          
</form>
<a href="empezar.html">INICIO</a>
				
				</nav>
</div>


</body>
</html>