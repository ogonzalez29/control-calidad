<?php
require 'connect_db.php'; //Database connection
require 'data_check.php'; //Input field data check file
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Certificado Control Calidad</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
</head>
<body id="main_body" >
<?php
	$errors_array = array_filter($errors);
if (!empty($errors_array)) {
	echo "<form method=post action='form.php'>";
}
else{
	header("location: ");
	// header("location: ");
}
?>
	
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Certificado Control Calidad</a></h1>
		<form id="form_1134337" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Certificado Control Calidad</h2>
			<p>Revisión de 25 puntos de control calidad de la reparación mecánica</p>
		</div>						
			<ul >
			
					<li id="li_2" >
		<label class="description" for="element_2">Nombre completo </label>
		<span>
			<input id="element_2_1" name= "element_2_1" class="element text" maxlength="255" size="8" value="<?php echo $name;?>"/>
			<label>First</label>
			<span><?php echo $nameErr;?></span>
		</span>
		<span>
			<input id="element_2_2" name= "element_2_2" class="element text" maxlength="255" size="14" value="<?php echo $last_name;?>"/>
			<label>Last</label>
			<span><?php echo $last_nameErr;?></span>
		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Orden de reparación </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="<?php echo $order;?>"/> 
			<span><?php echo $orderErr;?></span>
		</div> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Marca </label>
		<div>
		<select class="element select medium" id="element_15" name="element_15"> 
			<option value="" selected="selected"></option>
<option value="1" >Renault</option>
<option value="2" >Chevrolet</option>
<option value="3" >Volkswagen</option>

		</select>
		</div> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Línea </label>
		<div>
		<select class="element select medium" id="element_16" name="element_16"> 
			<option value="" selected="selected"></option>
<option value="1" >Clio</option>
<option value="2" >Megane</option>
<option value="3" >Sandero</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Modelo </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Placas </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Kilometraje </label>
		<div>
			<input id="element_12" name="element_12" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Date </label>
		<span>
			<input id="element_6_1" name="element_6_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_6_1">MM</label>
		</span>
		<span>
			<input id="element_6_2" name="element_6_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_6_2">DD</label>
		</span>
		<span>
	 		<input id="element_6_3" name="element_6_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_6_3">YYYY</label>
		</span>
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_6_3",
			baseField    : "element_6",
			displayArea  : "calendar_6",
			button		 : "cal_img_6",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Asesor de servicio </label>
		<span>
			<input id="element_7_1" name= "element_7_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_7_2" name= "element_7_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Instrumentos y equipamento </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_1">Indicadores y luces de bordo</label>
<input id="element_1_2" name="element_1_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_2">Reloj a la hora</label>
<input id="element_1_3" name="element_1_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_3">Cocuyos</label>
<input id="element_1_4" name="element_1_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_4">Encendido radio (código)</label>
<input id="element_1_5" name="element_1_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_5">Ventilación, calefacción, A/A</label>
<input id="element_1_6" name="element_1_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_6">Accionamiento y sonido Pito</label>
<input id="element_1_7" name="element_1_7" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_7">Limpiabrisas (eficacia)</label>
<input id="element_1_8" name="element_1_8" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_8">Activación alarma</label>
<input id="element_1_9" name="element_1_9" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_9">Espejos retrovisores</label>
<input id="element_1_10" name="element_1_10" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_10">Elevavidrios (programación)</label>
<input id="element_1_11" name="element_1_11" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_11">Bloqueo central (programación)</label>
<input id="element_1_12" name="element_1_12" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_12">Sonido de parlantes</label>
<input id="element_1_13" name="element_1_13" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_13">Activación sensor reverso</label>
<input id="element_1_14" name="element_1_14" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_14">Presencia copa de seguridad</label>
<input id="element_1_15" name="element_1_15" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_15">Presencia documentos vehículo</label>
<input id="element_1_16" name="element_1_16" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_16">Carga y vencimiento extinguidor</label>
<input id="element_1_17" name="element_1_17" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_1_17">Programación cambio de aceite</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Alumbrado exterior </label>
		<span>
			<input id="element_17_1" name="element_17_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_1">Luz baja, media y alta</label>
<input id="element_17_2" name="element_17_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_2">Direccionales, repetidores</label>
<input id="element_17_3" name="element_17_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_3">Stops</label>
<input id="element_17_4" name="element_17_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_4">Reversa</label>
<input id="element_17_5" name="element_17_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_5">Guantera, luz techo, baúl</label>
<input id="element_17_6" name="element_17_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_17_6">Exploradoras y antiniebla</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Presentación del vehículo </label>
		<span>
			<input id="element_18_1" name="element_18_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_18_1">Limpieza carteras, cinturones</label>
<input id="element_18_2" name="element_18_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_18_2">Limpieza millaré y guarnecidos</label>
<input id="element_18_3" name="element_18_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_18_3">Limpieza exterior (chapas, etc)</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Control debajo del capot </label>
		<span>
			<input id="element_19_1" name="element_19_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_1">Nivel aceite motor y ajuste filtro</label>
<input id="element_19_2" name="element_19_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_2">Nivel líquido de frenos</label>
<input id="element_19_3" name="element_19_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_3">Nivel líquido refrigerante</label>
<input id="element_19_4" name="element_19_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_4">Nivel aceite de caja</label>
<input id="element_19_5" name="element_19_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_5">Nivel hidráulico de dirección</label>
<input id="element_19_6" name="element_19_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_6">Agua limpiabrisas del. y tras</label>
<input id="element_19_7" name="element_19_7" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_7">Fijación y ajuste bornes batería</label>
<input id="element_19_8" name="element_19_8" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_8">Presencia de tapas, obturadores</label>
<input id="element_19_9" name="element_19_9" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_19_9">Presencia del protector motor</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Prueba de ruta </label>
		<span>
			<input id="element_20_1" name="element_20_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_1">Cambio de marchas neutro y andando</label>
<input id="element_20_2" name="element_20_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_2">Rendimiento y aceleración</label>
<input id="element_20_3" name="element_20_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_3">Temperatura de motor</label>
<input id="element_20_4" name="element_20_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_4">Encendido en frío y caliente</label>
<input id="element_20_5" name="element_20_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_5">Efectividad y estabilidad frenado</label>
<input id="element_20_6" name="element_20_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_20_6">Especificación ruidos susp. y dirección</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Section Break</h3>
			<p></p>
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Inmediato </label>
		<div>
			<textarea id="element_21" name="element_21" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">De ser posible </label>
		<div>
			<textarea id="element_22" name="element_22" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">A prever </label>
		<div>
			<textarea id="element_23" name="element_23" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Observaciones </label>
		<div>
			<textarea id="element_24" name="element_24" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_25" >
		<label class="description" for="element_25">Próximo mantenimiento a los (kms): </label>
		<div>
			<input id="element_25" name="element_25" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1134337" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="img/bottom.png" alt="">
	</body>
</html>