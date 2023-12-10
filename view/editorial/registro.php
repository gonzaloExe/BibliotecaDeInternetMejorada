<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO edito (nomedi, estado) VALUES (:nomedi, :estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nomedi' => $_POST['nomedi'] , 
		':estado' => $_POST['estado'])) ) ? 'Editorial guardada correctamente' : 'Algo salió mal. No se puede agregar';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: mostrar.php');
	
?>