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
							<a href="admin.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="../category/mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Categorias</a>
						</li>
						<li>
							<a href="../autores/mostrar.php"><i class="fas fa-users fa-fw"></i> &nbsp; Autores</a>
						</li>
						<li>
							<a href="../editorial/mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Editorial</a>
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
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; PANEL DE CONTROL
				</h3>
				<p class="text-justify">
					  
				 <?php 
				$hora= getdate();

				$a="Buen día";
				$b="Buenas tardes";
				$c="Buenas nches";

				if ($hora<6 =='$a'){
				echo "","<font color='red'>$a</font>";
				}
				elseif($hora>12=='$b')
				{
				echo "","<font color='red'>$b</font>";
				}
				elseif($hora>24=='$c')
				{
				echo "","<font color='red'>$c</font>";
				}
				?> 
				<small><?php echo ucfirst($_SESSION['nombre']); ?>!</small>
				
				<div>
				<small>
					Tu último acceso es:<div id="date"></div>
					
				</small>	 
				</div>	
				</p>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">
				<a href="#" class="tile">
					<div class="tile-tittle">Categorias</div>
					<?php
					$db_host="localhost"; //localhost server 
					$db_user="root";	//database username
					$db_password="";	//database password   
					$db_name="biblioonline";	//database name

					try
					{
						$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					catch(PDOEXCEPTION $e)
					{
						$e->getMessage();
					}

					?>
					<?php
             require_once "../config/dbconect.php";
              $sql = "SELECT COUNT(*) total FROM category";
              $result = $db->query($sql); //$pdo sería el objeto conexión
              $total = $result->fetchColumn();
			   ?>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p><?php echo  $total; ?> Registrados</p>
					</div>
				</a>

				<a href="#" class="tile">
					<div class="tile-tittle">Editorial</div>
					<?php
					$db_host="localhost"; //localhost server 
					$db_user="root";	//database username
					$db_password="";	//database password   
					$db_name="biblioonline";	//database name

					try
					{
						$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					catch(PDOEXCEPTION $e)
					{
						$e->getMessage();
					}

					?>
					<?php
             require_once "../config/dbconect.php";
              $sql = "SELECT COUNT(*) total FROM edito";
              $result = $db->query($sql); //$pdo sería el objeto conexión
              $total = $result->fetchColumn();
			   ?>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p><?php echo  $total; ?> Registrados</p>
					</div>
				</a>
			<a href="#" class="tile">
					<div class="tile-tittle">Autores</div>
					<?php
					$db_host="localhost"; //localhost server 
					$db_user="root";	//database username
					$db_password="";	//database password   
					$db_name="biblioonline";	//database name

					try
					{
						$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					catch(PDOEXCEPTION $e)
					{
						$e->getMessage();
					}

					?>
					<?php
             require_once "../config/dbconect.php";
              $sql = "SELECT COUNT(*) total FROM author";
              $result = $db->query($sql); //$pdo sería el objeto conexión
              $total = $result->fetchColumn();
			   ?>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p><?php echo  $total; ?> Registrados</p>
					</div>
				</a>

							<a href="#" class="tile">
					<div class="tile-tittle">Libros</div>
					<?php
					$db_host="localhost"; //localhost server 
					$db_user="root";	//database username
					$db_password="";	//database password   
					$db_name="biblioonline";	//database name

					try
					{
						$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					}
					catch(PDOEXCEPTION $e)
					{
						$e->getMessage();
					}

					?>
					<?php
             require_once "../config/dbconect.php";
              $sql = "SELECT COUNT(*) total FROM libro";
              $result = $db->query($sql); //$pdo sería el objeto conexión
              $total = $result->fetchColumn();
			   ?>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p><?php echo  $total; ?> Registrados</p>
					</div>
				</a>

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
