<?
switch($_GET['id']){
case id: include("bd2.php"); break;
default :          include("index.php");  break;
 
}
?> 
<html><head><title>Infijuegos! - Juega todo tipo de juegos</title><LINK REL="Shortcut Icon" HREF="http://files.softicons.com/download/system-icons/oxygen-icons-by-oxygen/png/32x32/devices/joystick.png"> <link rel="stylesheet" type="text/css" href="css/index.css"></head><body><div style="position:relative; top:-5px;"><table align="center" width="732">
<tbody><tr><td width="732"><div align="center" id="logo"><img style="position:relative; top:-3px;" src="css/images/bicho12.png" /><img src="css/images/logo.png" /></div></td></tr></tbody></table></div>
<table align="center" id="content"><tr>
<td>&Uacute;ltimos juegos:</td><br><br></tr><tr>
<?
include('bd.php');
?>
</tr></tbody></table><br><br><br><table align="center" class="footer"><tbody><tr><td><b>Copyright - Ikillnukes http://infijuegos.66ghz.com</b><br>2012 - 2012</td></tr></tbody></table></body></html>

