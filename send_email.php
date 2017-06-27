<?php
//Connect to phpmailer script 
// require_once('assets/phpmailer/class.phpmailer.php');
require 'assets/phpmailer/PHPMailerAutoload.php';

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
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$make = $row['make'];
	$line = $row['type'];
	$license = $row['license'];
}

if (isset($_POST['emailSend'])) {
		$bodytext = $firstname." ".$lastname."<p>Adjunto se encuentra el certificado de control calidad de la reparación hecha a tu vehículo". " ". $make."  ". $line." "."de placas"." ". $license."."." ". "Ten presente las observaciones dadas. Recuerda revisar la política de garantía en el siguiente vínculo: <a href='http://servitalleres.com/politica-de-garantia'>click aquí</a>.<p>Cordial saludo,<p>Servicio al cliente<br>Servitalleres Ltda<br>Carrera 22 # 76-57<br>Tels: 2117943 - 2119290<br><a href='http://servitalleres.com'>www.servitalleres.com</a>";

  		//Create a new PHPMailer instance
	    $mail = new PHPMailer();   
	    $mail->isSMTP();
		// change this to 0 if the site is going live and 2 if working on localhost or development
	    $mail->SMTPDebug = 0;
	    $mail->Debugoutput = 'html';
	    $mail->Host = 'smtp.gmail.com';
	    $mail->Port = 465;
	    $mail->SMTPSecure = 'ssl';

	    //Options for self-signed certificate in mail server (May not work on every server - OPTIONAL)
	    $mail->SMTPOptions = array (
	    	'ssl' => array (
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
    		)
		);

	 	//use SMTP authentication
	    $mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$filename = 'assets/config.ini';
	    $data = parse_ini_file($filename, true);

	    $mail->Username = $data['config']['email'][0];
	    $mail->Password = $data['config']['email'][1];
	    $mail->setFrom($data['config']['email'][0], 'Servitalleres');
	    $mail->addAddress('dgonzalez@servitalleres.com', 'Daniel González');
	    $mail->Subject = "Certificado de Control Calidad". " ". $make."  ". $line." "."placas"." ". $license;
	    // $message is gotten from the form
    	$mail->msgHTML($bodytext);
	
	    if (!$mail->send()) {
	        $confMsg = "El correo no fue enviado correctamente, favor intentar de nuevo.";
	    } else {
	        $confMsg = "El correo fue enviado correctamente.";
	        }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div id="overlay">
		 <div id="text"><?php echo $confMsg;?></div>
	</div>
</body>
</html>