<?php

include("database.php");

echo " ===================== GET data from database ======================= <br>";

// $getdata = " SELECT * FROM credentials WHERE User = 'Brother' ";


$getdata = " SELECT * FROM credentials ";

$result = mysqli_query($connection, $getdata);

// for single selection

// if(mysqli_num_rows($result) > 0){
//     $row = mysqli_fetch_assoc($result);
//     echo $row["id"] . "<br>";
//     echo $row["Name"] . "<br>";
//     echo $row["Age"] . "<br>";
//     echo $row["User"] . "<br>";
//     echo $row["Pass"] . "<br>";
// }else {
//     echo " No user found";
// }


if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
    echo $row["id"] . "<br>";
    echo $row["Name"] . "<br>";
    echo $row["Age"] . "<br>";
    echo $row["User"] . "<br>";
    echo $row["Pass"] . "<br>";
   };
}
else {
    echo " No user found";
}

mysqli_close($connection);

?>