<?php
session_start();
require 'mysqlConnect.php';
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="debt" />
        <meta name="author" content="emmanuel" />
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
         <section class="page-section" id="services">
            <div class="container-fluid">
                <div class="row pt-3 text-center">
				
				  <div class="col-md-6">				 					
					<div class="card text-dark bg-light m-2">
					  <h5 class="card-header">Exam Room Details</h5>
					  <div class="card-body">
						 <form class="form-horizontal"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="department" name="department" placeholder="Enter Department" required>
								</div>
							  </div>
							  </br>
							    <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter Exam Venue" required>
								</div>
							  </div>
							    </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="examName" name="examName" placeholder="Enter Exam Name" required>
								</div>
							  </div>
							  </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="examCode" name="examCode" placeholder="Enter Exam Code" required>
								</div>
							  </div>
							  </br>
							    <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="studentsPresent" name="studentsPresent" placeholder="Enter number of students present" required>
								</div>
							  </div>
							
							  </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="collectedBy" name="collectedBy" placeholder="Enter Collected By" required>
								</div>
							  </div>
							  </br>
							    <div class="form-group">
								<div class="col-sm-10">
								    <label for="examdaytime">Date collected (date and time):</label>
								   <input type="datetime-local" class="form-control" id="examdaytime" name="examdaytime" required>
								</div>
							  </div>
							  </br>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button name="subExam" type="submit" class="btn btn-primary" style= "float:right;">Submit</button>
								</div>
							  </div>
							</form>
							
											<?php 
			if(isset($_POST['subExam'])){
				
				$department=mysqli_real_escape_string($con,$_POST['department']);
				$venue = mysqli_real_escape_string($con,$_POST['venue']);
				$examName=mysqli_real_escape_string($con,$_POST['examName']);
				$examCode=mysqli_real_escape_string($con,$_POST['examCode']);
				$studentsPresent=mysqli_real_escape_string($con,$_POST['studentsPresent']);
				$collectedBy=mysqli_real_escape_string($con,$_POST['collectedBy']);
				$examdaytime=mysqli_real_escape_string($con,$_POST['examdaytime']);


			  if($department=='' || $venue==''|| $examName=='' || $examCode=='' || $studentsPresent=='' || $collectedBy=='' || $examdaytime==''){
				echo"<script>alert('please fill all field')</script>";
			    echo"<script>window.open('lecturer.php','_self')</script>";
				//exit();
			  }

			else{

				$insert="INSERT INTO `examroomdetails` (`id`, `department`, `venue`, `examName`, `examCode`, `studentsPresent`, `collectedBy` , `examdaytime`) VALUES (NULL, '$department', '$venue', '$examName', '$examCode', '$studentsPresent', '$collectedBy' , '$examdaytime')";
				$run_insert=mysqli_query($con,$insert);
				echo $run_insert;
				if($run_insert){
					echo"<script>alert('Successful added!')</script>";
					echo"<script>window.open('lecturer.php','_self')</script>";

				}
				else{
					
					//echo "test";
					  echo"<script>alert('Error please try again')</script>";
					  echo"<script>window.open('lecturer.php','_self')</script>";
				}
		}}

		?>
					  </div>
					</div> 
					
				  
				  </div>
				 
				    <div class="col-md-6">				 					
					<div class="card text-dark bg-light m-2">
					  <h5 class="card-header">Scripts Collection| Return Form</h5>
					  <div class="card-body">
						 <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="lecturesName" placeholder="Enter Lecturer`s Name" required>
								</div>
							  </div>
							  </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="examName" placeholder="Enter Exam Name" required>
								</div>
							  </div>
							  </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="examCode" placeholder="Enter Exam Code" required>
								</div>
							  </div>
							  </br>
							   <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="numberOfScripts" placeholder="Enter Number of Scripts" required>
								</div>
							  </div>
							  </br>
							    <div class="form-group">
								<div class="col-sm-10">
								  <input type="text" class="form-control" name="LecturerContact" placeholder="Enter Lecturer`s Contact" required>
								</div>
							  </div>
							 </br>
							   <label class="radio-inline">
								  <input type="radio" name="status"  value="picked" required>Pick
								</label>
								<label class="radio-inline">
								  <input type="radio" name="status"  value="returned" required>Return
								</label>
								
							  </br>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								
								<button name="subScript" type="submit" class="btn btn-primary"  style= "float:right;">Submit</button>
								</div>
							  </div>
							</form>
							
							<?php 
			if(isset($_POST['subScript'])){
				
				$lecturesName=mysqli_real_escape_string($con,$_POST['lecturesName']);
				$examName = mysqli_real_escape_string($con,$_POST['examName']);
				$examCode=mysqli_real_escape_string($con,$_POST['examCode']);
				$numberOfScripts=mysqli_real_escape_string($con,$_POST['numberOfScripts']);
				$LecturerContact=mysqli_real_escape_string($con,$_POST['LecturerContact']);
				$status=mysqli_real_escape_string($con,$_POST['status']);


			  if($lecturesName=='' || $examName==''|| $examCode=='' || $numberOfScripts=='' || $LecturerContact=='' || $status==''){
				echo"<script>alert('please fill all field')</script>";
			    echo"<script>window.open('lecturer.php','_self')</script>";
				//exit();
			  }

			else{

				$insert="INSERT INTO `scriptscollection` (`id`, `lecturesName`, `examName`, `examCode`, `numberOfScripts`, `LecturerContact`, `status`) VALUES (NULL, '$lecturesName', '$examName', '$examCode', '$numberOfScripts', '$LecturerContact', '$status')";
				$run_insert=mysqli_query($con,$insert);
				echo $run_insert;
				if($run_insert){
					echo"<script>alert('Successful added!')</script>";
					echo"<script>window.open('lecturer.php','_self')</script>";

				}
				else{
					
					//echo "test";
					  echo"<script>alert('Error please try again')</script>";
					  echo"<script>window.open('lecturer.php','_self')</script>";
				}
		}}

		?>
					 
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
