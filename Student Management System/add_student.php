<?php

session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }





    $host="localhost";
    $user="root";
    $password="";
    $db="SMSDB";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['add_student']))
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
        
        $sql="INSERT INTO students(registration_number,firstname,lastname,dob,gender,email,phone,intake,degree) VALUES ('$rN','$fName','$lName','$dob','$gender','$email','$phone','$intake','$degree')";

        $result=mysqli_query($data,$sql);
        if($result)
        {
            echo "data uploaded successfully";
        }
        else
        {
            echo "upload failed"; 
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

<style type="text/css">
    lable
    {
        display: inline-block;
        text-align:right;
        width: 100px;
        padding-top:10px;padding-bottom:10px;
    }
    .div_form
    {
        background-color: skyblue;
        width: 400px;
        height: 450px;
    }
</style>

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
		<center>
		<h1>Add Student</h1>
        <div class="div_form">
            <form action="#" method="POST">
               <div>
                    <lable>Reg. Number</lable>
                    <input type="text" name="RN">
               </div>
               <div>
                    <lable>First Name</lable>
                    <input type="text" name="FirstName">
               </div>
               <div>
                    <lable>Last Name</lable>
                    <input type="text" name="LastName">
               </div>
               <div>
                    <lable>DOB</lable>
                    <input type="date" name="dob">
               </div>
               <div>
                    <lable>Gender</lable>
                    <input type="text" name="Gender">
               </div>
               <div>
                    <lable>Email</lable>
                    <input type="email" name="email">
               </div>
               <div>
                    <lable>Phone</lable>
                    <input type="number" name="phone">
               </div>
               <div>
                    <lable>Intake</lable>
                    <input type="text" name="intake">
               </div>
               <div>
                    <lable>Degree</lable>
                    <input type="text" name="degree">
               </div>
               <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="add student">
               </div>





            </form>
        </div>
</center>



	</div>

</body>
</html>
