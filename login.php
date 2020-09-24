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
        $res = mysql_query($sql, $db);
        $anzahl = @mysql_num_rows($res);

        if($anzahl > 0){
            //Welcome screen loading 
        }

    }
    
?>