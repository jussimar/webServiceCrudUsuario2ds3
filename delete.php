<?php
$conecta = mysqli_connect("localhost","id10336647_crudusuario","crudusuario","id10336647_crudusuario");
	// local       usuario bd               senha         banco

$codigo = $_POST['codigo'];

$query = "delete from tb_usuario where cd_usuario = $codigo";

mysqli_query($conecta,$query);

echo "Registro removido com sucesso";

