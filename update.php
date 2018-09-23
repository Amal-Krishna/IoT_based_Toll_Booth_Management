<?php
session_start();
$con=mysqli_connect("localhost","root","","details");
$n=$_GET["ramt"];
$x=$_SESSION['y'];
echo $n;
echo "<br>";

$m=mysqli_query($con,"select * from rfdata where Regno='$x'");
$a=mysqli_fetch_array($m);
$v=$a['Deposit'];
$s=$v+$n;
mysqli_query($con,"update rfdata set Deposit='$s' where Regno='$x'");
header('location:recharge.html');

?>