<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $id=$_GET['registration_number'];
      $sql="SELECT * FROM students WHERE registration_number='$id'";
      $result=mysqli_query($data,$sql);
      $info=$result->fetch_assoc();


      if(isset($_POST['update']))
      {
        $rN=$_POST['RN'];
        $fName=$_POST['FirstName'];
        $lName=$_POST['LastName'];
        $dob=$_POST['dob'];
        $gender=$_POST['Gender'];
        $email=$_POST['email'];
        $intake=$_POST['intake'];
        $phone=$_POST['phone'];
        $degree=$_POST['degree'];

          $query="UPDATE students set registration_number='$rN',firstname='$fName',lastname='$lName',dob='$dob',gender='$gender',email='$email',phone='$phone',intake='$intake',degree='$degree' WHERE registration_number='$id'";
          $result2=mysqli_query($data,$query);

          if($result2)
        {
           header("location:view_student.php");
        }
       

    }




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<header class="header">
		
		<a href="">Admin Dashboard</a>

		<div class="logout">
			
			<a href="logout.php" class="btn btn-primary">Logout</a>

		</div>

	</header>


	<aside>
		
    <ul>
			
			<li>
				<a href="adminhome.php">Home</a>
			</li>

			<li>
				<a href="add_student.php">Add Student</a>
			</li>

			<li>
				<a href="view_student.php">View Student</a>
			</li>

			<li>
				<a href="add_course.php">Add Courses</a>
			</li>
			<li>
				<a href="view_course.php">View Courses</a>
			</li>


		</ul>


	</aside>


	<div class="content">
		
		<h1>Update Student</h1>

        <div>
            <form action="#" method="POST">
               <div>
                    <lable>Registration Number</lable>
                    <input type="text" name="RN" value="<?php echo "{$info['registration_number']}";  ?>">
               </div>
               <div>
                    <lable>First Name</lable>
                    <input type="text" name="FirstName" value="<?php echo "{$info['firstname']}";  ?>">
               </div>
               <div>
                    <lable>Last Name</lable>
                    <input type="text" name="LastName" value="<?php echo "{$info['lastname']}";  ?>">
               </div>
               <div>
                    <lable>DOB</lable>
                    <input type="date" name="dob" value="<?php echo "{$info['dob']}";  ?>">
               </div>
               <div>
                    <lable>Gender</lable>
                    <input type="text" name="Gender" value=" <?php echo "{$info['gender']}";  ?>">
               </div>
               <div>
                    <lable>Email</lable>
                    <input type="email" name="email" value="<?php echo "{$info['email']}";  ?>">
               </div>
               <div>
                    <lable>Phone</lable>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}";  ?>">
               </div>
               <div>
                    <lable>Intake</lable>
                    <input type="text" name="intake" value="<?php echo "{$info['intake']}";  ?>">
               </div>
               <div>
                    <lable>Degree</lable>
                    <input type="text" name="degree" value="<?php echo "{$info['degree']}";  ?>">
               </div>
               <div>
                    <input type="submit" name="update" value="Update">
               </div>





            </form>



	</div>

</body>
</html>
