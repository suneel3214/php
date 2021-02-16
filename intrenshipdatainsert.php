<?php

include("dbcon.php");
if(isset($_POST['submit']))

{
	echo $a = $_POST['name'];
	echo $b = $_POST['email'];
	echo $c = $_POST['mobile'];
	echo $d = $_POST['address'];
	echo $e = $_POST['gender'];
	echo $f = $_POST['college'];
	echo $g = $_POST['qualification'];
	echo $h = $_POST['branch'];
	echo $i = $_POST['semester'];
	echo $j = $_POST['intrenship_course'];

	$data = "INSERT INTO intrenship(student_name,email,mobile_number,address,gender,college,qualification,branch,semester,intrenship_course)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
	mysqli_query($con,$data);
}

?>