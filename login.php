

    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <label for="user">Username</label><br>
            <input type="text" id="user" placeholder="Juan_123" name="Users"><br>
            <label for="pass">Password</label><br>
            <input type="password" placeholder="*******" name="Pass"><br>
            <input type="submit" value="Login" name="Login"><br>
        </form><br>
        <p>Have not an account? <a href="reg.php">Register</a></p>
    </body>
    </html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form action="login.php" method="post">
    <label for="Use">Username</label><br>
    <input type="text" id="Use" placeholder="Juan_123" name="User"><br>
    <label for="Pass">Password</label><br>
    <input type="password" id="Pass" name="Pass"><br>
    <input type="submit" value="Login" name="Login"><br>
</form>
<p>Have not an account? <a href="reg.php">Register</a></p>

</body>
</html>


    <?php

// normal syntax(basic syntax)
// include("db.php");

// if(isset($_POST['Login'])){
//     $username= "$_POST[Users]";
//     $password= "$_POST[Pass]";
//     $_SESSION['User']= $username;
//     if(empty($username) || empty($password)){
//         echo "Fill Username and Password!";
//     }else{
//         $usernames = $username;
//         $passwords = $password;
        
//         $sql = "SELECT * FROM practice WHERE User = '$usernames' AND Pass='$passwords'";
//         $result = mysqli_query($connect, $sql);
//         if(mysqli_num_rows($result) > 0){
//             Header("Location: welcome.php");

//         }else{
//             echo "Wrong Username or Password";
//         }
//     }
// }else{
//     echo "Nothing";
// }

//secured syntax
// include("db.php");

// if(isset($_POST['Login'])){
//     $user = $_POST['Users'];
//     $pass = $_POST['Pass'];

//     if(empty($user) || empty($pass)){
//         echo "Please fill username and password";
//     } else {
//         // First, fetch user by username only
//         $stmt = $connect->prepare("SELECT * FROM practice WHERE User = ?");
//         $stmt->bind_param("s", $user);
//         $stmt->execute();
//         $result = $stmt->get_result();
        
//         if($result->num_rows > 0) {
//             $row = $result->fetch_assoc();
            
//             // Verify the plain text password against the hashed password
//             if(password_verify($pass, $row['Pass'])) {
//                 // Login successful
//                 session_start();
//                 $_SESSION['username'] = $user;
//                 header("Location: welcome.php");
//                 exit();
//             } else {
//                 echo "Invalid username or password";
//             }
//         } else {
//             echo "Invalid username or password";
//         }
        
//         $stmt->close();
//     }
// }

include("db.php");

if(isset($_POST['Login'])){
    $username = $_POST['User'];
    $password = $_POST['Pass'];
    if(empty($username) || empty($password)){
        echo "Please fill Username and Password";
    }else{

    $stmt = $connect->prepare("SELECT * FROM practice WHERE User = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result= $stmt->get_result();

    if($result->num_rows > 0){
        
    $row = $result->fetch_assoc();
    if(password_verify($password, $row['Pass'])){
        session_start();
        $_SESSION['USER'] = $username;
        header("Location: welcome.php");
        exit();
    }else{
        echo "Wrong Password";
    }
    }else {
        echo "Wrong Username";
    }


    }
}


?>
