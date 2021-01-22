<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM Redes";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

$fiabilidad_red = $_POST['fiabilidad_red'];
$n_enlaces_red = $_POST['n_enlaces_red'];
$capacidad_red = $_POST['capacidad_red'];
$costo_red = $_POST['costo_red'];

$menor_valor_red = 0;
$clase_red = "";
$contador_red = 0;

$capacidad_red = asignar_valor_costo_capacidad($capacidad_red);
$costo_red = asignar_valor_costo_capacidad($costo_red);

foreach($resultado as $dato){

     //Recolecto la informacion de la base de datos
     $fiabilidad_red_bd = $dato['reliability'];
     $n_enlaces_red_bd = $dato['numberLinks'];
     $capacidad_red_bd = $dato['capacity'];
     $costo_red_bd = $dato['costo'];

     $capacidad_red_bd = asignar_valor_costo_capacidad($capacidad_red_bd);
     $costo_red_bd = asignar_valor_costo_capacidad($costo_red_bd);

     //Hago una resta de cada valor obtenido en la base de datos y la informacion 
     //obtenida según los datos dados por el usuario
     $fiabilidad_red_result = $fiabilidad_red - $fiabilidad_red_bd;
     $n_enlaces_red_result = $n_enlaces_red - $n_enlaces_red_bd;
     $capacidad_red_result = $capacidad_red - $capacidad_red_bd;
     $costo_red_result = $costo_red - $costo_red_bd;

     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $fiabilidad_red_result = pow($fiabilidad_red_result, 2);
     $n_enlaces_red_result = pow($n_enlaces_red_result, 2);
     $capacidad_red_result = pow($capacidad_red_result, 2);
     $costo_red_result = pow($costo_red_result, 2);

     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($fiabilidad_red_result + $n_enlaces_red_result + $capacidad_red_result + $costo_red_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     //Le asigno a la variable el primer datos generado para comenzar a trabajar
     if($contador_red == 0){
          $menor_valor_red = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor_red >= $resultado_total){
          $id = $dato['id'];   

          $clase_red = $dato['class'];
          $menor_valor_red = $resultado_total;
     }

     $contador_red = $contador_red + 1;

}

//Envio una respuesta
//En este caso, el tipo de profesor
if($clase_red == 'A'){
     echo json_encode('A');
}else if($clase_red == 'B'){
     echo json_encode('B');
}else {
     echo json_encode($clase_red);
}

function asignar_valor_costo_capacidad($value)
{
     $valor_costo = 0;

     if($value == "Low"){
          $valor_costo = 1;
     }else if($value == "Medium"){
          $valor_costo = 2;
     }else{
          $valor_costo = 3;
     }

     return $valor_costo;
}
?>