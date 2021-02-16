<?php

include("dbcon.php");

if(isset($_POST['submit']))
{


 echo $a = $_POST ['name'];
 echo $b = $_POST ['city'];
 echo $c = $_POST ['address'];

$data = "INSERT INTO teacher(name,city,address)values('$a','$b','$c')";
mysqli_query($con,$data);

}


?>