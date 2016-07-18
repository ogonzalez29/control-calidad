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
//
require 'connect_db.php'; //Database connection
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
	<title>Certificado de Control Calidad</title>
	<link rel="stylesheet" type="text/css" href="view.mobile.css" media="all"/>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body id="main_body">
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
		<h1><a>Certificado de Control Calidad</a></h1>
		<form method="post" action="search.php">
			<div class="header-image">
					<a href="http://servitalleres.com" target="_blank"><img src="img/logo.png"></a>
			</div>
			<div class="form_description">
				<h2>Certificado de Control Calidad</h2>
				<p>Revisión de 50 puntos de control calidad de la reparación mecánica</p>
			</div>
			<ul >
				<li id="li_2">	
					<div style="margin: 0 235px 0 235px;">
						<div>
							<input type="text" name="cons" id="cons" style="width:130px; height:25px;"></input>
							<span style="width:35%; float:right;"><input type="submit" value="Buscar" class="button_text"></input></span>
						</div>							
					</div>
				</li>
				<li class="section_break">
					<p></p>
				</li>
				<table>  
					<tr><th colspan=7></br></th></tr>
		            <tr align='center'>
		            	<td width='35' align='center'>No.</td>
		            	<td width='35' align='center'>Cliente</td>
		            	<td width='180' align='center'>Placa</td>
		            	<td width='60' align='center'>Kilometraje</td>
		            	<td width='60' align='center'>Orden de Reparación</td>
		            	<td width='180' align='center'>Fecha</td>
            		</tr> 
			</ul>
		</form>
	</div>
</body>
</html>	
