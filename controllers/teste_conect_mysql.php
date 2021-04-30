<?php 

	
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
		
	}else 


			echo "erro de login";
			
	
?>