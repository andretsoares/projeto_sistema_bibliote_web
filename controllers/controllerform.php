<?php

$captcha = $_POST['g-recaptcha-response'];
$login = $_POST['f_nome'];
$password = $_POST['f_senha'];

define ('$Login_user', '$login');
define ('$Password_user', '$password');

	if($captcha != '' && $login != '' && $password != ''){
	
		$secreto = '6Lcro40UAAAAAFR038Fm2CiM1S0nR9kdwq6jyVsq';
		$ip = $_SERVER['REMOTE_ADDR'];
		$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
		$resposta = json_decode($var, true);
	
		if($resposta['success']){
			
			//echo "deu certo";
			//echo "$login e a $password";
			
			//header('Location: login.php'); 
			
			echo "<html>
					<head></head>
					<body Onunload>
			
						<form name='envia' action='login.php' method='POST'>
			
				
							<input type='text' hidden name='login' id='login' value='$login'/>
							<input type='text' hidden name='password' id='password' value='$password'/>
							
						
						
						
						</form>
						
						<script type='text/javascript'>
						document.envia.submit()
						</script>
						
						</body>
						</html>";
										
										
			
		} else{
					
			//echo "você é um robô.";
			
			
			echo "<html>
					<head></head>
					<body Onunload>
			
						<form name='envia' action='login.php' method='POST'>";
			
			echo "<body style='width:100%; height:100%; background-color:#253238';>";
			
			echo	"<style>
									.load {
									width: 100px;
									height: 100px;
									position: absolute;
									top: 30%;
									left: 45%;
									color: blue;
								 }
					</style>";	
								
							echo "<div class='load'></div>
 
							<div class='container'>
							<div class='starter-template'>
							
							
							<div class='load'> <img src='../robo3.png' />	<span class='sr-only'></div>
							</div>
							</div>";
							
				echo "</body>";
				
				echo "</html>";	
			
		}
		
		
	
	}else {
		
		echo "Erro sem autenticação!";
		
		
	}
	
	
	
	


?>