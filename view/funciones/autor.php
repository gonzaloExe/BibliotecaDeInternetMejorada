<?php

$conexion = mysqli_connect("localhost","root","","biblioonline");

$query = $conexion->query("SELECT * FROM author");

echo '<option value="0">Seleccione una opción</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_au']. '">' . $row['nomau'] . '</option>' . "\n";
}
