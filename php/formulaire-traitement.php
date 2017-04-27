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
			$nom = $_POST["nom"];
			
			if($nom === "Virga") {
				echo "Bienvenue Tao" . '<br/>';

			}

			
			$prenom = $_POST["prenom"];
			$nom_f = filter_var($nom, FILTER_SANITIZE_STRING);
			$prenom_f = filter_var($prenom, FILTER_SANITIZE_STRING);

			echo $nom_f . "&nbsp" . $prenom_f . '<br/>';

			$n1 = 20;
			$n2 = 21;
			$n3 = 19;

			echo $n1 + $n2 + $n3 . '<br/>';

			for ($i = 16; $i <= $n1; $i++) {
				echo $i + $i . '&nbsp';
			}


		?>
	</div>

</body>
</html>