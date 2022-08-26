 <?php
session_start();
require 'mysqlConnect.php';
?>
 <?php
		if(isset($_POST['login'])){
		$userName=mysqli_real_escape_string($con,$_POST['userName']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		

		$sel="select * from users where userName='$userName'";
		$result=mysqli_query($con,$sel);
		if(mysqli_num_rows($result) > 0)
		{

		while($row = mysqli_fetch_array($result))
		{
		if(password_verify($password, $row["password"]))
		{
		//return true
		 $_SESSION['userName']=$userName;
		 $_SESSION['role']=$row['role'];
		if($_SESSION['role'] !=  'Exam Officer')
			{
				header("location: lecturer.php");
			}else{
		       header("location: examOfficer.php");
			}
		}
		else
		{
		//return false
		echo"<script>alert('wrong user details,try again!')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		exit();
		}
		}
		}
		else{

		echo"<script>alert('wrong user details,try again!')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		exit();
}
}
?>