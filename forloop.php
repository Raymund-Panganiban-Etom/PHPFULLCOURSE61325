<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="forloop.php" method="post">
    <label for="">Enter a number to count to:</label></br>
    <input type="text" name="counter">
    <input type="submit" value="Enter">
</form>

</body>
</html>




<?php

$number = $_POST["counter"];

for($n = 0; $n <= $number; $n++){

echo "{$n}<br>";

}


// for( $i=0; $i<100; $i++){
//     echo "{$i}. Raymund<br>";
    
// }


?> 