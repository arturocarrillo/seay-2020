<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$firstNameMain = $_POST['firstName'];
		$lastNameMain = $_POST['lastName'];
		$phoneMain = $_POST['phone'];
		$mailMain = $_POST['email'];
		$messengerMain = utf8_decode($_POST['messenger']);
        $captcha = $_POST['g-recaptcha-response'];
        $secret = '6LdB8LgUAAAAAAExh6b5kS6BT25nEs8-8pd1JkoO';

            if(!$captcha){
                echo '<script>alert("Verifica el captcha");</script>';
                echo '<meta http-equiv="refresh" content="1; URL=./contact.php">';
                exit();
            } else {
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
                $arr = json_decode($response, TRUE);
            }
		    $uid = md5(uniqid(time()));
            $msn_int = "Este mensaje fue enviado desde el formulario de la pagina web www.seay.org\r\n";
            $header = "From: " . $firstNameMain . " <" . $mailMain . ">\r\n";
            $header .= "Reply-To: " . $mailMain . "\r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
            $bodyMsn = "Información del correo\r\n";
            $bodyMsn .= "Datos del contacto\r\n" . "Nombre: " . $firstNameMain . " "  . $lastNameMain . "\r\n";
            $bodyMsn .= "Teléfono: " . $phoneMain . "\r\n";
            $bodyMsn .= "Dirección de correo: " . $mailMain . "\r\n";
            $bodyMsn .= "mensaje: " . $messengerMain . "\r\n";
            $msn_send = "--" . $uid . "\r\n";
            $msn_send .= "Content-type: text/plain; charset= utf-8 \r\n";
            $msn_send .= "Correo de "  . $mailMain . "nombre: " . $firstNameMain . $lastNameMain;
            $msn_send .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $msn_send .= $bodyMsn . "\r\n\r\n";
            $msn_send .= "--" . $uid . "\r\n";
            $msn_send .= "--" . $uid . "--";
            if (mail('contacto@seay.org.mx', $msn_int, $msn_send, $header )) {
                echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
            } else {
                echo 'Error, no se pudo enviar el email';
            }
            echo '<meta http-equiv="refresh" content="1; URL=./contact.php">';
            exit();
       
 	}
 ?>