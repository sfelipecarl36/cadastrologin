<?php

	include('connect.php');

	$username = $_POST['username'];
	$senha = $_POST['senha'];

	$query = "select * from usuarios where username = '".$username."' and senha = '".$senha."';";
	$result = mysqli_query($connect, $query);

	$rows = mysqli_num_rows($result);

	if($rows>0) {
		session_start();
		$_SESSION['username'] = $username;
		header('Location: home.php');
		die();
	}

	else {
		session_start();
		$_SESSION['usernot'] = 'Esse usuário não existe em nosso banco de dados';
		header('Location: login.php');
		die();
	}


?>