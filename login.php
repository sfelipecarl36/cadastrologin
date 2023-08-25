<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
		<div class="form-group w-50">

			<h1>Login</h1>
			<?php 
			
			if(isset($_SESSION['cadastrado'])) {
				echo '<div class="alert alert-success" role="alert">'.$_SESSION['cadastrado'].'</div>';
				session_destroy();
			} 

			else if(isset($_SESSION['usernot'])) {
				echo '<div class="alert alert-danger" role="alert">'.$_SESSION['usernot'].'</div>';
				session_destroy();
			} 

			?>
			<br>
			<form method="POST" action="logando.php">

				<label for="usernameinput">Login de usuário</label>
				<input class="form-control" type="text" name="username" id="usernameinput">

				<label for="senhainput">Sua senha</label>
				<input class="form-control" type="password" name="senha" id="senhainput">

				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>
				<a href="cadastro.php"><label>Cadastrar</label></a>
			</form>
		</div>
</body>
</html>