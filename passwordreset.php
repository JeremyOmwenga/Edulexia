<?php

$mysql = new mysqli("localhost","root","","edulexia");

$email = $_POST['email']; 
$newpassword = $_POST['password'];


$uppercase = preg_match('@[A-Z]@', $newpassword);
$lowercase = preg_match('@[a-z]@', $newpassword);
$number    = preg_match('@[0-9]@', $newpassword);
$specialChars = preg_match('@[^\w]@', $newpassword);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newpassword) < 6) {
    echo '<script> alert("Weak password. Please try again.");
          window.location="http://localhost/edulexia/passwordreset.html";
          </script>';
}
else
{

$sql = "select * from tbl_users where uname_mail = '$email'";  
$results = mysqli_query($mysql, $sql);  
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);  
$count = mysqli_num_rows($results); 

if($count == 1)
{ 
    $sql = "UPDATE tbl_users SET password='$newpassword' WHERE uname_mail = '$email'";
    if(mysqli_query($mysql, $sql))
        {
    echo '<script> alert("Password successfully changed.");
    window.location="http://localhost/edulexia/login.html";
    </script>';
        }
}
else
{
    echo '<script> alert("Password change unsuccessful.");
    window.location="http://localhost/edulexia/passwordreset.html";
    </script>';
}
mysqli_close($mysql);
}
?>