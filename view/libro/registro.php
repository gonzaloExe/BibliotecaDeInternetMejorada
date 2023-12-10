
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

	$nomli = $_POST['nomli'];
	
	
	$foto = $_FILES['foto']['name'];
	$link = $_FILES['link']['name'];
	
	$id_cate = $_POST['id_cate'];
	
	$id_au = $_POST['id_au'];
	
	$id_edi = $_POST['id_edi'];
	$lugar = $_POST['lugar'];
	$anedi = $_POST['anedi'];
	$numpa = $_POST['numpa'];
	$idioma = $_POST['idioma'];
	$sinop = $_POST['sinop'];
	$estado = $_POST['estado'];
	

// Cargando el fichero en la carpeta "subidas"		
if( $nomli!=null||  $foto!=null || $link!=null || $id_cate!=null || $id_au!=null || $id_edi!=null || $lugar!=null || $anedi!=null 
|| $numpa!=null || $idioma!=null || $sinop!=null || $estado!=null){


$sql = "INSERT INTO libro(nomli, foto,link,id_cate,id_au,id_edi,lugar,anedi,numpa,idioma,sinop,estado)

VALUES ('$nomli','$foto','$link','$id_cate','$id_au','$id_edi','$lugar','$anedi','$numpa','$idioma','$sinop','$estado')";
		
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
   $link = $_FILES['link'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/img/imagenes/".$foto['name']);
move_uploaded_file($link['tmp_name'], "../../assets/img/descargas/".$link['name']);


		?>		
   
  
   