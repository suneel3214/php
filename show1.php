<?php

include"dbcon.php";

if(isset($_GET['id']))
{
echo $id = $_GET['id']; 
$i = "SELECT * FROM check12 where id = $id";
$result = mysqli_query($con,$i);
$a = mysqli_fetch_array($result);
}
?>

<h2><?php echo $a['name']?></h2>
<h2><?php echo $a['education']?></h2>
