<!DOCTYPE html>
<!-- \ -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="getandpost.php" method="POST">
    <label  for="">Username:</label>
    <input type="text" name="Username" placeholder="ex.JuanDelaCruz123"></br>
       <label  for="">Password:</label>
    <input type="password" name="Password" ></br>
    <input type="submit" value="Log in">

 </form>



 <form action="getandpost.php" method="POST">
    <label for="">quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
 </form>
</body>
</html>

<?php
// echo "{$_GET ["Username"]}<br>";  

// echo "{$_GET ["Password"]}<br>";

echo "{$_POST ["Username"]}<br>"; 

echo "{$_POST ["Password"]}<br>";

$item = "pizza";
$price = 5.99;
// $quantity = $_GET ["quantity"];  // YOU WILL SEE THE INPUT IN URL WHILE POST IS NOT
$quantity = $_POST ["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "Your total is: \${$total}";


?>  