<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza</br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger</br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog</br>
        <input type="checkbox" name="taco" value="Taco">Taco</br>
        <input type="submit" name="checkit"> 

    </form>
<!-- fOR ARRAYYY======================================= -->
     <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foodarray[]" value="Pizza">Pizza</br> <!-- [] in name indicates it as array -->
        <input type="checkbox" name="foodarray[]" value="Hamburger">Hamburger</br>
        <input type="checkbox" name="foodarray[]" value="Hotdog">Hotdog</br>
        <input type="checkbox" name="foodarray[]" value="Taco">Taco</br>
        <input type="submit" name="check"> 

    </form>
</body>
</html>

<?php


if(isset($_POST["checkit"])){

// $fast_food = $_POST["Fastfood"];


    if(isset($_POST["pizza"])){         
        echo "You like Pizza <br>";
    }
    if(isset($_POST["hamburger"])){
        echo "You like Hamburger <br>";
    }
    if(isset($_POST["hotdog"])){
        echo "You like Hotdog <br>";
    }
    if(isset($_POST["taco"])){
        echo "You like Taco <br>";
    }
     if(empty($_POST["pizza"])){
        echo "You Don't like Pizza <br>";
    }
    if(empty($_POST["hamburger"])){
        echo "You Don't like Hamburger <br>";
    }
    if(empty($_POST["hotdog"])){
        echo "You Don't like Hotdog <br>";
    }
    if(empty($_POST["taco"])){
        echo "You Don't like Taco <br>";
    }
}
// use array============================================================================================================

if(isset($_POST["check"])){

    $food_array = $_POST["foodarray"];

    foreach($food_array as $foods){
        echo $foods . "<br>";
    }

}


?> 