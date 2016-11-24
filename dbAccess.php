<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 23/11/16
 * Time: 23:42
 */
$usuario = "root";
$contraseña = "";

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ivwpagos', $usuario, $contraseña);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_BOTH);

    $statement = $pdo->prepare('SELECT * FROM pagos');

    $statement->execute();

    $results=$statement->fetchAll(PDO::FETCH_ASSOC);

    $json=json_encode($results);

    echo $json;

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();
}