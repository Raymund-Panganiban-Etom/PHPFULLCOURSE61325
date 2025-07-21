<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitive&validateinput.php" method ="post">
        Username:</br>
        <input type="text" name="username"></br>
        <label for="">Age</label>
        <input type="text" name="age"></br>
        <label>Email</label>
        <input type="text" name="email"></br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

//  This prevent from entering malicious code to check it 
if(isset($_POST["login"])){

    $username = filter_input(INPUT_POST/* GET*/, "username", FILTER_SANITIZE_SPECIAL_CHARS);// FILTERS MALICIOS KEY TO PREVENT HACKING TO NOT EXECUTE HIS CODE
    $age = filter_input(INPUT_POST/* GET*/, "age", FILTER_SANITIZE_NUMBER_INT);// filter and detect only number and remove other letter or special character
    $email = filter_input(INPUT_POST/* GET*/, "email", FILTER_SANITIZE_EMAIL);// filter any special character in email
     $age = filter_input(INPUT_POST/* GET*/, "age", FILTER_VALIDATE_INT);
     $email = filter_input(INPUT_POST/* GET*/, "email", FILTER_VALIDATE_EMAIL);
    
// $username = $_POST["username"];

echo "Hello {$username}<br>";
echo "You are {$age} years old<br>";
echo $email;

// checking valid number or not

$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if(empty($age)){
    echo " It is not valid number";
}else{
    echo "You are {$age} years old";
}

if(empty($email)){
    echo " It is not valid email";
}else{
    echo "You are {$email} in email";
}

}




?> 
