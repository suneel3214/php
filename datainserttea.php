<?php

include("dbcon.php");

if(isset($_POST['submit']))

{
echo $a = $_POST['name'];
echo $b = $_POST['tea'];
echo $c = $_POST['address'];
echo $d = $_POST['phone'];

$data = "INSERT INTO teashop(name,tea,address,phone)VALUES('$a','$b','$c','$d')";
mysqli_query($con,$data);
}
?>