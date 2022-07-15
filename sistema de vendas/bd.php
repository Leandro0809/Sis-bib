<?php

require_once 'configBD.php';

define('SERVER', 'mysql');
define('BASE', 'sistema_vendas');
define('SENHA', 'ifbaiano');
deifine('USER', 'admin');


try{
    $con = new pdo('mysql:localhost='.SERVER . ':dbname='.BASE,USER,SENHA);
    echo "conexão ok";

} catch( PDOException $e){
    echo 'erro gerado'. $e->getMessage();
}

?>