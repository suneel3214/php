<?php 

include"dbcon.php";
if(isset($_POST['submit']))
{

$a = $_POST['name'];
$b = $_POST['class'];
$c = $_POST['city'];
$d = $_POST['address'];
$e = $_POST['phone'];
$f = $_POST['branch'];
$g = $_POST['college'];

$data = "INSERT INTO itm1(name,class,city,address,phone,branch,college)VALUES('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$data);

}

 ?>