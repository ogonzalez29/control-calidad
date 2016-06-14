<?php
//Page code to print results

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Certificado de Control Calidad</title>
		<link rel="stylesheet" type="text/css" href="css/view1.css">
		<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> -->
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
		<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
	</head>
	<body>
	<div class="grid">
		<div class="row">
			<div class="col-12">
				<div style="padding: 5px 2px 2px 2px;" class="col-12">
					<img src="img/logo.png">
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
				<div class="col-3">
					<h3>Daniel Gonzalez</h3>
				</div>
				<div class="col-07">
					<h3>Marca:</h3>
				</div>
				<div class="col-1_6">
					<h3>Renault</h3>
				</div>
				<div class="col-07">
					<h3>Linea:</h3>
				</div>
				<div class="col-3">
					<h3>Clio</h3>
				</div>
				<div class="col-07">
					<h3>Placa:</h3>
				</div>
				<div class="col-09">
					<h3>CVL685</h3>
				</div>
			</div>
		</div>
		<div class="row-2">
			<div class="col-12">
				<div class ="col-1_4">
					<h3>Kilometraje:</h3>
				</div>
				<div class ="col-09">
					<h3>78000</h3>
				</div>	
				<div class="col-2_2">
					<h3>Orden de reparación:</h3>
				</div>
				<div class="col-1">
					<h3>4598</h3>
				</div>
				<div class="col-2_2">
					<h3>Asesor de servicio:</h3>	
				</div>
				<div class="col-2">
					<!-- <h3><?php 
						$cat=$_POST['cat'];
						echo "$cat"; ?></h3> -->
					<h3>Daniel Gonzalez</h3>
				</div>
				<div class="col-08">
					<h3>Fecha:</h3>	
				</div>
				<div class="col-1_5">
					<h3>28/05/2016</h3>
				</div>
			</div>
		</div>
		<div class="row-3">
			<div style="text-align: center;" class="col-12">
				<h2>PUNTOS DE CONTROL</h2>
			</div>
		</div>
		<div class="row-4">
			<div class="col-6">
				<table style="float:left">
					<caption>
							Instrumentos y equipamento: 
					</caption>
					   <thead>
					    	<tr>
					        	<th style="width: 45%" scope="col"><span style="display: none">Instrumentos y equipamento:</span></th>
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
					        	<th style="width: 45%" scope="col"><span style="display: none">Alumbrado exterior:</span></th>
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
				        	<th style="width: 45%" scope="col"><span style="display: none">Presentación del vehículo:</span></th>
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
					        	<th style="width: 30%" scope="col"><span style="display: none">Desgaste de las llantas (%):</span></th>
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
					        	<th style="width: 30%" scope="col"><span style="display: none">Presión de las llantas (psi):</span></th>
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
				        	<th style="width: 55%" scope="col"><span style="display: none">Control debajo del capot:</span></th>
				            <th id="mc_3_1" style="width: 12%" scope="col">B</th>
							<th id="mc_3_2" style="width: 12%" scope="col">M</th>
							<th id="mc_3_3" style="width: 12%" scope="col">N/A</th>
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
				<caption style="height:19px;">
						Prueba de ruta: 
				</caption>
				   <thead>
				    	<tr>
				        	<th style="width: 55%" scope="col"><span style="display: none">Prueba de ruta:</span></th>
				            <th id="mc_3_1" style="width: 12%" scope="col">B</th>
							<th id="mc_3_2" style="width: 12%" scope="col">M</th>
							<th id="mc_3_3" style="width: 12%" scope="col">N/A</th>
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
		<div class="row-5">
			<div style="text-align: center; border: 1px solid black;" class="col-12">
				<h3>IMPORTANTE: Los controles realizados son únicamente sobre los elementos visibles del vehículo y no implican desmontaje alguno, por lo tanto el taller no asume responsabilidad en caso de la no detección de una falla no aparente.</h3>
			</div>
		</div>
		<div class="row-6">
			<div style="text-align: center;" class="col-12">
				<h3>Llamamos la atención sobre los siguientes trabajos pendientes de realizar:</h3>
			</div>
		</div>
		<div class ="row-7">
			<div class="col-3">
				<div class="col-12">
					<h2 style="padding-left: 42px;">Semáforo</h2>
					<svg height="120" width="120">
						<circle cx="40%" cy="50%" r="50" stroke="red" stroke-width="3" fill="red" />
						<text x="40%" y="50%" text-anchor="middle" stroke="#1A1A1A" stroke-width="0.5px" dy=".3em">Inmediato</text>
					</svg>
					<svg height="120" width="120">
						<circle cx="40%" cy="50%" r="50" stroke="yellow" stroke-width="3" fill="yellow" />
						<text x="40%" y="50%" text-anchor="middle" stroke="#1A1A1A" stroke-width="0.5px" dy=".3em">De ser posible</text>
					</svg>
					<svg height="120" width="120">
						<circle cx="40%" cy="50%" r="50" stroke="green" stroke-width="3" fill="green" />
						<text x="40%" y="50%" text-anchor="middle" stroke="#1A1A1A" stroke-width="0.5px" dy=".3em">A prever</text>
					</svg>
					<h2 style="padding-left: 20px;">Observaciones:</h2>

				</div>
			</div>
			<div class="col-9">
				<div style="text-align:center" class="col-12">
					<h2>Comentarios</h2>
					<div style="border-bottom: 1px solid black;" class="col-12">
						<h3>Es necesario asnmgapsgnpqnbpabnpabckvfa;lv ad agap gmpjgpagja'pgja'pm</h3>
					</div>
					<div style="border-bottom: 1px solid black;" class="col-12">
						<h3></h3>
					</div>
					<div style="border-bottom: 1px solid black;" class="col-12">
						<h3></h3>
					</div>
					<div class="col-12">
						<h3></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="col-6">
				<div style="border-right: 1px solid black;" class="col-12">
					<h2>Conformidad factura/trabajos:</h2>
					<div class="col-12">
						<h1></h1>
					</div>
					<div class="col-12">
						<h3>Firma y sello del taller</h3>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div style="border-right:1px solid black;" class="col-8">
					<h2>Próximo mantenimiento a los:</h2>
				</div>
				<div style="float:right;" class="col-4">
					<h2>5.000 kms</h2>
				</div>
				<div style="border-top: 1px solid black;" class="col-12">
					<h1 style="margin-top: 4px;"></h1>
				</div>
				<div class="col-12">
					<h3>Firma del cliente</h3>
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
		<!-- <div class="mockup-overlay">
			<img src="img/certificado_control_calidad.png">
		</div> --> 
	</body>
</html>