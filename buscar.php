<?php
$user = "postgres";
$password = "1234";
$dbname = "postgres";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());




function buscarPersona( $conexion, $cuenta_predial )
    {
        $sql = "SELECT * FROM cdmx_ucontributel WHERE cuenta_predial=".$cuenta_predial."";
        $devolver = null;

        // Ejecutar la consulta:
        $rs = pg_query( $conexion, $sql );

        if( $rs )
        {
            // Si se encontró el registro, se obtiene un objeto en PHP con los datos de los campos:
            if( pg_num_rows($rs) > 0 )
                $devolver = pg_fetch_object( $rs, 0 );
        }

        return $devolver;
    }


        $objPersona = buscarPersona( $conexion, $cuenta_predial );

    if( $objPersona == null )
        echo "No se encontró la persona";
    else
        echo "El nombre de la persona con el código: [".$objPersona->cuenta_predial."]";

?>