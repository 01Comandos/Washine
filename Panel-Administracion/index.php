<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body class="bodyLogin">

	<!--LOGIN-->
	<section class="bodyLogin-container">
		<!--Logotipo Washine-->
		<figure class="bodyLogin-container-item">
			<img src="img/washine-logo.svg" alt="">
		</figure>
		
		<!--FORMULARIO LOGIN-->
		<div class="bodyLogin-container-item">
			<form action="" >
				<p>Panel de Administración</p>
				<!--usuario-->
				<div class="item-form input-field">
					<input id="user-name" type="email" class="validate">
	          		<label for="user-name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Usuario</label>
				</div>

				<!--password-->
				<div class="item-form input-field">
					<input id="password-user" type="password" class="validate">
	          		<label for="password-user" data-error="Contraseña incorrecta" data-success="¡Genial!">Contraseña</label>
				</div>

				<div class="submit">
					<input type="submit" value="acceder" class="waves-effect waves-light btn">	
				</div>
			</form>

			<h5>Recuperar <a href="#">mi contraseña</a></h5>
		</div>

		<!--FORMULARIO Recuperar contraseña-->
		<div class="bodyLogin-container-item">			
			<form action="" >
				<p>Te enviaremos una <span>contraseña</span> provicional</p>
				<!--usuario-->
				<div class="item-form input-field">
					<input id="user-name" type="email" class="validate">
	          		<label for="user-name" data-error="Ups! Esto no es un email" data-success="right">Email</label>
				</div>

				<div class="submit">
					<input type="submit" value="enviar" class="waves-effect waves-light btn">	
				</div>
			</form>

			<a href="#" class="return-login">regresar</a>
		</div>
			


	</section>

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>