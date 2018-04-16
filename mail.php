<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="./assets/css/styles.css">
		<title>Formulario de consulta</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row text-center justify-content-center">
				<div class="col-md-8">
					<?php
					$nombre=$_POST['nombre'];
					$apellidos=$_POST['apellidos'];
					$email=$_POST['email'];
					$telefono=$_POST['telefono'];
					$consulta=$_POST['consulta'];
					$plantilla = file_get_contents('plantilla.html');
					$plantilla = str_replace('%nombre%',$nombre,$plantilla);
					$plantilla = str_replace('%apellidos%',$apellidos,$plantilla);
					$plantilla = str_replace('%telefono%',$telefono,$plantilla);
					$plantilla = str_replace('%email%',$email,$plantilla);
					$plantilla = str_replace('%consulta%',$consulta,$plantilla);
					use PHPMailer\PHPMailer\PHPMailer;
					use PHPMailer\PHPMailer\Exception;
					// require composer autoload
					require __DIR__ . '/vendor/autoload.php';


					$mail = new PHPMailer(true); // Passing `true` enables exceptions
					$mail->CharSet = 'utf-8';
					try {
						//Server settings
						$mail->Host = '';
						$mail->SMTPAuth = ;
						$mail->Username = '';
						$mail->Password = '';
						$mail->SMTPSecure = '';
						$mail->Port = ;

						//Recipients
						$mail->setFrom($email, "$nombre $apellidos");
						$mail->addAddress('', '');

						// $mail->addAddress('ellen@example.com');
						// $mail->addReplyTo('info@example.com', 'Information');
						// $mail->addCC('cc@example.com');
						// $mail->addBCC('bcc@example.com');

						//Attachments
						// Add attachments

						//Content
						// Set email format to HTML
						$mail->isHTML(true);                                  
						$mail->Subject = 'Formulario';
						$mail->MsgHTML($plantilla);
						// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
						$mail->send();

						echo "<h3>Estimad@ $nombre $apellidos :</h3>";
						echo "Email enviado con éxito!";
						echo "<div class='form-group text-center' >";
						echo "<input id='atras' type='button' class='btn btn-lg btn-success' value='Volver atrás'>";
						echo "</div>";
					} catch (Exception $e) {
						echo "<h3>Estimad@ $nombre $apellidos :</h3>";
						echo 'Error al enviar el emal: ' . $mail->ErrorInfo;
						echo "<div class='form-group text-center' >";
						echo "<input id='atras' type='button' class='btn btn-lg btn-danger' value='Volver atrás'>";
						echo "</div>";
					}
					?>
				</div>
			</div>
		</div> <!-- END CONTAINER -->
		<div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<script	src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
			<script src="./assets/js/script.js"></script>
		</div>
	</body>
</html>