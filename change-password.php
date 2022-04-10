<?php

$msg = "";

include 'config.php';

if (isset($_GET['reset'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['reset']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

            if ($password === $confirm_password) {
                $query = mysqli_query($conn, "UPDATE users SET password='{$password}', code='' WHERE code='{$_GET['reset']}'");

                if ($query) {
                    header("Location: index.php");
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Reset Link do not match.</div>";
    }
} else {
    header("Location: forgot-password.php");
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>chnage password!</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
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
        <title>Moviefy</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">  
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

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
                                    <a href="#" class="nav-link dropdown-toggle">Movies</a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="find-job.html" class="nav-link">Fid A  Movie</a>
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

                          
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->


    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image3.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Change Password</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Change Password</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
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

							<p>Weat movefy always try to ensure to give a good service</p>

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
							<h3>Quick Links</h3>
							<ul>
								<li>
									<a href="index.html">
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