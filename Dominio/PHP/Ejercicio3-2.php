<?php

include_once '../../conexion.php';

$sql_select = "SELECT * FROM EstiloSexoPromedioRecinto";

$gsent = $pdo->prepare($sql_select);
$gsent->execute();

$resultado = $gsent->fetchAll();

$estilo_recinto = $_POST['estilo_recinto'];
$promedio = $_POST['promedio_recinto'];
$genero = $_POST['genero_recinto'];
$menor_valor_get_recinto = 0;
$recinto_get_recinto = "";
$contador = 0;

$estilo_recinto = asignar_valor_estilo($estilo_recinto);
$genero = asignar_valor_sexo($genero);



foreach($resultado as $dato){
     //Recolecto la informacion de la base de datos
     $estilo_bd = $dato['estilo'];
     $promedio_bd = $dato['promedio'];
     $genero_bd = $dato['sexo'];

     //Hago una resta de cada valor obtenido en la base de datos y la informacion 
     //obtenida según los datos dados por el usuario
     
     $estilo_bd = asignar_valor_estilo($estilo_bd);

     $estilo_genero_result = $estilo_recinto - $estilo_bd;
     
     $estilo_recinto_result = $promedio - $promedio_bd;

     $genero_bd = asignar_valor_sexo($genero_bd);
     
     $genero_result = $genero_bd - $genero;

     $promedio_result = $promedio - $promedio_bd;


     //Continuando con la formula de la distancia de euclides, saco la potencia 
     //cada resultado
     $estilo_recinto_result = pow($estilo_recinto_result, 2);
     $promedio_result = pow($promedio_result, 2);
     $genero_result = pow($genero_result, 2);

     //Obteno la suma de cada resultado elevado al cuadrado
     $resultado_total = ($estilo_recinto_result + $promedio_result + $genero_result);

     //Obtenemos la raiz cuadrado del dato anteriormente mencionado.
     $resultado_total = sqrt($resultado_total);

     //Le asigno a la variable el primer datos generado para comenzar a trabajar
     if($contador == 0){
          $menor_valor_get_recinto = $resultado_total;
     }

     //Comparo los valores obtenidos
     //Si el resultado total actual es menor que el dato menor anterior
     //reemplazo la información a la del dato mas cercano a cero
     if($menor_valor_get_recinto > $resultado_total){
          $id = $dato['id'];
          $recinto_bd = $dato['recinto'];
         $recinto_get_recinto = $recinto_bd;
          //Actualizo el valor de la variable menor_valor
          $menor_valor_get_recinto = $resultado_total;
     }

     $contador = $contador + 1;

}

//Envio una respuesta
//En este caso, el recinto de origen
if($recinto_get_recinto == 'Paraiso'){
     echo json_encode('Paraiso');
}else if($recinto_get_recinto == 'Turrialba'){
     echo json_encode('Turrialba');
}else{
     echo json_encode($recinto_get_recinto);
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