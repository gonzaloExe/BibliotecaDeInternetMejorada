<?php
if(!empty($_POST)){
	include "connection.php";
	$con  = connect();
	
	
	$sql = "insert into libro (nomli, foto, link,id_au,id_edi, lugar, anedi,numpa,idioma,sinop,estado) value (\"".$_POST["nomli"]."\", 
	\"".$_FILES["foto"]["name"]."\", \"".$_FILES["link"]["name"]."\",\"".$_POST["id_au"]."\", \"".$_POST["id_edi"]."\", \"".$_POST["lugar"]."\", \"".$_POST["anedi"]."\",\"".$_POST["numpa"]."\",\"".$_POST["idioma"]."\",\"".$_POST["sinop"]."\", \"".$_POST["estado"]."\")";
	
	$con->query($sql);
	$last_id = $con->insert_id;
	$categorias = get_categorias();
	/**
	* Con esta seccion de codigo obtenemos las categorias de la base de datos y las comparamos con los ids de categorias que recibimos desde el formulario de nuevo post
	* Verificamos los ids que coinciden con las categorias y estos los guardamos en la tabla post_category junto con el id del articulo/post insertado
	**/
	foreach($categorias as $cat){
		if(isset($_POST["category_".$cat->id_cate])){
			
		$sql = "insert into libro_catergory (libro_id,catergory_id) value (".$last_id.",".$cat->id_cate.")";
		
		$con->query($sql);
		}
		
	}
	header("Location: mostrar.php");
}
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