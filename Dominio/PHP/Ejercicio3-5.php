<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM Profesor";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

$edad_tipo_profesor = $_POST['edad_tipo_profesor'];
$genero_tipo_profesor = $_POST['genero_tipo_profesor'];
$autoevaluacion_tipo_profesor = $_POST['autoevaluacion_tipo_profesor'];
$total_cursos_tipo_profesor = $_POST['total_cursos_tipo_profesor'];
$area_tipo_profesor = $_POST['area_tipo_profesor'];
$habilidad_tipo_profesor = $_POST['habilidad_tipo_profesor'];
$experiencia_ensennanza_tipo_profesor = $_POST['experiencia_ensennanza_tipo_profesor'];
$experiencia_web_tipo_profesor = $_POST['experiencia_web_tipo_profesor'];
$promedio_estilo_simple = $_POST['experiencia_web_tipo_profesor'];

$menor_valor_tipo_profesor = 0;
$clase_tipo_profesor = "";
$contador_tipo_profesor = 0;

$genero_tipo_profesor = asignar_valor_genero_profesor($genero_tipo_profesor);
$autoevaluacion_tipo_profesor = asignar_valor_autoevaluacion_profesor($autoevaluacion_tipo_profesor);
$area_tipo_profesor = asignar_valor_area_profesor($area_tipo_profesor);
$habilidad_tipo_profesor = asignar_valor_habilidad_profesor($habilidad_tipo_profesor);
$experiencia_ensennanza_tipo_profesor = asignar_valor_experiencia_ensennanza_profesor($experiencia_ensennanza_tipo_profesor);
$experiencia_web_tipo_profesor = asignar_valor_experiencia_web_profesor($experiencia_web_tipo_profesor);


