<?php include("config/config.php");?>

<!DOCTYPE html>

<html lang="pt-br">


<head>


		<meta charset='utf-8'/>

		<link rel='stylesheet' type='text/css' href='estilos.css'/>
		<link rel='icon' href='books.png' type='image/gif' sizes='32x32'> 
		<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
		
		
			

</head>

<body>
		
		<script src='libraries/Javascript.js'></script>
		<title>Página Inicial</title>
		
		
		<header></header>
		<nav></nav>
		<section>
				
				<hr id='hr3'>
				
				<form name='f_cad' id='f_cad' action='controllers/controllerform.php' method='POST' target='_blank'>
				
				
				
				<hr id='hr1'>
				
							
						<label id='label_nome'>Nome: </label></br>
						
							<input id='lnome' type='email' name='f_nome' size='50' maxlength='50' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' autofocus required onblur='this.value = this.value.toLowerCase();' /></br></br>
							
								
							<label id='label_senha'>Senha: </label></br>
							
							<input id='lsenha' type='password' name='f_senha' size='50' maxlength='50' pattern='.{6,}' autofocus />	
							<input type='hidden' id='g-recaptcha-response' name='g-recaptcha-response'>
							 
							 <input id='login'  type='submit' value='Login'/>
							 <input id='limpar' type='reset' value='Limpar'/>	
							
							
				
				
				</form>
				
				<script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
				<script src='libraries/Javascript.js'></script>
				
				<a href=''>Esqueceu sua senha?</a>
				<hr>
				<hr id='hr2'><i class='material-icons' style='font-size:48px;color:#595c5e'>&#xe32a;</i>
				<p> - Sistema Seguro por Criptografia.</p>	
		
		</section>
		<aside>
		
		
		
		
		</aside>
		
		
		






</body>

</html>


