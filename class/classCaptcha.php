<?php 

include("../config/config.php"); 

	class Captcha{
		
		
		
		public function getCaptcha($SITE_KEY)
		{
				
				$Resposta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$SITE_KEY."&response={$SITE_KEY}");
				$Retorno=json_decode($Resposta);
				return $Retorno; 
		}
		
	}
	
	
	?>