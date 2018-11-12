<?php
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
		
				if (isset($_POST["nombre"] ))
								
				{	

					//Recojo los datos de la anterior pagina

					$nombre = $_POST["nombre"];
					$email = $_POST["email"];
					$ciudad = $_POST["ciudad"];
					$comentario = $_POST["comentario"];
					

					//Valores que cambio yo aqui
					
					$destinatario = "alvaroesteveatance@gmail.com";//email de la persona que quiero enviar
					$asunto = "Correo de Alvaroesteve.com -  ";
					$cuerpo = '
					<html>
					<head>
					   <title>Datos de contacto</title>
					</head>
					<body>

					<p style="color:red">
					Nombre: '.$nombre.'
					</p>

					<p style="color:red">
					Email: '.$email.'
					</p>

					<p style="color:cyan">
					Ciudad: '.$ciudad.'
					</p>

					<p style="color:green">
					Comentario: '.$comentario.'
					</p>

					
					</body>
					</html>
					';

					//para el envio en formato HTML
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

					//dirección del remitente, el nuestro o de la pagina web
					//$headers .= "From: info@tucorreo.es\r\n";

					//dirección de respuesta, si queremos que sea distinta que la del remitente
					//$headers .= "Reply-To: info@tucorreo.es\r\n";

					//ruta del mensaje desde origen a destino
					//$headers .= "Return-path: info@tucorreo.es\r\n";

					//direcciones que recibiran copia
					//$headers .= "Cc: info@tucorreo.es\r\n";
			
					mail($destinatario,$asunto,$cuerpo,$headers);			 
					
						
						
					}
						
					echo "Su mensaje ha sido enviado correctamente y será respondido en tu correo electronico. Muchas Gracias."
						
					?>	