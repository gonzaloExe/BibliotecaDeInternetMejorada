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
							<a href="mostrar.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Categorias</a>
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
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; CATEGORY
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem odit amet asperiores quis minus, dolorem repellendus optio doloremque error a omnis soluta quae magnam dignissimos, ipsam, temporibus sequi, commodi accusantium!
				</p>

			</div>
			<?php 
	
	if(isset($_SESSION['message'])){
		?>
		
		 <div class="col-sm-12">
		 
                <div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong> <?php echo $_SESSION['message']; ?>.</strong> 
        </div> 
            </div>
			
		<?php

		unset($_SESSION['message']);
		
	}
	
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
	
?>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						
						<a class="active" href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CATEGORIAS</a>
					</li>
					<li>
						<a href="nuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CATEGORIAS</a>
					</li>
					
				</ul>	
			</div>
			<?php 				
			include "connection.php";
		    ?>			
			<div class="container-fluid">
				<div class="table-responsive">
				<?php

$con = connect();
$sql = "select * from category";
$query  =$con->query($sql);
$data =  array();
if($query){
	while($r = $query->fetch_object()){
		$data[] = $r;
	}
}
?>
<br><br>
<?php if(count($data)>0):?>

	<table class="table table-dark table-sm">
		<thead>
			<tr class="text-center roboto-medium">
				<th>#</th>
				<th>NOMBRE</th>
				<th>ESTADO</th>
				<th>ACCIONES</th>
				
			</tr>
		</thead>
		
		<tbody>
			<?php foreach($data as $d):?>
		<tr class="text-center">
			<td><?php echo $d->id_cate; ?></td>
			<td><?php echo $d->nomcate; ?></td>
			<td>
		 <?php if($d->estado==1)  { ?> 
		 
		<form  method="get" action="javascript:activo('<?php echo $d->id_cate; ?>')">
		<strong>	<button type="submit" class="badge badge-success">Activo</strong></button>
		</form>
			<?php  }   else {?> 

			 <form  method="get" action="javascript:inactivo('<?php echo $d->id_cate; ?>')"> 
				<strong><button type="submit" class="badge badge-danger">Inactivo</strong></button>
			</form>
		<?php  } ?>                         
			</td>
			<td>
		<a href="#edit_<?php echo $d->id_cate; ?>" title="Editar datos" data-backdrop="false" class="btn btn-primary btn-sm" data-toggle="modal"><span class="fas fa-edit" aria-hidden="true"></span></a>
		<a href="#delete_<?php echo $d->id_cate; ?>" title="Eliminar" data-backdrop="false" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fas fa-trash"></span></a>
		<a href="#file_<?php echo $d->id_cate; ?>" title="Imagen" data-backdrop="false" class="btn btn-success btn-sm" data-toggle="modal"><span class="fas fa-image"></span></a>
			<?php include('modal.php'); ?>				
		</td>
		</tr>

		<?php endforeach; ?>
	
		<?php else:?>
			<p class="alert alert-warning">No hay datos</p>
		<?php endif; ?>
			
		</tbody>
	
	</table>				
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
		<script>
	function activo(id_cate)
{
	var id=id_cate;
	$.ajax({
        type:"GET",
		url:"../../assets/ajax/editar_estado_activo_cate.php?id="+id,
    }).done(function(data){
        window.location.href ='mostrar.php';
    })

}

// Editar estado inactivo
function inactivo(id_cate)
{
	var id=id_cate;
	$.ajax({
		type:"GET",
		url:"../../assets/ajax/editar_estado_inactivo_cate.php?id="+id,
    }).done(function(data){
        window.location.href ='mostrar.php';
    })
}

	
	</script> 
	  <script>
  function readURL(input) {
  if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
    var reader = new FileReader(); //Leemos el contenido
    
    reader.onload = function(e) { //Al cargar el contenido lo pasamos como atributo de la imagen de arriba
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
  readURL(this);
});
  </script>
</body>
</html>
