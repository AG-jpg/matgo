<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MATGO CONSILIUM</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/logo.png">

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="main-page-wrapper">
			<header class="theme-main-header">
				<div class="container">
					<a href="index.php" class="logo float-left tran4s"><img src="images/logo.png" alt="Logo" style=""></a>

					<!-- ========================= Theme Feature Page Menu ======================= -->
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
						 <div class="collapse navbar-collapse" id="navbar-collapse-1">
 							<ul class="nav navbar-nav">
 						 <li><a href="index.php">HOME</a></li>
 						 <li><a href="about.php">MATGO CONSILIUM</a></li>
						 <li class="dropdown-holder"><a href="#blog-section">SERVICIOS</a>
							 <ul class="sub-menu">
										 <li><a href="derecho_fiscal.php" class="tran3s">DERECHO FISCAL</a></li>
										 <li><a href="derecho_penal.php" class="tran3s">DERECHO PENAL</a></li>
										 <li><a href="derecho_administrativo.php" class="tran3s">DERECHO ADMINISTRATIVO</a></li>
										 <li><a href="derecho_corporativo.php" class="tran3s">DERECHO CORPORATIVO</a></li>
										 <li><a href="propiedad_intelectual.php" class="tran3s">PROPIEDAD INTELECTUAL</a></li>
										 <li><a href="consultoria_gubernamental.php" class="tran3s">CONSULTORÍA GUBERNAMENTAL</a></li>
										 <li><a href="laboral.php" class="tran3s">LABORAL</a></li>
										 <li><a href="gestoria.php" class="tran3s">GESTORÍA</a></li>
							 </ul>
						 </li>
					 		<li class="active"><a href="contacto.php">CONTACTO</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->

			<section class="inner-page-banner-3">
				<div class="opacity">
					<div class="container">
						<h2></h2>
						<ul>
							<li><a href="index.html"></a></li>
							<li></li>
							<li></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /.inner-page-banner -->

			<section id="about-us" style="padding-bottom:30px;">
				<div class="container">
					<div class="theme-title">
						<h2>Envíanos un Mensaje</h2>
						<p>&nbsp;</p>
					</div> <!-- /.theme-title -->

					<div id="contact-section">
						<div class="container" id="contacto">
							<!-- Contact Form -->
							<div class="send-message">


								<form action="" class="form-validation" autocomplete="off" method="">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="single-input">
												<input type="text" placeholder="Nombre Completo*" name="Fname">
											</div> <!-- /.single-input -->
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="single-input">
												<input type="text" placeholder="Apellidos*" name="Lname">
											</div> <!-- /.single-input -->
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<div class="single-input">
												<input type="email" placeholder="Email*" name="email">
											</div> <!-- /.single-input -->
										</div>
									</div> <!-- /.row -->
									<div class="single-input">
										<input type="text" placeholder="Asunto" name="sub">
									</div> <!-- /.single-input -->
									<textarea placeholder="Escribe tu mensaje" name="message"></textarea>


									<button class="tran3s p-color-bg">Enviar Mensaje</button>
								</form>


								<!-- Contact Form Validation Markup -->
								<!-- Contact alert -->
								<div class="alert-wrapper" id="alert-success">
									<div id="success">
										<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
										<div class="wrapper">
															<p>Mensaje enviado Correctamente.</p>
													 </div>
											</div>
									</div> <!-- End of .alert_wrapper -->
									<div class="alert-wrapper" id="alert-error">
											<div id="error">
													<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
													<div class="wrapper">
															<p>Lo sentimos, hubo un problema al enviar el mensaje.</p>
													</div>
											</div>
									</div> <!-- End of .alert_wrapper -->
							</div> <!-- /.send-message -->
						</div> <!-- /.container -->
					</div> <!-- /#contact-section -->



				</div> <!-- /.container -->
			</section> <!-- /#about-us -->



			<footer>
				<div class="container" style="padding-bottom:80px;">
					<p>Copyright @2018 All rights reserved | Matgo Consilium<br><a href="aviso_privacidad.php">Aviso de Privacidad</a></p>
				</div>
			</footer>
	        <!-- Scroll Top Button -->
		<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>


		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>

		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
