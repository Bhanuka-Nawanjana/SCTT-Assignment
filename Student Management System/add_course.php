<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="SMSDB";

    $data=mysqli_connect($host,$user,$password,$db);
    if(isset($_POST['add_course']))
    {
        $rN=$_POST['RN'];
        $sem=$_POST['sem'];
        $cID=$_POST['courseId'];
        $cName=$_POST['courseName'];
        $marks=$_POST['marks'];
        
        $sql="INSERT INTO course (registration_number,semester,course_id,course_name,marks) VALUES ('$rN',' $sem','$cID','$cName','$marks')";

        $result=mysqli_query($data,$sql);
        if($result)
        {
            echo "Course uploaded successfully";
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
        height: 300px;
    }
</style>

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
		<center>
		<h1>Add Course</h1>

		  <div class="div_form">
            <form action="#" method="POST">
               <div>
                    <lable>Reg. Number</lable>
                    <input type="text" name="RN">
               </div>
               <div>
                    <lable>Semester</lable>
                    <input type="text" name="sem">
               </div>
               <div>
                    <lable>Course ID</lable>
                    <input type="text" name="courseId">
               </div>
               <div>
                    <lable>Course Name</lable>
                    <input type="text" name="courseName">
               </div>
               <div>
                    <lable>Marks</lable>
                    <input type="text" name="marks">
               </div>
               
               <div>
                    <input type="submit" class="btn btn-primary name="add_course" value="add Course">
               </div>





            </form>
        </div>
</center>

		


	</div>

</body>
</html>
