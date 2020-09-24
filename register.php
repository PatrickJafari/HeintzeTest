<?php
    include './include/dbconnect.php';

    SESSION_START();

    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if(!empty($_POST["submit"])){
        
        $sql = "INSERT INTO userverwaltung (Username,Passwort) VALUES 
        ('$username','$password')       
        ";
        $res = mysqli_query($db, $sql);

    }
    
?>