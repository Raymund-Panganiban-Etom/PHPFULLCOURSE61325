<?php

// data type

// String
$name = "Raymund";
$food = "pizza";

// integer
$num = 1;

// float
$price = 0.34;

//  double
$d = 0.43243242;

// bool
$employed = true;
$online = false;

// calculation

$total = null;


echo "{$name} <br>";

echo "Hello {$name}<br>";

echo "Price: \${$price}<br>";

$total = $price + $d;

echo "Total: {$total}<br>";

echo "Employ: {$online}<br>";// 1 TRUE 0 FALSE
echo "Employ: {$employed}";

?>