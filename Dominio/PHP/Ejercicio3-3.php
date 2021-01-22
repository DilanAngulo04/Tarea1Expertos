<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM EstiloSexoPromedioRecinto";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

$estilo_genero = $_POST['estilo_genero'];
$promedio_genero = $_POST['promedio_genero'];
$recinto_genero = $_POST['recinto_genero'];
$menor_valor_get_genero = 0;
$genero_genero = "";
$contador_get_genero = 0;

$estilo_genero = asignar_valor_estilo($estilo_genero);
//$genero = asignar_valor_sexo($genero);



foreach($resultado as $dato){
     //Recolecto la informacion de la base de datos
     $estilo_genero_bd = $dato['estilo'];
     $promedio_genero_bd = $dato['promedio'];
     $recinto_genero_bd = $dato['recinto'];

     //Hago una resta de cada valor obtenido en la base de datos y la informacion 
     //obtenida según los datos dados por el usuario
     
     $estilo_genero_bd = asignar_valor_estilo($estilo_genero_bd);

     $estilo_genero_result = $estilo_genero - $estilo_genero_bd;
     
     $promedio_genero_result = $promedio_genero - $promedio_genero_bd;

     //Si los datos son iguales, la resta da 0
     //Si el dato es diferente, entonces genera una distancia > 0.
     if($recinto_genero_bd == $recinto_genero){
          $Recinto_genero_result = 0;
     }else{
          $recinto_genero_result = 1;
     }

     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $estilo_genero_result = pow($estilo_genero_result, 2);
     $promedio_genero_result = pow($promedio_genero_result, 2);
     $recinto_genero_result = pow($recinto_genero_result, 2);

     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($estilo_genero_result + $promedio_genero_result + $recinto_genero_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     //Le asigno a la variable el primer datos generado para comenzar a trabajar
     if($contador_get_genero == 0){
          $menor_valor_get_recinto = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor_get_recinto > $resultado_total){
          $id = $dato['id'];
          $genero_genero_db = $dato['sexo'];

          if( $genero_genero_db == "M"){
               $genero_genero = "Masculino";
          }else{
               $genero_genero = "Femenino";
          }

          /*
          echo " Id" . $id;
          echo " Recinto " . $recinto_genero;
          echo " Recinto bd " . $recinto_genero_bd;
          echo " Estilo " . $estilo_genero;
          echo " Estilo bd " . $estilo_genero_bd;
          echo " Promedio " . $promedio_genero;
          echo " Promedio bd " . $promedio_genero_bd ."                 "; 
          */
          
          //Actualizo el valor de la variable menor_valor
          $menor_valor_get_recinto = $resultado_total;
     }

     $contador_get_genero = $contador_get_genero + 1;

}

//Envio una respuesta
//En este caso, el genero
if($genero_genero == 'Masculino'){
     echo json_encode('Masculino');
}else if($genero_genero == 'Femenino'){
     echo json_encode('Femenino');
}else{
     echo json_encode($genero_genero);
}


//Funcion para agregar pesos a las cadenas de texto segun el tipo de estilo
function asignar_valor_estilo($value)
{
    $valor_estilo = 0;

    if($value == 'DIVERGENTE'){
        $valor_estilo = 1;
    }else if($value == 'CONVERGENTE'){
        $valor_estilo = 2;
    }else if($value == 'ASIMILADOR'){
        $valor_estilo = 3;
    }else{
        $valor_estilo = 4;
    }

    return $valor_estilo;
}


?>