
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <form action="reg.php" method="post">
            <label for="User">Username</label><br>
            <input type="text" id="User" name="User" placeholder="Juan_123"><br>
            <label for="Pass">Password</label><br>
            <input type="text" id="Pass" name="Pass"><br><br>
            <input type="submit" value="Register" name="Register" ></form><br>
        <p>Have an account? <a href="login.php">Login</a></p><br>
    </body>
    </html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="reg.php" method="post">
        <label for="User">Username</label><br>
        <input type="text" id="User" placeholder="Juan_123" name="User"><br>
        <label for="Pass">Password</label><br>
        <input type="password" id="Pass" name="Pass"><br>
        <input type="submit" value="Register" name="Register"><br>
    </form>
    <p>Have an account? <a href="login.php">Login</a></p>
</body>
</html>

    <?php

// normal syntax (basic syntax)
// session_start();
// include("db.php");
// if(isset($_POST['Register'])){
//     $username = $_POST['Users'];
//     $password = $_POST['Pass'];
//     if(empty($username) || empty($password)){
//         echo "Please Fill Username and Password";
//     }else{ 
//         $usernames = $username;
//         $passwords = $password;
//         $sql = "INSERT INTO practice (User, Pass) VALUES ('$usernames', '$passwords')";
//         try{
//             mysqli_query($connect, $sql);
//             echo " Registered! ";
//         }catch(mysqli_sql_exception){
//             echo " Not Registered ";
//         }
//     }

// }else{
//     echo "Nothing";
// }


// secured syntax
// session_start();
// include("db.php");

// if(isset($_POST['Register'])){
//     $username = $_POST['Users'];
//     $password = $_POST['Pass'];
    
//     if(empty($username) || empty($password)){
//         echo "Please Fill Username and Password";
//     } else {
//         // Hash the password for security
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
//         // Prepared statement to prevent SQL injection
//         $stmt = $connect->prepare("INSERT INTO practice (User, Pass) VALUES (?, ?)");
//         $stmt->bind_param("ss", $username, $hashed_password);
        
//         try {
//             if($stmt->execute()){
//                 echo "Registered!";
//             }
//         } catch(mysqli_sql_exception $e) {
//             echo "Not Registered: " . $e->getMessage();
//         }
        
//         $stmt->close();
//     }
// } else {
//     echo "Nothing";
// }

// SECURED SYNTAX WITH USERNAME FILTERING
// include("db.php");
// if(isset($_POST['Register'])){
//     $username = $_POST['User'];
//     $password = $_POST['Pass'];
//     if(empty($username) || empty($password)){
//         echo "Please fill username and password";
//     }else{
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//         $stmt = $connect->prepare("SELECT * FROM practice WHERE User=?");
//         $stmt->bind_param("s", $username);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         if($result->num_rows > 0){
//             echo "Username is already exists.";
//         }else{
//             $st = $connect->prepare("INSERT INTO practice (User, Pass) VALUES (?,?)");
//             $st->bind_param("ss", $username, $hashed_password);
//             try{
//                 if($st->execute()){
//                     echo "Registered!";
//                 }
//             }catch(mysqli_sql_exception $e){
//                     echo "Not Registered: " . $e->getMessage();


//                 }
        
//         }
//     }
// }

include("db.php");
if(isset($_POST['Register'])){
    $username = $_POST['User'];
    $password = $_POST['Pass'];
    if(empty($username) || empty($password)){
        echo "Please fill username and password";
    }else{
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $connect->prepare("SELECT * FROM practice WHERE User = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            echo "Username is already exists!";
        }else{
            $stamt = $connect->prepare("INSERT INTO practice (User, Pass) VALUES (?, ?)");
            $stamt->bind_param("ss", $username, $hashed_password);
            try{
                if($stamt->execute()){
                    echo "Registered!";
                }
            }catch(mysqli_sql_exception $e){
                echo "Not Registered: " . $e->getMessage();
            }
        }

        } 
}

  

                    

                    ?>
                    
