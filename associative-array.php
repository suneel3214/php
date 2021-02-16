<?php

$courses = array("c++"=>"1000","php"=>"1200","java"=>"12000");

 //echo $courses['java'];
//echo "<pre>";
//print_r($courses);
foreach ($courses as $key => $value) {
	echo "course: " . $key ."fees : " . $value . " <br> ";
}



?>