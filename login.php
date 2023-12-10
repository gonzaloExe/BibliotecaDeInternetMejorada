<?php

  session_start();

  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Acceso al sistema</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo2.png" />
	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="assets/css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="assets/css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	

	<!-- Sweet Alert V8.13.0 JS file -->
	
 
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/sweetalert.css">
</head>
<body>

	<div class="login-container">
		<div class="login-content">
			<p class="text-center">
				<i class="fas fa-user-circle fa-5x"></i>
			</p>
			<p class="text-center">
				Inicia sesión con tu cuenta administrador
			</p>
			<form  role="form">
				<div class="form-group">
					<label for="Correo" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Correo</label>
					<input type="email" class="form-control" autocomplete="off" id="user"  maxlength="35">
				</div>
				<div class="form-group">
					<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
					<input type="password" class="form-control"  id="clave"  maxlength="200">
				</div>
				<div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="assets/img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
				
				
				 <input type="button" name="button" id="login"  class="btn-login text-center" value="Acceder">
			</form>
		</div>
	</div>

	<!-- jQuery V3.4.1 -->
	

	<!-- popper -->
	<script src="assets/js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="assets/js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="assets/js/bootstrap-material-design.min.js" ></script>


	
	
	<!-- SweetAlert js -->
   <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="assets/js/operaciones.js"></script>
	
	
</body>
</html>