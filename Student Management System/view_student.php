<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $sql="SELECT * FROM students";
      $result=mysqli_query($data,$sql);




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
    .table_th
    {
        padding: 20px;
        font-size:10px;
    }
    .table_td
    {
        padding: 20px;
        background-color: skyblue; 
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
		
		<h1>View Students</h1>
        <table border="1px">
            <tr>
                <th class="table_th">Registration Number</th>
                <th class="table_th">FirstName</th>
                <th class="table_th">LastName</th>
                <th class="table_th">DOB</th>
                <th class="table_th">Gender</th>
                <th class="table_th">Email</th>
                <th class="table_th">Phone</th>
                <th class="table_th">Intake</th>
                <th class="table_th">Degree</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {

            ?>
            <tr>
                <td class="table_td">
                    <?php echo "{$info['registration_number']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['firstname']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['lastname']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['dob']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['gender']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['email']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['phone']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['intake']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['degree']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "<a onClick=\"javascript:return confirm('Are you sure to delete this');\" class='btn btn-danger' href='delete.php? registration_number={$info['registration_number']}'>Delete</a>";  ?>
                </td>
                <td class="table_td">
                    <?php echo "<a class='btn btn-primary' href='update_student.php?registration_number={$info['registration_number']}'>Update</a>";  ?>
                </td>

            </tr>

            <?php
            }
            ?>
        </table>

		


	</div>

</body>
</html>
