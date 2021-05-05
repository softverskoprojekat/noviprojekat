<?php
	require("server/config.php");
	ob_start();
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Balkan Underground | Admin login</title>

		<meta name="keywords" content="" />
		<meta name="description" content="BURP">
		<meta name="author" content="Filip Corak">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/icons/tab_icon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">



		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-app-landing.css">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-app-landing.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
</head>
<body>
	<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">


								<h1 class="font-weight-bold text-dark">Login</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">


								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!---------------LOGIN FORMA------------>
				<div class="container py-4">
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-5 mb-0">Login</h2>
							<?php
						    if (isset($_POST['username']) && isset($_POST['password'])) {
						        $username = stripslashes($_REQUEST['username']);    // removes backslashes
						        $username = mysqli_real_escape_string($con, $username);
						        $password = stripslashes($_REQUEST['password']);
						        $password = mysqli_real_escape_string($con, $password);
						        if(!empty($username) && !empty($password)){
							        // Check user is exist in the database
							        $query    = "SELECT * FROM `users` WHERE username='$username'
							                     AND admincode='$password' AND admin>=5";
							        $result = mysqli_query($con, $query) or die(mysql_error());
							        $rows = mysqli_num_rows($result);
							        if ($rows == 1) {
							            $_SESSION['username'] = $username;
							            $_SESSION['valid'] = true;
							            $host  = $_SERVER['HTTP_HOST'];
                                        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                                        $extra = 'dashboard.php';
                                        $final_url = 'http://'.$host.$uri.'/'.$extra;
                                        header('Location:'.$final_url);
                                        exit(0);
							            //echo "<script>window.location.href = 'dashboard.php';</script>";
							        } else {
							            echo "<div class='alert alert-danger' role='alert'>
												<p>Uneto korisnicko ime ili lozinka su <strong>netacni</strong>!
												Ukoliko mislite da je doslo do neke greske kontaktirajte vlasnika sajta!<br>
												Vratite se na <strong><a href='admin-login.php'>login</a></strong> da probate ponovo.</p>
										  	  </div>";
							        }
							    } else {
							    	echo "<div class='alert alert-danger' role='alert'>
											<p>Morate <strong>popuniti sva polja</strong> za unos informacija za prijavu!
											Ukoliko mislite da je doslo do neke greske kontaktirajte vlasnika sajta!<br>
											Vratite se na <strong><a href='admin-login.php'>login</a></strong> da probate ponovo.</p>
										  </div>";
							    }
						    } else { ?>
							<form action="" id="frmSignIn" method="post" class="needs-validation">
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Administratorsko korisnicko ime sa servera<span class="text-color-danger">*</span></label>
										<input type="text" value="" class="form-control form-control-lg text-4" placeholder="Korisnicko ime..." name="username">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark text-3">Administratorski sigurnosni kod<span class="text-color-danger">*</span></label>
										<input type="password" value="" class="form-control form-control-lg text-4" placeholder="Lozinka..." name="password">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
									</div>
								</div>
							</form>
							<?php } ?>
						</div>
					</div>

				</div>

			</div>
</body>
</html>