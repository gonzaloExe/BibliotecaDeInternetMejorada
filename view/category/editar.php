<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$nomcate = $_POST['nomcate'];
			

			$sql = "UPDATE category SET nomcate = '$nomcate'  WHERE id_cate = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Actualizada correctamente' : 'No se pudo actualizar';

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

