<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM EstiloSexoPromedioRecinto";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

$genero_estilo_simple = $_POST['genero_estilo_simple'];
$promedio_estilo_simple = $_POST['promedio_estilo_simple'];
$recinto_estilo_simple = $_POST['recinto_estilo_simple'];
$menor_valor_estilo_simple = 0;
$estilo_estilo_simple = "";
$contador_estilo_simple = 0;

$genero_estilo_simple = asignar_valor_sexo($genero_estilo_simple);

foreach($resultado as $dato){
     //Recolecto la informacion de la base de datos
     $genero_estilo_simple_bd = $dato['sexo'];
     $promedio_estilo_simple_bd = $dato['promedio'];
     $recinto_estilo_simple_bd = $dato['recinto'];

     //Hago una resta de cada valor obtenido en la base de datos y la informacion 
     //obtenida según los datos dados por el usuario
     
     $promedio_estilo_simple_result = $promedio_estilo_simple - $promedio_estilo_simple_bd;

     $genero_estilo_simple_bd = asignar_valor_sexo($genero_estilo_simple_bd);

     $genero_estilo_simple_result = $genero_estilo_simple - $genero_estilo_simple_bd;          

     //Si los datos son iguales, la resta da 0
     //Si el dato es diferente, entonces genera una distancia > 0.
     if($recinto_estilo_simple_bd == $recinto_estilo_simple){
          $recinto_estilo_simple_result = 0;
     }else{
          $recinto_estilo_simple_result = 1;
     }

     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $promedio_estilo_simple_result = pow($promedio_estilo_simple_result, 2);
     $recinto_estilo_simple_result = pow($recinto_estilo_simple_result, 2);
     $genero_estilo_simple_result= pow($genero_estilo_simple_result, 2);

     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($genero_estilo_simple_result + $promedio_estilo_simple_result + $recinto_estilo_simple_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     //Le asigno a la variable el primer datos generado para comenzar a trabajar
     if($contador_estilo_simple == 0){
          $menor_valor_estilo_simple = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor_estilo_simple > $resultado_total){
          $id = $dato['id'];
          $estilo_estilo_simple = $dato['estilo'];
          
          //Actualizo el valor de la variable menor_valor
          $menor_valor_estilo_simple = $resultado_total;
     }

     $contador_estilo_simple = $contador_estilo_simple + 1;

}

//Envio una respuesta
//En este caso, el estilo evaluado
if($estilo_estilo_simple == 'Asimilador'){
     echo json_encode('Asimilador');
}else if($estilo_estilo_simple == 'Divergente'){
     echo json_encode('Divergente');
}else if($estilo_estilo_simple == 'Convergente'){
     echo json_encode('Convergente');
}else if($estilo_estilo_simple == 'Acomodador'){
     echo json_encode('Acomodador');
}else{
     echo json_encode($estilo_estilo_simple);
}



//Funcion para agregar pesos a las cadenas de texto segun el sexo
function asignar_valor_sexo($value)
{
    $valor_sexo = 0;

    if($value == 'Masculino' or $value == "M"){
        $valor_estilo = 1;
    }else{
        $valor_estilo = 2;
    }
    
    return $valor_estilo;
}


?>