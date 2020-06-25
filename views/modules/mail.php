<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pais = $_POST['pais'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $opcion = $_POST['opcion'];
    $mensaje = $_POST['mensaje'];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "cristiansleonardo@gmail.com";
    $to = "cristiansleonardo@gmail.com";
    $subject = "Checking PHP mail";
    $message = "Nombre:".$nombre. '\n' . "Apellido:".$apellido. '\n '. "Correo:".$correo.'\n'."Numero:".$numero;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";


?>