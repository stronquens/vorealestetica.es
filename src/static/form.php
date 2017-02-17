<?php
if(isset($_POST['email'])) {

	// Debes editar las pr�ximas dos l�neas de c�digo de acuerdo con tus preferencias
	//$email_to = "e.gomis15@hotmail.es";
	$email_to = "stronquens@gmail.com";
	$email_subject = "Contacto desde vorealestetica.es";
	$email_from = "evagomis@vorealestetica.es";
	// Aqu� se deber�an validar los datos ingresados por el usuario
	if(!isset($_POST['name']) ||
			!isset($_POST['email']) ||
			!isset($_POST['comments'])) {
				echo "<b>Ocurrio un error y el formulario no ha sido enviado. </b><br />";
				echo "Por favor, vuelva atras y verifique la informacion ingresada<br />";
				die();
			}
			$email_message = "Detalles del formulario de contacto:\n\n";
			$email_message .= "Nombre: " . $_POST['name'] . "\n";
			$email_message .= "E-mail: " . $_POST['email'] . "\n";
			$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


			// Ahora se env�a el e-mail usando la funci�n mail() de PHP
			$headers = 'From: '.$email_from."\r\n".
					'Reply-To: '.$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);

			echo "El formulario se ha enviado con exito!<br/>";
			echo "<a href='https://www.vorealestetica.es' >Volver</a>";
}	
?>
