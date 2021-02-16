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
               
               <form method="post" action="intrenshipdatainsert.php"> <!-- form start -->
		    <div class="form-group">
			<label>Student Name</label>
			<input type="text" name="name" required="required" placeholder="Enter Name" class="form-control">			
		    </div>		

		    <div class="form-group">
			<label>Email</label>
			<input type="text" name="email" required="required" placeholder="Enter Email" class="form-control">
			<p>We"ll never share your email with anyone else.</p>		
		    </div>	

		    <div class="form-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" required="required" placeholder="Enter Mobile Number" class="form-control">			
		    </div>

		    <div class="form-group">
			<label>Address</label>
		    <textarea class="form-control" required="required" name="address"></textarea>
			</div>	

		    <div class="form-group">
			<label>Gender</label>
			<br>
			 <input type="radio" name="gender" required="required" value="male"> male
			 <br>
            <input type="radio" name="gender" required="required" value="female"> female			
		    </div>
  
		    <div class="form-group">
			<label>College</label>
			<select class="form-control" name="college" required="required">
			<option>Select</option>
			<option>B.M college</option>
			<option>RJIT college</option>
			<option>MITS college</option>
			<option>ITM college</option>
			<option>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Qualification</label>
			<select class="form-control" name="qualification" required="required">
			<option>Select</option>
			<option>B.C.A</option>
			<option>B.TECH</option>
			<option>M.C.A</option>
			<option>B.S.C</option>
			<option>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Branch</label>
			<select class="form-control" name="branch" required="required">
			<option>Select</option>
			<option>C.S.E</option>
			<option>I.T</option>
			<option>E.T</option>
			<option>CIVIL</option>
			<option>MACHANICAL</option>
			<option>AUTO MOBILE</option>
			<option></option>
			<option>Other</option>
			</select>
		    </div>

		    <div class="form-group">
			<label>Semester</label>
			<select class="form-control" name="semester" required="required">
			<option>Select</option>
			<option>1st Semester</option>
			<option>2nd Semester</option>
			<option>3rd Semester</option>
			<option>4th Semester</option>
			<option>5th Semester</option>
			<option>6th Semester</option>
			<option>7th Semester</option>
			<option>8th Semester</option>
			
			</select>
		    </div>

		    <div class="form-group">
			<label>Internship Course</label>
			<select class="form-control" name="intrenship_course" required="required">
			<option>Select</option>
			<option>Web Designing Internship Course (45 Days)</option>
			<option>Web Development Internship Course (90 Days)</option>
			<option>PHP</option>
			<option>Angular 9</option>
			<option>Laravel 7</option>
			<option>Vue js</option>
			<option>React JS</option>
			<option>React Native </option>
			
			</select>
		    </div>
        
		    <input type="submit" name="submit" value="submit" class="btn btn-info">

		    </form><!-- form end -->

            <br>
			
		    </div> <!-- row end -->

	        </div> <!-- container end -->

	        <br><br>



</body>
</html>

 