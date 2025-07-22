<?php
include("database.php");
// 1. MySQLi Extension -- use by now
// 2. PDO (PHP DATA OBJECTS) --PREFER BY MANY DEVELOPER

$name = "Edward";
$age = 20;
$username = "Brother";
$Password = "College";

$hash = password_hash($Password, PASSWORD_DEFAULT); // hash password to avoid hacking

$sql = "INSERT INTO credentials (Name , Age, User, Pass )
        VALUES ('$name', '$age', '$username', '$hash')";
        

// use this to avoid the user to see many text when there is an arror
try{ 
mysqli_query( $connection,$sql);
echo "Username is now Registered <br>";
}
catch(mysqli_sql_exception){
    echo "Could not able to Register <br> ";  // for simplicity
}

mysqli_close($connection);// ignore red line in $connection





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello<br>
</body>
</html>



