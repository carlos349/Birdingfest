<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "About" ||
			$enlaces == "contact" ||
			$enlaces == "Information" ||
			$enlaces == "courses" ||
			$enlaces == "senegal" ||
			$enlaces == "bolivia" ||
			$enlaces == "manu" ||
			$enlaces == "courses" ||
			$enlaces == "mediterraneo" ||
			$enlaces == "paraguay" ||
			$enlaces == "ringing" ||
			$enlaces == "stations" ||
			$enlaces == "presencial" ||
			$enlaces == "send" ||
			$enlaces == "paypal1" ||
			$enlaces == "paypal2" ||
			$enlaces == "paypal3" ||
			$enlaces == "index" ||
			$enlaces == "portfolio" ||
			$enlaces == "services"){

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/index.php";
		}else if ($enlaces == "accesoNoPermitido") {
			$module = "views/modules/accesoNoPermitido.html";
		}else{
			$module = "views/modules/Constructions.php";
		}

		return $module;

	}


}
