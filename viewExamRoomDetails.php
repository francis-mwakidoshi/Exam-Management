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
        <meta name="author" content="farancis" />
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
					   <li class="nav-item"><a class="nav-link" href="viewScriptsDetails.php">View Scripts Details</a></li>	
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
				  <p class="display-6">Exam Room Details</p>
				   <table id="example" class="table table-striped table-hover" style="width:100%">
					<thead>
						<tr>
						    <th>ID</th>
						    <th>Department</th>
							<th>Exam Venue</th>
							<th>Exam Name</th>
							<th>Exam Code</th>
							<th>Number of Students Present</th>
							<th>Collected By</th>
							<th>Date Collected</th>
							<th>Update Record</th>
							<th>Delete Record</th>
						</tr>
					</thead>
					<tbody>
					
					  <?php
								$sel = "select * from examroomdetails";
								$run = mysqli_query($con, $sel);
								$i = 0;
								while ($row = mysqli_fetch_array($run))
								{
				
									$id = $row['id'];
									$department = $row['department'];
									$venue = $row['venue'];
									$examName = $row['examName'];
									$examCode = $row['examCode'];
									$studentsPresent = $row['studentsPresent'];
									$collectedBy = $row['collectedBy'];
									$examdaytime = $row['examdaytime'];
									$i++;
							?>
							<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $department; ?></td>
							<td><?php echo $venue; ?></td>
							<td><?php echo $examName; ?></td>
							<td><?php echo $examCode; ?></td>
							<td><?php echo $studentsPresent; ?></td>
							<td><?php echo $collectedBy; ?></td>
							<td><?php echo $examdaytime; ?></td>
							<td><button type="button" class="btn btn-warning  btn-sm" data-bs-toggle="modal" data-bs-target="#">Update Record</button></td>
							<td><button type="button" class="btn btn-danger btn-sm">Delete Record</button></td>
							<!-- <td><a href="audit.php? delete=<?php echo $id; ?>" class="delete">Delete</a></td> -->
							</tr>
							<?php
								} ?>
					</tbody>
					<tfoot>
						<tr>
						    <th>ID</th>
						    <th>Department</th>
							<th>Exam Venue</th>
							<th>Exam Name</th>
							<th>Exam Code</th>
							<th>Number of Students Present</th>
							<th>Collected By</th>
							<th>Date Collected</th>
							<th>Update Record</th>
							<th>Delete Record</th>
						</tr>
					</tfoot>
				</table>
		
			</div>
        </section>    
       
        <!-- Footer-->
        <footer class="footer py-4 bg-dark text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Denihub 2022</div>
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
		
		<!-- debtorupdateModal Modals-->
        <!-- debtorupdateModal modal popup-->
        <div class="portfolio-modal modal fade" id="debtorupdateModal"  role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <span class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></span>
                    <div class="container">
                        <div class="justify-content-center">
						  <div class="">
                            <div class="m-4 p-4 shadow">
                                <div class="modal-body">
								
								
								<div class="">  <!--<div class="card mb-3 shadow">-->
								  <div class="row g-0">
									<div class="col-md-4 my-4">
									  <img src="../assets/img/creditscore.png" class="img-fluid rounded-start" alt="...">
									</div>
									<div class="col-md-8">
									  <div class="card-body">
										<form action="#">
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-user-check"></i></span> 
												  <input type="button" class="form-control" value="Francis Mrongo" disabled>
											</div>

											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">National ID  &nbsp;<i class="fa-solid fa-address-card"></i></span> 
												  <input type="button" class="form-control" value="28213265" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Phone  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-phone"></i></span> 
												  <input type="button" class="form-control" value="254712343982" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Amount (Ksh.)  <i class="fa-solid fa-sack-dollar"></i></span> 
												  <input type="button" class="form-control" value="23500" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-brands fa-nfc-directional"></i></span> 
												    <select class="form-select">
													  <option>Active</option>
													  <option>Settled</option>
													  <option>Blacklist</option>
													  <option>Extend Due Date</option>
													</select>
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Due Date  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-calendar-plus"></i></span> 
												  <input type="date" class="form-control" value="29/03/2022">
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
									<!--<div class="p-4">												
										<button class="btn btn-secondary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
											<i class="fas fa-xmark me-1"></i>
											Cancel
										</button>
									</div> -->			                                    
                                    
                                </div>
                            </div>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- creditworthynessModal Modals-->
        <!-- creditworthynessModal modal popup-->
        <div class="portfolio-modal modal fade" id="creditworthynessModal"  role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <span class="display-6 text-uppercase">Creditworthiness</span><span class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></span>
                    <div class="container">
                        <div class="justify-content-center">
						  <div class="">
                            <div class="m-4 p-4 shadow">
                                <div class="modal-body">
								
								
								<div class="">  <!--<div class="card mb-3 shadow">-->
								  <div class="row g-0">
									<div class="col-md-4 my-4">
									  <img src="../assets/img/creditscore.png" class="img-fluid rounded-start" alt="...">
									</div>
									<div class="col-md-8">
									  <div class="card-body">
										<form action="#">
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-user-check"></i></span> 
												  <input type="button" class="form-control" value="Francis Mrongo" disabled>
											</div>

											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">National ID  &nbsp;<i class="fa-solid fa-address-card"></i></span> 
												  <input type="button" class="form-control" value="28213265" disabled>
											</div>
											
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-check-double"></i></span> 
												  <input type="button" class="form-control" value="Bad" disabled>
											</div>
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text">Description  &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-file-medical"></i></span> 
												  <input type="button" class="form-control" value="High risk" disabled>
											</div>
											
											
										  </form>
									  </div>
									</div>
									
									
								  </div>
								</div>
									<!--<div class="p-4">												
										<button class="btn btn-secondary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
											<i class="fas fa-xmark me-1"></i>
											Cancel
										</button>
									</div> -->			                                    
                                    
                                </div>
                            </div>
						  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="creditmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
				    <!--<img class="" src="assets/img/denihub.jpg" alt="..." />-->
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="modal-body">
										<form action="#">
										  <div class="row align-items-stretch mb-5">
										    <p class="display-6">Debtors Information</p>
										    <div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-person"></i></span>
													  <input type="text" class="form-control" id="names" placeholder="Enter debtors name" name="dnames">
												</div>

												 <div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
													  <input type="text" class="form-control" id="idnumber" placeholder="Enter debtors national ID number" name="d_idnumber">
												</div>
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
													  <input type="text" class="form-control" id="phone" placeholder="Enter debtors phone number" name="d_phone">
												</div>
												
												
										
											</div>
											<div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
													  <input type="number" class="form-control" id="amount" placeholder="Enter amount to credit" name="d_amount">
												</div>
												
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
													  <input type="email" class="form-control" id="email" placeholder="Enter debtors email" name="d_email">
												</div>
			
												<div class="form-floating mb-3 mt-3">
												  <input type="date" class="form-control" id="d_date" placeholder="Enter loan maturity date" name="d_date">
												  <label for="d_date">Enter loan maturity date</label>
												</div>
												 
												
																
											</div>
											</div>
											<div class="text-right">
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
													<i class="fa-solid fa-circle-check"></i>
													Credit
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
        
		
		
		 <!-- Users modal popup-->
        <div class="portfolio-modal modal fade" id="activeusers" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
				    <!--<img class="" src="assets/img/denihub.jpg" alt="..." />-->
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="modal-body">
										<form action="#">
										  <div class="row align-items-stretch mb-5">
										    <p class="display-6">Active Users</p>
										    <div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-person"></i></span>
													  <input type="text" class="form-control" id="names" placeholder="Enter debtors name" name="dnames">
												</div>

												 <div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
													  <input type="text" class="form-control" id="idnumber" placeholder="Enter debtors national ID number" name="d_idnumber">
												</div>
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
													  <input type="text" class="form-control" id="phone" placeholder="Enter debtors phone number" name="d_phone">
												</div>
												
												
										
											</div>
											<div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
													  <input type="number" class="form-control" id="amount" placeholder="Enter amount to credit" name="d_amount">
												</div>
												
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
													  <input type="email" class="form-control" id="email" placeholder="Enter debtors email" name="d_email">
												</div>
			
												<div class="form-floating mb-3 mt-3">
												  <input type="date" class="form-control" id="d_date" placeholder="Enter loan maturity date" name="d_date">
												  <label for="d_date">Enter loan maturity date</label>
												</div>
												 
												
																
											</div>
											</div>
											<div class="text-right">
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
													<i class="fa-solid fa-circle-check"></i>
													Credit
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