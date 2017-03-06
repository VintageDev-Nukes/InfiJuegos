<? 
include('bd1.php');
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" type="text/css" href="/css/index.css">';
echo '</head>';
echo '<body>';
echo 'Este juego se llama:';
echo $game_title;
echo '<br>Descripci&oacute;n: ';
echo $description;
echo '<br>Juega aqu&iacute;:';
echo '<br><br><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="32" height="32"><param name="movie" value="';
echo $game_src;
echo '" /><param name="quality" value="high" /><embed src="';
echo $game_src;
echo '" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="550"></embed></object>';
echo '</body>';
echo '</html>';
?>
