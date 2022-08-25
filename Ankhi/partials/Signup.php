<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dab.php';
    $name        = $_POST["fullname"];
    $username      = $_POST["username"];
    $email      = $_POST["email"];
    $password   = $_POST["password"];
    $cpassword  = $_POST["cpassword"];
    
    $sql2       = "INSERT INTO `user` (`Name`, `Email`, `Username`, `Password`) 
    VALUES ('$name','$email', '$username','$password');";
    if ($password == $cpassword){
        $result     = mysqli_query($conn, $sql2);
        echo "Done! Login to get started!";
        header( "refresh:2;url=../login.php" );
    }
    if ($password != $cpassword){
        echo "Password does not match";
        header( "refresh:2;url=../login.php" );
    }
    else{
        echo "Account already exists!";
        header( "refresh:2;url=../login.php" );
    }
    
}


?>