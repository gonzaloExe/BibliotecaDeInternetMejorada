<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$foto = $_FILES['foto']['name'];
			

			$sql = "UPDATE category SET foto = '$foto'  WHERE id_cate = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Imagen actualizada correctamente' : 'No se puso actualizar foto';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
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