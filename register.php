<?php
session_start();
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['register'])){
    $fullName=mysqli_real_escape_string($con,$_POST['fullName']);
	$userName=mysqli_real_escape_string($con,$_POST['userName']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
    $password_confirm=mysqli_real_escape_string($con,$_POST['password_confirm']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password_confirm= password_hash($_POST['password_confirm'], PASSWORD_DEFAULT);
	$department=mysqli_real_escape_string($con,$_POST['department']);
	$role=mysqli_real_escape_string($con,$_POST['role']);

	$sel_name="select * from users where userName='$userName'";
	$run_name=mysqli_query($con,$sel_name);
	$check_name=mysqli_num_rows($run_name);

	if($check_name==1){
		echo"<script>alert('This userName is already registered,try another one!')</script>";
      echo"<script>window.open('examOfficer.php','_self')</script>";
		exit();
	}
	else{
		$_SESSION['userName']=$userName;
		$insert="INSERT INTO `users` (`id`, `fullName`, `userName`, `password`,`password_confirm`,`department`, `role`) VALUES (NULL, '$fullName', '$userName', '$password', '$password_confirm','$department', '$role')"; 	
		$run_insert=mysqli_query($con,$insert);
		if($run_insert){
			echo"<script>alert('User added successful')</script>";
            echo"<script>window.open('examOfficer.php','_self')</script>";
		}else{
			echo"<script>alert('Error try again')</script>";
            echo"<script>window.open('examOfficer.php','_self')</script>";
		}
}
}
?>
