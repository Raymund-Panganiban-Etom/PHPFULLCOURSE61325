<?php

// session_start();
// echo "WELCOME " . $_SESSION['UserFSDFA'] . "<br>";

session_start();
echo "WELCOME " . $_SESSION['USER'] . "<br>";

 ?>

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
 <body>
     <form action="welcome.php" method="post">
         <input type="submit" value="Logout" name="Logout">
     </form>
    
 </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
<form action="welcome.php" method="post">
    <input type="submit" value="Logout" name="Logout">
</form>

</body>
</html>


<?php


// include("db.php");

// $getdata = "SELECT * FROM practice ";
// $result = mysqli_query($connect, $getdata);
// if(mysqli_num_rows($result) > 0){
//     $row = mysqli_fetch_assoc($result);
//     echo "User " . $row['User'] . "<br>";
    
//  }

// if(isset($_POST['Logout'])){
//     session_destroy();
//     Header("Location: login.php");
// }

if(isset($_POST['Logout'])){
    session_destroy();
    header("Location: login.php");
}

?>
