<?php

include ("../class/classCaptcha.php");
//include ("conexao.inc");
$ObjCaptcha = new Captcha();

$Retorno=$ObjCaptcha->getCaptcha($_POST['g-recaptcha-response']);


	
		
		
		$login=$_POST["login"];
		$senha=$_POST["senha"];



		if($Retorno->success == true && $Retorno->score >0.5){
				
				
			SESSION_START();
			
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$banco = "usuarios";
			$hostname = "localhost";
			$_SESSION['$login'] = "login";
			$_SESSION["senha"] = "senha";
			$sql="SELECT * FROM cadastros WHERE login='$login' AND senha='$senha'";
			$conexao = @mysqli_connect($hostname,$login,$senha, $banco);
			
					if($conexao == true){
					
						if(isset ($_SESSION["login"])){
						
						$login=$_POST["login"];
						$senha=$_POST["senha"];
										
									if($sql == true){	
										
										@$res=mysqli_query($sql);
										@$linhas=mysqli_affected_rows($sql);
										
										echo "conectado com sucesso!";
									}
									
							
				
				
						}
					

					
					}else {


					echo "erro de login <br>";
					echo "Tente seu Login Novamente.";
					header("Refresh: 3; url=../index.php");
					
					}					
				
					
			
					
		
		}else {
			
				echo "Página expirada!<br>";
				echo "Tente seu Login Novamente.";
				header("Refresh: 3; url=../index.php");
	
		}
		
?>