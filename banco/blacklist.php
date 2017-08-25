<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$texto = $_POST['texto'];
//chmod("/var/www/html/gbse/arquivo/", 777);
$fp = fopen("/var/www/html/gbse/arquivo/blacklist.txt", "a+");
fwrite($fp, $texto . PHP_EOL);
fclose($fp);

header('Location: http://localhost/gbse/pages/bloqueio_sites.php');



// define( 'MYSQL_HOST', 'localhost' );
// define( 'MYSQL_USER', 'root' );
// define( 'MYSQL_PASSWORD', 'adminpsa' );
// define( 'MYSQL_DB_NAME', 'squid3' );
//
// $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
//
// try
// {
//     $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
//     echo 'conectou';
// }
// catch ( PDOException $e )
// {
//     echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
// }
//
// $PDO->exec("set names utf8");





?>
