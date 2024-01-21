<?php
include_once 'dbconnection.php';
$email=$_POST["email"];
$pass=$_POST["password"];
echo "$email, $pass";
$sql="insert into login values('$email','$pass')";
if(mysqli_query($con,$sql)){
    echo "record entered";
    header("location:http://localhost/Info-Tech-solu/login.html");
}
else{
    die("UNABLE TO ENTER FRECORD ".mysqli_query_error());
}
mysqli_close($con);
?>