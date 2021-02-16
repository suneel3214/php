<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>

		body{
			background-color: #92bdec;
			background-size: cover;
			background-repeat: no-repeat;
		}
		.img{
			width: 150px;
			height: 150px;
			border-radius: 100%;
		}
		.a{
			background-color: blue;
            border: none;
            border-radius: 25%;
		}
		.b{
			background-color: red;
            border: none;
            border-radius: 25%;
		}
		.c{
			background-color: yellow;
            border: none;
            border-radius: 25%;
		}
		.table{
			margin-top: 20px;
		}
	</style>
</head>
<body>
<div class="container text-center" style="margin-top: 20px">
	<div class="row">
		<div class="col-md-12">
			<img src="img/student.png" class="img">
			<h1>STUDENT RECORDS</h1>
		</div>
	</div>
</div>
<table class="table table-bordered text-center">
	<tr style="background-color: #dde26b;">
		<th>Sr.No</th>
		<th>STUDENT-NAME</th>
		<th>EMAIL</th>
		<th>MOBILE</th>
		<th>ADDRESS</th>
		<th>GENDER</th>
		<th>MORE DETAILS</th>
    </tr>

			<?php
             
                include "dbcon.php";
                $data = "select * from intrenship";
                $result = mysqli_query($con,$data);
                while($a=mysqli_fetch_array ($result)) {
            
			?>

			    <tr>
			       <td><?php echo $a['id']?></td>
			       <td><?php echo $a['student_name']?></td>
			       <td><?php echo $a['email']?></td>
			       <td><?php echo $a['mobile_number']?></td>
			       <td><?php echo $a['address']?></td>
			       <td><?php echo $a['gender']?></td>
			       <td>
				            <a href="show.php?id=<?php echo $a['id']?>" class="btn btn-info">show</a>
				            <a href="edit.php?id=<?php echo $a['id']?>" class="btn btn-danger">edit</a>
				            <a href="delete.php?id=<?php echo $a['id']?>" class="btn btn-success">delete</a>
			       </td>
		        </tr>
<!-- show.php?id=1 -->
	<?php

     }

     ?>
</table>
</body>
</html>