<!DOCTYPE html>
<html lang="es">

<head>

	<title>GEOPORTAL</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<link rel="stylesheet" href="lib/leaflet/leaflet.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">
	<script src="lib/leaflet/leaflet.js"></script>

	<link rel="stylesheet" href="lib/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.css" />
	<script src="lib/leaflet-groupedlayercontrol/dist/leaflet.groupedlayercontrol.min.js"></script>

	<!--  Nuevas librerías para el manejo de formulario   -->
	<!-- https://getbootstrap.com/docs/4.1/getting-started/introduction/ -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
	 crossorigin="anonymous"></script>

	<style type="text/css">
        body {
		background: url(img/foto_aerea.jpg) no-repeat center;
		

		}
     </style>

</head>

<body>
	<!--  *******************  Barra de Navegacion **********************-->

	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<img src="img/mapa2.gif" width="50" alt=""  >
		<a class="navbar-brand" href="#">GEOPORTAL </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
				<li class="nav-item active">
					<a class="nav-link" href="empezar.html">INICIO
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#gismodel-header">MANUAL DE USUARIO
					</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#contacto-header">CONTACTO
					</a>
				</li>
			</ul>

		</div>
	</nav>

	<div style="margin-top: 65px">
		<div class="row">
			<div class="col-md-2">

				<div class="card" style="width: 14rem; margin-top: 40px">
				<center>
					<div class="card-header">
						ADMINISTRADOR
					</div>
					</center>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							
							<button id="botonreportar" type="button" class="btn btn-primary" onclick="location.href='gestion.php'">Gestion de Usuario</button>
						</li>
						<li class="list-group-item">
							<button id="asistencia" type="button" class="btn btn-primary">
								Asistencia 30% - 50%
							</button>
						</li>
						
						
						<li class="list-group-item">
						<center>Actos violentos por temporada</center>
						</br>
						<label for="fecha1">fecha 1:</label>
										<input type="text" class="form-control" id="fecha1"  placeholder="">
						<label for="fecha2">fecha 2:</label>
										<input type="text" class="form-control" id="fecha2"  placeholder="">
										
							<button id="fecha" type="button" class="btn btn-primary">POR FECHA</button>
							
						</li>
						
						
						<li class="list-group-item">
							<button id="botonubicacion" type="button" class="btn btn-primary">
								Mi Ubicacion
							</button>
						</li>
						<li class="list-group-item">
								Actos violentos cercanos al alumno:
								<div class="form-group">
										<label for="dishueco1">ALUMNO:</label>
										<input type="text" class="form-control" id="dishueco1" aria-describedby="emailHelp" placeholder="">
										
									</div>
							<button id="botonbuffer" type="button" class="btn btn-primary">
								HALLAR BUFFER
							</button>
							<label id="resultado-buffer"></label>
							
						</li>
						<li class="list-group-item">
								Huecos cercanos a una 
								<div class="form-group">
										<label for="input_lat">Universidad</label>
										<input type="text" class="form-control" id="input_lat" aria-describedby="emailHelp" placeholder="">
									</div>
							<button id="botonubicacion" type="button" class="btn btn-primary">
								Hallar huecos 
							</button>
						</li>
						<form action="consulta3.php" method="post">
						<li class="list-group-item">
						
								Distancia alumno - escuela
								<div class="form-group">
										<label for="hueco1">Id 1:</label>
										<input type="text" class="form-control" id="hueco1" aria-describedby="emailHelp" placeholder="">
										<label for="hueco2">Id 2:</label>
										<input type="text" class="form-control" id="hueco2" aria-describedby="emailHelp" placeholder="">
									</div>
							<button id="botondistancia" type="button" class="btn btn-primary">
								Hallar distancia 
							</button>
							</form>
							<label id="resultado-distancia"></label>
							
						</li>
					</ul>
				</div>
				<ul>
				</ul>
			</div>
			<div class="col-md-10">
				<div id="mapid" style="height: 680px; width:90%">
				</div>
				<br/>
				
			</div>
		</div>
		<div class="row" id="tabla">

		</div>
		<div class="row">
			<div class="col-md-10" style="margin: auto; margin-top: 15px">
				<div class="jumbotron">

					<h1 class="text-center" id="gismodel-header">MANUAL DE USUARIO</h1>
					<p>Para la consulta del porcentaje de asistencia para los estudiantes se debe saber que una asistencia correspondiente a porcentajes mayores o igual a 50%
					es aceptable, y por el contrario menor a este seria considerado tema de investigacion dentro de este sistema; los porcentajes de asistencia
					menor a 30% son considerados como deserción</p></br>
					<p>El formato para la consulta por rango de fecha debe se de la forma '0000-00-00' correspondiendo respectivamente al año, mes, y dia.</p>
				</div>
			</div>
		</div>

		

		<div class="row">
			<div class="col-md-10" style="margin: auto; margin-top: 15px">
				<div class="jumbotron">
				<h1 class="text-center" id="contacto-header">CONTACTO</h1>
				<br>
				<div class="row justify-content-md-center">
					<div class="col-md-3 ">
						<h3>Estudiante</h3>
						
						<p>Mayra Alejandra Sanchez Mejia</p>
					</div>
					<div class="col-md-3">
						<h3>Telefono</h3>
						
						<p>(+57) 313 770 8559</p>
					</div>
					<div class="col-md-3">
						<h3>Correo</h3>
						
						<p>mayra.sanchez@correounivalle.edu.co</p>
					</div>
				</div>

				
				</div>
			</div>

		</div>
	</div>
	</div>

	<br>

	<div>

	</div>
	

	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

	<script>
		var basemaps =
			{
				Grayscale: L.tileLayer('http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png',
					{
						maxZoom: 18,
						attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
					}),

				Streets: L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
					{
						maxZoom: 19,
						attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
					})
			};

		var mymap = L.map('mapid').setView([3.4610648, -76.5363028], 12);
		
		

		/*var wmsLayer6 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: 'proyecto_sig3:fronteras',
			attribution: 'fronteras',
			format: 'image/png',
			transparent: true
		});

		var wmsLayer1 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: 'proyecto_sig3:act_violent_repro',
			attribution: 'violentos',
			format: 'image/png',
			transparent: true
		});

		var wmsLayer7 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: 'proyecto_sig3:escuelas_cort',
			attribution: 'escuelas',
			format: 'image/png',
			transparent: true
		});


		var wmsLayer2 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: 'proyecto_sig3:est_final',
			attribution: 'estudiantes',
			format: 'image/png',
			transparent: true
		});

		var wmsLayer3 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: 'proyecto_sig3:nome_cort',
			attribution: 'nomenclatura',
			format: 'image/png',
			transparent: true
		});

		var wmsLayer4 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
			layers: '	proyecto_sig3:sep_repro',
			attribution: 'separador_urbano',
			format: 'image/png',
			transparent: true
		});
		var wmsLayer5 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
		layers: 'proyecto_sig3:cuadrante_cort',
		attribution: 'cuadrante_policia',
		format: 'image/png',
		transparent: true
		});
		var wmsLayer8 = L.tileLayer.wms('http://localhost:8080/geoserver/proyecto_sig3/wms?', {
		layers: 'proyecto_sig3:iediamante',
		attribution: 'IE DIAMANTE',
		format: 'image/png',
		transparent: true
		});
		*/

		
		
		
		basemaps.Grayscale.addTo(mymap);
		/*
		wmsLayer1.addTo(mymap);
		wmsLayer2.addTo(mymap);
		wmsLayer3.addTo(mymap);
		wmsLayer4.addTo(mymap);
		wmsLayer7.addTo(mymap);
		wmsLayer6.addTo(mymap);
		wmsLayer5.addTo(mymap);
		wmsLayer8.addTo(mymap);
		wmsLayer8.addTo(mymap);
		*/
		

