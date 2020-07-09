<?php

require_once '../db_connection.php';

if(isset($_POST['updateData'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    
    $sql = "UPDATE data_clients SET name = '$name', age = '$age', email = '$email', telephone = '$telephone' WHERE id = '$id'";
    
    if(mysqli_query($connect, $sql)){
        header('Location: ../index.php');
    }else{
        echo "Erro";
    }
}