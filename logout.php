<?php
session_start(); 
if(session_destroy())
{
print"<h2>Ha finalizado sesión correctamente</h2>";
print "<h3><a href='login.php'>Ir a página de inicio</a></h3>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
</body>
</html>
