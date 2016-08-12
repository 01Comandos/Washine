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
			<!--TABLA DE LISTA DE SERVICIOS-->
			<table  class="highlight">
				<!-- TITULOS TABLA-->
		        <thead>
		          <tr>
		              <th>Nuestros Clientes</th>
		              <th>Servicios</th>
		              <th>Login</th>
		              <th class="option-table">
		              	<!--SERVICIOS EN PROCESO-->
		              	<a href="#modalSearch" class="modal-trigger">
		              		<span class="icon-Washine_search"></span>
		              	</a>
		              </th>
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
		            			<span class="icon-Washine_clean"></span>
		            			<p>10</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Linkedin</h5>
		            	</td>
		            	<td></td>		            
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
		            			<span class="icon-Washine_clean"></span>
		            			<p>15</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Google+</h5>
		            	</td>		   
		            	<td></td>		            
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
		            			<span class="icon-Washine_clean"></span>
		            			<p>17</p>
		            		</div>
		            	</td>

		            	<!--Lugar-->
		            	<td>
		            		<h5>Twitter</h5>
		            	</td>		            	
		            	<td></td>		            
		          	</tr>

		        </tbody>

		      </table>
			  

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

 	
		</article>


	</section>

	
          

  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>