<?php
//Verify if session started, else redirect to login.php
ob_start();
session_start();
if (!$_SESSION['logged']) {
	header("Location: login.php");
	exit;
}
//Connect to the database
include ('info.php');

//Search for the number of document in db
@$doc = $_POST['doc']-1000;

//get last results from database if recently submitted
$result = mysql_query("SELECT * FROM document ORDER BY id DESC LIMIT 1")
	or die(mysql_error());

while ($row = mysql_fetch_array($result)) {
	$doc = $row['id'];
	$doc1 = $doc;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		function home(){
			window.location.replace("index.php");
		}
	</script>
</head>
<body>
<div id="overlay">
  <div id="text">Generado Certificado de Control Calidad No. <?php echo ("$doc1")+1000;?><br>
  	<form style="display:inline-block" name="fpdf" id= "fpdf" method="post" action="print_pdf.php">
			<th width='60' align='center'>
				<input type="submit" name="pdf" value="Imprimir en pdf">
				<input type="hidden" name="doc1" value="<?php echo $doc1;?>" >
			</th>
	</form>
  	<form style="display:inline-block" action="send_email.php" method="post">
  		<input type="submit" value="Enviar por correo">
  		<input type="hidden" name="emailSend" value="1">
  	</form>
  	<button onclick= "home()">Regresar</button>
  </div>
</div>
</body>
</html>
