<?php
    include("include/dbconnect.php");

   
    if(empty($_POST["submit"])){
        // Saving User
        $username = $_GET["username"];
        $password = $_GET["password"];

        // Checking if User Exists

        $sql_select_user = "SELECT username FROM userverwaltung WHERE username = '$username'";
        $sql_query_user = mysqli_query($db, $sql_select_user);

        if(mysqli_num_rows($sql_query_user) > 0) {
           echo "user already exist";
           header('Location: index.php');
        } else {
            $sql = "INSERT INTO `heintzetest`.`userverwaltung` (`Username`, `Passwort`) VALUES ('$username', MD5('$password'))";

            $insert = mysqli_query($db, $sql);
            header('Location: welcome.php');
        }
    }
    
?>