<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../login.php');
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Panel de control</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../../assets/css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="../../assets/css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="../../assets/css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="../../assets/css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="../../assets/js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="../../assets/css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/logo2.png" />

</head>
<body onload="startTime()">
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="../../assets/img/avatar/louito.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						<?php echo ucfirst($_SESSION['nombre']); ?> <br><small class="roboto-condensed-light">Aministrador</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../admin/admin.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="../category/mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Categorias</a>
						</li>
						<li>
							<a href="../autores/mostrar.php"><i class="fas fa-users fa-fw"></i> &nbsp; Autores</a>
						</li>
						<li>
							<a href="mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Editorial</a>
						</li>
						<li>
							<a href="../libro/mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Libros</a>
						</li>
						<li>
							<a href="#"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="#">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; EDITORIAL
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem odit amet asperiores quis minus, dolorem repellendus optio doloremque error a omnis soluta quae magnam dignissimos, ipsam, temporibus sequi, commodi accusantium!
				</p>

			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						
						<a href="mostrar.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EDITORIALES</a>
					</li>
					<li>
						<a class="active" href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR EDITORIALES</a>
					</li>
					
				</ul>	
			</div>
             			<!-- Content here-->
			<div class="container-fluid">
				<form action="registro.php" method="post" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
						<div class="container-fluid">
							<div class="row">
								
			<div class="col-12 col-md-6">
				<div class="form-group">
					<label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
					<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="nomedi"  maxlength="40">
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6" style="display:none;">
				<div class="group-material">
					<span>Estado</span>
					<select class="material-control tooltips-general" name="estado" data-toggle="tooltip" data-placement="top" title="Elige el estado">
						
						<option value="1">Activo</option>
					</select>
				</div>
			</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" name="agregar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>	
			</div>	

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="../../assets/js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="../../assets/js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="../../assets/js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="../../assets/js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="../../assets/js/main.js" ></script>
	<script src="../../assets/js/reloj.js"></script> 
</body>
</html>
