<?php
 
require 'conexao.php';
 
$id_usuario = (int) $_GET['id_usuario'];
$sql = 'SELECT foto FROM usuarios WHERE id_usuario = ' . $id_usuario;
$query = mysql_query($sql) or die(mysql_error());
$foto = mysql_result($query, 0);
 
header('Content-Type: image/jpeg');
echo $foto;
?>