<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css" style="text/css">
</head>
<body>
	

	<header>
	 <h1>
	 	Réception de message
	 </h1>

	 <h2>Un client à une question !
	 <br>Voici toutes les données qu'il a donné :  
	 
	 </h2>	
	 

	</header>

	<div class="php">
		<?php
		if (isset($_POST['nom'] , $_POST['prenom'] , $_POST['email'])) 
		{

		} else //si tous les champs ne sont pas remplis
		{
			$message = 'Tous les champs ne sont pas remplis';
			echo message;
			include '../index.html';
		}
	


		?>
	</div>

</body>
</html>