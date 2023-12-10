<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$nomli = $_POST['nomli'];
			$lugar = $_POST['lugar'];
			$anedi = $_POST['anedi'];
			$numpa = $_POST['numpa'];
			$idioma = $_POST['idioma'];
			$sinop = $_POST['sinop'];

			

			$sql = "UPDATE libro SET nomli = '$nomli', lugar = '$lugar', anedi = '$anedi'
			,numpa = '$numpa',idioma = '$idioma',sinop = '$sinop' WHERE id_libro = '$id'";
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

