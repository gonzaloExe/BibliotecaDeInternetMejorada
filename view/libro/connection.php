<?php

function connect(){
	return new mysqli("localhost","root","","biblioonline");
}

function get_categorias(){
	$con = connect();
	$sql = "select * from category";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

function get_post_categorias($id){
	$con = connect();
	$sql = "select * from libro_catergory where libro_id=".$id;
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}
function get_categoria($id){
	$con = connect();
	$sql = "select * from category where id_cate=".$id;
	$query  =$con->query($sql);
	$data =  null;
	if($query){
		while($r = $query->fetch_object()){
			$data = $r;
			break;
		}
	}
	return $data;
}
function get_post($id){
	$con = connect();
	$sql = "SELECT libro.id_libro, libro.nomli, author.id_au, author.nomau, author.apeau, author.alias, author.biblio, author.foto, author.fecna, author.email, edito.id_edi, edito.nomedi,libro.lugar, libro.anedi, libro.numpa, libro.idioma, libro.sinop, libro.estado FROM libro INNER JOIN author ON libro.id_au=author.id_au INNER JOIN edito ON libro.id_edi=edito.id_edi where id_libro=".$id;
	$query  =$con->query($sql);
	$data =  null;
	if($query){
		while($r = $query->fetch_object()){
			$data = $r;
			break;
		}
	}
	return $data;
}

?>