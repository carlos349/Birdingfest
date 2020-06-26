<?php

class Email {
	
	//nombre
	var $nombre;
	//email del emisor
	var $correo;
	var $opcion;
	var $pais;
	//email del receptor
	var $apellido;
	var $numero;
	//mensaje
	var $mensaje;
	//archivo adjunto
	var $pago;

	
	//enviar el mensaje
	private $sender;
	//url para redireccionar
	private $url;

	//función constructora
	public function __construct(){
		//cada uno de ellos es el parámetro que enviamos desde el formulario
		$this->nombre = $n;
		$this->correo = $me;
		$this->numero = $nm;
		
		$this->pais = $p;
		$this->apellido = $a;
		$this->mensaje = $ms;
		$this->pago = $ad;
	}

	//método enviar con los parámetros del formulario
	public function enviar($n,$me,$nm,$p,$a,$ms,$ad){
		$who = "cristiansleonardo@gmail.com"
		$who2 = "cristiansleonardo@gmail.com"
		//si existe post
		if(isset($_POST)){

			//si existe adjunto
			if($ad) {
				//añadimos texto al nombre original del archivo
				$dir_subida = 'fichero_';
				//nombre del fichero creado -> fichero_nombreArchivo.pdf
				$fichero_ok = $dir_subida . basename($ad);
				//y lo subimos a la misma carpeta
				move_uploaded_file($_FILES['adjunto']['tmp_name'], $fichero_ok);
			}
			//creamos el mensaje
			$contenido = '
				<h2>Nuevo mensaje de: '.$n.'</h2>
				<hr>
				Email: <b>'.$m.'</b><br>
				Mensaje: <br><b>'.$ms.'</b><br>
			';
			//archivo necesario para enviar los archivos adjuntos
			require_once 'AttachMailer.php';

			//enviamos el mensaje           (emisor,receptor,asunto,mensaje)
			$this->sender = new AttachMailer($who2, $who, $a, $contenido);
			$this->sender->attachFile($fichero_ok);
			//eliminamos el fichero de la carpeta con unlink()
			//si queremos que se guarde en nuestra carpeta, lo comentamos o borramos
			unlink($fichero_ok);
			//enviamos el email con el archivo adjunto
			$this->sender->send();
			//url para redireccionar
			$this->url = 'http://www.webcamp.es/email';
			//redireccionamos a la misma url conforme se ha enviado correctamente con la variable si
			header('Location:'.$this->url.'?s=si');
		}
		else{
			//redireccionamos a la misma url conforme NO se ha enviado correctamente con la variable no
			header('Location:'.$this->url.'?s=no');
		}
	}
}

//llamamos a la clase
$obj = new Email();
//ejecutamos el método enviar con los parámetros que recibimos del formulario
$obj->enviar($_POST['nombre'], $_POST['correo'], $_POST['numero'], $_POST['pais'], $_POST['mensaje'],$_POST['apellido'], $_FILES['pago']['name']);

?>