<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
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
			<div class="containerGeneral-print-title title-empleados">
				<div class="icons">
					<h1>Empleados</h1>
					<p>+reportes</p>	
				</div>				
				<div class="icons">
					<!--NUEVO EMPLEADO-->
					<a href="#modalNewEmpleado" class="active modal-trigger">
	              		<span class="icon-Washine_newEmpleado"></span>
	              	</a>
					<!--BUSCAR-->
					<a href="#modalSearch" class="active modal-trigger">
	              		<span class="icon-Washine_search"></span>
	              	</a>
				</div>
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
						<h4>de permiso</h4>
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
				</div>

				<!--balance empleado 1-->
				<div class="containerGeneral-print-listEmpleados-balance empleadoBalance">
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
				</div>

				<!--balance empleado 1-->
				<div class="containerGeneral-print-listEmpleados-balance empleadoBalance">
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
		</article>

		<!-- Modal SEARCH -->
		<div id="modalSearch" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		    <div class="modal-content">
		      <form action="">
		      	<h3>¿A quién buscas?</h3>
		      	<input type="text" class="browser-default">
		      </form>
		    </div>
		</div>

		  <!-- Modal NewEmpleado -->
		<div id="modalNewEmpleado" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--INSCRIPCION-->
		    <div class="modal-content">
		    	<h3>Nuevo Empleado</h3>
		      <form action="">
		      	<!--imagen nuevo empleado-->
		      	<ul class="photoList">
		      		<li>
	                  <span class="icon-Washine_image" id="preview"></span>
	                  <input type="file" class="file" name="imagen" id="imagen">
	                </li>
		      	</ul>			      	

				<!--nombre y apellido-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Nombre y Apellido</label>
				</div>

				<!--NSS-->
                <div class="item-form input-field">
					<input id="nss" type="text" class="validate">
	          		<label for="nss" data-error="Ups! un error">NSS</label>
				</div>

				<!--Telefono-->
                <div class="item-form input-field">
					<input id="phone" type="tel" class="validate">
	          		<label for="phone" data-error="Ups! un error">Teléfono</label>
				</div>

				<!--Fecha de Nacimiento-->
                <div class="item-form input-field">
					<input id="nacimiento" type="date" class="datepicker">			
	          		<label for="nacimiento">Fecha de Nacimiento</label>
				</div>

				<!--Email-->
                <div class="item-form input-field">
					<input id="email" type="email" class="validate">
	          		<label for="email" data-error="Ups! un error">Email</label>
				</div>

				<!--Nº tarjeta de Débito-->
                <div class="item-form input-field">
					<input id="debito" type="text" class="validate">
	          		<label for="debito" data-error="Ups! un error">Nº tarjeta de Débito</label>
				</div>

				<!--Bancos-->
				<div class="item-form input-field">
				    <select>
				      <option value="" disabled selected>Elige un Banco</option>
				      <option value="1">Banamex</option>
				      <option value="2">Bancomer</option>
				      <option value="3">Banorte</option>
				      <option value="4">Banregio</option>
				      <option value="5">Bansí</option>
				      <option value="6">Inbursa</option>
				      <option value="7">Ixe</option>
				      <option value="8">Santander</option>
				      <option value="9">Scotiabank Inverlat</option>
				    </select>
				    <label>Banco Afiliado</label>
				</div>

				<!--dirección de habitación-->
                <div class="item-form input-field">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
          			<label for="textarea1">Dirección de Habitación</label>
				</div>

				<!--cargo-->
				<div class="item-form input-field">
				    <select>
				      <option value="" disabled selected>Elige un cargo</option>
				      <option value="1">Lavador</option>
				      <option value="2">Supervisor</option>
				    </select>
				    <label>Cargo</label>
				</div>

				<!--Sedes-->
				<div class="item-form input-field">
				    <select>
				      <option value="" disabled selected>Elige una Sede</option>
				      <option value="1">Sede 1</option>
				      <option value="2">Sede 2</option>
				    </select>
				    <label>Sedes</label>
				</div>

				<!--verificacion paypal-->
				<p>
			      <input type="checkbox" class="filled-in" id="filled-in-box" />
			      <label for="filled-in-box">¿Utiliza Paypal?</label>
			    </p>

				<div class="send">
					<div class="send-indicator">
						<div class="send-indicator-dot"></div>
						<div class="send-indicator-dot"></div>
						<div class="send-indicator-dot"></div>
						<div class="send-indicator-dot"></div>
					</div>
					<button class="send-button">
						<div class="sent-bg"></div>
						<i class="fa fa-send send-icon"></i>
						<i class="fa fa-check sent-icon"></i>
					</button>
				</div>

		      </form>
		    </div>

		    <!--CONVENIO DE PAGO-->
		    <div class="modal-content empleadoPago">
		    	<h3>¿Cuál es el convenio de pago?</h3>
		    	<figure>
		    		<img src="img/comandos-avatar.jpg" alt="">
		    	</figure>
		    	<h3>01Comandos</h3>
		    	<form action="">
		    		<!--tipo de pago-->
					<div class="item-form input-field">
					    <select>
					      <option value="" disabled selected>Elige un Pago</option>
					      <option value="1">Porcentaje</option>
					      <option value="2">Precio Fijo</option>
					    </select>
					    <label>Tipo de Pago</label>
					</div>

					<!--Precio-->
	                <div class="item-form input-field">
						<input id="precio" type="text" class="validate">
		          		<label for="precio" data-error="Ups! un error">Precio</label>
					</div>

					<!--Turno-->
					<div class="item-form input-field">
					    <select>
					      <option value="" disabled selected>Elige un Turno</option>
					      <option value="1">Vespertino</option>
					      <option value="2">Matutino</option>
					    </select>
					    <label>Turno Laboral</label>
					</div>

					<div class="send">
						<div class="send-indicator">
							<div class="send-indicator-dot"></div>
							<div class="send-indicator-dot"></div>
							<div class="send-indicator-dot"></div>
							<div class="send-indicator-dot"></div>
						</div>
						<button class="send-button">
							<div class="sent-bg"></div>
							<i class="fa fa-send send-icon"></i>
							<i class="fa fa-check sent-icon"></i>
						</button>
					</div>
		    	</form>
		    </div>
		</div>
			

		<!-- Modal Eliminar -->		  
		<div id="modalEliminar" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		    <div class="modal-content">
		      <h3>¿Deseas eliminar este empleado?</h3>
		      <div class="botones">
		      	<!--cancelar-->
		      	<button class="modal-close">Cancelar</button>
		      	<!--confirmar-->
		      	<button>Si, eliminar</button>
		      </div>
		    </div>
		</div>


	</section>
	
	<script src="js/TweenMax.min.js"></script>
	<script src="js/send.js"></script>
  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>