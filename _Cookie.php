<?php

// cookie = Information about a user stored in a user's web-browser targeted advertisement , browsing preferences , and other non-sensitive date

setcookie("fav_food", "Pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "Water", time() + (86400 * 3), "/");
setcookie("fav_dessert", "Mango Shake", time() + (86400 * 4), "/");

// to see cookie value

foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}
if(isset($_COOKIE["fav_food"])){
    echo "BUY SOME {$_COOKIE["fav_food"]}";
}

// to see cookie value

// right click in screen of live php then click application and find cookie/ click and pick local host under cookie



//  for deleting cookie start


// setcookie("fav_food", "Pizza", time() -0, "/");
// setcookie("fav_drink", "Water", time() -0, "/");
// setcookie("fav_dessert", "Mango Shake", time() -0, "/");

// for deleting cookie end

?> 