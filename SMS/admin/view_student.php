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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

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

<!-- Header -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="Logo" height="30" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-2" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-5">
          <a class="nav-link" href="adminhome.php">Home</a>
        </li>
		<li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="view_student.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_student.php">Add Student</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_student.php">View Student</a> </li>
			</ul>
        </li>
        <li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="view_course.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_course.php">Add Course</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_course.php">View Course</a> </li>
			</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: green;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header End -->

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">
        <img src="image/profile.png" alt="Admin Logo" height="100" class="d-inline-block align-top">
        <br>Admin
    </a>
    <a href="#">Settings</a>
    <a href="#">Change Password</a>
    <a href="logout.php" style="color: green;">Logout</a>
</div>
<!-- Sidebar End -->

<!-- Main Content -->
<div class="main">
	<div class="content">
    <h5>View Students</h5>
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
            </tr>
            <tr>
                <td>
                    <?php echo "<a onClick=\"javascript:return confirm('Are you sure to delete this');\" class='btn btn-danger' href='delete.php? registration_number={$info['registration_number']}'>Delete</a>";  ?>
                </td>
                <td>
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
