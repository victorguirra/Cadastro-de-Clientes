<?php

$userName = "localhost";
$serverName = "root";
$password = "";
$db_name = "clients_register";

$connect = mysqli_connect($userName, $serverName, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()){
    echo "Erro na conexão: ".mysqli_connect_error();
}