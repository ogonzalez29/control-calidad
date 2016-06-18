<?php
require 'connect_db.php'; //Database connection
require 'data_check.php'; //Input field data check file
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="cache-control" content="no-cache"> <!-- tells browser not to cache -->
	<meta http-equiv="expires" content="0"> <!-- says that the cache expires 'now' -->
	<meta http-equiv="pragma" content="no-cache"> <!-- says not to use cached stuff, if there is any -->
	<title>Certificado de Control Calidad</title>
	<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
	<link rel="stylesheet" type="text/css" href="view.mobile.css" media="all"/>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/view.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/ui/jquery.effects.core.js"></script>
	<script language=JavaScript>
		function reload(form)
		{
		var val=form.cat.options[form.cat.options.selectedIndex].value;
		self.location='index.php?cat=' + val ;
		}

	</script>												

	<!--[if lt IE 9]><script src="js/signaturepad/flashcanvas.js"></script><![endif]-->
	<script type="text/javascript" src="js/signaturepad/jquery.signaturepad.min.js"></script>
	<script type="text/javascript" src="js/signaturepad/json2.min.js"></script>
</head>
<body id="main_body" >
<?php

@$cat=$_GET['cat']; // Use this line or below line if register_global is off
if(strlen($cat) > 0 and !is_numeric($cat)){ // to check if $cat is numeric data or not. 
echo "Data Error";
exit;
}

///////// Getting the data from Mysql table for first list box//////////
$quer2="SELECT DISTINCT make,make_id FROM cc_vehiclemake order by make"; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
if(isset($cat) and strlen($cat) > 0){
$quer="SELECT DISTINCT type FROM cc_vehiclemake_line where make_id=$cat order by type"; 
}else{$quer="SELECT DISTINCT type FROM cc_vehiclemake_line order by type"; } 
////////// end of query for second subcategory drop down list box ///////////////////////////

$errors_array = array_filter($errors);

