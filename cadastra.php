<?php
$conecta = mysqli_connect("localhost","id10336647_crudusuario","crudusuario","id10336647_crudusuario");
	// local       usuario bd               senha         banco

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "insert into tb_usuario values (null,'$nome','$email','$senha')";

mysqli_query($conecta,$query);

echo "Cadastro realizado com sucesso";

