 
<!-- show code start -->
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
<!-- update code end -->


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.a{	
            width: 520px;         
            background-color: #fff;
		}
		body{
			background-color: #d6b23d;
		}

	</style>
    </head>
    <body>
	        <br>
	        <div class="container"> <!-- container start -->
		    <div class="row"> <!-- row start -->
			<div class="col-md-6" style="background-color: black">

				<h1 class="text-light" style="font-size: 25px">Do Summer Internship From Home!.</h1>
				<p class="text-light">Once you"re registered, you can:</p>
				<p class="text-light">In Case any query, Kindly Contact: 7000846823</p>
                <hr class="a">
			    <img src="img/pnimage.jpg" width="520" height="790">
			    <h1 class="text-light" style="font-size: 25px">Learn from the comfort of your home</h1>
			    <p class="text-light" style="padding-right: 21px">work-from-home transformational program aimed at building the leaders of tomorrow. Any college student from any degree, stream, and year of study can apply for this program.</p>

			</div>

			<div class="col-md-6 bg-light">
				<br>
				<center><h1 class="text-info" style="font-size: 30px;font-weight: bold;">Registration Form 2020</h1></center>
               
               <form method="post" action="update.php">
               	<input type="text" name="id" value="<?php echo $a['id'] ?>">
                <!-- form start -->
		    <div class="form-group">
			<label>Student Name</label>
			<input type="text" name="student_name" required="required" placeholder="Enter Name" class="form-control" value="<?php echo $a['student_name'] ?>">			
		    </div>		

		    <div class="form-group">
			<label>Email</label>
			<input type="text" name="email" required="required" placeholder="Enter Email" class="form-control" value="<?php echo $a['email'] ?>">
			<p>We"ll never share your email with anyone else.</p>		
		    </div>	

		    <div class="form-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile_number" required="required" placeholder="Enter Mobile Number" class="form-control" value="<?php echo $a['mobile_number'] ?>">			
		    </div>

		    <div class="form-group">
			<label>Address</label>
		    <textarea class="form-control" required="required" name="address"><?php echo $a['address'] ?></textarea>
			</div>	

		    <div class="form-group">
			<label>Gender</label>
			<br>
			 <input type="radio" name="gender" required="required" value="male"
			 <?php
			 if($a['gender']=='male'){
			 	echo "checked";
			 }
			 ?>
			 > male
			 <br>
            <input type="radio" name="gender" required="required" value="female"
               <?php
			 if($a['gender']=='female'){
			 	echo "checked";
			 }
			 ?>
            >
             female			
		    </div>
  
		    <div class="form-group">
			<label>College</label>
			<select class="form-control" name="college" required="required">
			<option>Select</option>
			<option value="b.m"
			<?php
			 if($a['college']=='B.M college'){
			 	echo "selected";
			 }
			 ?> 
			>B.M college</option>
			<option
			value="RJIT college"
			<?php
			 if($a['college']=='RJIT college'){
			 	echo "selected";
			 }
			 ?>  
			>RJIT college</option>
			<option
			value="MITS college"
			<?php
			 if($a['college']=='MITS college'){
			 	echo "selected";
			 }
			 ?> 
			>MITS college</option>
			<option
			value="ITM college"
			<?php
			 if($a['college']=='ITM college'){
			 	echo "selected";
			 }
			 ?> 
			>ITM college</option>
			<option
			value="Other"
			<?php
			 if($a['college']=='Other'){
			 	echo "selected";
			 }
			 ?> 
			>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Qualification</label>
			<select class="form-control" name="qualification" required="required">
			<option>Select</option>
			<option <?php
			 if($a['qualification']=='B.C.A'){
			 	echo "selected";
			 }
			 ?> 
			 >B.C.A</option>
			<option value="B.TECH"
			<?php
			 if($a['qualification']=='B.TECH'){
			 	echo "selected";
			 }
			 ?>>B.TECH</option>
			<option  value="M.C.A"<?php
			 if($a['qualification']=='M.C.A'){
			 	echo "selected";
			 }
			 ?>>M.C.A</option>
			<option  value="B.S.C"<?php
			 if($a['qualification']=='B.S.C'){
			 	echo "selected";
			 }
			 ?>>B.S.C</option>
			<option value="Other"<?php
			 if($a['qualification']=='Other'){
			 	echo "selected";
			 }
			 ?>>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Branch</label>
			<select class="form-control" name="branch" required="required">
			<option>Select</option>
			<option value="C.S.E"<?php
			 if($a['branch']=='C.S.E'){
			 	echo "selected";
			 }
			 ?>>C.S.E</option>
			<option value="I.T"<?php
			 if($a['branch']=='I.T'){
			 	echo "selected";
			 }
			 ?>>I.T</option>
			<option value="E.T"<?php
			 if($a['branch']=='E.T'){
			 	echo "selected";
			 }
			 ?>>E.T</option>
			<option value="CIVIL"<?php
			 if($a['branch']=='CIVIL'){
			 	echo "selected";
			 }
			 ?>>CIVIL</option>
			<option value="MACHANICAL"<?php
			 if($a['branch']=='MACHANICAL'){
			 	echo "selected";
			 }
			 ?>>MACHANICAL</option>
			<option value="AUTO MOBILE"<?php
			 if($a['branch']=='AUTO MOBILE'){
			 	echo "selected";
			 }
			 ?>>AUTO MOBILE</option>
			<option value="Other"<?php
			 if($a['branch']=='Other'){
			 	echo "selected";
			 }
			 ?>>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Semester</label>
			<select class="form-control" name="semester" required="required">
			<option>Select</option>
			<option value="1st Semester"<?php
			 if($a['semester']=='1st Semester'){
			 	echo "selected";
			 }
			 ?>>1st Semester</option>
			<option  value="2nd Semester"<?php
			 if($a['semester']=='2nd Semester'){
			 	echo "selected";
			 }
			 ?>>2nd Semester</option>
			<option  value="3rd Semester"<?php
			 if($a['semester']=='3rd Semester'){
			 	echo "selected";
			 }
			 ?>>3rd Semester</option>
			<option  value="4th Semester"<?php
			 if($a['semester']=='4th Semester'){
			 	echo "selected";
			 }
			 ?>>4th Semester</option>
			<option  value="5th Semester"<?php
			 if($a['semester']=='5th Semester'){
			 	echo "selected";
			 }
			 ?>>5th Semester</option>
			<option  value="6th Semester"<?php
			 if($a['semester']=='6th Semester'){
			 	echo "selected";
			 }
			 ?>>6th Semester</option>
			<option  value="7th Semester"<?php
			 if($a['semester']=='7th Semester'){
			 	echo "selected";
			 }
			 ?>>7th Semester</option>
			<option  value="8th Semester"<?php
			 if($a['semester']=='8th Semester'){
			 	echo "selected";
			 }
			 ?>>8th Semester</option>
			
			</select>
		    </div>

		    <div class="form-group">
			<label>Internship Course</label>
			<select class="form-control" name="intrenship_course" required="required">
			<option>Select</option>
			<option <?php
			if($a['intrenship_course']=='Web Designing Internship Course (45 Days)'){
				echo "selected";
			}
			?>>Web Designing Internship Course (45 Days)</option>
			<option <?php
			if($a['intrenship_course']=='Web Development Internship Course (90 Days)'){
				echo "selected";
			}
			?>>Web Development Internship Course (90 Days)</option>
			<option <?php
			if($a['intrenship_course']=='PHP'){
				echo "selected";
			}
			?>>PHP</option>
			<option <?php
			if($a['intrenship_course']=='Angular 9'){
				echo "selected";
			}
			?>>Angular 9</option>
			<option <?php
			if($a['intrenship_course']=='Laravel 7'){
				echo "selected";
			}
			?>>Laravel 7</option>
			<option <?php
			if($a['intrenship_course']=='Vue js'){
				echo "selected";
			}
			?>>Vue js</option>
			<option <?php
			if($a['intrenship_course']=='React JS'){
				echo "selected";
			}
			?>>React JS</option>
			<option <?php
			if($a['intrenship_course']=='React Native'){
				echo "selected";
			}
			?>>React Native </option>		
			</select>
		    </div>   

		    <input type="submit" name="update" value="update" class="btn btn-info">
		    <!-- form end -->
            <br>	
            </form>		
		    </div> <!-- row end -->
	        </div> <!-- container end -->
	        <br><br>

</body>
</html>