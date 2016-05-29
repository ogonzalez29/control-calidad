<?php
//Page code to print results

?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
	<head>
		<title>Certificado de Control Calidad</title>
		<link rel="stylesheet" type="text/css" href="css/view1.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
	</head>
	<body>
	<div class="grid">
		<div class="row">
			<div class="col-12">
				<div class="col-12">
					<img src="http://placehold.it/400x70">
				</div>
				<div style="text-align: center;" class="col-12">
					<h1>CERTIFICADO DE CONTROL CALIDAD</h1>
				</div>
			</div>
		</div>
		<div class="row-1">
			<div class="col-12">
				<div class="col-08">
					<h3>Cliente:</h3>	
				</div>
				<div class="col-2">
					<h3>Daniel Gonzalez</h3>
				</div>
				<div class="col-07">
					<h3>Marca:</h3>
				</div>
				<div class="col-2">
					<h3>Renault</h3>
				</div>
				<div class="col-06">
					<h3>Linea:</h3>
				</div>
				<div class="col-2">
					<h3>Clio</h3>
				</div>
				<div class="col-08">
					<h3>Placas:</h3>
				</div>
				<div class="col-1">
					<h3>CVL685</h3>
				</div>
				<div class ="col-09">
					<h3>Kilometraje:</h3>
				</div>
				<div class ="col-09">
					<h3>78000</h3>
				</div>
			</div>
		</div>
		<div class="row-2">
			<div class="col-12">
				<div class="col-1">
					<h3>Fecha:</h3>	
				</div>
				<div class="col-3">
					<h3>28/05/2016</h3>
				</div>
				<div class="col-2">
					<h3>Orden de reparacion</h3>
				</div>
				<div class="col-1">
					<h3>4156</h3>
				</div>
				<div class="col-2">
					<h3>Asesor de servicio</h3>	
				</div>
				<div class="col-3">
					<h3><?php 
						$cat=$_POST['cat'];
						echo "$cat"; ?></h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				
			</div>
			<div class="col-6">
				
			</div>
		</div>
	</div>
		<!-- <?Php
			$cat=$_POST['cat'];
			$subcat=$_POST['subcat'];

			echo "Value of \$cat = $cat <br>Value of \$subcat = $subcat ";
		?>
		<br><br>
		<a href=index.php>Reiniciar otro certificado</a>

		<br><br> -->

		<!-- <div id="footer">
					Copyright &copy; 2016 <a href="http://www.servitalleres.com" target="_blank">Servitalleres</a>
		</div> -->
		<div class="mockup-overlay">
			<img src="img/certificado_control_calidad.png">
		</div> 
	</body>
</html>