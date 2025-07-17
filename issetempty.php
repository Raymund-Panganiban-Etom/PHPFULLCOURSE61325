<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetempty.php" method="post">
        <label for="">Username:</label>
        <input type="text" name= "user">
        <label for="">Password:</label>
        <input type="password" name= "pass">
        <input type="submit" name = "login" value="Log In" > 

    </form>
</body>
</html>


<?php

// isset() = returns TRUE if variable  is declared   ~~ empty() = returns TRUE if variable is not declared or null

// $username = "kjjlkh";
$username = null;

// echo isset($username);
echo empty($username);

if(isset($username)){
    echo "All set";
}else{
    echo "Not set";
}

if(empty($username)){
    echo "All empty";
}else{
    echo "Not empty";
}

// ==== back end of the html 


foreach($_POST as $key => $value){// To see the text input
    echo "{$key} = {$value} <br>";
}


if(isset($_POST["login"])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if(empty($user && $pass)){
        echo "Please enter Username or Password";
    }else{
        echo "Welcome {$user} !";
    }
}

?> 