<?php
$server="localhost";
$uname="root";
$pass="";
$db="solution";
$con=mysqli_connect($server,$uname,$pass,$db);
if(!$con){
    die("Failed:". mysqli_connect_error());
}
?>