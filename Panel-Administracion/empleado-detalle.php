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
				<h1>Información del Empleado</h1>
			</div>
			<div class="containerGeneral-print-information">
				<div class="return">
					<a href="empleados.php">
						<span class="icon-Washine_left"></span>
						<p>Regresar</p>
					</a>
				</div>

				<!--LISTADOS EMPLEADOS-->
			<div class="containerGeneral-print-listEmpleados">
				<!--datos empleado 1-->
				<div class="containerGeneral-print-listEmpleados-ficha">
					<figure>
						<a href="empleado-detalle.php">
							<img src="img/empleado1.jpg" alt="">	
						</a>						
					</figure>
					<div class="datos">
						<h3>Edmundo José Fernandez Malave</h3>
						<p>01Marzo1990 - 26 años</p>
						<p>Empezó el 15Enero2016</p>
						<span class="icon-Washine_lavador"></span>
					</div>
					<div class="options">
						<button>
							<span class="icon-Washine_submenu"></span>
						</button>
						<ul class="options-more">
							<li>
								<a href="#">Editar Empleado</a>
							</li>
							<li>
								<a href="#">Editar Convenio</a>
							</li>
							<li>
								<a href="#modalEliminar" class="active modal-trigger">Eliminar Empleado</a>
							</li>
						</ul>
					</div>

					<!--Datos personales del empleado-->
					<div class="datosPersonales">
						<!--NSS-->
						<div class="item">
							<span class="icon-Washine_nss"></span>
							<p>36 598 154</p>
						</div>

						<!--telefono-->
						<div class="item">
							<span class="icon-Washine_phone"></span>
							<p>+58 412 182 5079</p>
						</div>

						<!--tarjeta de debito-->
						<div class="item">
							<span class="icon-Washine_tdc"></span>
							<p>0000 0000 0000 0000</p>
						</div>

						<!--banco-->
						<div class="item">
							<span class="icon-Washine_bank"></span>
							<p>Banesco MX</p>
						</div>

						<!--email-->
						<div class="item">
							<span class="icon-Washine_email"></span>
							<p>edmundofernandez@gmail.com</p>
						</div>

						<!--direccion habitacion-->
						<div class="item">
							<span class="icon-Washine_ubicacion"></span>
							<p>Condominio La Alameda, Edif 02 - Apto 06. Sector Boca de Sabana. Cumaná - Venezuela</p>
						</div>

						<!--direccion de trabajo asignado-->
						<div class="item">
							<span class="icon-Washine_asignado"></span>
							<p>Centro empresarial Oriente Norte. Autopista “Mariscal Antonio José de Sucre” a 200mts del elevado “El Indio”</p>
						</div>

						<!--convenio laboral-->
						<div class="item">
							<span class="icon-Washine_convenio"></span>
							<p>Porcentaje <br> 10%</p>
						</div>
					</div>
				</div>

				<!--balance empleado 1-->
				<div class="containerGeneral-print-listEmpleados-balance">
					<ul class="time">
						<!--mes pasado-->
						<li>
							<a href="#">abril</a>
						</li>
						<!--mes actual-->
						<li>
							<a href="#">mayo</a>
						</li>
						<!--semana pasada-->
						<li>
							<a href="#">semana pasada</a>
						</li>
						<!--semana actual-->
						<li>
							<a href="#" class="active">actual</a>
						</li>
					</ul>
					<!--balance-->
					<div class="record">
						<h4>balance</h4>
						<h3>$ 1 214.<span>01</span></h3>
						<div class="record-leyenda">
							<!-- vehiculo pequeño-->
							<div class="item">
								<span class="icon-Washine_sedan"></span>
								<p>350</p>
							</div>
							<!--vehiculo grande-->
							<div class="item">
								<span class="icon-Washine_pickup"></span>
								<p>158</p>
							</div>
						</div>
					</div>
					<div class="atendidos">
						<div class="item">
							<span class="icon-Washine_happy"></span>
							<h3>508</h3>
						</div>
						<p>clientes atendidos</p>
					</div>
				</div>

			</div>
				
				

				<!--COMENTARIOS-->
				<div class="containerGeneral-print-information-comment">
					<div class="containerGeneral-print-information-comment-title">
						<h3>aún sin valoración</h3>
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
						</div>
					</div>
				</div>
			</div>
		</article>


	</section>

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>