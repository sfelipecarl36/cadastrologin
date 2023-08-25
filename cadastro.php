<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
		<div class="form-group w-50">

			<h1>Cadastro</h1>
			<br>
			<form method="POST" action="cadastrando.php">
				
				<label for="nomeinput">Nome</label>
				<input class="form-control" type="text" name="nome" id="nomeinput">

				<label for="emailinput">E-mail</label>
				<input class="form-control" type="email" name="email" id="emailinput">

				<label for="usernameinput">Login de usuário</label>
				<input class="form-control" type="text" name="username" id="usernameinput">

				<label for="telefoneinput">Telefone</label>
				<input class="form-control" type="tel" name="telefone" id="telefoneinput">

				<label for="senhainput">Sua senha</label>
				<input class="form-control" type="password" name="senha" id="senhainput">

				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
</body>
</html>