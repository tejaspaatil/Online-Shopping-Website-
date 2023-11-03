<?php
require 'config.php';
if(isset($_POST["submit"])){
    // $name = $_POST["name"];
    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM userregister WHERE userid = '$userid' OR email = '$email'");

    if(mysqli_num_rows($duplicate) > 0){
        echo   "<script> alert('UserID or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO userregister VALUES ('', '$userid', '$email', '$password', '$confirmpassword')"; 
            mysqli_query($conn, $query);
            echo  "<script> alert('Registration Successful'); </script>";
        }
        else{
        echo  "<script> alert('Username or Email Has Already Taken'); </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
</head>
<body>
    <div class="form-box">
        <!-- <h1>Registration</h1> -->
        <form id="register" class="input-group" class="" action="" method="post" autocomplete="off">

            <!-- <label for="userid">UserID :</label> -->
            <input type="userid" class="input-field" name="userid" id="userid" required value="" placeholder="User Id">
            <!-- <label for="email">Email :</label> -->
            <input type="email" class="input-field" name="email" id="email" required value="" placeholder="Email"> 
            <!-- <label for="password">Password :</label> -->
            <input type="password" class="input-field" name="password" id="password" required value="" placeholder="Password">
            <!-- <label for="confirmpassword">Confirm Password :</label> -->
            <input type="confirmpassword" class="input-field" name="confirmpassword" id="confirmpassword" required value="" placeholder="Confirm Password">

            <button type="submit" class="submit-btn" name="submit">Register</button>

            
            <!-- <button type="button" onclick="location.href='login.php'">Login</button> -->
            
        </form>
        <span>Already have an Account?</span>
        
        <button type="button" onclick="location.href='login.php'">Login</button>
        <!-- <a href="login.php">Login</a> -->
    </div>
    
</body>
</html>