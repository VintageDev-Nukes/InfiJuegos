<?php
session_start();
if ($_POST['action'] == "checkdata") {
if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {

$arch = file_get_contents('id.txt');
$fp = fopen("id.txt","r");  
$visitas = intval(fgets($fp));  
$visitas++;  
fclose($fp);  
$fp = fopen("id.txt","w");  
fputs($fp,$visitas);  

$nombre_archivo = 'bd.php';
$contenido = "\r\n<tr><td><hr width=\"98%\" color=\"#000000\" size=\"2\"></td></tr><tr><td class=\"txt_desc\" bgcolor=\"#FFFFFF\"><img src=\"http://" . $_POST["imgs"] . "\" width=\"104\" height=\"70\" align=\"left\"><span class=\"titulos\"><a href=\"/game.php?id=". $visitas ."\">" . $_POST["title"] . "</a></span><br>" . $_POST["description"] . "</tr>\r\n\r\n";

$nombre_archivo1 = 'bd1.php';
$contenido1 = "\r\n\r\n<?\r\nif(\$_GET[\"id\"] === \"" . $visitas . "\") {\r\n\$game_src = \"http://" . $_POST["path"] . "\";\r\n\$description = \"" . $_POST["description"] . "\"; \r\n\$game_title = \"" . $_POST["title"] . "\";\r\n } \r\n?>\r\n\r\n";

$nombre_archivo2 = 'bd2.php';
$contenido2 = "\r\n\r\n<?\r\ncase " . $visitas . " :          include(\"" . $visitas . ".php\");  break;\r\n?>\r\n\r\n";


if (is_writable($nombre_archivo)) {

if (!$gestor = fopen($nombre_archivo, 'a')) {
echo "<p>No se puede abrir el archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

if (fwrite($gestor, $contenido) === FALSE) {
echo "<p>No se puede escribir al archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

if (!$gestor1 = fopen($nombre_archivo1, 'a')) {
echo "<p>No se puede abrir el archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

if (fwrite($gestor1, $contenido1) === FALSE) {
echo "<p>No se puede escribir al archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

if (!$gestor2 = fopen($nombre_archivo2, 'a')) {
echo "<p>No se puede abrir el archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

if (fwrite($gestor2, $contenido2) === FALSE) {
echo "<p>No se puede escribir al archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
exit;
}

echo "<p>Juego a&ntilde;adido correctamente.</p><p><a href='inicio.php'>Volver al &iacute;ndice</a></p>";


fclose($gestor);

} else {
echo "<p>No se puede escribir sobre el archivo para guardar su texto. Por favor, si el problema persiste contacte con el administrador.</p>";
}

} else {
echo "<span class='Estilo1'>El c&oacute;digo captcha es incorrecto</span><br><a href='javascript:history.go(-1);'>Volver atr&aacute;s</a>";
}
}
?>

