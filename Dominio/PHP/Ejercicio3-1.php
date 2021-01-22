<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM RecintoEstilo";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

//$recinto = $_POST['recinto'];
$CA = $_POST['CA'];
$EC = $_POST['EC'];
$EA = $_POST['EA'];
$OR = $_POST['OR'];
$menor_valor = 0;
$estilo = "";
$contador_get_estilo = 0;

foreach($resultado as $dato){
     //Recolecto la informacion de la base de datos
     $CA_bd = $dato['ca'];
     $EC_bd = $dato['ec'];
     $EA_bd = $dato['ea'];
     $OR_bd = $dato['ora'];

     //Hago una resta de cada valor obtenido en la base de datos y la sumatoria 
     //obtenida según los datos dados por el usuario
     $CA_result = $CA_bd - $CA;
     $EC_result = $EC_bd - $EC;
     $EA_result = $EA_bd - $EA;
     $OR_result = $OR_bd - $OR;

     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $CA_result = pow($CA_result, 2);
     $EC_result = pow($EA_result, 2);
     $EA_result = pow($EA_result, 2);
     $OR_result = pow($OR_result, 2);

     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($CA_result + $EC_result + $EA_result + $OR_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     if($contador_get_estilo == 0){
          $menor_valor = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor > $resultado_total){
          $id = $dato['id'];
          $estilo_bd = $dato['estilo'];
          $estilo = $estilo_bd;
          $menor_valor = $resultado_total;
     }

     $contador_get_estilo = $contador_get_estilo + 1;

}

//$estilo = 'Asimilador';

//Envio una respuesta
//En este caso, el estilo evaluado
if($estilo == 'Asimilador'){
     echo json_encode('Asimilador');
}else if($estilo == 'Divergente'){
     echo json_encode('Divergente');
}else if($estilo == 'Convergente'){
     echo json_encode('Convergente');
}else if($estilo == 'Acomodador'){
     echo json_encode('Acomodador');
}else{
     echo json_encode($estilo);
}


?>