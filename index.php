<?php
require 'connect_db.php'; //Database connection
require 'data_check.php'; //Input field data check file
require_once 'save_data.php'; //Save input to database
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
	<!--[if lt IE 9]><script src="js/signaturepad/flashcanvas.js"></script><![endif]-->
	<script type="text/javascript" src="js/signaturepad/jquery.signaturepad.min.js"></script>
	<script type="text/javascript" src="js/signaturepad/json2.min.js"></script>
	<script type="text/javascript" src="js/checklength.js"></script>
	<script type="text/javascript">
		function AjaxFunction()
		{
		var httpxml;
		try
		  {
		  // Firefox, Opera 8.0+, Safari
		  httpxml=new XMLHttpRequest();
		  }
		catch (e)
		  {
		  // Internet Explorer
				  try
		   			 		{
		   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
		    				}
		  			catch (e)
		    				{
		    			try
		      		{
		      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
		     		 }
		    			catch (e)
		      		{
		      		alert("Your browser does not support AJAX!");
		      		return false;
		      		}
		    		}
		  	}
			function stateck() 
			    {
			    if(httpxml.readyState==4)
			      {
			//alert(httpxml.responseText);
			var myarray = JSON.parse(httpxml.responseText);
			// Remove the options from 2nd dropdown list 
			for(j=document.testform.subcat.options.length-1;j>=0;j--)
			{
				document.testform.subcat.remove(j);
			}


			for (i=0;i<myarray.data.length;i++)
			{
				var optn = document.createElement("OPTION");
				optn.text = myarray.data[i].subcategory;
				optn.value = myarray.data[i].subcategory;  // You can change this to subcategory 
				document.testform.subcat.options.add(optn);

			} 
			      }
			    } // end of function stateck
			var url="dd.php";
			var cat_id=document.getElementById('s1').value;
			url=url+"?category="+cat_id;
			url=url+"&sid="+Math.random();
			httpxml.onreadystatechange=stateck;
			//alert(url);
			httpxml.open("GET",url,true);
			httpxml.send(null);
			  }
	</script>	
