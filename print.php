<!DOCTYPE html>
<html>
<head>
	<style>
		#overlay {
		    position: fixed;
		    display: block;
		    width: 100%;
		    height: 100%;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    background-color: rgba(0,0,0,0.9);
		    z-index: 2;
		}

		#text{
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    font-size: 25px;
		    color: white;
		    text-align: center;
		    transform: translate(-50%,-50%);
		    -ms-transform: translate(-50%,-50%);
		    -webkit-transform:translate(-50%, -50%);
		}
		body, html{
			overflow: hidden;
		}
	</style>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div id="overlay">
  <div id="text">Generando archivo pdf<br>
  	<form style="display:inline-block" action="send_email.php" method="post">
  		<input type="submit" value="Enviar por correo">
  		<input type="hidden" name="emailSend" value="1">
  	</form>
  	<button onclick="self.close()">Cerrar ventana</button>
  </div>
</div>
<?php
include('print_cc.php');
include('print_pdf.php');
?>
</body>
</html>
