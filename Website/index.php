<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>
	<!--HEADER-->
	<header class="header">
		<!--HEADER-->
		<div class="header-head">
			<!--LOGOTIPO-->
			<figure class="logo">
				<img src="img/Washine-logo.svg" alt="">
			</figure>
			
			<!--PHONE-->
			<div class="phone">
				<span class="icon-Washine_phone"></span>
				<p>52 55 3939 0765</p>
			</div>
		</div>

		<!--EXPLICACIÓN-->
		<div class="header-explanation">
			<h1>¡El sitio lo decides tu!</h1>
			<h2>Lava tu coche mientras estas en el trabajo, el GYM o en el supermercado</h2>
			<h4>¿Cómo funciona?</h4>
			
			<!--¿COMO FUNCIONA-->
			<div class="header-explanation-works">
				<!-- PASO 1 -->
				<div class="item">
					<span class="icon-Washine_phoneA"></span>
					<p>Descarga la App</p>
				</div>

				<!-- PASO 2 -->
				<div class="item">
					<span class="icon-Washine_phoneB"></span>
					<p>Configura la sede, día y hora</p>
				</div>

				<!-- PASO 3 -->
				<div class="item">
					<span class="icon-Washine_phoneC"></span>
					<p>¡Disfruta de tu servicio!</p>
				</div>
			</div>

			<!--LINKS APP-->
			<div class="header-explanation-stores">
				<!--PLAY STORES-->
				<div class="item">
					<a href="#" target="_blank">
						<img src="img/Washine_PlayStore.png" alt="play store">
					</a>
				</div>

				<!--APP STORES-->
				<div class="item">
					<a href="#" target="_blank">
						<img src="img/Washine_AppStore.png" alt="app store">
					</a>
				</div>
			</div>
		</div>

		<!--DIAGONAL-->
		<article class="header-diagonal">
			<div class="wrapper">
				<span class="back-contact"></span>
			</div>			
		</article>
	</header>

	<!-- OPINIONES DE LOS CLIENTES -->
	<section class="customers">

		<!--IMAGEN CAMIONETA-->
		<article class="customers-raptor">
			<figure>
				<img src="img/FordRaptor.png" alt="">
			</figure>
			<div class="note">
				<span class="icon-Washine_flecha"></span>
				<p>Sabrás quien atiende tu coche</p>
			</div>
		</article>

		<!--TITULO-->
		<article class="customers-title">
			<h2>Lo que dicen nuestros clientes</h2>
		</article>

		<!--OPINIONES-->
		<ul class="customers-opinion">
			<!--OPINION 1-->
			<li class="item">
				<figure>
					<img src="img/comandos-avatar.jpg" alt="">
				</figure>
				<div class="item-datos">
					<h4>@01Comandos</h4>
					<p>Es algo impresionante, te afilias y dices donde estacionaste el coche. Eliges el servicio y listo! Coche lavado!</p>
					<div class="link">
						<a href="https://twitter.com/01Comandos/" target="_blank">@01Comandos</a>
					</div>
				</div>
			</li>

			<!--OPINION 2-->
			<li class="item">
				<figure>
					<img src="img/javier-avatar.jpg" alt="">
				</figure>
				<div class="item-datos">
					<h4>Javier Hernandez</h4>
					<p>Excelente! Cuenta con un sistema de horarios impecables, servicio puntual y profesional</p>
					<div class="link">
						<a href="https://twitter.com/soyLuishp" target="_blank">@soyLuisHp</a>
					</div>
				</div>
			</li>

			<!--OPINION 3-->
			<li class="item">
				<figure>
					<img src="img/torrens-avatar.jpg" alt="">
				</figure>
				<div class="item-datos">
					<h4>José Torrens</h4>
					<p>Me agradó poder dejar una nota de que deje objetos de valor. Un servicio muy profesional junto a Paypal</p>
					<div class="link">
						<a href="https://twitter.com/josetorrens" target="_blank">@josetorrens</a>
					</div>
				</div>
			</li>
		</ul>
	</section>

	<section class="contact">
		<!--IMAGEN DIAGONAL-->
		<article class="contact-container diagonal-b">
			<div class="wrapper">
				<span class="back-contact"></span>
			</div>			
		</article>

		<!-- CONTACTO E IMAGEN -->
		<article class="contact-container">
			<!--IMAGEN-->
			<div class="contact-container-item">			
			</div>

			<!--FORMULARIO-->
			<div class="contact-container-item">
				<form action="">
					<div class="title">
						<h4>¿Quieres promocionar Washine en tu Edificio?</h4>
						<p>Ofrecemos planes y beneficios para edificios corporativos y centros comerciales, ¡se parte de Washine!</p>
					</div>

					<!--NOMBRE-->
					<div class="item-form input-field">
						<input id="name" type="text" class="validate">
		          		<label for="name">Nombre</label>
					</div>

					<!--TELEFONO-->
					<div class="item-form input-field">
						<input id="phone" type="tel" class="validate">
		          		<label for="phone">Teléfono</label>
					</div>

					<!--EMAIL-->
					<div class="item-form input-field">
						<input id="email" type="email" class="validate">
		          		<label for="email">Correo Electrónico</label>
					</div>

					<!--MENSAJE-->
	                <div class="item-form input-field">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
	          			<label for="textarea1">Mensaje</label>
					</div>

					<div class="g-recaptcha" data-sitekey="6LeTsCITAAAAALuYjUwOh5uRvgGWexByfdBF9tPr"></div>
					
					<!--MENSAJE ENVIADO-->
					<div class="mensaje">
						<p>¡Mensaje Enviado! 
							<br>Gracias por escribirnos, pronto nos pondremos en contacto
						</p>
					</div>
					
					<div class="submit">
						<button>
							<span class="icon-Washine_send"></span>
						</button>
					</div>
				</form>
			</div>
		</article>
	</section>

		

	<footer class="footer">
		<div class="footer-container">
			<!--LOGOTIPO-->
			<div class="footer-container-item">
				<a href="#">
					<img src="img/Washine-logo.svg" alt="">
				</a>
			</div>

			<!--REDES SOCIALES-->
			<div class="footer-container-item">
				<!--FACEBOOK-->
				<div class="socialMedia">
					<a href="https://www.facebook.com/Washine-252966978413582" target="_blank">
						<span class="icon-Washine_fb-color"><span class="path1"></span><span class="path2"></span></span>
					</a>
				</div>

				<!--TWITTER-->
				<div class="socialMedia">
					<a href="https://twitter.com/washine_mx" target="_blank">
						<span class="icon-Washine_tw-color"><span class="path1"></span><span class="path2"></span></span>
					</a>
				</div>

				<!--GOOGLE-->
				<div class="socialMedia">
					<a href="https://plus.google.com/u/0/102705197514690655424/about" target="_blank">
						<span class="icon-Washine_g-color"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
					</a>
				</div>

				<!--INSTAGRAM-->
				<div class="socialMedia">
					<a href="https://www.instagram.com/washine_mx/" target="_blank">
						<span class="icon-Washine_ig-color"><span class="path1"></span><span class="path2"></span></span>
					</a>
				</div>
			</div>

		</div>
		
		<p>Washine  ·  Todos los derechos reservados 2016  ·  Servicios disponibles en México y próximamente en McAllen, TX</p>
		<h5>Diseñado y desarrollado por <a href="http://comandosweb.com.ve/" target="_blank">@01Comandos</a> y <a href="https://www.linkedin.com/in/luis-javier-hern%C3%A1ndez-perez-b587a92b?authType=name&authToken=npkD&trk=hp-feed-member-name" target="_blank">@soyLuisHp</a></h5>
	</footer>

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>