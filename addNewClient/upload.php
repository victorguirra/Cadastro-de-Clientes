<?php

require_once '../db_connection.php';

if(isset($_POST['addClient'])){
    $name = mysqli_escape_string($_POST['name']);
    $age = mysqli_escape_string($_POST['age']);
    $email = mysqli_escape_string($_POST['email']);
    $telephone = mysqli_escape_string($_POST['telephone']);
    
    $sql = "INSERT INTO data_clients (`id`, `name`, `age`, `email`, `telephone`) VALUES (NULL, '$name', '$age', '$email', '$telephone')";
    $result = mysqli_query($connect, $sql);

    if($result){
        header('Location: ../index.php');
    }else{
        echo "Falha ao cadastrar cliente";
    }
}