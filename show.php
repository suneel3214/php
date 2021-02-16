<?php

include"dbcon.php";

if(isset($_GET['id']))
{
echo $id = $_GET['id']; 
$i = "SELECT * FROM intrenship where id = $id";
$result = mysqli_query($con,$i);
$a = mysqli_fetch_array($result);
}
?>

<h2><?php echo $a['student_name']?></h2>
<h2><?php echo $a['email']?></h2>
<h2><?php echo $a['mobile_number']?></h2>
<h2><?php echo $a['address']?></h2>
<h2><?php echo $a['gender']?></h2>
<h2><?php echo $a['college']?></h2>
<h2><?php echo $a['qualification']?></h2>
<h2><?php echo $a['branch']?></h2>
<h2><?php echo $a['semester']?></h2>
<h2><?php echo $a['intrenship_course']?></h2>