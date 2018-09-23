<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Toll Management | Recharge </title>
    <link rel="stylesheet" href="css\style.css" />
  </head>
  <body>
  <header>
    <div class="container" >
      <div id="branding" >
         <h1><span class="highlight">Automated Toll </span> Management System</h1>
       </div>
       <nav>
         <ul>
           <li><a href="index.html">Home</a></li>
           <li><a href="about.html">About</a></li>
           <li><a href="register.html">Register</a></li>
           <li class="current"><a href="display.php">Details</a></li>
         </ul>
       </nav>
     </div>
  </header>
 

<?php
session_start();

$con=mysqli_connect("localhost","root","","details");

$n=$_POST["regno"];
$l=mysqli_query($con,"select * from rfdata where Regno='$n'");
$a=mysqli_fetch_array($l);
$_SESSION['y']=$a["Regno"];

?>
<table class="card_1 table table-striped table-hover" >
    <tr>
        <td>Registration number:</td>
        <td><?php echo $a['Regno'];?></td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><?php echo $a['Username'];?></td>
    </tr>
    <tr>
        <td>Current balance:</td>
        <td><?php echo $a['Deposit'];?></td>
    </tr>
    <tr>
        <td>Vehicle Type:</td>
        <td><?php echo $a['Vehicle_type'];?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $a['Email'];?></td>
    </tr>
    <tr>
        <td>Phone number:</td>
        <td><?php echo $a['Phone_num'];?></td>
    </tr>
</table>

<form action="update.php" method="get" >
<table class=" card_1 table table-striped table-hover">
    <tr>
        <td>Recharge amount:</td>
    </tr>
    <tr>
        <td><input type="text" name="ramt"></td>
    </tr>
    <tr>
        <td><input class="button_1" type="submit" value="Recharge"></td>
    <tr>
</table>
</form>

</body>
</html>


