$mas = include(id.txt);
$cuenta = if ($mas) { $numero++; } 
$fp = fopen("id.txt","a");
fwrite($fp, $cuenta);
fclose($fp);  
