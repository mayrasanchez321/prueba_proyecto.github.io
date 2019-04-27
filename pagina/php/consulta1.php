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

$sql= "SELECT row_to_json(fc)
 FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features
 FROM (SELECT 'Feature' As type
    , ST_AsGeoJSON(lg.geom)::json As geometry
    , row_to_json((SELECT l FROM (SELECT nombre, grado, asistencia) As l
      )) As properties
   FROM ( select * from est_final where asistencia >= 30 and asistencia <= 50 ) As lg   ) As f )  As fc;";
   
	 $query=pg_query($dbcon,$sql);
	 	$row=pg_fetch_row($query);
	 	echo $row[0];
?>

 