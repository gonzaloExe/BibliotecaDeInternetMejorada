<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$nomedi = $_POST['nomedi'];
			

			$sql = "UPDATE edito SET nomedi = '$nomedi'  WHERE id_edi = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Actualizado correctamente' : 'No se pudo actualizar';

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

