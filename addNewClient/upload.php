<?php

require_once '../db_connection.php';

if(isset($_POST['addClient'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    
    $sql = "INSERT INTO data_clients (`id`, `name`, `age`, `email`, `telephone`) VALUES (NULL, '$name', '$age', '$email', '$telephone') "
}