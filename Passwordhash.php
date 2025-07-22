<?php

// hashing = transforming sensitive data (password)
// into letters, numbers, and/or symbols
// viaa mathematical process. (similar encryption)
// Hides the original data from 3rd parties.

$password = "Raymund123";

$hash =  password_hash($password, PASSWORD_DEFAULT); // can password turn into : $2y$10$qvggPDZVqhGNVEoiGBmdI.X1Os5aiNiMrND4JhOFTS4kktZ/FFgzC to avoid third party hacking

// echo $hash;

if (password_verify("Raymund123", $hash)){ // for confirmation in password from being change by PASSWORD_DEAFAULT
    echo "You're Log in <br>";
}else{
    echo "Incorrect Password <br>";
}


?>