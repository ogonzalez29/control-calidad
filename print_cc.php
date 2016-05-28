<?php
//Page code to print results

?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Certificado de Control Calidad</title>
</head>

<body>
<?Php
	$cat=$_POST['cat'];
	$subcat=$_POST['subcat'];

	echo "Value of \$cat = $cat <br>Value of \$subcat = $subcat ";
?>
<br><br>
<a href=index.php>Reiniciar otro certificado</a>

<br><br>

<div id="footer">
			Copyright &copy; 2016 <a href="http://www.servitalleres.com" target="_blank">Servitalleres</a>
		</div> 
</body>

</html>