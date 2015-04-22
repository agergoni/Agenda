<?php

// Conectando, seleccionando la base de datos
$link = @mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
@mysql_select_db('contactos') or die('No se pudo seleccionar la base de datos');

//variables de recogida de id a borrar

$id = $_GET['id'];


// Realizar un delete
$query = "DELETE FROM `agenda` WHERE `id`=$id";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());




// Cerrar la conexión
mysql_close($link);


header('Location: index.php');

?>