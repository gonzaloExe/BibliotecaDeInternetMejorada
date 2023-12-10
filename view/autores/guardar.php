<?php
if(!empty($_POST)){
	include "connection.php";
	$con  = connect();
	//$sql = "insert into export (codcli,codprod, conte, peso,destino, estado, fech) value (\"".$_POST["conte"]."\",NOW())";
	
	$sql = "insert into export (codcli, conte, peso,destino, estado, fech) value (\"".$_POST["codcli"]."\", 
	\"".$_POST["conte"]."\", \"".$_POST["peso"]."\", \"".$_POST["destino"]."\", \"".$_POST["estado"]."\", \"".$_POST["fech"]."\")";
	
	
	//$sql2="update lotes  set stock=stock-1 where codlote =(".$codexport.")";
	

	
	
	$con->query($sql);
	$last_id = $con->insert_id;
	$categorias = get_categorias();
	/**
	* Con esta seccion de codigo obtenemos las categorias de la base de datos y las comparamos con los ids de categorias que recibimos desde el formulario de nuevo post
	* Verificamos los ids que coinciden con las categorias y estos los guardamos en la tabla post_category junto con el id del articulo/post insertado
	**/
	foreach($categorias as $cat){
		if(isset($_POST["category_".$cat->codlote])){
			
		$sql = "insert into export_lote (export_id,lote_id) value (".$last_id.",".$cat->codlote.")";
		
		
		//update lotes set stock=stock-1 where codlote=('$lotes[$i]')
		
		$con->query($sql);
		}
		if(isset($_POST["category_".$cat->codlote])){
			$sql2="update lotes  set stock=stock-1 where codlote=(".$cat->codlote.")";
			$con->query($sql2);
		}
	}
	header("Location: ../../folder/export.php");
}
?>