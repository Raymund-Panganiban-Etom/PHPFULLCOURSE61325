<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FAKE BOOK</h1><br>
    <form action="Register.php" method="post">
        <label for="user">Username</label><br>
        <input type="text" name="users" id="user" placeholder="ex.Juan Dela Cruz"><br>
        <label for="pass">Passwords</label><br>
        <input type="password" name="passs" id="pass"><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>

<?php

include("databasereg.php");


if(isset($_POST["register"])){

$username = $_POST["users"];
$password = $_POST["passs"];

    if(empty($username) || empty($password)){
   
  echo "Please Fill Username and Password <br>";
   


 }else{
  
    $usernames = $username;
    $passwords = $password;

    $sqls = "INSERT INTO Form (Username, Password)
                 VALUES ('$usernames', '$passwords')";

 try{ 
 mysqli_query( $connect,$sqls);
 echo "Username is now Registered <br>";
 } 
 catch(mysqli_sql_exception){
    echo "Could not able to Register <br> ";  // for simplicity
 }

 mysqli_close($connect);// ignore red line in $connection

 header("Location: Welcome.php");
 }
 

 }else{
    echo "Please Fill Username and Password <br>";
 }

?>