<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$nomau = $_POST['nomau'];
			$apeau = $_POST['apeau'];
			$alias = $_POST['alias'];
			$biblio = $_POST['biblio'];
			$fecna = $_POST['fecna'];
			$email = $_POST['email'];

			$sql = "UPDATE author SET nomau = '$nomau', apeau = '$apeau', alias = '$alias', biblio = '$biblio',
			fecna = '$fecna', email = '$email'  WHERE id_au = '$id'";
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

