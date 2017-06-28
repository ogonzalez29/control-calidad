<?php
//Verify if session started, else redirect to login.php
// ob_start();
if(!isset($_SESSION)) { 
    session_start(); 
} 
if (!$_SESSION['logged']) {
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		function search(){
			window.location.replace("search.php");
		}
	</script>
	<script type="text/javascript">
		function home(){
			window.location.replace("index.php");
		}
	</script>
</head>
<body id="report">
<div id="overlay">
  <div id="text">Generando archivo pdf<br>
  	<form style="display:inline-block" action="send_email.php" method="post">
  		<input type="submit" value="Enviar por correo">
  		<input type="hidden" name="emailSend" value="1">
  	</form>
  	<button onclick= "search()">Buscar certificado</button>
  	<button onclick= "home()">Ir al inicio</button>
  </div>
</div>
<?php
include('print_cc.php');
?>
</body>
</html>
