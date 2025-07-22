<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" > <!--TO GET CURRENT FILE NAME THEN GO BACK TO LIVE PHP AND GO TO LINK AND TRY TO CHANGE THE LINK INTO LATEST FILE NAME THAT CHANGE htmlsepcialchars() use for filtering malicious code from hacker -->
        Username:<br>
        <input type="text" name="user" placeholder="eg. Juan Dela Cruz">
        <input type="Submit" name= "Log" >
    </form>
</body>
</html>


<?php

// $_SERVER = SGB That contains headers, paths, and script locations.
// the entries in this  array are created by the web server.
// Shows nearly everything you need to know about  the current web page env.

// foreach($_SERVER as $key => $value){ // see all server 
//     echo "{$key} = {$value} <br>";
// }



if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "MEOW";
}



?> 