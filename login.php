<?php
include_once 'dbconnection.php';
$email=$_POST["email"];
$pass=$_POST["password"];
$sql="select * from login where email='$email' and pass='$pass'";
$result=mysqli_query($con,$sql);
if($result){
    echo "login sucessfull";
    
    header("location:http://localhost/Info-Tech-solu/index.html");
}
else{
    echo "user name or password is incorrect ".mysqli_query_connect();
}
mysqli_close($con);
?>