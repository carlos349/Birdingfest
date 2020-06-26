<?php

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$pais = $_POST['pais'];
	$correo = $_POST['correo'];
	$numero = $_POST['numero'];
	$opcion = $_POST['opcion'];
	$mensaje = $_POST['mensaje'];


    $origenNombre = 'Birding inscripción'; //nombre que visualiza el receptor del email como "origen" del email (es quien envía el email)
    $origenEmail = 'mediterraneo@birdingfest.net';//email que visualiza el receptor del email como "origen" del email (es quien envía el email)
    $destinatarioEmail = "mediterraneo@birdingfest.net"; //destinatario del email, o sea, a quien le estamos enviando el email
    $archivoNombre = $_FILES['pago']['name']; //nombre del archivo a ser enviado (sin la ruta, solo el nombre con la extensión, por ejemplo: imagen.jpg)
    $archivo = $_FILES['pago']['tmp_name']; //ruta temporal del archivo a ser adjuntado (ubicación fisica del archivo subido en el servidor)
    $archivo = file_get_contents($archivo); //leeo del origen temporal el archivo y lo guardo como un string en la misma variable (piso la variable $archivo que antes contenía la ruta con el string del archivo)
    $archivo = chunk_split(base64_encode($archivo)); //codifico el string leido del archivo en base64 y la fragmento segun RFC 2045
    $uid = md5(uniqid(time())); //frabrico un ID único que usaré para el "boundary"
    
    $asuntoEmail = 'Birding inscripción'; //asunto del email
    
    //cuerpo del email:
    $cuerpoMensaje = "Nombre:".$nombre."\r\n";
    $cuerpoMensaje .= "Apellido:".$apellido."\r\n";
    $cuerpoMensaje .= "Correo:".$correo."\r\n";
	$cuerpoMensaje .= "Numero:".$numero."\r\n";
	$cuerpoMensaje .= "País:".$pais."\r\n";
	$cuerpoMensaje .= "Opción:".$opcion."\r\n";
	$cuerpoMensaje .= "Mensaje:\r\n".$mensaje."\r\n";
    //fin cuerpo del email.
    
    //cabecera del email (forma correcta de codificarla)
    $header = "From: " . $origenNombre . " <" . $origenEmail . ">\r\n";
    $header .= "Reply-To: " . $origenEmail . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    //armado del mensaje y attachment
    $mensaje = "--" . $uid . "\r\n";
    $mensaje .= "Content-type:text/plain; charset=utf-8\r\n";
    $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $mensaje .= $cuerpoMensaje . "\r\n\r\n";
    $mensaje .= "--" . $uid . "\r\n";
    $mensaje .= "Content-Type: application/octet-stream; name=\"" . $archivoNombre . "\"\r\n";
    $mensaje .= "Content-Transfer-Encoding: base64\r\n";
    $mensaje .= "Content-Disposition: attachment; filename=\"" . $archivoNombre . "\"\r\n\r\n";
    $mensaje .= $archivo . "\r\n\r\n";
    $mensaje .= "--" . $uid . "--";
    //envio el email y verifico la respuesta de la función "email" (true o false)
    if (mail($destinatarioEmail, $asuntoEmail, $mensaje, $header)) {
        echo 'El archivo fue enviado correctamente';
    } else {
        echo 'Error, no se pudo enviar el email';
    }
    echo ', la página será recargada en ' . $tiempoEspera . ' segundos.';
    echo '<meta http-equiv="refresh" content="' . $tiempoEspera . '">';
    exit();

?>