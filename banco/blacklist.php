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

// $login = $_POST['login'];
// $senha = MD5($_POST['senha']);
// $connect = mysql_connect('localhost','root','adminpsa');
// $db = mysql_select_db('squid3');
// $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
// $select = mysql_query($query_select,$connect);
// $array = mysql_fetch_array($select);
// $logarray = $array['login'];
//
//   if($login == "" || $login == null){
//     echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
//
//     }else{
//       if($logarray == $login){
//
//         echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
//         die();
//
//       }else{
//         $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
//         $insert = mysql_query($query,$connect);
//
//         if($insert){
//           echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
//         }else{
//           echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
//         }
//       }
//     }





?>
