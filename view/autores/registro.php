
<?php
  /*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "biblioonline";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

	$nomau = $_POST['nomau'];
	$apeau = $_POST['apeau'];
	$alias = $_POST['alias'];
	$biblio = $_POST['biblio'];
	
	$foto = $_FILES['foto']['name'];
	
	$fecna = $_POST['fecna'];
	
	$email = $_POST['email'];
	
	$estado = $_POST['estado'];
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomau!=null||  $apeau!=null || $alias!=null || $biblio!=null || $foto!=null || $fecna!=null || $email!=null || $estado!=null){


$sql = "INSERT INTO author(nomau, apeau,alias,biblio,foto,fecna,email,estado)

VALUES ('$nomau','$apeau','$alias','$biblio','$foto','$fecna','$email','$estado')";
		
	$query = $con->prepare( $sql );
	if ($query == false) {
	 print_r($con->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: mostrar.php');



   ?>
   <?php
   /*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "biblioonline";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
  
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/img/imagenes/".$foto['name']);


		?>		
   
  
   