<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO category (nomcate, estado,foto) VALUES (:nomcate, :estado,:foto)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nomcate' => $_POST['nomcate'] , ':estado' => $_POST['estado'], ':foto' => $_FILES['foto']['name'])) ) ? 'Categoria guardada correctamente' : 'Algo salió mal. No se puede agregar';	
	

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