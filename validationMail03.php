<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		$firstNameMain = $_POST['firstName'];
		$lastNameMain = $_POST['lastName'];
		$phoneMain = $_POST['phone'];
		$mailMain = $_POST['email'];
		// $ambitMain = $_POST['ambit'];
		// $affairMain = $_POST['affair'];
		$messengerMain = $_POST['messenger'];

		// $fileNameMain = $_FILES['fileAdd']['name'];
		// $fileMain = $_FILES['fileAdd']['tmp_name'];
		// $fileMain = file_get_contents($fileMain);
		// $fileMain = chunk_split(base64_encode($fileMain));
		$uid = md5(uniqid(time()));

        // for ($i=0; $i < count($ambitMain) ; $i++) { 
        //     $ambit_msn = $ambitMain[$i];
        // }

		$msn_int = "Este mensaje fue enviado desde el formulario de la pagina web www.seseay.org\r\n";

		$header = "From: " . $firstNameMain . " <" . $mailMain . ">\r\n";
        $header .= "Reply-To: " . $mailMain . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        
		$bodyMsn = "Información del correo\r\n";
        $bodyMsn .= "Datos del contacto\r\n" . "Nombre: " . $firstNameMain . " "  . $lastNameMain . "\r\n";
        $bodyMsn .= "Teléfono: " . $phoneMain . "\r\n";
        $bodyMsn .= "Dirección de correo: " . $mailMain . "\r\n";
        // $bodyMsn .= "Asunto: " . $affairMain . "\r\n";
        // $bodyMsn .= "Ambito: " . $ambit_msn . "\r\n";
        $bodyMsn .= "mensaje: " . $messengerMain . "\r\n";

		$msn_send = "--" . $uid . "\r\n";
        $msn_send .= "Content-type:text/plain; charset=utf-8\r\n";
        $msn_send .= "Correo de "  . $mailMain . "nombre: " . $firstNameMain . $lastNameMain;
        $msn_send .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $msn_send .= $bodyMsn . "\r\n\r\n";
        $msn_send .= "--" . $uid . "\r\n";
        // $msn_send .= "Content-Type: application/octet-stream; name=\"" . $fileNameMain . "\"\r\n";
        // $msn_send .= "Content-Transfer-Encoding: base64\r\n";
        // $msn_send .= "Content-Disposition: attachment; filename=\"" . $fileNameMain . "\"\r\n\r\n";
        // $msn_send .= $fileMain . "\r\n\r\n";
        $msn_send .= "--" . $uid . "--";

        if (mail('contacto@seseay.gob.mx', $msn_int, $msn_send, $header )) {
            echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
        } else {
            echo 'Error, no se pudo enviar el email';
        }
        echo '<meta http-equiv="refresh" content="2; URL=./contact.php">';
        exit();
       
 	}
 ?>
