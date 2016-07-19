<?php
//Verify if session started, else redirect to login.php
session_start();
if (!$_SESSION['logged']) {
	header("Location: login.php");
	exit;
}
echo "Bienvenido, ".$_SESSION['username'];
echo "<br><br>";
echo "<a href=logout.php>Cerrar Sesión</a>";
echo "<br><br>";
echo "<a href=index.php>Volver al inicio</a>";
//
include ('info.php'); //Database connection
require 'data_check.php'; //Input field data check file 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/view3.css" media="all">
	<title>Certificado de Control Calidad</title>
	<link rel="stylesheet" type="text/css" href="view.mobile.css" media="all"/>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body id="main_body">
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
		<h1><a>Certificado de Control Calidad</a></h1>
		<form method="post" class="appnitro" action="">
			<div class="header-image">
					<a href="http://servitalleres.com" target="_blank"><img src="img/logo.png"></a>
			</div>
			<div class="form_description">
				<h2>Certificado de Control Calidad</h2>
				<p>Revisión de 50 puntos de control calidad de la reparación mecánica</p>
			</div>
			<ul >
				<li>
					<div style="border-bottom:none; margin:0;" class="form_description">
						<h3 style="text-align:center;">Ingrese el No. de documento, placa, OR, nombre o apellido del cliente:</h3>
					</div>
				</li>
				<li id="li_2">	
					<div style="margin: 0 215px 0 215px;">
						<div>
							<input type="text" name="cons" id="cons" style="width:130px; height:25px;" value="<?php echo $search;?>"/>
							<span style="width:35%; float:right;"><input type="submit" value="Buscar" class="button_text"></input></span>
							<span><?php echo $searchErr;?></span>
							<?php 
								$_SESSION['cons'] = $search;
								if (!empty($search)){
									header("location: print_cc.php");
									exit;
								}
								else {
									echo "<form method=post action='search.php'>";
								}
							?>
						</div>							
					</div>
				</li>
				<li class="section_break">
					<p></p>
				</li>
				<li id="li_3" class="matrix">
					<table>
			            <tr align='center'>
			            	<th width='60' align='center'>No.</th>
			            	<th width='190' align='center'>Cliente</th>
			            	<th width='60' align='center'>Placa</th>
			            	<th width='50' align='center'>Kilometraje</th>
			            	<th width='60' align='center'>OR</th>
			            	<th width='80' align='center'>Fecha</th>
	            		</tr>
	            	</table>
	            </li> 
			</ul>
		</form>
	</div>
</body>
</html>	
