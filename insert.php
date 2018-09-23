<?php
$con=mysqli_connect("localhost","root","","details");
$n=$_POST["regno"];
$m=$_POST["name"];
$x=$_POST["deposit"];
$y=$_POST["vtype"];
$d=$_POST["email"];
$e=$_POST["phnum"];
echo $n;
echo $m;
echo $x;
echo $y;
echo $d;
echo $e; 
mysqli_query($con,"insert into rfdata (Regno,Username,Vehicle_type,Email,Phone_num,Deposit) values ('$n','$m','$y','$d','$e','$x')");
header('location:register.html');
?>