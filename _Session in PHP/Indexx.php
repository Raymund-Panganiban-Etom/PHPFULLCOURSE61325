<?php

session_start();    // WE CAN USE IT IN LOG IN AND WELCOME PAGE APPEARING THE USERNAME THAT ENTER OF USER IN REGISTRATION!!!!!!!!!!!! IN  WELCOME OR HOMEPAGE , USE CREDENTIAL ENTER BY USER IN REGISTER ALL ACCROSS LOCAL FILES


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Indexx.php" method="post">
    <label for="labelu">Username</label><br>
    <input type="text" name="username" id="labelu"><br>
    <label for="labelp">Password</label><br>
    <input type="password" name="password" id="labelp"><br>
    <input type="submit" name ="Login" value="Login"><br>
</form>
</body>
</html>

<?php


if (isset($_POST["Login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
      
         $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"]  . "<br>";
        header( "Location: homes.php"); // Go to other local file no need use hyperlinks in Html
    }
    else{
            echo "Please Fill Username or Password <br>";
    }
}




?> 