include ('info.php');

 if (isset($_POST['submit'])) {

 	$order = mysql_real_escape_string(htmlspecialchars($_POST['order']));
 	$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 	$last_name = mysql_real_escape_string(htmlspecialchars($_POST['last_name']));

	if (!empty($errors_array)) {
		echo "<form method=post action='index.php'>";
	}
	else{
		mysql_query("INSERT document SET order_num='$order', firstname='$name', lastname='$last_name'")
 		or die(mysql_error());
		// $user_info="INSERT INTO document (order,name,last_name) VALUES('$_POST[order]', '$_POST[name]', '$_POST[last_name]')";
		// if (!mysql_query($user_info,$connect)) {
			
		// 	die('Error:'.mysql_error());
		// }
		// mysql_close($connect);
		
		header("location: print_cc.php");
	}
}
// var_dump($check);
// var_dump($errors_array);
/// Add your form processing page address to action in above line. Example  action=dd-check.php////
?>
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
		<h1><a>Certificado de Control Calidad</a></h1>
			<form id="form_1134337" class="appnitro" method="post" action="">
			<div class="header-image">
				<a href="http://servitalleres.com" target="_blank"><img src="img/logo.png"></a>
			</div>
			<div class="form_description">
				<h2>Certificado de Control Calidad</h2>
				<p>Revisión de 25 puntos de control calidad de la reparación mecánica</p>
			</div>						
			<ul >
		<li id="li_6" >
		<label class="description" for="element_6">Fecha </label>
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
			<label for="element_6_3">AAAA</label>
		</span>
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="img/calendar.gif" alt="Pick a date.">	
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
		</li>	
		<li id="li_3" >
		<label class="description" for="element_3">Orden de reparación </label>
		<div>
			<input id="element_3" name="order" class="element text medium" type="text" maxlength="255" value="<?php echo $order;?>"/>
			<span><?php echo $orderErr;?></span>
		</div> 
		</li>
		<li id="li_7" >
		<label class="description" for="element_7">Asesor de servicio </label>
		<span>
			<input id="element_7_1" name= "name" class="element text" maxlength="255" size="8" value="<?php echo $name;?>"/>
			<label>Nombre</label>
			<span><?php echo $nameErr;?></span>
		</span>
		<span>
			<input id="element_7_2" name= "last_name" class="element text" maxlength="255" size="14" value="<?php echo $last_name;?>"/>
			<label>Apellido</label>
			<span><?php echo $last_nameErr;?></span>
		</span> 
		</li>
		<li class="section_break">
		<p></p>
		</li>	
		<li id="li_2" >
		<label class="description" for="element_2">Cliente </label>
		<span>
			<input id="element_2_1" name= "element_2_1" class="element text" maxlength="255" size="8" value=""/>
			<label>Nombre</label>
		</span>
		<span>
			<input id="element_2_2" name= "element_2_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Apellido</label>
		</span> 
		</li>	
		<li id="li_15" >
			<label class="description" for="element_15">Marca </label>
		<div>
		 	<?php
			echo "<select class='element select medium' id='element_15' name='cat' onchange=\"reload(this.form)\">
			<option value=''></option>";
			foreach ($dbo->query($quer2) as $noticia2){ 
				if($noticia2['make_id']==@$cat){
					echo "<option selected value='$noticia2[make_id]'>$noticia2[make]</option>"."<BR>";}
				else {
					echo "<option value='$noticia2[make_id]'>$noticia2[make]</option>";}}
			echo "</select>";
			?>
		</div> 
		</li>		
		<li id="li_16" >
			<label class="description" for="element_16">Línea </label>
		<div>
		<?php
			echo "<select class='element select medium' id='element_16' name='subcat'>
			<option value=''></option>";
			foreach ($dbo->query($quer) as $noticia) {
				echo "<option value='$noticia[make_id]'>$noticia[type]</option>";}
			echo "</select>"
			?>
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
		</li>		
		<li class="section_break">
		<p></p>
		</li>		
		<li id="li_3"  class="matrix">
		<table>
			<caption>
					Instrumentos y equipamento: 
			</caption>
			   <thead>
			    	<tr>
			        	<th style="width: 40%" scope="col"><span style="display: none">Instrumentos y equipamento:</span></th>
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
			<li class="section_break">
			<p></p>
			</li>
			<li id="li_3"  class="matrix">
		<table>
			<caption>
					Alumbrado exterior: 
			</caption>
			   <thead>
			    	<tr>
			        	<th style="width: 40%" scope="col"><span style="display: none">Alumbrado exterior:</span></th>
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
		</li>				
		<li class="section_break">
		<p></p>
		</li>
		<li id="li_3"  class="matrix">
		<table>
			<caption>
					Presentación del vehículo: 
			</caption>
			   <thead>
			    	<tr>
			        	<th style="width: 40%" scope="col"><span style="display: none">Presentación del vehículo:</span></th>
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
			</li>		
			<li class="section_break">
			<p></p>
			</li>
			<li id="li_3"  class="matrix">
		<table>
			<caption>
					Control debajo del capot: 
			</caption>
			   <thead>
			    	<tr>
			        	<th style="width: 40%" scope="col"><span style="display: none">Control debajo del capot:</span></th>
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
			</li>		
			<li class="section_break">
			<p></p>
			</li>
			<li id="li_3"  class="matrix">
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
			</li>
			<li class="section_break">
			<p></p>
			</li>
			<li id="li_3"  class="matrix">
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
				</li>
				<li class="section_break">
				<p></p>
				</li>						
				<li id="li_3"  class="matrix">
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
				</li>		
			<li class="section_break">
			<h3>Semáforo</h3>
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
		</li>
		<li class="section_break">
			<p></p>
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
		<li id="li_7"  >
		<label class="description" for="element_7">Firma del cliente: </label>
		<div id="mf_sigpad_7">
			<div class="mf_sig_wrapper medium">
	          <canvas class="mf_canvas_pad" width="309" height="130"></canvas>
	          <input type="hidden" name="element_7" id="element_7">
	        </div>
	        <a class="mf_sigpad_clear element_7_clear" href="#">Borrar</a>
	        <script type="text/javascript">
				$(function(){
					var sigpad_options_7 = {
		               drawOnly : true,
		               displayOnly: false,
		               clear: '.element_7_clear',
		               bgColour: '#fff',
		               penColour: '#000',
		               output: '#element_7',
		               lineTop: 95,
		               lineMargin: 10,
		               validateFields: false
		        	};
		        	var sigpad_data_7 = [];
		      		$('#mf_sigpad_7').signaturePad(sigpad_options_7).regenerate(sigpad_data_7);
				});
			</script> 
		</div> 
		</li>
			
		<li class="buttons">
			    <input type="hidden" name="form_id" value="1134337" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar" />
		</li>
			</ul>
		<br>
		<div id="reset_link">
			<a href="index.php">Reiniciar otro certificado</a>
		</div>	
		</form>	
		<div id="footer">
			Copyright &copy; 2016 <a href="http://www.servitalleres.com" target="_blank">Servitalleres</a>
		</div>
	</div>
	<img id="bottom" src="img/bottom.png" alt="">
	<script type="text/javascript" src="js/scrolltotop.js"></script>
	<a href="#" class="scrollToTop"></a>
	</body>
</html>
