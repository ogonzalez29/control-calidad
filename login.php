<?php 

// //Connects to your Database 
// $conect = mysqli_connect("localhost","root","", "test") or die(mysql_error()); 

//if the login form is submitted 
if (isset($_POST['submit'])) {

	// makes sure they filled it in
 	if(!$_POST['username']){
 		die('No se ingresó un nombre de usuario');
 	}
 	if(!$_POST['pass']){
 		die('No se ingresó una contraseña');
 	}

 	// // checks it against the database
 	// if (!get_magic_quotes_gpc()){
 	// 	@$_POST['email'] = addslashes($_POST['email']);
 	// }

 	$check = mysqli_query($conect, "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

	//Gives error if user dosen't exist
	$check2 = mysqli_num_rows($check);
	if ($check2 == 0){
		die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.php">try again</a>.');
	}

	while($info = mysqli_fetch_array( $check )){
		$_POST['pass'] = stripslashes($_POST['pass']);
	 	$info['password'] = stripslashes($info['password']);
	 	$_POST['pass'] = md5($_POST['pass']);

		//gives error if the password is wrong
	 	if ($_POST['pass'] != $info['password']){
	 		die('Incorrect password, please <a href="login.php">try again</a>.'); 
	 	}
		
		else{ // if login is ok we redirect to members area
			header("Location: members.php"); 
		}
	}
}
else{
// if they are not logged in 
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/view2.css">
	<title>Servitalleres - Inicio</title>
</head>
<body>
	<div class="container">
		<div id="loginform">
		 	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
				<div class="company-logo">
					<img src="img/logo1.jpg">
				</div>
				<div>
					<p>Nombre de usuario:</p>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" name="username" maxlength="40"></td></tr> 
				</div>
				<div>
					<p>Contraseña:</p>
				</div> 
				<div class="input-group">
					<input type="password" class="form-control" name="pass" maxlength="50" autocomplete="new-password"></td></tr> 
				</div>
				<br>
				<tr><td colspan="2" align="right"><input type="submit" name="submit" value="Iniciar Sesión"></td></tr>
 
	 		</form>
		</div>
 	</div>
 </body>
 </html> 
 <?php
 }
 ?> 
