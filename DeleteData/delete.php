<?php

require_once '../db_connection.php';

if(isset($_POST['yesConfirm'])){
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM data_clients WHERE id = '$id'";
        
        if(mysqli_query($connect, $sql)){
            header('Location: ../index.php');
        }
    }
}