/*
		var groupedOverlays = {
			"Capas Municipio": {
				"Estudiantes": wmsLayer2
			}
			,
			"Capas propias": {
				"Actos violentos": wmsLayer1,
				"Nomenclatura Vial": wmsLayer3,
				"Separador Urbano": wmsLayer4,
				"Fronteras_Inv": wmsLayer6,
				"Escuelas": wmsLayer7,
				"Cuadrante Policia": wmsLayer5,
				"IE DIAMANTE": wmsLayer8
			}
		};

		L.control.groupedLayers(basemaps, groupedOverlays).addTo(mymap);
*/		
		var popup = L.popup();
		
		function onEachFeature(feature, layer) {

    if (feature.properties) {

        layer.bindPopup("Nombre: "+feature.properties.nombre+"<br> Grado: "+feature.properties.grado+"<br> Asistencia: "+feature.properties.asistencia);
    }
}

	$('#asistencia').on('click', function(){
		
	

	$.ajax({
		url:"consulta1.php",
		type: "post",
		dataType: 'JSON',

		success: function(data) {

			var asistencia = new L.geoJson(data, {
				    onEachFeature: onEachFeature
				});

		    asistencia.addTo(mymap);

			
			/*$("#con_lotes").html(data);

				geojsonLayer = L.geoJson(data).addTo(mymap);*/

		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus,errorThrown);
		}
	})

});


function onEachFeature(feature, layer) {

    if (feature.properties) {

        layer.bindPopup("Fecha: "+feature.properties.fecha+"<br> Tipo de Arma: "+feature.properties.tipo_arma+"<br> Sexo: "+feature.properties.sexo+"<br> Tipo: "+feature.properties.tipo);
    }
}







		$('#fecha').on('click', function(){

		var var1 = $("#fecha1").val();
		var var2 = $("#fecha2").val();
		

	
		
						
 		$.ajax({
		url:'consulta3.php',
		type: "post",
		dataType: 'JSON',
		data:{
                    parametro1:var1,
					parametro2:var2,
                },

		success: function(data) {

			var fecha = new L.geoJson(data, {
				    onEachFeature: onEachFeature
				});

		    fecha.addTo(mymap);

			
			/*$("#con_lotes").html(data);

				geojsonLayer = L.geoJson(data).addTo(mymap);*/

		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus,errorThrown);
		}
	})
		
});
 
 
	</script>

</body>

</html>