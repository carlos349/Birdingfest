<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "About" ||
			$enlaces == "contact" ||
			$enlaces == "Information" ||
			$enlaces == "courses" ||
			$enlaces == "Afrique" ||
			$enlaces == "Bolivia" ||
			$enlaces == "Manu" ||
			$enlaces == "courses" ||
			$enlaces == "Mediterraneo" ||
			$enlaces == "Paraguay" ||
			$enlaces == "Ringing" ||
			$enlaces == "Stations" ||
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
