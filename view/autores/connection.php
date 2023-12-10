<?php

function connect(){
	return new mysqli("localhost","root","","biblioonline");
}

function get_categorias(){
	$con = connect();
	$sql = "select * from author";
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
	$sql = "select * from author where id_au=".$id;
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