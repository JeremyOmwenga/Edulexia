<?php

$mysql = new mysqli("localhost","root","","edulexia");

$email =  $_REQUEST['mail'];
$dob = $_REQUEST['dateofbirth'];
$password = $_REQUEST['password'];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
    echo '<script> alert("Weak password. Please try registering again.");
          window.location="http://localhost/edulexia/registration.html";
          </script>';
          
}else{

    $sql = "INSERT INTO tbl_users (uname_mail, dob, password) VALUES ('$email' , '$dob' , '$password')";

        if(mysqli_query($mysql, $sql))
        {
            echo '<script> alert("Successfully registered. Login to proceed.");
            window.location="http://localhost/edulexia/login.html";
            </script>';
        }
            else
                {
            echo '<script> alert("Registration failed. Please try again.");
            window.location="http://localhost/edulexia/login.html";
            </script>';
                }

mysqli_close($mysql);
}

?>