</head>
<body id="main_body" >
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
		<h1><a>Certificado de Control Calidad</a></h1>
			<form name="testform" id="form_1134337" class="appnitro" method="post" action="">
			<div class="header-image">
				<a href="http://servitalleres.com" target="_blank"><img src="img/logo.png"></a>
			</div>
			<div class="form_description">
				<h2>Certificado de Control Calidad</h2>
				<p>Revisión de 50 puntos de control calidad de la reparación mecánica</p>
			</div>						
			<ul >
		<li id="li_6" >
		<label class="description" for="element_6">Fecha </label>
		<span>
			<input id="element_6_1" name="month" class="element text" size="2" maxlength="2" value="<?php echo $month;?>" type="text"> /
			<label for="element_6_1">MM</label>
			<span><?php echo $dateErr;?></span>
		</span>
		<span>
			<input id="element_6_2" name="day" class="element text" size="2" maxlength="2" value="<?php echo $day;?>" type="text"> /
			<label for="element_6_2">DD</label>
		</span>
		<span>
	 		<input id="element_6_3" name="year" class="element text" size="4" maxlength="4" value="<?php echo $year;?>" type="text">
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
			<input id="element_3" name="ordernumber" class="element text medium" type="text" maxlength="255" value="<?php echo $ordernumber;?>"/>
			<span><?php echo $orderErr;?></span>
		</div> 
		</li>
		<li id="li_7" >
		<label class="description" for="element_7">Asesor de servicio </label>
		<span>
			<input id="element_7_1" name= "firstname1" class="element text" maxlength="255" size="8" value="<?php echo $firstname1;?>"/>
			<label>Nombre</label>
			<span><?php echo $nameErr1;?></span>
		</span>
		<span>
			<input id="element_7_2" name= "lastname1" class="element text" maxlength="255" size="14" value="<?php echo $lastname1;?>"/>
			<label>Apellido</label>
			<span><?php echo $last_nameErr1;?></span>
		</span> 
		</li>
		<li class="section_break">
		<p></p>
		</li>	
		<li id="li_2" >
		<label class="description" for="element_2">Cliente </label>
		<span>
			<input id="element_2_1" name= "firstname" class="element text" maxlength="255" size="8" value="<?php echo $firstname;?>"/>
			<label>Nombre</label>
			<span><?php echo $nameErr;?></span>
		</span>
		<span>
			<input id="element_2_2" name= "lastname" class="element text" maxlength="255" size="14" value="<?php echo $lastname;?>"/>
			<label>Apellido</label>
			<span><?php echo $last_nameErr;?></span>
		</span> 
		</li>	
		<li id="li_15" >
			<label class="description" for="element_15">Marca </label>
		<div>
		 	<?php
			echo "<select class='element select medium' name=cat id='s1' onchange=AjaxFunction();><option value=''></option>";

			$sql="select * from category "; // Query to collect data from table 

			foreach ($dbo->query($sql) as $row) {
			echo "<option value=$row[category]>$row[category]</option>";
			}	
			?>
			</select>
			<span><?php echo $makeErr;?></span>
		</div> 
		</li>		
		<li id="li_16" >
			<label class="description" for="element_16">Línea </label>
		<div>
			<select class='element select medium' name=subcat id='s2'>
			</select>
			<span><?php echo $lineErr;?></span>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Modelo </label>
		<div>
			<input id="element_4" name="model" class="element text medium" type="text" maxlength="255" value="<?php echo $model;?>"/> 
			<span><?php echo $modelErr;?></span>
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Placas </label>
		<div>
			<input id="element_5" name="license" class="element text medium" type="text" maxlength="255" value="<?php echo $license;?>"/> 
			<span><?php echo $licenseErr;?></span>
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Kilometraje </label>
		<div>
			<input id="element_12" name="mileage" class="element text medium" type="text" maxlength="255" value="<?php echo $mileage;?>"/> 
			<span><?php echo $mileageErr;?></span>
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
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[1]" type="radio" value="1" ></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[1]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[1]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Reloj a la hora</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[2]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[2]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[2]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Cocuyos</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[3]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[3]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[3]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Encendido radio (código)</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[4]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[4]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[4]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Ventilación, calefacción, A/A</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[5]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[5]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[5]" type="radio" value="3"  /></td>
			        </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Accionamiento y sonido pito</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[6]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[6]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[6]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Limpiabrisas (eficacia)</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[7]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[7]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[7]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Activación alarma</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[8]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[8]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[8]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Espejos retrovisores</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[9]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[9]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[9]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Elevavidrios (programación)</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[10]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[10]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[10]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Bloqueo central (programación)</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[11]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[11]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[11]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Sonido de parlantes</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[12]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[12]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[12]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Activación sensor reverso</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[13]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[13]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[13]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Presencia copa de seguridad</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[14]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[14]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[14]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Presencia documentos vehículo</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[15]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[15]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[15]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Carga y vencimiento extinguidor</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[16]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[16]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[16]" type="radio" value="3"  /></td>
			        </tr>
			            </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Programación cambio de aceite</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_1[17]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_1[17]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_1[17]" type="radio" value="3"  /></td>
			        </tr>

			    </tbody>
			</table>
			<div>
				<span><?php echo $matrix1Err;?></span>
			</div>
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
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[1]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[1]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[1]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Direccionales, repetidores</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[2]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[2]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[2]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Stops</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[3]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[3]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[3]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Reversa</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[4]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[4]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[4]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Guantera, luz techo, baúl</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[5]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[5]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[5]" type="radio" value="3"  /></td>
			        </tr><tr class="alt" id="mr_3">
			        	<td class="first_col">Exploradoras y antiniebla</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_2[6]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_2[6]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_2[6]" type="radio" value="3"  /></td>
			        </tr>
			    </tbody>
			</table>
			<div>
				<span><?php echo $matrix2Err;?></span>
			</div>	
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
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_3[1]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_3[1]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_3[1]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Limpieza millaré y guarnecidos</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_3[2]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_3[2]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_3[2]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Limpieza exterior (chapas, etc)</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_3[3]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_3[3]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_3[3]" type="radio" value="3"  /></td>
			        </tr>
			    </tbody>
			</table>
			<div>
				<span><?php echo $matrix3Err;?></span>
			</div>
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
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[1]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[1]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[1]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Nivel líquido de frenos</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[2]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[2]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[2]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Nivel líquido refrigerante</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[3]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[3]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[3]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Nivel aceite de caja</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[4]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[4]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[4]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Nivel hidráulico de dirección</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[5]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[5]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[5]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Agua limpiabrisas del. y tras</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[6]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[6]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[6]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Fijación y ajuste bornes batería</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[7]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[7]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[7]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Presencia de tapas, obturadores</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[8]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[8]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[8]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Presencia del protector motor</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_6[9]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_6[9]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_6[9]" type="radio" value="3"  /></td>
			        </tr>
			    </tbody>
			</table>
			<div>
				<span><?php echo $matrix4Err;?></span>
			</div>
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
				        	<td class="first_col">Centrado del timón</td>
				            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[1]" type="radio" value="1"  /></td>
							<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[1]" type="radio" value="2"  /></td>
							<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[1]" type="radio" value="3"  /></td>
				    </tr>
			    	<tr class="alt" id="mr_3">
			        	<td class="first_col">Cambio de marchas neutro y andando</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[2]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[2]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[2]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Rendimiento y aceleración</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[3]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[3]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[3]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Temperatura de motor</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[4]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[4]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[4]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Encendido en frío y caliente</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[5]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[5]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[5]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Efectividad y estabilidad frenado</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[6]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[6]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[6]" type="radio" value="3"  /></td>
			        </tr>
			        <tr class="alt" id="mr_3">
			        	<td class="first_col">Especificación ruidos susp. y dirección</td>
			            <td><label style="display: none" for="element_3_1">B</label><input id="element_3_1" name="matrix_7[7]" type="radio" value="1"  /></td>
						<td><label style="display: none" for="element_3_2">M</label><input id="element_3_2" name="matrix_7[7]" type="radio" value="2"  /></td>
						<td><label style="display: none" for="element_3_3">N/A</label><input id="element_3_3" name="matrix_7[7]" type="radio" value="3"  /></td>
			        </tr>
			    </tbody>
			</table>
			<div>
				<span><?php echo $matrix5Err;?></span>
			</div>
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
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="matrix_4[1]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="matrix_4[1]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="matrix_4[1]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="matrix_4[1]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera derecha</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="matrix_4[2]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="matrix_4[2]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="matrix_4[2]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="matrix_4[2]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera izquierda</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="matrix_4[3]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="matrix_4[3]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="matrix_4[3]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="matrix_4[3]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera derecha</td>
					            <td><label style="display: none" for="element_3_1">25</label><input id="element_3_1" name="matrix_4[4]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">50</label><input id="element_3_2" name="matrix_4[4]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">75</label><input id="element_3_3" name="matrix_4[4]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">100</label><input id="element_3_3" name="matrix_4[4]" type="radio" value="4"  /></td>
					        </tr>
					    </tbody>
				</table>
				<div>
				<span><?php echo $matrix6Err;?></span>
			</div>
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
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="matrix_5[1]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="matrix_5[1]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="matrix_5[1]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="matrix_5[1]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Delantera derecha</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="matrix_5[2]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="matrix_5[2]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="matrix_5[2]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="matrix_5[2]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera izquierda</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="matrix_5[3]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="matrix_5[3]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="matrix_5[3]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="matrix_5[3]" type="radio" value="4"  /></td>
					        </tr>
					        <tr class="alt" id="mr_3">
					        	<td class="first_col">Trasera derecha</td>
					            <td><label style="display: none" for="element_3_1">30</label><input id="element_3_1" name="matrix_5[4]" type="radio" value="1"  /></td>
								<td><label style="display: none" for="element_3_2">32</label><input id="element_3_2" name="matrix_5[4]" type="radio" value="2"  /></td>
								<td><label style="display: none" for="element_3_3">34</label><input id="element_3_3" name="matrix_5[4]" type="radio" value="3"  /></td>
								<td><label style="display: none" for="element_3_3">36</label><input id="element_3_3" name="matrix_5[4]" type="radio" value="4"  /></td>
					        </tr>
					    </tbody>
				</table>
				<div>
				<span><?php echo $matrix7Err;?></span>
			</div>
				</li>		
			<li class="section_break">
			<h3>Semáforo</h3>
			<p></p>
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Inmediato </label>
		<div>
			<textarea onKeyPress=check_length_1(this.form); onKeyDown=check_length_1(this.form); id="element_21" name="comment1" class="element textarea medium"><?php echo $comment1;?></textarea> 
			<br>
			<input size=1 value=300 name=text_num_1 style="float:right; text-align:right;">
			<span><?php echo $comment1Err;?></span>
		</div> 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">De ser posible </label>
		<div>
			<textarea onKeyPress=check_length_2(this.form); onKeyDown=check_length_2(this.form); id="element_22" name="comment2" class="element textarea medium"><?php echo $comment2;?></textarea> 
			<br>
			<input size=1 value=300 name=text_num_2 style="float:right; text-align:right;">
			<span><?php echo $comment2Err;?></span>
		</div> 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">A prever </label>
		<div>
			<textarea onKeyPress=check_length_3(this.form); onKeyDown=check_length_3(this.form); id="element_23" name="comment3" class="element textarea medium"><?php echo $comment3;?></textarea> 
			<br>
			<input size=1 value=300 name=text_num_3 style="float:right; text-align:right;">
			<span><?php echo $comment3Err;?></span>
		</div> 
		</li>
		<li class="section_break">
			<p></p>
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Observaciones </label>
		<div>
			<textarea onKeyPress=check_length_4(this.form); onKeyDown=check_length_4(this.form); id="element_24" name="comment4" class="element textarea medium"><?php echo $comment4;?></textarea> 
			<br>
			<input size=1 value=300 name=text_num_4 style="float:right; text-align:right;">
			<span><?php echo $comment4Err;?></span>
		</div> 
		</li>		<li id="li_25" >
		<label class="description" for="element_25">Próximo mantenimiento a los (kms): </label>
		<div>
			<input id="element_25" name="nextMileage" class="element text medium" type="text" maxlength="255" value="<?php echo $nextMileage;?>"/> 
			<span><?php echo $nextMileageErr;?></span> 
		</div>
		</li>
		<li id="li_7"  >
		<label class="description" for="output">Firma del asesor de servicio: </label>
		<div id="mf_sigpad_7">
			<div class="mf_sig_wrapper medium">
	          <canvas class="mf_canvas_pad" width="309" height="130"></canvas>
	          <input type="hidden" name="output" id="output" class="output">
	        </div>
	        <span><?php echo $signatureErr;?></span> 
	        <a class="mf_sigpad_clear element_7_clear" href="#">Borrar</a>
	        <script type="text/javascript">
				$(function(){
					var sigpad_options_7 = {
		               drawOnly : true,
		               displayOnly: false,
		               clear: '.element_7_clear',
		               bgColour: '#fff',
		               penColour: '#000',
		               output: '#output',
		               lineTop: 95,
		               lineMargin: 10,
		               validateFields: false
		        	};
		        	var sigpad_data_7 = [];
		      		$('#mf_sigpad_7').signaturePad(sigpad_options_7);
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
