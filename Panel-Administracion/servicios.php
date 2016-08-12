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

		<!--CONTENIDO DE SERVICIOS-->
		<article class="containerGeneral-print table-service">
			<!--MIGAS DE PAN-->
			<div class="containerGeneral-print-Leyend">
				<!--leyenda-->
				<div class="item">
					<a href="#" class="active">En Curso ></a>
					<a href="#">Finalizado</a>
				</div>					
			</div>

			<!--TABLA DE LISTA DE SERVICIOS-->
			<table  class="highlight">
				<!-- TITULOS TABLA-->
		        <thead>
		          <tr>
		              <th>cliente</th>
		              <th>servicio</th>
		              <th>lugar</th>
		              <th>Hora</th>
		              <th>precio</th>
		          </tr>
		        </thead>

				<!--DATOS DE LA TABLA-->
		        <tbody>
		        	<!--CLIENTE 1-->
		        	<tr>
		        		<!--DATOS DEL CLIENTE-->
		            	<td>
		            		<figure>
		            			<img src="img/comandos-avatar.jpg" alt="">
		            		</figure>
		            		<div class="date">
		            			<h3>@01Comandos</h3>
		            			<p>00comandos@gmail.com</p>
		            		</div>
		            	</td>
		            	<!--servicio-->
		            	<td>
		            		<div class="service">
		            			<span class="icon-Washine_sedan"></span>
		            			<p>Honda Accord</p>
		            		</div>
		            		<div class="service">
		            			<span class="icon-Washine_clean"></span>
		            			<p>Lavado Standard</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Centro Empresarial Oriente</h5>
		            	</td>

		            	<!--hora-->
		            	<td>
		            		<div class="dia">
		            			<p>Lunes,<br>02May2016</p>
			            		<h4>9:00AM</h4>
		            		</div>			            		
		            	</td>

		            	<!--precio-->
		            	<td>
		            		<span class="price">$30</span>
		            	</td>		            
		          	</tr>

		          	<!--CLIENTE 2-->
		        	<tr>
		        		<!--DATOS DEL CLIENTE-->
		            	<td>
		            		<figure>
		            			<img src="img/torrens-avatar.jpeg" alt="">
		            		</figure>
		            		<div class="date">
		            			<h3>José Torrens</h3>
		            			<p>josetorrens@gmail.com</p>
		            		</div>
		            	</td>
		            	<!--servicio-->
		            	<td>
		            		<div class="service">
		            			<span class="icon-Washine_pickup"></span>
		            			<p>Ford Explorer</p>
		            		</div>
		            		<div class="service">
		            			<span class="icon-Washine_clean"></span>
		            			<p>Lavado Premium</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Centro Empresarial Oriente</h5>
		            	</td>

		            	<!--hora-->
		            	<td>
		            		<div class="dia">
		            			<p>Lunes,<br>02May2016</p>
			            		<h4>9:15AM</h4>
		            		</div>			            		
		            	</td>

		            	<!--precio-->
		            	<td>
		            		<span class="price">$50</span>
		            	</td>		            
		          	</tr>

		          	<!--CLIENTE 3-->
		        	<tr>
		        		<!--DATOS DEL CLIENTE-->
		            	<td>
		            		<figure>
		            			<img src="img/javier-avatar.jpeg" alt="">
		            		</figure>
		            		<div class="date">
		            			<h3>Javier Hernandez</h3>
		            			<p>soyluishp@gmail.com</p>
		            		</div>
		            	</td>
		            	<!--servicio-->
		            	<td>
		            		<div class="service">
		            			<span class="icon-Washine_pickup"></span>
		            			<p>Ford Explorer</p>
		            		</div>
		            		<div class="service">
		            			<span class="icon-Washine_clean"></span>
		            			<p>Lavado Premium</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Centro Empresarial Oriente</h5>
		            	</td>

		            	<!--hora-->
		            	<td>
		            		<div class="dia">
		            			<p>Lunes,<br>02May2016</p>
			            		<h4>9:15AM</h4>
		            		</div>			            		
		            	</td>

		            	<!--precio-->
		            	<td>
		            		<span class="price">$30</span>
		            	</td>		            
		          	</tr>

		        </tbody>

		      </table>
		</article>


	</section>

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>