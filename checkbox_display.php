<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center" style="margin-top: 20px">
	<div class="row">
		<div class="col-md-12">
			<h1>STUDENT RECORDS</h1>
		</div>
	</div>
</div>
<table class="table table-bordered text-center">
	<tr style="background-color:green;">
		<th>ID</th>
		<th>STUDENT-NAME</th>
		<th>EDUCATION</th>
		<th>ACTION</th>
    </tr>

			<?php
             
                include "dbcon.php";
                $data = "select * from check12";
                $result = mysqli_query($con,$data);
                while($a=mysqli_fetch_array ($result)) {
            
			?>

			    <tr>
			       <td><?php echo $a['id']?></td>
			       <td><?php echo $a['name']?></td>
			       <td><?php echo $a['education']?></td>
			       <td>
				            <a href="show1.php?id=<?php echo $a['id']?>" class="btn btn-info">show</a>
				            <a href="" class="btn btn-danger">edit</a>
				            <a href="" class="btn btn-success">delete</a>
			       </td>
		        </tr>
<!-- show.php?id=1 -->
	<?php

     }

     ?>
</table>
</body>
</html>