<?php
session_start();
require 'mysqlConnect.php';
if (!$_SESSION['userName'])
{
    header("location: index.php");
}
else
{

if ($_SESSION['role'] !=  'Exam Officer')
{
    header("location: lecturer.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="exam" />
        <meta name="author" content="Francis" />
        <title>TUK -Examination Material Handling Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!--<a class="navbar-brand" href="#page-top"><img src="../assets/img/denihub.jpg" alt="..." /></a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
				  <div class="col-sm-6">
				    <div class="input-group mb-3">
					</div>
				  </div>
				  <div class="col-sm-6 clearfix">
                    <ul class="navbar-nav float-end ms-auto py-4 py-lg-0"> 
                        <li class="nav-item"><a class="nav-link" href="viewExamRoomDetails.php">View Exam Room Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewScriptsDetails.php">View Scripts Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="lecturer.php" target="_blank">Lecturer Form</a></li>						
						<li class="nav-item">
							<div class="dropdown">
							  <button class="btn dropdown-toggle text-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								<?php echo $_SESSION['userName']; ?><i class="fa-solid fa-user"></i>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="logout.php">logout</a></li>
							  </ul>
							</div>
                        
                        <!--<li class="nav-item"><a class="nav-link" href="#team">Team</a></li>-->
                        
                    </ul>
				  </div>
                </div>
            </div>
        </nav>
		
		
		
<!-- Services-->
 <?php
    if (isset($_GET['edit']))
    {
        $edit_id = $_GET['edit'];
        $sel = "select * from examroomdetails where id='$edit_id'";
        $run = mysqli_query($con, $sel);
        $row = mysqli_fetch_array($run);

        $department = $row['department'];
		$venue = $row['venue'];
		$examName = $row['examName'];
		$examCode = $row['examCode'];
		$studentsPresent = $row['studentsPresent'];
		$collectedBy = $row['collectedBy'];
		$examdaytime = $row['examdaytime'];
     
    }
?>
         <section class="page-section" id="services">
            <div class="container-fluid">
                <div class="row pt-3 text-center">
								 					
					<div class="card text-dark bg-light m-2">
					  <h5 class="card-header">Update Record</h5>
					    <div class="row g-0">
									<div class="col-md-8">
									  <div class="card-body">
										<form action="" method="post" enctype="multipart/form-data">
										<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Department  &nbsp;<i class="fa-solid fa-user-check"></i></span> 
												   <input type="text" class="form-control" id="department" name="department" value="<?php echo $department; ?>">
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Exam Venue  &nbsp;<i class="fa-solid fa-user-check"></i></span> 
												   <input type="text" class="form-control" id="venue" name="venue" value="<?php echo $venue; ?>">
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Exam Name  &nbsp; <i class="fa-solid fa-user-check"></i></i></span> 
												   <input type="text" class="form-control" id="examName" name="examName" value ="<?php echo $examName; ?>">
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Exam Code  &nbsp; <i class="fa-solid fa-user-check"></i></i></span> 
												   <input type="text" class="form-control" id="examCode" name="examCode" value ="<?php echo $examCode; ?>">
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Number Of Students Present  &nbsp; <i class="fa-solid fa-user-check"></i></i></span> 
												   <input type="text" class="form-control" id="studentsPresent" name="studentsPresent" value ="<?php echo $studentsPresent; ?>">
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Collected By  &nbsp; <i class="fa-solid fa-user-check"></i></i></span> 
												   <input type="text" class="form-control" id="collectedBy" name="collectedBy" value ="<?php echo $collectedBy; ?>">
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Date collected  &nbsp; <i class="fa-solid fa-user-check"></i></i></span> 
												   <input type="datetime-local" class="form-control" id="examdaytime" name="examdaytime" value ="<?php echo $examdaytime; ?>">
											</div>
											
											<div class="text-right">
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" name="update" type="submit" style="float:right;">
													<i class="fa-solid fa-circle-check"></i>
													Update
												</button>
											</div>
											
										  </form>
										  
										        <!-- /update logics -->
		
						 <?php
							if (isset($_POST['update']))
							{
						        $department = mysqli_real_escape_string($con, $_POST['department']);
								$venue = mysqli_real_escape_string($con, $_POST['venue']);
								$examName = mysqli_real_escape_string($con, $_POST['examName']);
								$examCode = mysqli_real_escape_string($con, $_POST['examCode']);
								$studentsPresent = mysqli_real_escape_string($con, $_POST['studentsPresent']);
								$collectedBy = mysqli_real_escape_string($con, $_POST['collectedBy']);
								$examdaytime = mysqli_real_escape_string($con, $_POST['examdaytime']);

								$update = "UPDATE `examroomdetails` SET `department` = '$department' , `venue` = '$venue', `examName` = '$examName', `examCode` = '$examCode', `studentsPresent` = '$studentsPresent', `collectedBy` = '$collectedBy', `examdaytime` = '$examdaytime' WHERE `examroomdetails`.`id`='$edit_id'";
								$run_update = mysqli_query($con, $update);
								if ($run_update)
								{   //echo "success";
									echo "<script>alert('Successful updated')</script>";
									echo "<script>window.open('viewExamRoomDetails.php','_self')</script>";
								}
								else
								{
									echo "<script>alert('Error please try again')</script>";
									
								   
								}
							}
						?>
									  </div>
									</div>
									
									
								  </div>
					 
					</div> 
			</div>
			</div>
        </section>    
       
        <!-- Footer-->
        <footer class="footer py-4 bg-dark text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; TUK 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
		
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap5.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/init.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		
    </body>
</html>
<?php
} ?>