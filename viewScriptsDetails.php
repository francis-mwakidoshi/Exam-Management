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
        <meta name="author" content="francis" />
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
                        <li class="nav-item"><a class="nav-link" href="examOfficer.php">Manage Users</a></li>					
						<li class="nav-item">
							<div class="dropdown">
							  <button class="btn dropdown-toggle text-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								<?php echo $_SESSION['userName']; ?><i class="fa-solid fa-user"></i>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="../index.html">logout</a></li>
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
				 
				  <p class="display-6">Scripts Collection| Return Form Details</p>
				   <table id="example" class="table table-striped table-hover" style="width:100%">
					<thead>
						<tr>
						   <th>ID</th>
						   <th>Lecturer`s Name</th>
							<th>Exam Name</th>
							<th>Exam Code</th>
							<th>Number of Scripts</th>
							<th>Lecturer`s Contact</th>
							<th>Satus</th>
							<th>Update Record</th>
							<th>Delete Record</th>
						</tr>
					</thead>
					<tbody>
						  <?php
								$sel = "select * from scriptscollection";
								$run = mysqli_query($con, $sel);
								$i = 0;
								while ($row = mysqli_fetch_array($run))
								{
				
									$id = $row['id'];
									$lecturesName = $row['lecturesName'];
									$examName = $row['examName'];
									$examCode = $row['examCode'];
									$numberOfScripts = $row['numberOfScripts'];
									$LecturerContact = $row['LecturerContact'];
									$status = $row['status'];
									
									$i++;
							?>
							<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $lecturesName; ?></td>
							<td><?php echo $examName; ?></td>
							<td><?php echo $examCode; ?></td>
							<td><?php echo $numberOfScripts; ?></td>
							<td><?php echo $LecturerContact; ?></td>
							<td><?php echo $status; ?></td>
							<td><button type="button" class="btn btn-warning  btn-sm" data-bs-toggle="modal" data-bs-target="#" href="#scriptsUpdateModal">Update Record</button></td>
							<td><a href="viewScriptsDetails.php? delete=<?php echo $id; ?>" class="delete"><button type="button" class="btn btn-danger btn-sm">Delete Record</button></a></td>
							</tr>
							<?php
								} ?>
					</tbody>
					<tfoot>
						<tr>
						    <th>ID</th>
						    <th>Lecturer`s Name</th>
							<th>Exam Name</th>
							<th>Exam Code</th>
							<th>Number of Scripts</th>
							<th>Lecturer`s Contact</th>
							<th>Satus</th>
							<th>Update Record</th>
							<th>Delete Record</th>
						</tr>
					</tfoot>
				</table>
		  <?php
						if (isset($_GET['delete']))
						{
							$delete_id = $_GET['delete'];
							$delete = "DELETE FROM `scriptscollection` WHERE `scriptscollection`.`id` ='$delete_id'";
							$run_delete = mysqli_query($con, $delete);
							if ($run_delete)
							{
								echo "<script>alert('Record deleted successfully')</script>";
								echo "<script>window.open('viewScriptsDetails.php','_self')</script>";
							}
						}
                 ?>
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
			
	 <!-- scriptsUpdateModal modal popup-->
        <div class="portfolio-modal modal fade" id="scriptsUpdateModal"  role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <span class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></span>
                    <div class="container">
                        <div class="justify-content-center">
						  <div class="">
                            <div class="m-4 p-4 shadow">
                                <div class="modal-body">
								
								
								<div class="">  <!--<div class="card mb-3 shadow">-->
								  <div class="row g-0">
									<div class="col-md-8">
									  <div class="card-body">
										<form action="#">
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">lecturesName  &nbsp;<i class="fa-solid fa-address-card"></i></span> 
												   <input type="text" class="form-control" id="lecturesName" name="lecturesName" value="lectures Name" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Exam Name  &nbsp; <i class="fa-brands fa-nfc-directional"></i></i></span> 
												   <input type="text" class="form-control" id="examName" name="examName" value ="examName" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Exam Code &nbsp;<i class="fa-brands fa-nfc-directional"></i></span> 
												 <input type="text" class="form-control" id="examCode" name="examCode" value="Exam Code" disabled>
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Number Of Scripts &nbsp;<i class="fa-solid fa-user-check"></i></span> 
												  
												   <input type="text" class="form-control" id="numberOfScripts" name="numberOfScripts" value="numberOfScripts" disabled>
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Lecturer`s Contact  &nbsp;<i class="fa-solid fa fa-phone"></i></span> 
												   <input type="text" class="form-control" id="LecturerContact" name="LecturerContact" value="070800936" disabled>
											</div>
												<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Status &nbsp; <i class="fa-brands fa-nfc-directional"></i></span> 
												    <select class="form-select">
													  <option>Pick</option>
													  <option>Return</option>
													</select>
											</div>
											
											<div class="text-right">
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
													<i class="fa-solid fa-circle-check"></i>
													Update
												</button>
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
													<i class="fas fa-xmark me-1"></i>
													Cancel
												</button>
											</div>
											
										  </form>
									  </div>
									</div>
									
									
								  </div>
								</div>	                                    
                                    
                                </div>
                            </div>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
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
		 <script>
			  $('a.delete').on('click', function() {
				var choice = confirm('Do you really want to delete this record?');
				if(choice === true) {
					return true;
				}
				return false;
			});
  </script>
    </body>
</html>
<?php
} ?>