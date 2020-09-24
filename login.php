<?php
    include './include/dbconnect.php';

    SESSION_START();

    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if(!empty($_POST["submit"])){
        
        $sql = "SELECT * FROM userverwaltung WHERE
                Username ='$username' AND
                Passwort ='$password'
        ";
        $res = mysqli_query($sql, $db);
        $anzahl = mysqli_num_rows($res);
        echo "Hallo";
        if($anzahl > 0){
            //Welcome screen loading 
            echo "Erfolgreich";
        }

    }
    
?>