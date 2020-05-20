<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "about-me" ||
			$enlaces == "contact" ||
			$enlaces == "elements" ||
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
			$module = "views/modules/index.php";
		}

		return $module;

	}


}
