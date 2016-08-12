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
			<div class="containerGeneral-print-title">
				<h1>Balance</h1>
			</div>

			<!--Botones principales del segmento-->
			<div class="containerGeneral-print-buttons">
				<!-- nueva sede-->
				<a href="#modalNewsede" class="active modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="+Sedes">
					<span class="icon-Washine_sedes"></span>
				</a>

				<!--cambiar password-->
				<a href="#modalPassword" class="modal-trigger tooltipped tooltipped" data-position="bottom" data-delay="50" data-tooltip="Contraseña">
					<span class="icon-Washine_password"></span>
				</a>

				<!--Reportes-->
				<a href="reportes.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Reportes">
					<figure>
						<img src="img/pdf.svg" alt="">	
					</figure>					
				</a>
			</div>

			<!--LISTADOS EMPLEADOS-->
			<div class="containerGeneral-print-listEmpleados balanceGeneral">				

				<!--Balance TOTAL-->
				<div class="containerGeneral-print-listEmpleados-balance balance-datail">
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
						<h4>balance total</h4>
						<!--record totales-->
						<div class="record-total">
							<div class="item">
								<h3>$ 1 214.<span>01</span></h3>
							</div>	
							<div class="item">
								<!--total supervisor-->
								<div class="item-jobs">
									<span class="icon-Washine_supervisor"></span>
									<h5>$ 1 600.00</h5>
								</div>

								<!--total lavador-->
								<div class="item-jobs">
									<span class="icon-Washine_lavador"></span>
									<h5>$ 1 321.14</h5>
								</div>

							</div>
						</div>
						
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

				<!--BALANCE POR SEDES-->
				<div class="containerGeneral-print-listEmpleados-balance balance-datail">
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
						<h4>balance sedes</h4>
						<!--selector de sedes-->
						<div class="record-select">
							<select class="browser-default">
							    <option value="" disabled selected>Sedes</option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
							</select>
						</div>
						<!--record totales-->
						<div class="record-total">
							<div class="item">
								<h3>$ 1 214.<span>01</span></h3>
							</div>	
							<div class="item">
								<!--total supervisor-->
								<div class="item-jobs">
									<span class="icon-Washine_supervisor"></span>
									<h5>$ 1 600.00</h5>
								</div>

								<!--total lavador-->
								<div class="item-jobs">
									<span class="icon-Washine_lavador"></span>
									<h5>$ 1 321.14</h5>
								</div>

							</div>
						</div>
						
						<div class="record-leyenda">
							<!-- vehiculo pequeño-->
							<div class="item">
								<span class="icon-Washine_sedan"></span>
								<p>104</p>
							</div>
							<!--vehiculo grande-->
							<div class="item">
								<span class="icon-Washine_pickup"></span>
								<p>86</p>
							</div>
						</div>
					</div>
					<div class="atendidos">
						<div class="item">
							<span class="icon-Washine_happy"></span>
							<h3>190</h3>
						</div>
						<p>clientes atendidos</p>
						<div class="options">
							<button>
								<span class="icon-Washine_submenu"></span>
							</button>
							<ul class="options-more">
								<li>
									<a href="#modalNuevoServicio" class="active modal-trigger">Crear Servicios</a>
								</li>
								<li>
									<a href="#modalNuevoConsumible" class="active modal-trigger">Crear Consumible</a>
								</li>
								<li>
									<a href="#modalEliminarSede" class="active modal-trigger">Eliminar Sede</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- Servicios y consumibles-->
					<div class="serviciosSedes">
						<!-- servicios-->
						<div class="serviciosSedes-service">
							<div class="serviciosSedes-service-title">
								<div class="item">
									<h3>Lavado Standard</h3>
									<p>30min</p>
								</div>
								<div class="item">
									<p>$30</p>
								</div>
							</div>								

							<!--leyenda de consumo-->
							<div class="record-leyenda">
								<!-- vehiculo pequeño-->
								<div class="item">
									<span class="icon-Washine_sedan"></span>
									<p>15ml</p>
								</div>
								<!--vehiculo grande-->
								<div class="item">
									<span class="icon-Washine_pickup"></span>
									<p>20ml</p>
								</div>
							</div>						

							<!--opciones-->
							<div class="options">
								<button>
									<span class="icon-Washine_submenu"></span>
								</button>
								<ul class="options-more">
									<li>
										<a href="#">Editar Servicio</a>
									</li>
									<li>
										<a href="#">Eliminar</a>
									</li>
								</ul>
							</div>
						</div>

						<!--consumibles-->
						<div class="serviciosSedes-service">
							<h4>Shampoo</h4>
							<div class="serviciosSedes-service-status">
								<div class="almacenamiento">
									<div class="cien"></div>
									<div class="noventa"></div>
									<div class="ochenta"></div>
									<div class="setenta"></div>
									<div class="sesenta"></div>
									<div class="cincuenta"></div>
									<div class="cuarenta"></div>
									<div class="treinta"></div>
									<div class="veinte"></div>
									<div class="diez"></div>
								</div>
							</div>
							<p>En Stock: 80 litros</p>

							<!--leyenda de consumo-->
							<div class="record-leyenda">
								<!-- vehiculo pequeño-->
								<div class="item">
									<span class="icon-Washine_sedan"></span>
									<p>15ml</p>
								</div>
								<!--vehiculo grande-->
								<div class="item">
									<span class="icon-Washine_pickup"></span>
									<p>20ml</p>
								</div>
							</div>

							<!--opciones-->
							<div class="options">
								<button>
									<span class="icon-Washine_submenu"></span>
								</button>
								<ul class="options-more">
									<li>
										<a href="#modalMasConsumible" class="active modal-trigger">+ Consumible</a>
									</li>
									<li>
										<a href="#">Editar Consumible</a>
									</li>
									<li>
										<a href="#">Eliminar</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>

				<!--BALANCE DE PAGOS-->
				<div class="containerGeneral-print-listEmpleados-balance balance-datail">
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
						<h4>balance pagos</h4>
						<!--record totales-->
						<div class="record-total">
							<div class="item">
								<h3>$ 1 214.<span>01</span></h3>
							</div>	
							<div class="item">
								<!--total supervisor-->
								<div class="item-jobs">
									<span class="icon-Washine_supervisor"></span>
									<h5>$ 1 600.00</h5>
								</div>

								<!--total lavador-->
								<div class="item-jobs">
									<span class="icon-Washine_lavador"></span>
									<h5>$ 1 321.14</h5>
								</div>

							</div>
						</div>

						<!--record paypal y debito-->
						<div class="record-paypal">
							<div class="item">
								<span class="icon-Washine_paypal"></span>
								<h5>$ 1 600.00</h5>
							</div>	
							<div class="item">
								<span class="icon-Washine_debito"></span>
								<h5>$ 1 321.14</h5>
							</div>
						</div>

						<!--boton pagar paypal-->
						<div class="pagar">
							<button>
								<span class="icon-Washine_paypal"></span>
								Pagar
							</button>
						</div>
					</div>

					<!-- listado de pagos por empleados-->
					<div class="serviciosSedes servEmpleados">
						<!--categorias de pagos-->
						<div class="serviciosSedes-category">
							<a href="#">
								Paypal
							</a>
							<a href="#" class="active">
								Depósitos
							</a>
						</div>

						<!--grupos de empleados-->
						<div class="serviciosSedes-empleados">
							<div class="title">
								<h3>resumen</h3>
							</div>
							<!--empleado 1-->
							<div class="empleado">
								<div class="empleado-date">
									<h5>$ 360</h5>
									<p>Eduardo Ortega</p>
								</div>
								<figure>
									<img src="img/empleado1.jpg" alt="">
								</figure>
							</div>

							<!--empleado 2-->
							<div class="empleado">
								<div class="empleado-date">
									<h5>$ 520</h5>
									<p>Carlos Gil</p>
								</div>
								<figure>
									<img src="img/empleado2.jpg" alt="">
								</figure>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</article>

		  <!-- Modal NewSede -->
		<div id="modalNewsede" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--INSCRIPCION-->
		    <div class="modal-content">
		    	<h3>¡Nueva Sede!</h3>
		      <form action="">
		      	<!--imagen nuevo empleado-->
		      	<ul class="photoList">
		      		<li>
	                  <span class="icon-Washine_image"></span>
	                  <input type="file" class="file" name="logo" onchange='LimitAttach(this,1)'>
	                </li>
		      	</ul>			      	

				<!--nombre y apellido-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Nombre de la Sede</label>
				</div>

				<!--dirección-->
                <div class="item-form input-field">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
          			<label for="textarea1">Dirección</label>
				</div>

				<!--Fecha Inicio-->
                <div class="item-form input-field">
					<input id="f-inicio" type="text">
	          		<label for="f-inicio">Hora Inicio</label>
				</div>

				<!--Fecha Cierre-->
                <div class="item-form input-field">
					<input id="f-cierre" type="text">
	          		<label for="f-cierre">Hora Cierre</label>
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

		    <!--LISTADO DE EMPLEADOS-->
		    <div class="modal-content elegirTrabajador">
		    	<div class="return">
		    		<a href="#">
		    			<span class="icon-Washine_left"></span>
		    			<p>Regresar</p>	
		    		</a>		    		
		    	</div>
		    	<h3>¡Elige a los trabajadores!</h3>
		    	<form action="">
		    		<!--campo de busqueda-->
		    		<div class="item-form">
		    			<input type="text" placeholder="Buscar Empleado">
		    		</div>

		    		<!--listado de empleados-->
		    		<div class="Empleadoscontainer">
						<!--categorias de pagos-->
						<div class="Empleadoscontainer-category">
							<a href="#">
								Superv.
							</a>
							<a href="#" class="active">
								Lavadores
							</a>
						</div>

						<!--grupos de empleados-->
						<div class="Empleadoscontainer-empleados">
							<div class="title">
								<h3>resumen lavadores</h3>
							</div>
							<!--empleado 1-->
							<div class="empleado">
								<input type="checkbox" class="filled-in" id="filled-in-box" />
  								<label for="filled-in-box">
									<p>Eduardo Ortega</p>
									<figure>
										<img src="img/empleado1.jpg" alt="">
									</figure>
  								</label>
									
							</div>

							<!--empleado 2-->
							<div class="empleado">
								<input type="checkbox" class="filled-in" id="filled-in-box2" />
  								<label for="filled-in-box2">
									<p>Eduardo Ortega</p>
									<figure>
										<img src="img/empleado2.jpg" alt="">
									</figure>
  								</label>									
							</div>
						</div>
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

		    <!--CONFIRMAR-->
		    <div class="modal-content elegirTrabajador">
		    	<div class="return">
		    		<a href="#">
		    			<span class="icon-Washine_left"></span>
		    			<p>Regresar</p>	
		    		</a>		    		
		    	</div>
		    	<h3 class="ultimate">¿Confirmado?</h3>
		    	<div class="elegirTrabajador-sede">
		    		<figure>
		    			<img src="img/comandos-avatar.jpg" alt="">
		    		</figure>
		    		<div class="texto">
		    			<h3>CMD Plaza</h3>
		    			<p>Av. Perimetral de cumaná </p>
		    		</div>
		    	</div>
		    	<form action="">
		    		<!--campo de busqueda-->
		    		<div class="item-form">
		    			<input type="text" placeholder="Buscar Empleado">
		    		</div>

		    		<!--listado de empleados-->
		    		<div class="Empleadoscontainer">
						<!--categorias de pagos-->
						<div class="Empleadoscontainer-category">
							<a href="#">
								Superv.
							</a>
							<a href="#" class="active">
								Lavadores
							</a>
						</div>

						<!--grupos de empleados-->
						<div class="Empleadoscontainer-empleados gggg">
							<div class="title">
								<h3>resumen lavadores</h3>
							</div>
							<!--empleado 1-->
							<div class="empleado">
								<div class="empleado-date">
									<p>Eduardo Ortega</p>
								</div>
								<figure>
									<img src="img/empleado1.jpg" alt="">
								</figure>
							</div>

							<!--empleado 2-->
							<div class="empleado">
								<div class="empleado-date">
									<p>Carlos Gil</p>
								</div>
								<figure>
									<img src="img/empleado2.jpg" alt="">
								</figure>
							</div>							
						</div>
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

		  <!-- Modal Cambiar Password -->
		<div id="modalPassword" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--Cambiar Password-->
		    <div class="modal-content">
		    	<h3>Cambiar Contraseña</h3>
		      <form action="">
				<!--nombre y apellido-->
                <div class="item-form input-field">
					<input id="password1" type="password" class="validate">
	          		<label for="password1" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Contraseña Anterior</label>
				</div>

				<!--nombre y apellido-->
                <div class="item-form input-field">
					<input id="password2" type="password" class="validate">
	          		<label for="password2" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Nueva Contraseña</label>
				</div>

				<!--nombre y apellido-->
                <div class="item-form input-field">
					<input id="password3" type="password" class="validate">
	          		<label for="password3" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Confirmar Nueva Contraseña</label>
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
		
		<!-- Modal Eliminar Sede -->
		<div id="modalEliminarSede" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--Cambiar Password-->
		    <div class="modal-content">
		    	<h3>Nueva Dirección</h3>
		      <form action="">
				<!--nombre y apellido-->
                <div class="item-form input-field">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
          			<label for="textarea1">Dirección</label>
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

		<!-- Modal + Consumible -->
		<div id="modalMasConsumible" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--Cambiar Password-->
		    <div class="modal-content">
		    	<h3>+Consumible</h3>
		      <form action="">
		      	<!--Consumible-->
				<div class="item-form input-field">
				    <select>
				      <option value="" disabled selected>¿Cambiar de Consumible?</option>
				      <option value="1">Shampoo</option>
				      <option value="2">Cera</option>
				    </select>
				    <label>Consumible</label>
				</div>

				<!--cantidad a agregar-->
                <div class="item-form input-field">
					<input id="cantidad" type="text" class="validate">
	          		<label for="cantidad" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">¿Cuántos litros?</label>
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

		<!-- Modal Nuevo Consumible -->
		<div id="modalNuevoConsumible" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--Cambiar Password-->
		    <div class="modal-content">
		    	<h3>Nuevo Consumible</h3>
		      <form action="">
		      	<!--Nombre del Producto-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Nombre del Producto</label>
				</div>

		      	<!--unidad de medida-->
				<div class="item-form input-field">
				    <select>
				      <option value="" disabled selected>Unidades de Medidas</option>
				      <option value="1">Mililitros</option>
				      <option value="2">Litros</option>
				      <option value="3">Piezas</option>
				      <option value="4">Gramos</option>
				      <option value="5">Kilogramos</option>
				    </select>
				    <label>Unidad de Medida</label>
				</div>

				<!--cantidad a agregar-->
                <div class="item-form input-field">
					<input id="cantidad" type="text" class="validate">
	          		<label for="cantidad" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">¿Cuántos litros?</label>
				</div>

				<!--capacidad de almacenamiento-->
                <div class="item-form input-field">
					<input id="cantidad" type="text" class="validate">
	          		<label for="cantidad" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Capacidad</label>
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

		<!-- Modal Nuevo Servicio -->
		<div id="modalNuevoServicio" class="modal">
		  	<div class="modal-close">
		  		<span class="icon-Washine_close"></span>
		  	</div>
		  	<!--Cambiar Password-->
		    <div class="modal-content">
		    	<h3>Nuevo Servicio</h3>
		      <form action="">
		      	<!--Nombre del Servicio-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Nombre del Servicio</label>
	          		<button class="newService">
	          			<span class="icon-Washine_close"></span>
	          		</button>
				</div>

				<!--Tiempo del servicio-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Tiempo</label>
				</div>

				<!--Precio del servicio-->
                <div class="item-form input-field">
					<input id="name" type="text" class="validate">
	          		<label for="name" data-error="Lo sentimos, no te reconocemos" data-success="¡Hola Edmundo!">Precio</label>
				</div>

				<!--grupo para consumibles-->
				<div class="item-formGroup">
					<!--unidad de medida-->
					<div class="item-form input-field">
					    <select>
					      <option value="" disabled selected>Elige Consumibles</option>
					      <option value="1">Shampoo</option>
					      <option value="2">Cera</option>
					    </select>
					    <label>Consumible</label>
					    <button>+consumible</button>
					</div>

					<!--Consumo en sedans-->
	                <div class="item-form input-field">
						<input id="cantidad" type="text">
		          		<label for="cantidad">Sedan</label>
					</div>

					<!--capacidad de almacenamiento-->
	                <div class="item-form input-field">
						<input id="cantidad" type="text">
		          		<label for="cantidad">Rústico</label>
					</div>
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

	</section>
	
	<script src="js/TweenMax.min.js"></script>
	<script src="js/send.js"></script>
  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>