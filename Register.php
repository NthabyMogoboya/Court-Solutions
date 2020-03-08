<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Home</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="practice-areas.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Categories of Crimes</a></li>
	          <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
   <div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="RegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header  justify-content-center">
                <h5 class="modal-title ">Registration</h5>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" formControlName="fname" required class="form-control"
                            placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Last Name">
                    </div>
                    
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="number" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your City">
                    </div>
                   <div class="form-group"> 
                    <label>Gender: <select name="gender" required>
										<option value="">-select-</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
					</label><br><br>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                    placeholder="Enter Secret Password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" formControlName="pword2" required class="form-control"
                                    placeholder="Re-enter Secret Password">
                            </div>
                        </div>
                    </div>
 
                   
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn" >Submit</button> 
                    <a href="login" class="btn btn-link">Login here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>

    <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>