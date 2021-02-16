<?php

include"dbcon.php";

if (isset($_POST['submit'])) {
	echo $a = $_POST['name'];
	 $b = $_POST['education'];
	//print_r($b);

	$edu = implode(",",$b);
	echo $edu;

	$data = "INSERT INTO check12(name,education)VALUES('$a','$edu')";
	$result = mysqli_query($con,$data);

	if ($result) {
		echo "<script> alert('Data Inserted')</script>";
	}
}

?>