<?php


$Login = $_POST['login'];
$Password = $_POST['password'];



	
echo "<html>";
echo "<head>

		<!-- Bootstrap core JavaScript -->
		 <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
		 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' integrity='sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4' crossorigin='anonymous'></script>
		 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js' integrity='sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1' crossorigin='anonymous'></script>
			
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>	
						
			

			</head>";


echo "<body style='width:100%; height:100%; background-color:#253238';>";


$strcon = mysqli_connect('localhost', 'root', '', 'biblioteca') or die ('Erro ao tentar se conectar ao banco de dados!');

$sql = "select * from usuarios where email='$Login' and senha='$Password'";

$resultado = mysqli_query($strcon, $sql);

										
										
						
	
				
	while($registro = mysqli_fetch_array($resultado)){
	
							$Login = $registro['email'];			
							$Password = $registro['senha'];
							$quantidade= mysqli_affected_rows($strcon);
							
							
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
							
							
							<div class='load'> <img src='../loading-gears-animation-13-3.gif'/>	<span class='sr-only'></div>
							</div>
							</div>";
							
								
											
										
							if($quantidade == 1){
							
						
										header('refresh: 3; http://localhost/teste-em-php.php');		
																									
											
							}
							
																					
											
}				
										
									
							

										
$quantidade= mysqli_affected_rows($strcon);

								
		if( $quantidade == 0){
										
													
			echo "<p id='p1' name='p1' >"."Nenhum Cadastro encontrado!"."</p>"."<br>";
																	
												
		} 

	
	


										
										
										
echo "</body>";
										
echo "</html>";	


	
?>	