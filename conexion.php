<?php 

$link = 'mysql:host=163.178.107.2;dbname=tarea1ExpertosB70448';
$usuario = 'labsturrialba';
$pass = 'Saucr.2191';

try{
    $pdo = new PDO($link,$usuario,$pass);

   // echo 'conectado';
}catch (PDOException $e){
    print "Error: " . $e->getMessage() . "</br>";
    die();
}

?>