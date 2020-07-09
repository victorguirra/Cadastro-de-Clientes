<?php

$userName = "localhost";
$serverName = "root";
$password = "";
$db_name = "clients_register";

$connect = mysqli_connect($userName, $serverName, $password, $db_name);

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}