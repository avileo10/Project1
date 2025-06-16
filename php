<?php

$n=$_POST['name'];
$c=$_POST['password'];
$con=mysqli_connect("localhost","root","","project1");
$sql="INSERT INTO users(Name,Password) values('$n', '$c')";
$r=mysqli_query($con, $sql);
 if($r)
 {
echo "LOGIN DETAILS SUCCESSFULLY ADDED";
 }

else
{
echo " DETAILS NOT ADDED";
}
?>
