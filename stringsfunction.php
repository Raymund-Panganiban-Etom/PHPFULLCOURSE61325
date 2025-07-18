<?php


$username = "Ray the Code";
$usernames = array("Bro", "The", "Code");
$phone = "123-456-7890";

// $username = strtolower($username); // instant small
// $username = strtoupper($username); //instant capital
// $username = trim($username); // remove white spaces
// $username = str_pad($username,20,"="); // 20 == letter, spaces and number only, "=" == additional to fill empty spaces
// $phone = str_replace("-", "", $phone); // "-"== indicate what the thing to change , "" == thing that must replace which is blank or whatever you want!
// $username = strrev($username);// reverse letter
// $username = str_shuffle($username); // shuffle letter
// $equals = strcmp($username, "Bro Code"); // 1 equal == no && 0  equal yes in string
// $count = strlen($phone); // count how many letter or number have
// $index = strpos($phone , "-"); // count "-" in string &phone
// $index = substr($username ,0, 3); // get first name which is ray in $username                  ______________> Ray
// $firstname = substr($username, 0, 3);// same above                                            |                the 
// $lastname = substr($username, 4); //  get last name which is Code in $username                |                Code
$fullname = explode(" ", $username); // scatter the 3 words using " " from this Ray The Code to ----------- 
$usernames = implode(" ", $usernames); // Opposite in above , for short to make single string from different array

echo $usernames . "<br>";

foreach($fullname as $name){
    echo $name . "<br>";
}

echo $username . "<br>";
echo $phone . "<br>";
echo $equals . "<br>";
echo $count . "<br>";
echo $index . "<br>";
echo $firstname . "<br>";
echo $lastname . "<br>";

?> 