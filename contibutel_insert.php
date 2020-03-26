<?php
include 'conexion.php' 
?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link href="https://materializecss.com/pickers.html" rel="stylesheet">

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Font Family de google-->
      <script type="text/javascript">
          $(document).ready(function(){
    $('select').formSelect();
  });   </script>

   <script type="text/javascript">$(document).ready(function(){
    $('.datepicker').datepicker();
  });</script>


<script type="text/javascript "> 
 $(document).ready(function(){
    $('.timepicker').timepicker();
  });
</script>

<script type="text/javascript">
     function copiar()
     {
        var copiar = document.getElementById("fecha_vencimiento");
        var pegar = document.getElementById("fecha_vencimiento2");
        pegar.value = copiar.value;
     }
    </script>

    </head>

    <body>
<?php
$user = "postgres";
$password = "4LLI32526";
$dbname = "allie_predial";
$port = "5432";
$host = "189.207.247.244";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
# Ejecutando la Consulta
if ( $_POST ) {
  $result = pg_query($conexion, "
    INSERT INTO 
    cdmx_gestiones (
    cuenta_predial,
    codigo_barras,
    domicilio,
    promesa_pago,
    fecha_pago,
    fecha_inicio_de_captura,
    hora_inicio_captura,
    latitud,
    longitud,
    nombre,
    observaciones,
    folio_evidence,
    hora_creacion,
    folio_reporte_bimestral,
    exhorto_bimestre,
    impresion_linea,
    fecha_vigencia,
    linea_captura,
    total_lineas,
    folio_bitacora,
    tipo_gestion,
    id_modulo,
    id_parentesco,
    id_motivo,
    id_gestiones,
    id_usuario,
    id_datos_nuevos)

    VALUES (
    '".pg_escape_string($_POST['cuenta_predial'])."',
    '".pg_escape_string($_POST['codigo_barras'])."',
    '".pg_escape_string($_POST['domicilio'])."',
    '".pg_escape_string($_POST['promesa_pago'])."',
    '".pg_escape_string($_POST['fecha_pago'])."',
    '".pg_escape_string($_POST['fecha_inicio_de_captura'])."',
    '".pg_escape_string($_POST['hora_inicio_captura'])."',
    '".pg_escape_string($_POST['latitud'])."',
    '".pg_escape_string($_POST['longitud'])."',
    '".pg_escape_string($_POST['nombre'])."',
    '".pg_escape_string($_POST['observaciones'])."',
    '".pg_escape_string($_POST['folio_evidence'])."',
    '".pg_escape_string($_POST['hora_creacion'])."',
    '".pg_escape_string($_POST['folio_reporte_bimestral'])."',
    '".pg_escape_string($_POST['exhorto_bimestre'])."',
    '".pg_escape_string($_POST['impresion_linea'])."',
    '".pg_escape_string($_POST['fecha_vigencia'])."',
    '".pg_escape_string($_POST['linea_captura'])."',
    '".pg_escape_string($_POST['total_lineas'])."',
    '".pg_escape_string($_POST['folio_bitacora'])."',
    '".pg_escape_string($_POST['tipo_gestion'])."',
    '".pg_escape_string($_POST['id_modulo'])."',
    '".pg_escape_string($_POST['id_parentesco'])."',
    '".pg_escape_string($_POST['id_motivo'])."',
    '".pg_escape_string($_POST['id_gestiones'])."',
    '".pg_escape_string($_POST['id_usuario'])."',
    '".pg_escape_string($_POST['id_datos_nuevos'])."')");
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }
}
if ( $_POST )
  echo "<div class=\"info\">Registro insertado
<a href=\"./ver\">volver</a></div>";
?>
<form action="" method="post">
      <div class="container">
        <!-- Page Content goes here -->


        <div class="card-panel lighten-2">Formulario Ejemplo Inserción en Modulo</div>
          <h2 class="center-align">Modulo</h2>

            <div class="row">
              <form class="col s12">

               