foreach($resultado as $dato){

     //Recolecto la informacion de la base de datos
     $edad_tipo_profesor_bd = $dato['edad'];
     $genero_tipo_profesor_bd = $dato['sexo'];
     $autoevaluacion_tipo_profesor_bd = $dato['autoevaluacion'];
     $total_cursos_tipo_profesor_bd = $dato['vecescursoimpartido'];
     $area_tipo_profesor_bd = $dato['areaexperiencia'];
     $habilidad_tipo_profesor_bd = $dato['habilidadescomputacionales'];
     $experiencia_ensennanza_tipo_profesor_bd = $dato['experienciatecnologia'];
     $experiencia_web_tipo_profesor_bd = $dato['experienciasitioweb'];

     $genero_tipo_profesor_bd = asignar_valor_genero_profesor($genero_tipo_profesor_bd);
     $autoevaluacion_tipo_profesor_bd = asignar_valor_autoevaluacion_profesor($autoevaluacion_tipo_profesor_bd);
     $area_tipo_profesor_bd = asignar_valor_area_profesor($area_tipo_profesor_bd);
     $habilidad_tipo_profesor_bd = asignar_valor_habilidad_profesor($habilidad_tipo_profesor_bd);
     $experiencia_ensennanza_tipo_profesor_bd = asignar_valor_experiencia_ensennanza_profesor($experiencia_ensennanza_tipo_profesor_bd);
     $experiencia_web_tipo_profesor_bd = asignar_valor_experiencia_web_profesor($experiencia_web_tipo_profesor_bd);

     //Hago una resta de cada valor obtenido en la base de datos y la informacion 
     //obtenida según los datos dados por el usuario
     $genero_tipo_profesor_result = $genero_tipo_profesor - $genero_tipo_profesor_bd;
     $edad_tipo_profesor_result = $edad_tipo_profesor - $edad_tipo_profesor_bd;
     $autoevaluacion_tipo_profesor_result = $autoevaluacion_tipo_profesor - $autoevaluacion_tipo_profesor_bd;
     $total_cursos_tipo_profesor_result = $total_cursos_tipo_profesor - $total_cursos_tipo_profesor_bd;
     $area_tipo_profesor_result = $area_tipo_profesor - $area_tipo_profesor_bd;
     $habilidad_tipo_profesor_result = $habilidad_tipo_profesor - $habilidad_tipo_profesor_bd;
     $experiencia_ensennanza_tipo_profesor_result = $experiencia_ensennanza_tipo_profesor - $experiencia_ensennanza_tipo_profesor_bd;
     $experiencia_web_tipo_profesor_result = $experiencia_web_tipo_profesor - $experiencia_web_tipo_profesor_bd;
     
     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $genero_tipo_profesor_result = pow($genero_tipo_profesor_result, 2);
     $edad_tipo_profesor_result = pow($edad_tipo_profesor_result, 2);
     $autoevaluacion_tipo_profesor_result = pow($autoevaluacion_tipo_profesor_result, 2);
     $total_cursos_tipo_profesor_result = pow($total_cursos_tipo_profesor_result, 2);
     $area_tipo_profesor_result = pow($area_tipo_profesor_result, 2);
     $habilidad_tipo_profesor_result = pow($habilidad_tipo_profesor_result, 2);
     $experiencia_ensennanza_tipo_profesor_result = pow($experiencia_ensennanza_tipo_profesor_result, 2);
     $experiencia_web_tipo_profesor_result = pow($experiencia_web_tipo_profesor_result, 2);
     
     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($genero_tipo_profesor_result + $edad_tipo_profesor_result + $autoevaluacion_tipo_profesor_result
          + $autoevaluacion_tipo_profesor_result + $total_cursos_tipo_profesor_result +  $area_tipo_profesor_result + 
          $habilidad_tipo_profesor_result + $experiencia_ensennanza_tipo_profesor_result + $experiencia_web_tipo_profesor_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     //Le asigno a la variable el primer datos generado para comenzar a trabajar
     if($contador_tipo_profesor == 0){
          $menor_valor_tipo_profesor = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor_tipo_profesor >= $resultado_total){
          $id = $dato['id'];
          $clase_tipo_profesor = $dato['clase'];
          $menor_valor_tipo_profesor = $resultado_total;
     }

     $contador_tipo_profesor = $contador_tipo_profesor + 1;

}

//Envio una respuesta
//En este caso, el tipo de profesor
if($clase_tipo_profesor == 'Beginner'){
     echo json_encode('Principiante');
}else if($clase_tipo_profesor == 'Intermediate'){
     echo json_encode('Intermedio');
}else if($clase_tipo_profesor == 'Advanced') {
     echo json_encode('Avanzado');
}else{
     echo json_encode($clase_tipo_profesor);
}

function asignar_valor_genero_profesor($value)
{
     $valor_genero_profesor = 0;

     if($value == "M"){
          $valor_genero_profesor = 1;
     }else if($value == "F"){
          $valor_genero_profesor = 2;
     }else{
          $valor_genero_profesor = 3;
     }

     return $valor_genero_profesor;
}

function asignar_valor_autoevaluacion_profesor($value)
{
     $valor_autoevaluacion_profesor = 0;

     if($value == "B"){
          $valor_autoevaluacion_profesor = 1;
     }else if($value == "I"){
          $valor_autoevaluacion_profesor = 2;
     }else{
          $valor_autoevaluacion_profesor = 3;
     }

     return $valor_autoevaluacion_profesor;
}

function asignar_valor_area_profesor($value)
{
     $valor_area_profesor = 0;

     if($value == "DM"){
          $valor_area_profesor = 1;
     }else if($value == "ND"){
          $valor_area_profesor = 2;
     }else{
          $valor_area_profesor = 3;
     }

     return $valor_area_profesor;
}

function asignar_valor_habilidad_profesor($value)
{
     $valor_habilidad_profesor = 0;

     if($value == "L"){
          $valor_habilidad_profesor = 1;
     }else if($value == "A"){
          $valor_habilidad_profesor = 2;
     }else{
          $valor_habilidad_profesor = 3;
     }

     return $valor_habilidad_profesor;
}

function asignar_valor_experiencia_ensennanza_profesor($value)
{
     $valor_experiencia_ensennanza_profesor = 0;

     if($value == "N"){
          $valor_experiencia_ensennanza_profesor = 1;
     }else if($value == "S"){
          $valor_experiencia_ensennanza_profesor = 2;
     }else{
          $valor_experiencia_ensennanza_profesor = 3;
     }

     return $valor_experiencia_ensennanza_profesor;
}

function asignar_valor_experiencia_web_profesor($value)
{
     $valor_experiencia_web_profesor = 0;

     if($value == "N"){
          $valor_experiencia_web_profesor = 1;
     }else if($value == "S"){
          $valor_experiencia_web_profesor = 2;
     }else{
          $valor_experiencia_web_profesor = 3;
     }

     return $valor_experiencia_web_profesor;
}


?>