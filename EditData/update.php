<?php

require_once '../db_connection.php';

if(isset($_POST['updateData'])){
    $id = mysqli_escape_string($_POST['id']);
    $name = mysqli_escape_string($_POST['name']);
    $age = mysqli_escape_string($_POST['age']);
    $email = mysqli_escape_string($_POST['email']);
    $telephone = mysqli_escape_string($_POST['telephone']);
    
    $sql = "UPDATE data_clients SET";
    $result = mysqli_query($connect, $sql);

    if($result){
        header('Location: ../index.php');
    }else{
        echo "Falha ao cadastrar cliente";
    }
}