<?php
    session_start();
    include './include/dbconnect.php';

    $username = $_GET['username'];
    $password = $_GET['password'];

    $username_db = "";
    $password_db = "";

    $id_db = "";
    
    if(empty($_POST["submit"])){
        
        $sql = "SELECT * FROM userverwaltung WHERE
                Username ='$username' AND
                Passwort = md5('$password')
        ";
        $res = mysqli_query($db, $sql);
        $anzahl = mysqli_num_rows($res);

        while ($row = mysqli_fetch_assoc($res)) {
            $username_db = $row['Username'];
            $password_db = $row['Passwort'];
            $id_db = $row['UserId'];
        }

        if ($username == $username_db) {
            if ((md5($password)) == $password_db) {
                
                $_SESSION['username'] = $username_db;
                $_SESSION['id'] = $id_db;
                $_SESSION['loggedin'] = true;
                
                header('Location: welcome.php');
            }
        } else {
            header('Location: index.php');
        }
        

    }
    
?>