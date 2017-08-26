<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$restart=$_POST['reiniciar'];

$connection = ssh2_connect('127.0.0.1', 22);
echo $connection;

if (ssh2_auth_password($connection, 'root', 'adminpsa')) {
  $stream = ssh2_exec($connection, 'service squid3 start');
  stream_set_blocking($stream,true);
  $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
  $output = stream_get_contents($stream_out);
  echo $stream;
  echo $output;
  echo "Authentication Successful!\n";
} else {
  die('Authentication Failed...');
}

?>
