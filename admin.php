<html> 
<head> 
<title>Autentificaci&oacute;n de Admin</title> 
<link rel="stylesheet" type="text/css" href="css/index.css">
</head> 
<body> 
<center>
<form action="control.php" method="POST" id="pass"> 
<table align="center" cellspacing="2" cellpadding="2" border="0"> 
<tr> 
<td colspan="2" align="center" 
<?if ($_GET["errorusuario"]=="si"){?> 
bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span> 
<?}else{?> 
bgcolor=#cccccc>Introduce tu clave de acceso 
<?}?></td> 
</tr> 
<tr> 
<td align="right">Usuario:</td> 
<td><input type="Text" name="usuario" size="15" maxlength="50"></td> 
</tr> 
<tr> 
<td align="right">Contrase&ntilde;a:</td> 
<td><input type="password" name="contrasena" size="15" maxlength="50"></td> 
</tr> 
<tr> 
<td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td> 
</tr> 
</table> 
</form> 
</center>
</body> 
</html> 
