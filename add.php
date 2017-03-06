<html> 
<head> 
<title>A&ntilde;adir juegos a la Web</title> 
<link rel="stylesheet" type="text/css" href="css/index.css">
</head> 
<body> 
<? 
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: admin.php"); 
   	//ademas salgo de este script 
   	exit(); 
}	
?>
<center><form action="texto.php" method="post" enctype="multipart/form-data" name="formredac">
Descripci&oacute;n:<br />
<textarea name="description" cols="60" rows="8"></textarea>
<br />T&iacute;tulo:<br /><input name="title" type="text" size="30" maxlength="40" style="text-align:center" />
<br />Ruta de la im&aacute;gen (http://):<br /><input name="imgs" type="text" size="30" maxlength="50" style="text-align:center" />
<br />Ruta del Swf (http://):<br /><input name="path" type="text" size="30" maxlength="50" style="text-align:center" /><br><br>
<input name="" type="submit" value="Enviar juego" />
<input name="action" type="hidden" value="checkdata">
</form></center>
</body> 
</html>
