<?include ("seguridad.php");?> 
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
<html> 
<head>Administraci&oacute;n</title> 
<link rel="stylesheet" type="text/css" href="css/index.css">
</head> 
<body> 
<center><table id="admin">
<tbody>
<tr>
<th class="sub" scope="col">&Aacute;rea de Administraci&oacute;n</th>
<th class="sub" scope="col">Descripci&oacute;n</th>
</tr>
<tr>
<td class="sub">A&ntilde;adir juego a la Web</td>
<td class="sub">Con esta acci&oacute;n puedes a&ntilde;adir juegos a la Web.</td>
<td><input type="button" value="Ir" onClick="window.location='add.php';"> </td>
</tr>
</tbody>
</table>
</center>
<a href="salir.php">Salir de aqu&iacute;</a> 
</body> 
</html> 
