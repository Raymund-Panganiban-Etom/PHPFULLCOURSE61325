<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobuttons.php"  method="POST">

    <input type="radio" name="credit_card" value="Visa">
    Visa</br>
     <input type="radio" name="credit_card" value="G cash">
    G cash</br>
     <input type="radio" name="credit_card" value="Filipino Express">
    Filipino Express</br>
    <input type="submit" name="confirm" value="confirm">
    

    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){

$credit_card = null; // use this to prevent redundant comment like this : 
// Notice: Undefined variable: credit_card in C:\xampp\htdocs\PHPCOURSE\radiobuttons.php on line 33

// Notice: Undefined variable: credit_card in C:\xampp\htdocs\PHPCOURSE\radiobuttons.php on line 37

// Notice: Undefined variable: credit_card in C:\xampp\htdocs\PHPCOURSE\radiobuttons.php on line 40

// NESTED IF======================================START

    if(isset($_POST["credit_card"])){
$credit_card = $_POST["credit_card"];
// echo $credit_card;
    }
    if($credit_card == "Visa"){
    
    echo "You selected Visa <br>";
    }
    elseif($credit_card == "G cash"){
        echo "You selected G cash <br>";
    }
     elseif($credit_card == "Filipino Express"){
        echo "You selected Filipino Express <br>";
    }
    else{
        echo "Please Select Credit Card Sir/Maam <br>";
    }
// NESTED IF======================================END

// SWITCH START============================== MORE CONVENIENT

switch($credit_card){

case "Visa": 
    echo "You selected Visa <br>";
    break;
case "G cash":
    echo "You selected Gcash <br>";
    break; 
case "Filipino Express":       
    echo "You selected Visa <br>";
    break;
default: 
    echo "Please select one of the above Sir/Maam <br>";
    break;

}



// SWITCH END================================

}



?> 