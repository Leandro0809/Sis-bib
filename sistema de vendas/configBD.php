<?php
error_reporting(E_ALL);
ini_set("display_erros", 1);


$HOST = '127.0.0.1';
$BASE = 'venda';
$USER = 'leo';
$PASS = 'leo';


$conn = new PDO('mysql:host=' . $HOST . '; dbname=' . $BASE, $USER, $PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM cliente';
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->fetchAll();


var_dump($stmt->fetchAll());

        print_r("sistema");

        
?>