<?php

/*------------Variables------------*/
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST["mensaje"];
/*--------------------Conexion y envio a correo----------------*/

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "Mime-version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n" . "\r\n";
$mensaje .= "El email es: " . $email . "\r\n" . "\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . " \r\n" . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y' , time());

$para = 'jhorman.arias.9@gmail.com';
$asunto = 'Mensaje de la web: Estampados Octoprint';

mail($para, $asunto, utf8_decode($mensaje), $header);


if (isset($_POST['submit'])) {

	if ($nombre=="" ^ $email=="" ^ $mensaje=="") {
	echo '<script>
	     alert("Todos los campos deben llenarse");
	     window.history.go(-1);
	     </script>';	
         }
     else{
	         echo '<script>
	         alert("Mensaje enviado correctamente");
	         window.history.go(-1);
	         </script>';
     }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		echo '<script>
	     alert("Correo electronico incorrecto, por favor ingrese un correo electronico valido");
	     window.history.go(-1);
	     </script>'; 
		}

    else {
	   echo '<script>
	         alert("Mensaje enviado correctamente");
	         window.history.go(-1);
	         </script>';
         }

}


header("Location:index.html");


?>