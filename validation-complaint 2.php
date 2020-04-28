<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $firstNameMain = $_POST['firstName'];
        $lastNameMain = $_POST['lastName'];
        $phoneMain = $_POST['phone'];
        $mailMain = $_POST['email'];
        $addressMain = $_POST['address'];
        $ambitMain = $_POST['state'];
        $zipMain = $_POST['zip'];
        $messengerMain = $_POST['messenger'];
        $uid = md5(uniqid(time()));
        $captcha = $_POST['g-recaptcha-response'];
        $secret = '6LdB8LgUAAAAAAExh6b5kS6BT25nEs8-8pd1JkoO';

         for ($i=0; $i < count($ambitMain) ; $i++) { 
            $ambit_msn = $ambitMain[$i];
        }

        if(!$captcha){
                echo '<script>alert("Verifica el captcha");</script>';
                echo '<meta http-equiv="refresh" content="1; URL=./contact_2.php">';
                exit();
            } else {
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
                $arr = json_decode($response, TRUE);
            }
            
        #region "Datos del equipo donde se envia la Queja"

         $user_agent = $_SERVER['HTTP_USER_AGENT'];
         $user_SystemOperating = get_OS($user_agent);
         $user_browser_internet = get_browserInternet($user_agent);

         $user_ip = "";
         $user_mac = "";
         $user_pc = "";

         // Get Mac
         switch (substr($user_SystemOperating,0,3)) {
             case "Win":
                 $user_ip = $_SERVER['REMOTE_ADDR'];
                 $user_mac = GetMAC_win();
                 $user_pc = php_uname();
                 break;
             case "Mac":
                 $user_ip = $_SERVER['REMOTE_ADDR'];
                 $user_mac = GetMac_os();
                 $user_pc = php_uname();
                 break;
             case "Lin":
                 $user_ip = $_SERVER['REMOTE_ADDR'];
                 $user_mac = GetMac_unix();
                 $user_pc = php_uname();
                 break;
             default:
                 // Para cualquier sistema operativo
                 $user_ip = $_SERVER['REMOTE_ADDR'];
                 $user_mac = GetMAC_win();
                 $user_pc = php_uname();
                 break;
         }

        #endregion

        $msn_int = "Este mensaje fue enviado desde el formulario de la pagina web www.seay.org.mx\r\n";

        $header = "From: " . $firstNameMain . " <" . $mailMain . ">\r\n";
        $header .= "Reply-To: " . $mailMain . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        
        $bodyMsn = "Información del correo\r\n";
        $bodyMsn .= "Datos del contacto\r\n" . "Nombre: " . $firstNameMain . " "  . $lastNameMain . "\r\n";
        $bodyMsn .= "Teléfono: " . $phoneMain . "\r\n";
        $bodyMsn .= "Dirección de correo: " . $mailMain . "\r\n";
        $bodyMsn .= "Domicilio: " . $addressMain . "\r\n";
        $bodyMsn .= "Municipio: " . $ambit_msn . "\r\n";
        $bodyMsn .= "Código Postal: " . $zipMain . "\r\n";
        $bodyMsn .= "mensaje: " . $messengerMain . "\r\n";
        
        $msn_send = "--" . $uid . "\r\n";
        $msn_send .= "Content-type:text/plain; charset=utf-8\r\n";
        $msn_send .= "Correo de "  . $mailMain . "nombre: " . $firstNameMain . $lastNameMain;
        $msn_send .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $msn_send .= $bodyMsn . "\r\n\r\n";
        $msn_send .= "--" . $uid . "\r\n";
        $msn_send .= "--" . $uid . "--";
        
        if (mail('quejas@seay.org.mx', $msn_int, $msn_send, $header )) {
            echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
        } else {
            echo 'Error, no se pudo enviar el email';
        }
        

        $bodyMsn .= "\r\n";
        $bodyMsn .= "<OS>" . $user_SystemOperating . "</OS>\r\n";
        $bodyMsn .= "<IP>" . $user_ip . "</IP>\r\n";
        $bodyMsn .= "<MAC>" . $user_mac . "</MAC>\r\n";
        $bodyMsn .= "<PC>" . $user_pc . "</PC>\r\n";
        $bodyMsn .= "<IBrowser>" . $user_browser_internet . "</IBrowser>\r\n";
        $bodyMsn .= "<agent>'" . $user_agent . "'</agent>";
        
        $msn_send_aux = "--" . $uid . "\r\n";
        $msn_send_aux .= "Content-type:text/plain; charset=utf-8\r\n";
        $msn_send_aux .= "Correo de "  . $mailMain . "nombre: " . $firstNameMain . $lastNameMain;
        $msn_send_aux .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $msn_send_aux .= $bodyMsn . "\r\n\r\n";
        $msn_send_aux .= "--" . $uid . "\r\n";
        $msn_send_aux .= "--" . $uid . "--";
        
        $msn_int = "<Complemento> ". $msn_int;
        
        if (mail('tecnologia@seay.org.mx', $msn_int, $msn_send_aux, $header )) {
            echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
        } 
        
        if (mail('secretario@seay.org.mx', $msn_int, $msn_send, $header )) {
            echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
        } 
        
        echo '<meta http-equiv="refresh" content="2; URL=./contact_2.php">';
        exit();
       
    }
    
    function get_OS($user_agent) {
        $os_array =  array(
                        '/windows nt 10/i'      =>  'Windows 10',
                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                        '/windows nt 6.2/i'     =>  'Windows 8',
                        '/windows nt 6.1/i'     =>  'Windows 7',
                        '/windows nt 6.0/i'     =>  'Windows Vista',
                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                        '/windows nt 5.1/i'     =>  'Windows XP',
                        '/windows xp/i'         =>  'Windows XP',
                        '/windows nt 5.0/i'     =>  'Windows 2000',
                        '/windows me/i'         =>  'Windows ME',
                        '/win98/i'              =>  'Windows 98',
                        '/win95/i'              =>  'Windows 95',
                        '/win16/i'              =>  'Windows 3.11',
                        '/macintosh|mac os x/i' =>  'Mac OS X',
                        '/mac_powerpc/i'        =>  'Mac OS 9',
                        '/linux/i'              =>  'Linux',
                        '/ubuntu/i'             =>  'Ubuntu',
                        '/iphone/i'             =>  'iPhone',
                        '/ipod/i'               =>  'iPod',
                        '/ipad/i'               =>  'iPad',
                        '/android/i'            =>  'Android',
                        '/blackberry/i'         =>  'BlackBerry',
                        '/webos/i'              =>  'Mobile'
                      );
        //
        $os_platform = "Unknown OS Platform";
        foreach ($os_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $os_platform = $value;
            }
        }
        return $os_platform;
    }

    function get_browserInternet($user_agent) {
        $browser_array = array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                          );
        $browser = "Unknown Browser";
        foreach ($browser_array as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $browser = $value;
            }
        }
        return $browser;
    }

    //Obtiene la IP del cliente
    function get_client_ip() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function GetMAC_win() {
        ob_start();
        system('getmac');
        $Content = ob_get_contents();
        ob_clean();
        return substr($Content, strpos($Content,'\\')-20, 17);
    }

    function GetMac_os() {
        $macAddr=false;
        $arp=`arp -n`;
        $lines=explode("\n", $arp);
        foreach($lines as $line) {
            $cols=preg_split('/\s+/', trim($line));
            if ($cols[0]==$_SERVER['REMOTE_ADDR']) {
                $macAddr=$cols[2];
            }
        }
        return $macAddr;
    }

    function GetMac_unix() {
        ob_start();
        system('ifconfig -a');
        $mycom = ob_get_contents();
        // Capture the output into a variable
        ob_clean();
        // Clean (erase) the output buffer
        $findme = "Physical";
        //Find the position of Physical text
        $pmac = strpos($mycom, $findme);
        $mac = substr($mycom, ($pmac + 37), 18);
        return $mac;
    }
 ?>