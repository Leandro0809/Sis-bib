<?php

require_once '../App/Model/Autor.php';
require_once '../App/Controller/AutorController.php';

$autor = new AutorController;

//echo "Helo World";s


$autor->setNome("Netoque");
echo $autor->getNome();



# Fatal error: Uncaught Error: Class "App\Model\Autor" not found in C:\xampp\htdocs\lib\public\index.php:5 Stack trace: #0 {main} thrown in C:\xampp\htdocs\lib\public\index.php on line 5