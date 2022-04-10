<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="assets/css/boxicon.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Title CSS -->
        <title>movify</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">  
</head>
<body>
           <!-- Navbar Area Start -->
           <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Jobs</a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="find-job.html" class="nav-link">Fid A  Job</a>
                                        </li>

                                    </ul>
                                </li>                

                            
                            <li class="nav-item">
                                <a href="#" >Profile </a>
                                </li>
                            <ul>   
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact Us</a>
                                </li>
                            </ul>

                            <div class="other-option">
                                <a href="sign-up.html" class="signup-btn">Sign Up</a>
                                <a href="sign-in.html" class="signin-btn">Sign In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
	
        <!-- Navbar Area End -->

    </script>
<div class="container">
 <div class="row">
   <div class="col-sm-10">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th class="table-success">S.N</th>
         <th class="table-secondary">title</th>
         <th class="table-warning" >score</th>
         <th class="table-danger" >year </th>
         <th class="table-primary">url</th>

    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td class="table-primary"><?php echo $sn; ?></td>
      <td class="table-success" ><?php echo $data['title']??''; ?></td>
      <td class="table-danger" ><?php echo $data['score']??''; ?></td>
      <td class="table-warning" ><?php echo $data['year']??''; ?></td>
      <td class="table-secondary" ><?php echo $data['url']??''; ?></td> 
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
       <!-- Footer Section Start -->
       <footer class="footer-area pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="logo">
							</a>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna. Sed eiusmod tempor incididunt ut.</p>

						<div class="footer-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>Profile</h3>
						<ul>

							<li>
								<a href="account.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Account
								</a>
							</li>



							<li>
								<a href="register.php">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Sign Up
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="index2.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Home
								</a>
							</li>
							<li>
								<a href="about.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									About
								</a>
							</li>

							<li>
								<a href="contact.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Contact
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget footer-info">
						<h3>Information</h3>
						<ul>
							<li>
								<span>
									<i class='bx bxs-phone'></i>
									Phone:
								</span>
								<a href="tel:882569756">
									+91 8693054729
								</a>
							</li>

							<li>
								<span>
									<i class='bx bxs-envelope'></i>
									Email:
								</span>
								<a href="mailto:info@jovie.com">
									movify@gmail.com
								</a>
							</li>

							<li>
								<span>
									<i class='bx bx-location-plus'></i>
									Address:
								</span>
								Intelligent movies,Navi-mumbai
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright-text text-center">
		<p>Copyright @2022 movify. All Rights Reserved By <a href="index.html">Moviefy</a></p>
	</div>
	<!-- Footer Section End -->



		<!-- jQuery first, then Bootstrap JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Subscriber Form JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Velidation JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact Form -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Meanmenu JS -->
		<script src="assets/js/meanmenu.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
</body>
</html>