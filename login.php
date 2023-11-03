<?php
require 'config.php';
if(isset($_POST["submit"])){
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM userregister WHERE userid = '$userid'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: HomePage.php");
        }
        else{
            echo  "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo  "<script> alert('Username not Registered'); </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
</head>
<body>
    <div class="form-box">

        <form id="login" class="input-group" class="" action="" method="post" autocomplete="off">

            <input type="userid" class="input-field" name="userid" id="userid" required value="" placeholder="User Id">
            <input type="password" class="input-field" name="password" id="password" required value="" placeholder="Password">
            

            <button type="submit" class="submit-btn" name="submit">Login</button>
        </form>

        <span>Don't have Account Yet?</span>
        
        <button type="button" onclick="location.href='registration.php'">Register</button>
    </div>
    
</body>
</html>