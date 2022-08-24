<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="debt" />
        <meta name="author" content="emmanuel" />
        <title>TUK - Examination Material Handling Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Examination Material Handling Management System!</div>
                <div class="masthead-heading text-uppercase">TUK Platform </div>
                <a class="btn btn-primary btn-xl text-uppercase" data-bs-toggle="modal" href="#loginModal">Login</a>
            </div>
        </header>
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <!--<h3 class="section-subheading text-muted">For all your enquiries and feedback</h3>-->
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; TUK 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
						  <div class="col-lg-8">
                            <div class="m-4 p-4 shadow">
                                <div class="modal-body">
                                    <form action="index.php">
											<div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text"><i class="fa-solid fa-user-check"></i></span>
												  <input type="text" class="form-control" id="email" placeholder="Enter username" name="email">
											</div>

											 <div class="input-group mb-3 input-group-lg">
												  <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
												  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
											</div>
											
											
											<!--<div class="form-check mb-3">
											  <label class="form-check-label">
												<input class="form-check-input" type="checkbox" name="remember"> Remember me
											  </label>
											</div> -->
											<div class="p-4">
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
													<i class="fa-solid fa-circle-check"></i>
													Login
												</button>
												<button class="btn btn-secondary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
				    <!--<img class="" src="assets/img/denihub.jpg" alt="..." />-->
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="modal-body">
										<form action="/action_page.php">
										  <div class="row align-items-stretch mb-5">
										    <div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-person"></i></span>
													  <input type="text" class="form-control" id="names" placeholder="Enter your name" name="names">
												</div>

												 <div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
													  <input type="text" class="form-control" id="idnumber" placeholder="Enter your nationa ID number" name="idnumber">
												</div>
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
													  <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
												</div>
												
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
													  <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
												</div>
												
										
											</div>
											<div class="col-md-6">
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
													  <input type="text" class="form-control" id="businessname" placeholder="Enter your business name" name="businessname">
												</div>
												<!--<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-user-check"></i></span>
													  <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
												</div>-->

												 <div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
													  <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pswd">
												</div>
												<div class="input-group mb-3 input-group-lg">
													  <span class="input-group-text"><i class="fa-solid fa-check-double"></i></span>
													  <input type="password" class="form-control" id="pwd" placeholder="Confirm your password" name="pswd">
												</div>
														
											</div>
											</div>
											<div class="text-right">
												<div class="form-check mb-3">
												  <label class="form-check-label">
													<input class="form-check-input" type="checkbox" name="remember"> <a href="hub/termsAndConditions.html"> Terms and conditions</a>
												  </label>
												</div>
														
											
												<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
													<i class="fa-solid fa-circle-check"></i>
													Register
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
		
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
