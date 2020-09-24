<?php
    include("dbconnet.php");
    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if(!empty($_POST["submit"])){
        
        $sql = "SELECT * FROM userverwaltung WHERE
                Username ='$username' AND
                Passwort ='$password'
        "
        $res = mysql_query($sql, $db)

    }
    
?>