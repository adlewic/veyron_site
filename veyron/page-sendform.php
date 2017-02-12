<?php 
	get_header(); 

	if(!empty($_POST) AND null !== $_POST['email'] AND null !== $_POST['nombre'] ):
		$to = 'luah613@gmail.com';
		$subject = 'Contacto';
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$headers[] = 'From:'.$nombre.' '.$apellido.' <'.$email.'><'.$phone.'>';

		if(wp_mail($to, $subject, $message, $headers) ):
			echo 'El mensaje se envió';
		else:
			echo 'Error al enviar el mensaje';
		endif;	

	endif;	

	?>
	
<?php get_footer(); ?>