<? 
//vemos si el usuario y contraseña es váildo 
if ($_POST["usuario"]=="user" && $_POST["contrasena"]=="password"){ 
   	//usuario y contraseña válidos 
   	//defino una sesion y guardo datos 
   	session_start(); 
    $_SESSION["autentificado"]= "SI"; 
   	header ("Location: admincontrol.php");	
}else { 
   	//si no existe le mando otra vez a la portada 
   	header("Location: admin.php?errorusuario=si"); 
} 
?> 
