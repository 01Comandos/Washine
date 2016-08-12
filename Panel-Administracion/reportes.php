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
				<!--regresar-->
				<a href="balance.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Regresar">
					<span class="icon-Washine_regresar"></span>
				</a>
			</div>

			<!--LISTADOS EMPLEADOS-->
			<div class="containerGeneral-print-listEmpleados">
				<!--listado de reportes-->
				<div class="containerGeneral-print-listEmpleados-listReportes">
					<!--reporte 1-->
					<a href="#">
						<div class="item">
							<figure>
								<img src="img/pdf.svg" alt="">	
							</figure>
							<h3>Abril 2016</h3>
						</div>

						<div class="item">
							<button>
								<span class="icon-Washine_download"></span>
							</button>
						</div>							
					</a>

					<!--reporte 2-->
					<a href="#">
						<div class="item">
							<figure>
								<img src="img/pdf.svg" alt="">	
							</figure>
							<h3>Abril 2016</h3>
						</div>

						<div class="item">
							<button>
								<span class="icon-Washine_download"></span>
							</button>
						</div>							
					</a>

					<!--reporte 3-->
					<a href="#">
						<div class="item">
							<figure>
								<img src="img/pdf.svg" alt="">	
							</figure>
							<h3>Abril 2016</h3>
						</div>

						<div class="item">
							<button>
								<span class="icon-Washine_download"></span>
							</button>
						</div>							
					</a>

					<!--reporte 4-->
					<a href="#">
						<div class="item">
							<figure>
								<img src="img/pdf.svg" alt="">	
							</figure>
							<h3>Abril 2016</h3>
						</div>

						<div class="item">
							<button>
								<span class="icon-Washine_download"></span>
							</button>
						</div>							
					</a>
				</div>
			</div>
		</article>

	</section>
	
	<script src="js/TweenMax.min.js"></script>
	<script src="js/send.js"></script>
  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>