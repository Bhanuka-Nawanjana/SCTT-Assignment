<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $id=$_GET['registration_number'];
      $sql="SELECT * FROM course WHERE registration_number='$id'";
      $result=mysqli_query($data,$sql);
      $info=$result->fetch_assoc();
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
    
	
<?php
// Assuming $info is initialized or fetched from the database

// Check if $info is not null and if 'registration_number' key exists
if(isset($info) && isset($info['registration_number'])) {
    echo "<h1>{$info['registration_number']}</h1>";
} else {
    echo "<h1>Registration number not found</h1>";
}
?>
        <table border="1px">
            <tr>
                <th class="table_th">Semester</th>
                <th class="table_th">Course ID</th>
                <th class="table_th">Course Name</th>
                <th class="table_th">Marks</th>
                
                <th class="table_th">Update</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {

            ?>
            <tr>
                <td class="table_td">
                    <?php echo "{$info['semester']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['course_id']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['course_name']}";  ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['marks']}";  ?>
                </td>
                
                
                <td class="table_td">
                    <?php echo "<a class='btn btn-primary' href='update_marks.php?registration_number={$info['registration_number']}&course_id={$info['course_id']}'>Update</a>";  ?>
                </td>

            </tr>

            <?php
            }
            ?>
        </table>

		


	</div>

</body>
</html>
