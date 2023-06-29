<?php

$mysql = new mysqli("localhost","root","","edulexia");

$email = $_POST['email'];  
$password = $_POST['password'];

$sql = "select * from tbl_users where uname_mail = '$email' and password = '$password'";  
$results = mysqli_query($mysql, $sql);  
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
$count = mysqli_num_rows($results); 

if($count == 1)
{ 
    session_start();
    $_SESSION['USERNAME']=$row['uname_mail'];
    echo '<script> alert("Successfully logged in.");
    window.location="http://localhost/edulexia/dashboard.php"; 
    </script>';

}

    else
    {
        echo '<script> alert("Login failed. Please try again.");
        window.location="http://localhost/edulexia/login.html"; 
        </script>';
    }




mysqli_close($mysql);

?>
