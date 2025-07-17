<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loop</title>
</head>
<body>
    <form action="whileloop.php">
        <input type="submit" value="stop" name="stop" method="post">
    </form>
</body>
</html>
<?php
// while loop  = do some infinitely while some condition remains true

$counter = 0;

while($counter <10){
    $counter++;
    echo "{$counter}<br>";
}


$seconds = 0;
$running = true;

while($running){

if(isset($_POST["stop"])){
 $running = false;
}else{
$seconds++;
echo $seconds . "<br>";
}

}

?> 