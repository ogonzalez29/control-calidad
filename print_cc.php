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
					<!-- <h3><?php 
						$cat=$_POST['cat'];
						echo "$cat"; ?></h3> -->
					<h3>Daniel Gonzalez</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div style="text-align: center;" class="col-12">
				<h2>PUNTOS DE CONTROL</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<table style="float:left">
					<caption>
							Instrumentos y equipamento: 
					</caption>
					   <thead>
					    	<tr>
					        	<th style="width: 30%" scope="col"><span style="display: none">Instrumentos y equipamento:</span></th>
					            <th id="mc_3_1" style="width: 15%" scope="col">B</th>
								<th id="mc_3_2" style="width: 15%" scope="col">M</th>
								<th id="mc_3_3" style="width: 15%" scope="col">N/A</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr class="alt" id="mr_3">
					        	<td class="first_col">Indicadores y luces de bordo</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Reloj a la hora</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Cocuyos</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Encendido radio (código)</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Ventilación, calefacción, A/A</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Accionamiento y sonido pito</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Limpiabrisas (eficacia)</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Activación alarma</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Espejos retrovisores</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Elevavidrios (programación)</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Bloqueo central (programación)</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Sonido de parlantes</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Activación sensor reverso</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Presencia copa de seguridad</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Presencia documentos vehículo</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Carga y vencimiento extinguidor</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					            </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Programación cambio de aceite</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					    </tbody>
					</table>
					<table>
					<caption>
							Alumbrado exterior: 
					</caption>
					   <thead>
					    	<tr>
					        	<th style="width: 20%" scope="col"><span style="display: none">Alumbrado exterior:</span></th>
					            <th id="mc_3_1" style="width: 15%" scope="col">B</th>
								<th id="mc_3_2" style="width: 15%" scope="col">M</th>
								<th id="mc_3_3" style="width: 15%" scope="col">N/A</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr class="alt" id="mr_3">
					        	<td class="first_col">Luz baja, media y alta</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Direccionales, repetidores</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Stops</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Reversa</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Guantera, luz techo, baúl</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr><tr class="alt" id="mr_3">
					        	<td class="first_col">Exploradoras y antiniebla</td>
					            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					    </tbody>
				</table>
				<table>
				<caption>
						Presentación del vehículo: 
				</caption>
				   <thead>
				    	<tr>
				        	<th style="width: 30%" scope="col"><span style="display: none">Presentación del vehículo:</span></th>
				            <th id="mc_3_1" style="width: 15%" scope="col">B</th>
							<th id="mc_3_2" style="width: 15%" scope="col">M</th>
							<th id="mc_3_3" style="width: 15%" scope="col">N/A</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<tr class="alt" id="mr_3">
				        	<td class="first_col">Limpieza carteras, cinturones</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Limpieza millaré y guarnecidos</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Limpieza exterior (chapas, etc)</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				    </tbody>
				</table>											
			</div>
			<div class="col-6">
				<table>
					<caption>
							Desgaste de las llantas (%): 
					</caption>
					   <thead>
					    	<tr>
					        	<th style="width: 20%" scope="col"><span style="display: none">Desgaste de las llantas (%):</span></th>
					            <th id="mc_3_1" style="width: 15%" scope="col">25</th>
								<th id="mc_3_2" style="width: 15%" scope="col">50</th>
								<th id="mc_3_3" style="width: 15%" scope="col">75</th>
								<th id="mc_3_4" style="width: 15%" scope="col">100</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera izquierda</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera derecha</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera izquierda</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera derecha</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					    </tbody>
				</table>
				<table>
					<caption>
							Presión de las llantas (psi): 
					</caption>
					   <thead>
					    	<tr>
					        	<th style="width: 20%" scope="col"><span style="display: none">Presión de las llantas (psi):</span></th>
					            <th id="mc_3_1" style="width: 15%" scope="col">30</th>
								<th id="mc_3_2" style="width: 15%" scope="col">32</th>
								<th id="mc_3_3" style="width: 15%" scope="col">34</th>
								<th id="mc_3_4" style="width: 15%" scope="col">36</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera izquierda</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera derecha</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera izquierda</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera derecha</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
					        </tr>
					    </tbody>
				</table>
				<table>
				<caption>
						Control debajo del capot: 
				</caption>
				   <thead>
				    	<tr>
				        	<th style="width: 30%" scope="col"><span style="display: none">Control debajo del capot:</span></th>
				            <th id="mc_3_1" style="width: 15%" scope="col">B</th>
							<th id="mc_3_2" style="width: 15%" scope="col">M</th>
							<th id="mc_3_3" style="width: 15%" scope="col">N/A</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<tr class="alt" id="mr_3">
				        	<td class="first_col">Nivel aceite motor y ajuste filtro</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Nivel líquido de frenos</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Nivel líquido refrigerante</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Nivel aceite de caja</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Nivel hidráulico de dirección</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Agua limpiabrisas del. y tras</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Fijación y ajuste bornes batería</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Presencia de tapas, obturadores</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Presencia del protector motor</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				    </tbody>
				</table>
				<table>
				<caption>
						Prueba de ruta: 
				</caption>
				   <thead>
				    	<tr>
				        	<th style="width: 40%" scope="col"><span style="display: none">Prueba de ruta:</span></th>
				            <th id="mc_3_1" style="width: 15%" scope="col">B</th>
							<th id="mc_3_2" style="width: 15%" scope="col">M</th>
							<th id="mc_3_3" style="width: 15%" scope="col">N/A</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<tr class="alt" id="mr_3">
				        	<td class="first_col">Centrado del timón</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				    	<tr class="alt" id="mr_3">
				        	<td class="first_col">Cambio de marchas neutro y andando</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Rendimiento y aceleración</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Temperatura de motor</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Encendido en frío y caliente</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Efectividad y estabilidad frenado</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				        <tr class="alt" id="mr_3">
				        	<td class="first_col">Especificación ruidos susp. y dirección</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="element_3" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="element_3" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="element_3" type="radio" value="3"  /></td>
				        </tr>
				    </tbody>
				</table>
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