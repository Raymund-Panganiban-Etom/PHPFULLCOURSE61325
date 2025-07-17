<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
        <label for="">Enter Country</label>
        <input type="text" name="country">
        <input type="submit" value= "Submit">
    </form>
</body>
</html>

<?php

// array = "variable@ which can hold  more than one value  t a time 

$foods = array("apple", "orange" , "banana", "coconut");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>"; // but use foreach instead on this

$foods[0]= "Pineappple"; // to move pineapple in top and remove appli from array
array_push($foods, "Mango", "Starfruit");  //insert things to array
array_pop($foods); // remove item in button
array_shift($foods); //remove item in top  
$foods = array_reverse($foods); // reverse the order of array

echo count($foods) . "<br>"; // count item from array

foreach($foods as $food){
    echo $food . "<br>";
}

// Associative array ==========================================
// countries => capitals
// id => username
// item => price

// backend for getting capital by typing country by user 


$capitals = array("USA" => "WASHINGTON D.C","JAPAN" => "KYOTO", "SOUTH KOREA" => "SEOUL", "INDIA" => "NEW DELHI");

$capital = $capitals[$_POST["country"]]; // backend for getting capital by typing country by user 
echo "The capital is $capital <br>";
                                     // backend for getting capital by typing country by user -end
// echo $capitals["USA"] . "<br>";

$capitals["JAPAN"] = "kyoto";
$capitals["CHINA"] = "BEIJING"; // Insert file to capitals
$capitals = array_flip($capitals); // flip country and capital

foreach($capitals as $loot => $key){
    echo "{$loot} = {$key}<br>";
}
// select only the country or capital - end

// $loots = array_keys($capitals); // for country only
$loots = array_values($capitals); // for capital only



foreach($loots as $box){
    echo "{$box}" . "<br>";
}
// select only the country or capital - end
?>  