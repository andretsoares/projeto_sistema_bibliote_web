<?php include("config/config.php");?>

<!doctype html>
<html lang="pt-br">


<head>

	<meta charset="UTF-8">
	<title>Recaptcha</title>

</head>


<body>

		<form id="Form1" name="Form1" action="controllers/controllerform.php" method="POST" target="_blank">
		
		
						
							<input id='lnome' type='text' name='f_nome' size='50' maxlength='50' autofocus required onblur='UpperCase()' /></br></br>
							
								
		
							
							<input id='lsenha' type='password' name='f_senha' size='50' maxlength='50' autofocus />	
				
		<input type="" id="g-recaptcha-response" name="g-recaptcha-response"><br>
		<input type="submit" id='login' value='Login'>
		
		</form>
		
		
		<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
		<script src="libraries/Javascript.js"></script>
</body>		

</html>

