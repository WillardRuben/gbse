<?php
$user=$_POST['user'];
$pass=$_POST['pass'];


$connection = ssh2_connect('root@localhost', 22);
ssh2_auth_password($connection, 'root', 'adminpsa');

$blackList = $_POST['bloqueio'];

$sites = ssh2_exec($connection, 'echo ${blackList} > /etc/squid3/blacklist.txt');


?>
