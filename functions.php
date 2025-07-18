<?php

function Leagueof_Legends($Name,$lvl, $Clan, $Build ){
    echo "$Name, Level $lvl mastery <br>";
    echo "Legendary ultimate clan $Clan <br>";
    echo "Best Build is $Build <br><br>";
}

Leagueof_Legends("Garen", 7, "Demacian", "Black Clever" );
Leagueof_Legends("Darius", 4, "Noxian", "Infinity Edge" );
Leagueof_Legends("Master Yi", 5, "Unknown", "Blade of the Ruined King" );

// ==============================================
//% modulus to check if it is even or odd number
function is_even($number){
    return $number % 2;/* 1 for odd or 2 for even */ // if answer is 1 means no depend on whole number use either 1 or 2;  if answer is 0 means yes depend on whole number use either 1 or 2
}

echo is_even(5) . "<br>"; 


// hypotenuse======================

// function hypotenuse( float $a,int $b) //  we can add data type inside the parameter
function hypotenuse($a, $b){
    $hypo = sqrt($a * 2 + $b * 2);
    echo "Hypotenuse is $hypo <br>";
}

hypotenuse(1 ,2);
hypotenuse(1000000 ,2000000);



?> 