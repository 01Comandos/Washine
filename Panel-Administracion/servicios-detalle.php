<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>
	<header>
		<?php include 'inc/header.php'; ?>
	</header>

	<!--LOGIN-->
	<section class="containerGeneral">
		<?php include 'inc/nav.php'; ?>

		<!--CONTENIDO DE DETALLES DEL SERVICIO-->
		<article class="containerGeneral-print service-detail">
			<!--titulo segmento-->
			<div class="containerGeneral-print-title">
				<h1>Detalles del Servicio</h1>
			</div>
			<div class="containerGeneral-print-information">
				<div class="return">
					<a href="servicios.php">
						<span class="icon-Washine_left"></span>
						<p>Regresar</p>
					</a>
				</div>
				
				<!--tarjetas-->
				<div class="detallesContainer">
					<!--tarjetas usuario-->
					<div class="detallesContainer-item">
						<div class="card">
							<!--TITULO-->
							<div class="card-user">
								<figure class="usuario">
									<img src="img/comandos-avatar.jpg" alt="">
								</figure>
								<div class="datosuser">
									<h3>@01Comandos</h3>
									<p>00comandos@gmail.com</p>
									<p>+58 412 182 5079</p>
								</div>
								<span class="icon-Washine_linkedin"></span>
							</div>
							<!--IMAGEN VEHICULO-->
							<div class="card-cars">
								<img src="img/accord.jpg" alt="">
							</div>
							<!--datos finales vehiculo-->
							<div class="card-vehiculo">
								<!--VEHICULO-->
								<div class="item">
									<span class="icon-Washine_sedan"></span>
									<p>Honda Accord</p>
								</div>
								<!--APARCAMIENTO-->
								<div class="item">
									<span class="icon-Washine_ubicacion"></span>
									<p>Aparcamiento 87-9</p>
								</div>
								<!--MATRICULA-->
								<div class="item">
									<span class="icon-Washine_matricula"></span>
									<p>NAG-56A</p>
								</div>
								
							</div>
							<p class="center-align">Centro Empresarial Oriente <br>Cumaná - Venezuela</p>
						</div>
					</div>

					<!--detalles del servicio por parte de la empresa-->
					<div class="detallesContainer-item">
						<!--servicio-->
						<div class="card primero">
							<figure class="autolavado">
								<img src="img/autolavado.jpg" alt="">
							</figure>
							<div class="card-servicio">
								<div class="price">
									<p>Lunes, <br>02MAY2016</p>
									<span>$70</span>
								</div>
								<h5>9:00AM - 10:30AM</h5>
								<div class="clean">
									<span class="icon-Washine_clean"></span>
									<p>Lavado Standard</p>
								</div>
							</div>
						</div>

						<!--lavador-->
						<div class="card empleado">
							<figure>
								<img src="img/empleado1.jpg" alt="">
							</figure>
							<div class="card-datos">
								<h3>Eduardo Rangel</h3>
								<p>erangel@gmail.com</p>
								<p>+58 414 589 6657</p>
							</div>
							<span class="icon-Washine_lavador"></span>
						</div>

						<!--supervisor-->
						<div class="card empleado">
							<figure class="supervisor">
								<img src="img/empleado2.jpg" alt="">
							</figure>
							<div class="card-datos">
								<h3>Carlos Gil</h3>
								<p>erangel@gmail.com</p>
								<p>+58 414 589 6657</p>
							</div>
							<span class="icon-Washine_supervisor"></span>
						</div>
					</div>
				</div>

				<!--COMENTARIOS-->
				<div class="containerGeneral-print-information-comment">
					<div class="containerGeneral-print-information-comment-title">
						<h3>servicio en proceso</h3>
						<h4>Finalizado hace 2h</h4>
					</div>
					<div class="user">
						<figure>
							<img src="img/comandos-avatar.jpg" alt="">
						</figure>
						<div class="comentario">
							<p>¡Sorprendente! Realmente muy logrado el servicio. Me gustó mucho los cabados, solamente no lavaron la bóveda del neumático :)</p>
							<div class="comentario-valor">
								<div class="stars">
									<span class="icon-Washine_valoracionLlena"></span>
									<span class="icon-Washine_valoracionLlena"></span>
									<span class="icon-Washine_valoracionLlena"></span>
									<span class="icon-Washine_valoracionLlena"></span>
									<span class="icon-Washine_valoracionVacia"></span>
								</div>
								<p>@01Comandos</p>
							</div>
							<span class="fechaComentario">Lunes, 02 de Mayo de 2016</span>
						</div>
					</div>
				</div>
			</div>
		</article>


	</section>

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>