<form action="" method="post">
                <div class="row">
                  <div class="input-field col s2">
                    <input id="cuenta_predial" name="cuenta_predial" type="text" minlength="12" maxlength="12" required style="text-transform: uppercase;"  />

                    <label for="clave_catastral">Cuenta Predial</label>
                  </div>

                  <div class="input-field col s3">
                   <select id="Selecopcion1" >
                      <option value="" disabled selected>Seleccione una opción</option>
                      <option value="incidencias">Incidencias</option>
                      <option value="infopago">Informacion de pago</option>
                      <option value="infopredial">Informacion predial</option>
                      <option value="llamadainterrumpida">Llamada interrumpida</option>
                      <option value="otraarea">Otra área</option>
                    </select>
                    <label>Seleccione una opción</label> 

                  </div>

  <div class="input-field col s3">
                   <select id="motivo" >
                      <option value="" disabled selected>Seleccione una opción</option>
                      <option value="incidencias">Incidencias</option>
                      <option value="infopago">Informacion de pago</option>
                      <option value="infopredial">Informacion predial</option>
                      <option value="llamadainterrumpida">Llamada interrumpida</option>
                      <option value="otraarea">Otra área</option>
                    </select>
                    <label>Motivo</label> 
                  </div>

                  <div class="input-field col s3">
                   <select id="impresión_linea" >
                      <option value="" disabled selected>Seleccione una opción</option>
                      <option value="incidencias">SI</option>
                      <option value="infopago">NO </option>
                     
                    </select>
                    <label>Impresión Linea</label> 
                  </div>
                </div>

                
                </div>
                <div class="row">
                  <div class="input-field col s2">
                    <input id="ubicacionmodulo" name="ubicacionmodulo" type="text" required style="text-transform: uppercase;" />

                    <label for="ubicacionmodulo">Ubicación de modulo</label>
                  </div>



                  

                   <div class="input-field col s2">
                    <input id="fecha_emision" name="fecha_emision" type="text" class="datepicker"onpaste="return false">
                    <label for="fecha_emision">Fecha de emision</label>
                  </div>

                  <div class="input-field col s2">
                    <input id="fecha_vigencia" name="fecha_vigencia" type="text" class="datepicker"onpaste="return false">
                    <label for="fecha_vigencia">Fecha vigencia</label>
                  </div>

                  <div class="input-field col s3">
                    <input id="linea_de_captura" name="linea_de_captura" type="text"  required style="text-transform: uppercase;" onpaste="return false" oncopy="return false" onkeypress="copiarlc()" />
                    <label for="linea_de_captura">Linea de captura</label>
                  </div>


                </div>

                 <div class="row">
                <div class="input-field col s2">
                   <input id="total_lineas" name="total_lineas" type="text" > 
                    <label for="total_lineas">Total de Lineas</label>
                  </div>

                  <div class="input-field col s3">
                    <input id="folio_bitacora" name="folio_bitacora" type="text"  required style="text-transform: uppercase;" onkeypress="copiarlc()" />
                    <label for="folio_bitacora">Folio Bitacora</label>
                  </div>
                  
                   <div class="input-field col s2">
                  <select id="convenio" >
                      <option value="incidencias">SI</option>
                      <option value="infopago">NO </option>
                     
                    </select>
                    <label>Convenio</label> 
                  </div>

                   <div class="input-field col s3">
                    <input id="monto_lineacap" name="monto_lineacap" type="text" required style="text-transform: uppercase;" >
                    <label for="monto_lineacap">Monto Linea de Captura</label>
                  </div>

                  </div>
                   <div class="row">
                  <div class="input-field col s2">
                    <input id="quien_visita" type="text" style="text-transform: uppercase;" required onkeypress="return soloLetras(event)" oncopy="return false" onpaste="return false">
                    <label for="quien_visita">Quien visita</label>
                  </div>



               

                <div class="input-field col s2">
                   <select id="parentesco" >
                     
                      <option value="titular">Titular</option>
                      <option value="esposo(a)">Esposo(a)</option>
                      <option value="mama">Mamá</option>
                      <option value="papa">Papá</option>
                      <option value="hijo">Hijo(a)</option>
                      <option value="hermano">Hermano(a)</option>
                      <option value="cunado">Cuñado(a)</option>
                      <option value="abuelo">Abuelo(a)</option>
                      <option value="primo">Primo(a)</option>
                      <option value="amigo">Amigo(a)</option>
                      <option value="suegro">Suegro(a)</option>
                      <option value="novio">Novio(a)</option>
                      <option value="empleado">Empleado</option>

                    </select>

                    <label>Parentesco</label> 
                  </div>

                  <div class="input-field col s2">
                    <input id="tel_fijo" name="tel_fijo" type="text" minlength="10" maxlength="10" onkeypress="return validaNumericos(event)" onpaste="return false" oncopy="return false">
                    <label for="tel_fijo">Teléfono Fijo
                    </label>
                  </div>


                  <div class="input-field col s2">
                    <input id="tel_movil" name="tel_movil" type="text" minlength="10" maxlength="10" onkeypress="return validaNumericos(event)" onpaste="return false" oncopy="return false">
                    <label for="tel_movil">Teléfono Movil
                    </label>
                  </div>

                  <div class="input-field col s3">
                    <input id="email" type="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                    <label for="email">Correo Eléctronico</label>
                  </div>

                   </div>

                <h4 class="center-align">Periodos</h4>

                <div class="row">

                  <div class="input-field col s1 offset-s2">
                     
                       <label>2020</label> 
                
                 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2020_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                 
                    <label>2019</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2019_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                     
                    <label>2018</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2018_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                     
                    <label>2017</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2017_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                     
                    <label>2016</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2016_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                     
                    <label>2015</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2015_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>

                <div class="row">
                  
                  <div class="input-field col s1 offset-s2">
                    
                    <label>2014</label> 
                  </div>

                  <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_1" />
                        <span>1</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_2" />
                        <span>2</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_3" />
                        <span>3</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_4" />
                        <span>4</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_5" />
                        <span>5</span>
                      </label>
                   </div> 
                   <div class="input-field col s1">
                      <label>
                        <input type="checkbox" id="2014_6" />
                        <span>6</span>
                      </label>
                   </div>   
                </div>




                 
                  
                 

                <div class="row">
                  <div class="input-field col s6">
                    <textarea id="observaciones" class="materialize-textarea"></textarea>
                    <label for="observaciones">Observaciones</label>
                  </div>
                  
                
                
                

                 <tr><td>
                  <div class="row">
                  <button class="btn" type="submit" value="guardar"><i class="material-icons left">send</i>Registrar </button>
                </div></tr> 

              </form>
              <?php
