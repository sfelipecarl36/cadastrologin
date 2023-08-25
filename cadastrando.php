<?php
	
	include('connect.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];

	$query = "insert into usuarios(nome, email, username, telefone, senha) values('".$nome."', '".$email."', '".$username."', '".$telefone."', '".$senha."');";
	$result = mysqli_query($connect, $query);

	if($result) {
		session_start();
		$_SESSION['cadastrado'] = 'Usuário Cadastrado com sucesso!';
		header('Location: login.php');
		die();
	}

?>