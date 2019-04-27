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

$parametro1=$_POST['parametro1'];
$parametro2=$_POST['parametro2'];



$dbcon= conexion();
$sql= "SELECT row_to_json(fc) as geojson
		FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features
		 FROM (SELECT 'Feature' As type
			, ST_AsGeoJSON(lg.geom)::json As geometry
			, row_to_json((SELECT l FROM (SELECT fecha, tipo_arma, sexo, tipo) As l
			  )) As properties
		  FROM (select * from act_violent_repro2  where fecha between '$parametro1' and '$parametro2' ) As lg   ) As f )  As fc;";

$resultado = pg_query($dbcon, $sql); // Se ejecuta la consulta en PostgreSQL con la conexión definida anteriormente

$row = pg_fetch_array($resultado);

//print_r($row['geojson']);
echo $row['geojson'];
?>
