<?php

// detalles de la conexion
$conn_string = "host=189.207.247.244 port=5432 dbname=allie_predial user=postgres password=allie2019$ ";
 
// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);
 
// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";

}
 
// Close connection
pg_close($dbconn);
 
?>