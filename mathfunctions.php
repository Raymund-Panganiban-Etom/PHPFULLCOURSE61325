<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathfunctions.php" method="POST">
        <label for="">x:</label>
        <input type="text" name="x">
           <label for="">y:</label>
        <input type="text" name="y">
        <label for="">z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
<!-- CALCULATE CIRCUMFERENCE -->
<form action="mathfunctions.php" method="POST">
    <label for="">radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
</form></br>

</body>
</html>

<?php
  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];
  $total = null;

//   $total = abs($x);       
// $total = round($x);
// $total = floor($x);    //4.
// $total = ceil($x);   // 4.1=5
// $total = sqrt($x);  // square root
// $total= pow($x, $y); // 4^2=16
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(); //random number
$total = rand(1, 10); // random number between 1 - 10

// Calculate Circumference

$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference ={$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume ={$volume}cm^3 <br>";


  echo $total;


?>  