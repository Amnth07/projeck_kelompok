<?php
    $connection = new mysqli("localhost", "root", "", "angkringan");
    $nama      = $_POST['nama']; 
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    
    $result = mysqli_query($connection, "insert into user set nama='$nama', email='$email', password='$password'");
    
    if($result){
        echo json_encode([
            'message' => 'Data input successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to input'
        ]);
    }