pg_close($conexion);
?>
            </div>                     
                </div>
     <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

        //función para permitir solo números
        function validaNumericos(event) {
            if(event.charCode >= 48 && event.charCode <= 57){
              return true;
             }
             return false;        
        }

        //función para permitir solo letras
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = [8, 37, 39, 46];

            tecla_especial = false
            for(var i in especiales) {
                if(key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla) == -1 && !tecla_especial)
                return false;
        }

        //función para evitar espacios en los input de texto
        function noespacios() {
            var er = new RegExp(/\s/);
            var web = document.getElementById('cuenta_predial').value;
            if(er.test(web)){
              alert('No se permiten espacios');
              return false;
            }
                        else
              return true;
          }


function copiarlc()
{
var origen = document.getElementById('linea_de_captura').value;
var destino= document.getElementById('linea_de_captura2').value = origen;
}

/*function copiarfechavencimiento()
{
var origen = document.getElementById('fecha_vencimiento').value;
var destino= document.getElementById('fecha_vencimiento2').value = origen;*/

function copiarfechavencimiento() {
    document.getElementById('fecha_vencimiento').value = document.getElementById('fecha_vencimiento2').value;
    
}
window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
}

function mostrar(id) {
    if (id == "estudiante") {
        $("#estudiante").show();
        $("#trabajador").hide();
        $("#autonomo").hide();
        $("#paro").hide();
    }

    if (id == "trabajador") {
        $("#estudiante").hide();
        $("#trabajador").show();
        $("#autonomo").hide();
        $("#paro").hide();
    }

    if (id == "autonomo") {
        $("#estudiante").hide();
        $("#trabajador").hide();
        $("#autonomo").show();
        $("#paro").hide();
    }

    if (id == "paro") {
        $("#estudiante").hide();
        $("#trabajador").hide();
        $("#autonomo").hide();
        $("#paro").show();
    }
}





        </script>
    </body>
  </html>