<?php


include"dbcon.php";
if(isset($_POST['update']))
{
	echo $id = $_POST['id'];
	echo $a = $_POST['student_name'];
	echo $b = $_POST['email'];
	echo $c = $_POST['mobile_number'];
	echo $d = $_POST['address'];
	echo $e = $_POST['gender'];
	echo $f = $_POST['college'];
	echo $g = $_POST['qualification'];
	echo $h = $_POST['branch'];
	echo $i = $_POST['semester'];
	echo $j = $_POST['intrenship_course'];

    $data = "UPDATE intrenship SET student_name='$a',email='$b',mobile_number='$c',address='$d',gender='$e',college='$f',qualification='$g',branch='$h',semester='$i',intrenship_course='$j' WHERE id=$id";
    $result= mysqli_query($con,$data);
    if ($result) {
    	header('Location:intrenship_display.php');
    }
 }

?>