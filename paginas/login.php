<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>R&S - Login</title>
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/da3466d01a.js"></script>
	<!-- CSS BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../Style/main.css">
	<link rel="stylesheet" href="../Style/login.css">
	<link href="https://fonts.googleapis.com/css?family=Aclonica" rel="stylesheet">
</head>
<body>
	<?php include("./conexion.php"); ?>
	<header>
		<div class="tit">
			<h1 class="text-center"><i class="fas fa-dice-d20"></i> ROL & SOCIAL <i class="fas fa-dice-d20"></i></h1>	
			<p class="text-center">Lugar de encuentro para roleros</p>
		</div>
	</header>
	<main>
		<div class="container-fluid">
			<div class="row espaciado">
				<!-- LOG IN -->
				<div class="col-8 col-md-4 perga ">
					<img src="../img/pergamino.png" alt="pergamino de fondo">
					<h2 class="tit2 text-center">Continuar Quest</h2>
					<p class="text-center">-Otra vez por aqui aventurero?</p>
					<div class="container">
						<div class="row">
							<form class="col-9 col-md-9" action="" method="POST">
								<div class="form-group">
									<label name="alias" class="text-center">Alias</label>
									<input type="text" name="alias" class="form-control" autofocus="true">
								</div>
								<div class="form-group">
									<label name="pas" class="text-center">Santo y seña</label>
									<input type="password" name="pas" class="form-control">
								</div>
								<p class="text-center"><a href="#">Recuperar santo y seña</a></p>
								<input type="button" value="A por ellos" class="btm but">
							</form>
						</div>
					</div>
				</div>
				<!-- SIGN IN -->
				<div class="col-8 col-md-4 perga">
					<img src="../img/pergamino.png" alt="pergamino de fondo">
					<h2 class="tit2 text-center">Nuevo aventurero</h2>
					<p class="text-center">- Nuevo en el pueblo?</p>
					<div class="container">
						<div class="row">
							<form class="col-9 col-md-9" action="./registro.php" method="POST">
								<div class="form-group">
									<label name="aliasn">Alias</label>
									<input type="text" name="aliasn" class="form-control">
								</div>
								<div class="form-group">
									<label name="pasn1" class="text-center">Santo y seña</label>
									<input type="password" name="pasn1" class="form-control">
								</div>
								<div class="form-group">	
									<label class="text-center" name="pasn2">Repetir santo y seña</label>
									<input type="password" name="pasn2" class="form-control">
								</div>
								<div class="form-inline">
									<label><input type="checkbox" class="cb"><a href="#" id="leyes" target="_blank">Leísteis las leyes del pueblo?</a></label>
								</div>
								<input type="submit" value="A por ellos" class="btm but">		
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="">
		<div>
			<p class="text-center">©️ Rol & Social 2019 | Made by <a href="https://github.com/clawsteel">ClawSteel</a> and <a href="https://github.com/MatMatsu">MatMatsu</a></p>
		</div>
	</footer>

	<!-- SCRIPT JQUERY BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- JS PROPIO -->
	<script src="../js/main.js"></script>
</body>
</html>