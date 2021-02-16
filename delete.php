<?php

include"dbcon.php";

if (isset ($_GET['id'])){
	$id = $_GET['id'];
	$data = "DELETE FROM intrenship WHERE id = $id";
	$result = mysqli_query($con,$data);

	if ($result) {
		header('location:intrenship_display.php');
	}
}



?>