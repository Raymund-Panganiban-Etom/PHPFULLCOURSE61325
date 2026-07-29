<?php



$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";
$connect = "";

try{
    $connect = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    echo "Connected<br>";
}catch(mysqli_sql_exception){
    echo "Not Connected<br>";
}

?>