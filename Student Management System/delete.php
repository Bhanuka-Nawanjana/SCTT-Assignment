<?php
 $host="localhost";
 $user="root";
 $password="";
 $db="SMSDB";

 $data=mysqli_connect($host,$user,$password,$db);

 if($_GET['registration_number'])
 {
    $student_id=$_GET['registration_number'];
    $sql="DELETE FROM students WHERE registration_number='$student_id'";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        Header("location:view_student.php");
    }
 }



?>